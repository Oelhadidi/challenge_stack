<?php


namespace App\Utils;

use PDO;
use App\Controller\AbstractController;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use \Exception;

class AuthToken
{
    public function generateAuthToken($id)
    {
        $payload = array("id" => $id, "expiration" => time() + 3600, "iat" => time());
        $token = JWT::encode($payload, $_ENV["JWT_SECRET_KEY"], "HS256");
        return $token;
    }

    public function verificateAuthToken($token)
    {
        try {
            $decodedToken = JWT::decode($token, new Key($_ENV["JWT_SECRET_KEY"], "HS256"));
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getIdFromToken($token){
        $decodedToken = JWT::decode($token, new Key($_ENV["JWT_SECRET_KEY"], "HS256"));
        $tokenUserId = $decodedToken-> id;
        return $tokenUserId;
    }

}
