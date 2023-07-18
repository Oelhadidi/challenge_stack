<?php

namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;

class ContactController extends AbstractController
{
  #[Route("/", name: "contactpage")]
  public function contact()
  {
<<<<<<< HEAD
    return $this->twig->render('/Pages/contact.html.twig', ['page de contact']);
  }
}
=======
         // Rediriger vers la page de contact
         return $this->twig->render('contact.html.twig',['page contact']);
  }

}
>>>>>>> 4a343534b0c3242a98c919d64f652bde6bcf60a5
