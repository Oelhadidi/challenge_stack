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
    $statement = "SELECT id FROM utilisateur WHERE email = :email, mdp = :MDP";
    $stmt = $this->db->prepare($statement);
    $stmt->execute(['email' => $email, 'MDP' => $MDP]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;
}

  // CHECK IF USER IS LOGGED IN
public function isLoggedin($MDP, $email)
{
  if (isset($_COOKIE['authToken'])) {
      $token = $_COOKIE['authToken'];
      $authToken = new AuthToken($MDP, $email);
      $userId = $authToken->obtenirIdUtilisateurParToken($token); 

      $user = $this->obtenirIdUtilisateur($email, $MDP);

      if ($user) {
          return $user;
      }
  }

  return null;
}

}