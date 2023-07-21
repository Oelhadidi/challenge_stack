<?php

namespace App\Controller;


use PDO;
use App\Routing\Attribute\Route;
use \Exception;

class InscriptionController extends AbstractController
{
    #[Route("/inscription", name: "inscriptionpage")]
    public function inscription()
    {
        // Rediriger vers la page d'inscription
        return $this->twig->render('/Pages/register.html.twig', ['page inscription']);
    }

    // CREATE A USER
    #[Route("/inscription", name: "register_user", httpMethods: ["POST"])]
    public function registerUser()
    {
        // Récupération de la requête
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $MDP = $_POST['MDP'];

        // Vérifier si l'utilisateur existe déjà dans la base de donnée
        $statement = "SELECT * FROM utilisateur WHERE nom = :nom OR email = :email";
        $stmt = $this->db->prepare($statement);
        $stmt->execute(['nom' => $nom, 'email' => $email]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingUser) {
            // L'utilisateur existe déjà, afficher un message d'erreur ou rediriger vers une page d'erreur
            echo "<h3>L'utilisateur existe déjà</h3>";
            return $this->twig->render('Pages/connexion.html.twig');
        } else {
            // Hasher le mot de passe
            $hashedPassword = password_hash($MDP, PASSWORD_BCRYPT);

            // Enregistrer le nouvel utilisateur dans la base de donnée
            $statement = "INSERT INTO utilisateur (nom, email, MDP) VALUES (:nom, :email, :MDP)";
            $stmt = $this->db->prepare($statement);
            $stmt->execute(['nom' => $nom, 'email' => $email, 'MDP' => $hashedPassword]);

            echo "<h3>Vous êtes bien enregistré au site</h3>";
            // Rediriger vers la page de connexion ou afficher un message de succès
            return $this->twig->render('Pages/connexion.html.twig', ['message' => 'L\'utilisateur a été enregistré avec succès.']);
        }
    }
}
