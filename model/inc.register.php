<?php
// Connexion
include_once('inc.connection.php');

function createAccount($pdo, $username, $password, $email) {
    // Vérifier si l'utilisateur existe déjà
    $stmt = $pdo->prepare("SELECT user_id FROM users WHERE username = ?");
    $stmt->execute([$username]);
    
    if ($stmt->fetch()) {
        return "Cet identifiant est déjà utilisé.";
    }

    // Hachage et Insertion
    $emailValue = !empty($email) ? $email : null;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $insert = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    
    if ($insert->execute([$username, $hashedPassword, $emailValue])) {
        return true; // Succès
    }
    
    return "Une erreur est survenue lors de l'inscription.";
}