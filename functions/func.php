<?php
  // session_start();
    
    include_once 'config/database.php';
    //include "config/database.php";
// Fonction pour récupérer toutes les tâches d'un utilisateur connecté
 function getTasksForUser(){
    global $conn;

    // Récupérer l'ID de l'utilisateur connecté à partir de la session (l'ID stocke est dans $_SESSION["user_id"])
    $user_id = $_SESSION['user_id'];

    // Préparer la requête SQL pour sélectionner les tâches de l'utilisateur
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
   
    // Tableau pour stocker les tâches récupérées
    $tasks = $result->fetch_all();

    // Fermer la connexion et retourner les tâches
    $stmt->close();

    return $tasks;
}

function getTaskById($id)
{
    global $conn;


    // Préparer la requête SQL pour sélectionner les tâches de l'utilisateur
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
   
    // Tableau pour stocker la tâche récupérée
    $task = $result->fetch_assoc();

    // Fermer la connexion et retourner les tâches
    $stmt->close();

    return $task;
}

?>