<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class BlogController extends AbstractController
{
  #[Route("/blog", name: "blog_page")]
  public function blog()
  {
         // Rediriger vers la page d'inscription
         return $this->twig->render('/Pages/blog.html.twig',['page blog']);
  }

}