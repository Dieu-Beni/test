<?php
session_start();

// Vérifier si le formulaire d'ajout de tâche a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclure le fichier de connexion à la base de données
    include_once "../config/database.php";

    // Récupérer les données du formulaire
    $task_name = $_POST["task_name"];
    $task_description = $_POST["task_desk"];
    $user_id = $_SESSION["user_id"];

    // Préparer la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO tasks (task_name, task_description, user_id) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $task_name, $task_description, $user_id);

    // Exécuter la requête
    if ($stmt->execute()) {
        header("Location:../index.php?page=home");
    } else {
        echo "Erreur lors de l'ajout de la tâche : " . $stmt->error;
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>