<?php

namespace App\Controller;

use PDO;
use App\Routing\Attribute\Route;
use \Exception;
use App\Utils\AuthToken;

class ConnexionController extends AbstractController
{

  // AFFICHER LA PAGE CONNEXION
  #[Route("/connexion", name: "connexionpage")]
  public function connexion()
  {
         // Rediriger vers la page de login
         return $this->twig->render('/Pages/connexion.html.twig',['page de connexion']);
  }

  // LOGGIN USER
  #[Route("/connexion", name: "login_user", httpMethod: "POST")]
  public function userLoggin()
  {
      if ($_POST)
      {
          // Récupérer les données soumises depuis le formulaire
          $email = $_POST['email'];

          // Vérifier l'existence de l'utilisateur dans la base de données
          $statement = "SELECT * FROM utilisateur WHERE email = :email";
          $stmt = $this->db->prepare($statement);
          $stmt->execute(['email' => $email]);
          $user = $stmt->fetch(PDO::FETCH_ASSOC);

          if (empty($user)) {
              // L'utilisateur n'existe pas, afficher un message d'erreur
              header('Location: /inscription');
              exit();
          } else {
              // Générer un token
              $token = AuthToken::generateToken($user['id']);
              $isTokenValid = AuthToken::verifyToken($token);
              $user['token'] = $token;

              if (!$isTokenValid) {
                  // Rediriger vers la page de connexion
                  echo "<h3>Token invalide</h3>";
                  return $this->twig->render('connect/login.html.twig', ['token is not valid']);
              }
              // Stocker le token dans un cookie
              setcookie('authToken', $user['token'], time() + 3600, '/');

              // Vérifier si le cookie authToken existe
              $user = $this->isLoggedin($this->db);

              if ($user) {
                  return $this->twig->render('connect/login.html.twig',['user' => $user]);
              } else {
                  header('Location: /login');
                  exit();
              }
          }
      }
  }

  // LOGOUT USER 
  #[Route("/api/logout", name: "logout_user", httpMethod: "GET")]
  public function logout()
  {
      // Supprimer le cookie authToken en le réinitialisant avec une date d'expiration passée
      setcookie('authToken', '', time() - 3600, '/');
      // Rediriger vers la page de connexion ou afficher un message de déconnexion réussie
  }

}