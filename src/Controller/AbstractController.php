<?php

namespace App\Controller;

use PDO;
use App\Utils\AuthToken;
use Twig\Environment;

abstract class AbstractController
{
  public function __construct(
    protected Environment $twig,
    protected PDO $db,
    protected Authtoken $AuthToken,
  ) {
  }

function obtenirIdUtilisateur($email) {
    $statement = "SELECT id FROM utilisateur WHERE email = :email";
    $stmt = $this->db->prepare($statement);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;
}

//   // CHECK IF USER IS LOGGED IN
 public function isLoggedin($userIdDb, $email)
 {
    if (isset($_COOKIE['authToken'])) {
       $token = $_COOKIE['authToken'];
       $userId = $this ->AuthToken->getIdFromToken($token);
       $userIdDb =$this->obtenirIdUtilisateur($email);

       if ($userIdDb == $userId) {
        var_dump($userIdDb == $userId);
           //return $userIdDb;
       }
       else{
        return ("votre token n'est pas bon");
       }
       
   }else{
      
      echo("Vous n'êtes pas connecté");
   }

   
 }

}