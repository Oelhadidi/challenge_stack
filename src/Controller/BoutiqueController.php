<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;
use PDO;
use App\Controller\AuthController;

class BoutiqueController extends AbstractController
{
  // GET ALL PRODUCTS
  #[Route("/boutique", name: "boutique_page", httpMethods: ["GET"])]
  public function getAllProducts()
  {

    // All products
    $statement='SELECT * FROM bijoux';
    $stmt = $this->db->query($statement);
    $bijoux = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // All category
    $statement='SELECT * FROM taille';
    $stmt = $this->db->query($statement);
    $tailles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $statement='SELECT * FROM couleur';
    $stmt = $this->db->query($statement);
    $couleurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $statement='SELECT * FROM types';
    $stmt = $this->db->query($statement);
    $types = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $statement='SELECT * FROM pierre';
    $stmt = $this->db->query($statement);
    $pierres = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $authController = new AuthController($this->twig, $this->db, $this->AuthToken);
    $userLoggedIn = $authController->isLoggedIn();
    if ($userLoggedIn) {
      $user = $this->AuthToken->getIdFromToken($_COOKIE['token']);
      return $authController->renderPage('/Pages/boutique.html.twig', [
            'user' => $user,
            'bijoux' => $bijoux,
            'tailles' => $tailles,
            'couleurs' => $couleurs,
            'types' => $types,
            'pierres' => $pierres
        ]);
    } else {
        return $authController->renderPage('/Pages/boutique.html.twig', [
            'bijoux' => $bijoux,
            'tailles' => $tailles,
            'couleurs' => $couleurs,
            'types' => $types,
            'pierres' => $pierres
        ]);
    };
  }

  // GET PRODUCT DETAILS
  #[Route("/boutique/{id}", name: "boutique_details", httpMethods:["GET"])]
  public function getProductDetails(int $id)
  {
    // Afficher le produit correspondant à l'id
    $statement = "SELECT * FROM bijoux WHERE id = :id";
    $stmt = $this->db->prepare($statement);
    $stmt->execute(['id' => $id]);
    $bijoux = $stmt->fetch(PDO::FETCH_ASSOC);
    $bijouxId = $bijoux['id'];

    $authController = new AuthController($this->twig, $this->db, $this->AuthToken);
    $userLoggedIn = $authController->isLoggedIn();
    if ($userLoggedIn) {
        // Afficher les détails du produits
        return $authController->renderPage('/Pages/produitDetails.html.twig',
        ['userLoggedIn' => $userLoggedIn, 
        'bijoux' => $bijoux 
    ]);
    }else {
        return $authController->renderPage('/Pages/produitDetails.html.twig',[ 
        'bijoux' => $bijoux ]);

    }
  }

  // CREATE PRODUCT

  // UPDATE PRODUCT

  // DELETE PRODUCT
  #[Route("/api/boutique/remove-product/{id}", name: "delete_product", httpMethods:["DELETE"])]
  public function deleteProduct(int $id)
  {
     // Supprimer le film de la base de données
     $statement = "DELETE FROM bijoux WHERE id = :id";
     $stmt = $this->db->prepare($statement);
     $stmt->execute(['id' => $id]);
  }

  // ADD TO FAVORITE
  #[Route("/api/boutique/add-favorite/{userId}/{productId}", name: "add_favorite", httpMethods: ["DELETE"])]
  public function addFavorite(int $userId, int $productId)
  {
      // Récupérer l'id de l'utilisateur connecté 
      $authController = new AuthController($this->twig, $this->db, $this->AuthToken);
      $userLoggedIn = $authController->isLoggedIn();
      if($userLoggedIn){
        // Si l'utilisateur est connecté userId est égale à l'id du user sinon null
        $userId = $this-> AuthToken->getIdFromToken($_COOKIE['token']);
        // Vérifier si le bijoux existe
        $statement = $this->db->prepare("SELECT COUNT(*) FROM bijoux WHERE id = :productId");
        $statement->execute(['productId' => $productId]);
        $bijouxExists = $statement->fetchColumn();

        
      if (!$bijouxExists) {
        // Erreur : Le bijou n'existe pas
        return $this->returnJsonResponse(['error' => 'Bijou not found.'], 403);
      }

        // Récupérer les favoris actuels de l'utilisateur depuis la session
        $userFavorites = isset($_SESSION['userFavorites'][$userId]) ? $_SESSION['userFavorites'][$userId] : [];

        // Ajouter le produit s'il n'est pas déjà présent dans les favoris
        if (!in_array($productId, $userFavorites)) {
            $userFavorites[] = $productId;
            // Mettre à jour les favoris de l'utilisateur dans la session
            $_SESSION['userFavorites'][$userId] = $userFavorites;
        }

        // Retourner une réponse JSON indiquant que le produit a été ajouté aux favoris avec succès
        return $this->returnJsonResponse(['success' => true, 'message' => 'Product added to favorites.']);

        }
  }

  // ADD PRODUCT TO CART
  #[Route("/api/boutique/add-cart/{userId}/{productId}", name: "add_cart", httpMethods: ["GET"])]
  public function addCart(int $userId, int $productId)
  {
      session_start();
      // Récupérer l'id de l'utilisateur connecté 
      $authController = new AuthController($this->twig, $this->db, $this->AuthToken);
      $userLoggedIn = $authController->isLoggedIn();
      if ($userLoggedIn) {
          // Si l'utilisateur est connecté, $userId est égal à l'id du user, sinon null
          $userId = $this->AuthToken->getIdFromToken($_COOKIE['token']);
          // Vérifier si le bijou existe et obtenir ses informations
          $statement = $this->db->prepare("SELECT * FROM bijoux WHERE id = :productId");
          $statement->execute(['productId' => $productId]);
          $bijoux = $statement->fetch(PDO::FETCH_ASSOC);

          if (!$bijoux) {
              // Erreur : Le bijou n'existe pas
              return $this->returnJsonResponse(['error' => 'Bijou not found.'], 403);
          }

          // Récupérer le panier actuel de l'utilisateur depuis la session
          $userCart = isset($_SESSION['cartItems'][$userId]) ? json_decode(urldecode($_SESSION['cartItems'][$userId]), true) : [];

          // Vérifier si le produit existe déjà dans le panier
          if (isset($userCart[$bijoux['id']])) { // Use 'id' key here
              // Le produit existe déjà dans le panier, augmenter la quantité
              $userCart[$bijoux['id']]++; // Use 'id' key here
          } else {
              // Le produit n'existe pas dans le panier, l'ajouter avec une quantité de 1
              $userCart[$bijoux['id']] = 1; // Use 'id' key here
          }

          // Mettre à jour le panier de l'utilisateur dans la session
          $_SESSION['cartItems'][$userId] = json_encode($userCart);

          // Retourner une réponse JSON indiquant que le produit a été ajouté au panier avec succès
          return $this->returnJsonResponse(['success' => true, 'message' => 'Product added to cart.', 'userCart' => $userCart]);
      }

      // Si l'utilisateur n'est pas connecté, retourner une erreur
      return $this->returnJsonResponse(['error' => 'Unauthorized.'], 401);
  }




  private function returnJsonResponse(array $data, int $statusCode = 200) {
      header('Content-Type: application/json');
      http_response_code($statusCode);
      echo json_encode($data);
      // Terminer l'exécution du script
      exit;
  }



}