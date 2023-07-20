<?php 


namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class IndexController extends AuthController
{
    #[Route("/", name: "homepage")]
    public function home()
    {
        return $this->renderPage("Pages/index.html.twig", ['Page d\'accueil']);
    }
}