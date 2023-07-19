<?php

namespace App\Controller;

use PDO;
use App\Utils\AuthToken;
use Twig\Environment;

abstract class AbstractController
{
  public function __construct(
    protected Environment $twig,
    protected PDO $db
  ) {
  }

function obtenirIdUtilisateur($email, $MDP) {
    $statement = "SELECT id, MDP FROM utilisateur WHERE email = :email";
    $stmt = $this->db->prepare($statement);
    $stmt->execute(['email' => $email, 'MDP' => $MDP]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;
}

//   // CHECK IF USER IS LOGGED IN
 public function isLoggedin($MDP, $email)
 {
   if (isset($_COOKIE['authToken'])) {
       $token = $_COOKIE['authToken'];
       AuthToken
       $userId = $authToken->getIdFromToken($token); 

       $user = $this->getIdFromToken($email, $MDP);

       if ($user) {
           return $user;
       }
   }

   return null;
 }

}