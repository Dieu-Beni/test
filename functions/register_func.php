<?php
include_once "../config/database.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Récupérer les données du formulaire
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm-password"];
        
        // Vérifier si les mots de passe correspondent
        if ($password !== $confirm_password) {
            throw new Exception("Les mots de passe ne correspondent pas.");
        }

        // Hasher le mot de passe
        // Utilisation de la fonction password_hash() pour hacher le mot de passe fourni
        // Cette fonction sécurise le mot de passe en le hachant à l'aide d'un algorithme de hachage sécurisé
        // Le mot de passe en clair est passé en premier paramètre, PASSWORD_DEFAULT spécifie l'algorithme de hachage à utiliser
        // Le résultat du hachage est stocké dans la variable $hashed_password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Préparer la requête d'insertion
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

        // Liaison des valeurs aux paramètres de la requête préparée
        // Les types de données des valeurs sont spécifiés ("sss" indique que les trois valeurs sont des chaînes de caractères)
        // Les valeurs sont respectivement liées aux trois marqueurs de position dans l'ordre : username, email, hashed_password
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
        } else {
            throw new Exception("Erreur lors de l'inscription : " . $conn->error);
        }

        // Fermer la connexion
        $stmt->close();
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>


