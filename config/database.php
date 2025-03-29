<?php
// Configuration de la base de données
$host = '127.0.0.1';
$db = 'symfony'; // Nom de la base de données
$user = 'root'; // Identifiant MySQL
$pass = ''; // Mot de passe MySQL
$charset = 'utf8mb4';

// Fonction pour obtenir une connexion PDO
function getDatabaseConnection() {
    try {
        $dsn = "mysql:host=$GLOBALS[host];dbname=$GLOBALS[db];charset=$GLOBALS[charset]";
        $pdo = new PDO($dsn, $GLOBALS['user'], $GLOBALS['pass'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}
?>
