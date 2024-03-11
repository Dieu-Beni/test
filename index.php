<?php
  session_start();

include_once 'config/database.php';
include_once "functions/func.php";

// Appeler la fonction pour récupérer les tâches de l'utilisateur connecté
$tasks = getTasksForUser();

// Appeler la fonction pour récupérer la tâches par son id
$task = getTaskById($_GET['id']);

//var_dump($tasks);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <?php include "pages/includes/topbar.php"?>
    <div class="container">
          <?php
          if(isset($_GET['page'])) {
              include("pages/" . $_GET['page'] . '.php');
            } else {
              include('pages/404.php');
            }
          ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
