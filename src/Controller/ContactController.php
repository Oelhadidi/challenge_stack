<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class ContactController extends AbstractController
{
  #[Route("/contact", name: "contactpage")]
  public function contact()
  {
    return $this->twig->render('/Pages/contact.html.twig', ['user'=>$_SESSION['user']]);
  }
}
