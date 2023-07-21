<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class PanierController extends AbstractController
{
  #[Route("/panier", name: "panierpage")]
  public function panier()
  {
    $userId = $_SESSION['user']['id'];
    $userCart = isset($_SESSION['cartItems'][$userId]) ? json_decode(urldecode($_SESSION['cartItems'][$userId]), true) : [];
    return $this->twig->render('/Pages/panier.html.twig', ['user' => $_SESSION['user'], 'cartItems' => 3422]);
  }
}
