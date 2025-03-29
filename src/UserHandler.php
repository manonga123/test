<?php
require_once __DIR__ . '/../config/database.php';

class UserHandler {
    private $db;

    // Constructeur pour récupérer la connexion à la base de données
    public function __construct() {
        $this->db = getDatabaseConnection();
    }

    // Fonction pour insérer un utilisateur dans la base de données
    public function insertUser($nom, $prenom, $email) {
        $sql = "INSERT INTO user (nom, prenom, email) VALUES (:nom, :prenom, :email)";
        $stmt = $this->db->prepare($sql);
        try {
            $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':email' => $email,
            ]);
            echo "Utilisateur inséré avec succès !\n";
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage() . "\n";
        }
    }

    // Fonction pour afficher tous les utilisateurs
    public function displayUsers() {
        $sql = "SELECT * FROM user"; // Récupération de tous les utilisateurs
        $stmt = $this->db->query($sql);

        echo "\nListe des utilisateurs dans la base de données :\n";
        while ($row = $stmt->fetch()) {
            echo "ID : " . $row['id'] . "\n";
            echo "Nom : " . $row['nom'] . "\n";
            echo "Prénom : " . $row['prenom'] . "\n";
            echo "Email : " . $row['email'] . "\n";
            echo "---------------------------\n";
        }
    }
}
?>