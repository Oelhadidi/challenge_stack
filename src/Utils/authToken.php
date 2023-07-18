<?php


namespace App\Utils;

use PDO;
use App\Controller\AbstractController;
use Firebase\JWT\JWT;
use \Exception;

class AuthToken extends AbstractController
{

  // GENERATE TOKEN
    public function genererTokenAuthentification($email, $MDP) {
        $idUtilisateur = $this->obtenirIdUtilisateur($email, $MDP); // Obtenez l'ID de l'utilisateur à partir de la base de données
        if ($idUtilisateur !== false) {
            $payload = array(
                'idUtilisateur' => $idUtilisateur,
                'expiration' => time() + 3600 // Exemple : expiration après 1 heure
            );
            $token = base64_encode(json_encode($payload));
            return $token;
        }
        return false; // Échec de l'authentification
    }

    // Fonction pour vérifier la validité du token d'authentification
    public function verifierTokenAuthentification($token) {
        $payload = json_decode(base64_decode($token), true);
        if ($payload && isset($payload['idUtilisateur']) && isset($payload['expiration'])) {
            if ($payload['expiration'] >= time()) {
                $idUtilisateur = $this->obtenirIdUtilisateurParToken($token); // Obtenez l'ID de l'utilisateur à partir de la base de données en utilisant le token
                if ($idUtilisateur !== false && $idUtilisateur == $payload['idUtilisateur']) {
                    return true; // Token d'authentification valide
                }
            }
        }
        return false; // Token d'authentification invalide
    }



    public function obtenirIdUtilisateurParToken($token) {
        // Décoder le token pour obtenir le payload
        $payload = json_decode(base64_decode($token), true);

        if ($payload && isset($payload['idUtilisateur'])) {
            $idUtilisateur = $payload['idUtilisateur'];

            // Effectuer une requête à la base de données pour vérifier si l'ID de l'utilisateur existe
            $statement = "SELECT id FROM utilisateur WHERE id = :idUtilisateur";
            $stmt = $this->db->prepare($statement);
            $stmt->execute(['idUtilisateur' => $idUtilisateur]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                return $idUtilisateur; // Retourner l'ID de l'utilisateur s'il existe
            }
        }

        return false; // Retourner false si l'ID de l'utilisateur n'existe pas ou si le token est invalide
    }

   

}