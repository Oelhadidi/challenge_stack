<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class ConnexionController extends AbstractController
{
  #[Route("/", name: "connexionpage")]
  public function connexion()
  {
         // Rediriger vers la page de login
         return $this->twig->render('connexion.html.twig',['page connexion']);
  }

}