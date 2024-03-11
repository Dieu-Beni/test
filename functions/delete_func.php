<?php
session_start();

// Vérifier si le formulaire d'ajout de tâche a été soumis
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Inclure le fichier de connexion à la base de données
    include_once "../config/database.php";

  
    $id = $_GET["id"];

    /// Préparer la requête SQL pour supprimer la tâche
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Exécuter la requête
    $stmt->execute();

    header('Location:../index.php?page=home');
 

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>