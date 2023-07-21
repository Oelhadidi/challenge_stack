<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class AjoutFormulaireController extends AbstractController
{
    #[Route("/formulaireajout", name: "formulaireAjout_page", httpMethods: ["GET"])]
    public function formulaireAjout()
    {
        // Rediriger vers la page d'inscription
        return $this->twig->render('/Pages/formulaireAjout.html.twig', ['page ajout formulaire']);
    }
}
