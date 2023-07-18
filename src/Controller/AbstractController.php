<?php

namespace App\Controller;

use PDO;
use Twig\Environment;

use App\Utils\AuthToken;
abstract class AbstractController
{
  public function __construct(
    protected Environment $twig,
    protected PDO $db
  ) {
  }

  // GET USER INFO BY ID
  public function getUserById($id, $db)
  {
      $statement = "SELECT * FROM utilisateur WHERE id = :id";
      $stmt = $db->prepare($statement);
      $stmt->execute(['id' => $id]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      return $user;
  }

  // CHECK IF USER IS LOGGED IN
  public function isLoggedin($db)
{
  if (isset($_COOKIE['authToken'])) {
      $token = $_COOKIE['authToken'];
      $userId = AuthToken::getUserFromToken($token);
      $user = $this->getUserById($userId, $db);

      if ($user) {
          return $user;
      }
  }

  return null;
}
}