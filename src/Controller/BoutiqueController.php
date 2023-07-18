<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class BoutiqueController extends AbstractController
{
  #[Route("/boutique", name: "boutique_page")]
  public function boutique()
  {
    return $this->twig->render('/Pages/boutique.html.twig',['page boutique']);
  }

}