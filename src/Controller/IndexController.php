<?php 


namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class IndexController extends AbstractController
{
    #[Route("/", name: "homepage", httpMethod:"GET")]
    public function home()
    {
        return $this->twig->render("Pages/index.html.twig",['user' => $_SESSION['user'] ]);
    }
}