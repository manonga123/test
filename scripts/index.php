<?php
require_once __DIR__ . '/../src/UserHandler.php';

// Création d'une instance de UserHandler
$userHandler = new UserHandler();

// Saisie dans le terminal
echo "Entrez le nom : ";
$nom = trim(fgets(STDIN));

echo "Entrez le prénom : ";
$prenom = trim(fgets(STDIN));

echo "Entrez l'email : ";
$email = trim(fgets(STDIN));

// Appel de la fonction d'insertion
$userHandler->insertUser($nom, $prenom, $email);

// Affichage des utilisateurs dans la base
$userHandler->displayUsers();
?>
