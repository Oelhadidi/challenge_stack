<?php

namespace App\Controller;

use PDO;
use App\Utils\AuthToken;
use Twig\Environment;
use App\Controller\AuthController;

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

    return $user['id'];
}

}