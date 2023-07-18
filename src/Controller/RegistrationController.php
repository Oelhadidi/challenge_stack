<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class InscriptionController extends AbstractController
{
  #[Route("/", name: "inscriptionpage")]
  public function inscription()
  {
         // Rediriger vers la page d'inscription
         return $this->twig->render('register.html.twig',['page inscription']);
  }

}