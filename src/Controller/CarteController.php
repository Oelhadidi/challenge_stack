<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;
use PDO;
use App\Controller\AuthController;

class CarteController extends AbstractController
{
    // GET ALL PRODUCTS
    #[Route("/panier", name: "panier_page", httpMethods: ["GET"])]
    public function getAllCarts()
    {
        if (!isset($_SESSION['user']))
            return $this->twig->render('/Pages/panier.html.twig', ['user' => $_SESSION['user']]);
        $userId = $_SESSION['user']['id'];
        $userCart =  isset($_SESSION['cartItems'][$userId]) ? json_decode(urldecode($_SESSION['cartItems'][$userId]), true) : [];
        $total = 0;
        foreach ($userCart as $cartItem) {
            $total += $cartItem['prix'] * $cartItem['quantity'];
        }
        return $this->twig->render('/Pages/panier.html.twig', ['user' => $_SESSION['user'], 'cartItems' => $userCart, 'cartTotal' => $total]);
    }

    #[Route("/panier/updateqty/{productId}/{qty}", name: "updateQty")]
    public function updatePanier(string $productId, int $qty)
    {
        $userId = $_SESSION['user']['id'];
        $userCart = isset($_SESSION['cartItems'][$userId]) ? json_decode(urldecode($_SESSION['cartItems'][$userId]), true) : [];
        $total = 0;

        $userCart[$productId]['quantity'] = $qty;
        foreach ($userCart as $cartItem) {
            $total += $cartItem['prix'] * $cartItem['quantity'];
        }
        $_SESSION['cartItems'][$userId] = json_encode($userCart);

        return $this->returnJsonResponse(['success' => true, 'message' => 'Product added to cart.', 'cartItems' => $userCart, 'total' => $total]);
    }

    // REMOVE PRODUCT FROM CART
    #[Route("/api/panier/remove/{productId}", name: "remove_from_cart", httpMethods: ["DELETE"])]
    public function removeFromCart(int $productId)
    {
        // Vérifier si l'utilisateur est connecté
        if (isset($_SESSION['user'])) {
            $userId = $_SESSION['user']['id'];
            $userCart = isset($_SESSION['cartItems'][$userId]) ? json_decode(urldecode($_SESSION['cartItems'][$userId]), true) : [];
            // Vérifier si le produit existe dans le panier
            if (isset($userCart[$productId])) {
                // Supprimer le produit du panier
                unset($userCart[$productId]);
            }
            // Mettre à jour le panier de l'utilisateur dans la session
            $_SESSION['cartItems'][$userId] = json_encode($userCart);
            // Rediriger vers la page du panier après la suppression
            return $this->returnJsonResponse(['success' => true, 'message' => 'Product removed from cart.', 'userCart' => $userCart]);
        } else {
            return $this->returnJsonResponse(['success' => false, 'message' => 'You are not allowed']);
        }
    }





    private function returnJsonResponse(array $data, int $statusCode = 200)
    {
        header('Content-Type: application/json');
        http_response_code($statusCode);
        echo json_encode($data);
        // Terminer l'exécution du script
        exit;
    }
}
