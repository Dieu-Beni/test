<?php
// Paramètres de connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL (généralement localhost)
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$database = "devoir_db"; // Nom de la base de données MySQL

try {
    // Tentative de connexion
    $conn = new mysqli($servername, $username, $password, $database);

    // Vérification de la connexion
    if ($conn->connect_error) {
        throw new Exception("Erreur de connexion à la base de données : " . $conn->connect_error);
    } else {
        //echo "Connexion réussie à la base de données.";
    }
} catch (Exception $e) {
    // Gestion des erreurs
    echo "Erreur : " . $e->getMessage();
}
?>