<?php
namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class AproposController extends AbstractController
{
  #[Route("/apropos", name: "apropos_page")]
  public function Apropos()
  {
         // Rediriger vers la page d'inscription
         return $this->twig->render('/Pages/apropos.html.twig',['user'=>$_SESSION['user']]);
  }

}