<?php

namespace App\Controller;

use \Exception;

class AuthController extends AbstractController
{

    function isLoggedIn(){
        try{
            if($_SESSION['token'])
                return $this -> AuthToken->verificateAuthToken($_SESSION['token']);
            else
                return false;
        }
        catch(Exception $e){
            return false;
        }
    }

    function renderPage($page, $data = []){
        if($this->isLoggedIn())
            return $this->twig->render($page,$data);
        
        return $this->twig->render("Pages/unauthorized.html.twig");
    }

}