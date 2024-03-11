<?php

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclure le fichier de connexion à la base de données
    include_once "../config/database.php";

    // Récupérer les données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Préparer la requête pour vérifier l'utilisateur
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {

            // Démarrer la session
            //session_start() est une fonction PHP utilisée pour démarrer ou reprendre une session existante.
            //Elle doit être appelée avant d'accéder ou de modifier les variables de session. 
            //Une fois que la session est démarrée avec session_start(), vous pouvez stocker des informations dans la session en les assignant à des clés dans le tableau $_SESSION.
            //Dans cet exemple, nous stockons l'ID, le nom et l'e-mail de l'utilisateur dans la session en utilisant des clés appropriées.
            //Ces informations peuvent être utilisées sur d'autres pages de l'appli tant que la session est active.
            session_start();

            // Stocker les informations de l'utilisateur dans la session
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["name"] = $user["name"];
            $_SESSION["email"] = $user["email"];

            // Rediriger vers une page d'accueil ou autre page protégée
                header('Location:../index.php?page=home');
            // exit();
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Adresse e-mail incorrecte.";
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>
