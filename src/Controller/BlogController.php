<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;
use PDO;

class BlogController extends AbstractController
{
  // ALL ARTICLES
  #[Route("/blog", name: "blog_page", httpMethods: ["GET"])]
  public function getAllArticle()
  {

    // All articles
    $statement='SELECT * FROM blog';
    $stmt = $this->db->query($statement);
    $blog = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $authController = new AuthController($this->twig, $this->db, $this->AuthToken);
    $userLoggedIn = $authController->isLoggedIn();
    var_dump($userLoggedIn);
    if ($userLoggedIn) {
      return $authController->renderPage('/Pages/blog.html.twig', [
            'userLoggedIn' => $userLoggedIn,
            'blog' => $blog,
        ]);
    } else {
        return $authController->renderPage('/Pages/blog.html.twig', [
            'blog' => $blog,
        ]);
    };
  }

  // ARTICLE DETAILS
#[Route("/blog/{id}", name: "blog_details", httpMethods:["GET"])]
public function getArticleDetails(int $id)
{
  // Afficher le produit correspondant à l'id
  $statement = "SELECT * FROM blog WHERE id = :id";
  $stmt = $this->db->prepare($statement);
  $stmt->execute(['id' => $id]);
  $blog = $stmt->fetch(PDO::FETCH_ASSOC);
  $blogId = $blog['id'];

  $authController = new AuthController($this->twig, $this->db, $this->AuthToken);
  $userLoggedIn = $authController->isLoggedIn();
  if ($userLoggedIn) {
      // Afficher les détails du produits
      return $authController->renderPage('/Pages/articleDetails.html.twig',
      ['userLoggedIn' => $userLoggedIn, 
      'blog' => $blog
  ]);
  }else {
      return $authController->renderPage('/Pages/articleDetails.html.twig',[ 
      'blog' => $blog ]);

  }
}

  // CREATE 

  // UPDATE

  // DELETE
  // DELETE PRODUCT
  #[Route("/api/blog/remove-blog/{id}", name: "delete_blog", httpMethods:["DELETE"])]
  public function deleteProduct(int $id)
  {
     // Supprimer le film de la base de données
     $statement = "DELETE FROM blog WHERE id = :id";
     $stmt = $this->db->prepare($statement);
     $stmt->execute(['id' => $id]);
  }


}