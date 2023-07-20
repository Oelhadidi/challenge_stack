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
          $pass = $_POST['MDP'];
          #$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

          // Vérifier l'existence de l'utilisateur dans la base de données
          $statement = "SELECT * FROM utilisateur WHERE email = :email";
          $stmt = $this->db->prepare($statement);
          $stmt->execute(['email' => $email]);
          $user = $stmt->fetch(PDO::FETCH_ASSOC);

          if (empty($user)) {
              // L'utilisateur n'existe pas, afficher un message d'erreur
              header('Location: /inscription');
              exit();
            } 
            else {

                if(!password_verify($pass,$user['MDP'])){
                    echo 'Incorrect Password';
                    return false;
                }
                // Générer un token
                $authToken = new AuthToken();
                $token = $authToken->generateAuthToken($user['id'],$user['email']);

                
                $user['token'] = $token;
                // Stocker le token dans un cookie
                $_SESSION['token'] = $user['token'];
                $_SESSION['user'] = array('id'=> $user['id'],'email'=> $user['email'],'name'=> $user['nom']);
                
                header('Location: /');
                return $this->twig->render('Pages/index.html.twig',['user' => $_SESSION['user'] ]);
                
                
            }
        }
    }

//   // LOGOUT USER 
  #[Route("/api/logout", name: "logout_user", httpMethod: "GET")]
  public function logout()
  {
      $_SESSION['user'] = null;
      $_SESSION['token'] = null;
      // Supprimer le cookie authToken en le réinitialisant avec une date d'expiration passée
      header('Location: /');
      // Rediriger vers la page de connexion ou afficher un message de déconnexion réussie
  }



}