<?php

    class Ping{
        static function ping(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $content = file_get_contents(filename: 'php://input');
        
                if($content === 'PING'){
                    $source = $_SERVER['HTTP_PING_FROM'];
                    $dest = $_SERVER['HTTP_PING_TO'];
                    $send_at = date(format: 'd/m/Y H:i:s');
        
                    file_put_contents(filename: 'ping.log', data: 
                    "$send_at - $content - De : $source - Vers $dest\n", flags: FILE_APPEND);
                }
            }
        }
    }
    Ping::ping();

/* 

==================================================

Pour envoyer à la BDD

==================================================

*/


/*

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = file_get_contents('php://input');

    if ($content === 'PING') {
        $source = $_SERVER['HTTP_PING_FROM'];
        $dest = $_SERVER['HTTP_PING_TO'];
        $send_at = date('Y-m-d H:i:s'); // Format adapté pour la base de données

        // Enregistrement dans un fichier log
        file_put_contents('ping.log', "$send_at - $content - De : $source - Vers $dest\n", FILE_APPEND);

        // Connexion à la base de données avec PDO
        $dsn = 'mysql:host=localhost;dbname=ping_logs;charset=utf8mb4';
        $username = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

           # Requête d'insertion insert
            $sql = "INSERT INTO logs (content, source, destination, send_at) VALUES (:content, :source, :destination, :send_at)";
            $statement = $pdo->prepare($sql);

           # Liaison des paramètres
            $statement->bindParam(':content', $content, PDO::PARAM_STR);
            $statement->bindParam(':source', $source, PDO::PARAM_STR);
            $statement->bindParam(':destination', $dest, PDO::PARAM_STR);
            $statement->bindParam(':send_at', $send_at, PDO::PARAM_STR);

            # Exécution de la requête
            $statement->execute();
        } catch (PDOException $e) {
            error_log('Erreur de connexion ou d\'insertion : ' . $e->getMessage());
            http_response_code(500);
            echo "Erreur lors de l'enregistrement des données.";
            exit;
        }

        # Réponse serveur
        echo "Ping enregistré avec succès.";
    } else {
        http_response_code(400);
        echo "Contenu invalide.";
    }
} else {
    http_response_code(405);
    echo "Méthode non autorisée.";
}
*/