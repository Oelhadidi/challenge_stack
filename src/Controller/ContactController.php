<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class ContactController extends AbstractController
{
  #[Route("/", name: "contactpage")]
  public function contact()
  {
         // Rediriger vers la page de contact
         return $this->twig->render('contact.html.twig',['page contact']);
  }

}