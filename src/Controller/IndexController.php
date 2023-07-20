<?php


namespace App\Controller;

use App\Routing\Attribute\Route;
use \Exception;
use \PDO;

class IndexController extends AbstractController
{

    #[Route("/", name: "homepage", httpMethod: "GET")]
    public function home()
    {
        $statement = 'SELECT b.id AS id, b.nom AS nom, b.prix AS prix, b.descriptions AS descriptions, images.Logo,
        SUM(dc.quantite) AS nombre_de_commandes
        FROM bijoux b
        INNER JOIN images ON b.id = images.bijoux_id
        LEFT JOIN details_commande dc ON b.id = dc.bijoux_id
        WHERE images.principal = 1
        GROUP BY b.id, b.nom, b.prix, b.descriptions, images.Logo
        ORDER BY SUM(dc.quantite) DESC
        LIMIT 3;';
        $stmt = $this->db->query($statement);
        $bijoux = $stmt->fetchAll(PDO::FETCH_ASSOC);

        var_dump($bijoux);


        return $this->twig->render("/Pages/index.html.twig", ['user' => $_SESSION['user'], 'bijoux' => $bijoux],);
    }
}
