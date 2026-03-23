<?php
session_start();
require_once __DIR__ . "/../model/inc.connection.php";
require_once __DIR__ . "/../model/inc.register.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['inputUsername'] ?? '');
    $password = $_POST['inputPassword'] ?? '';
    $confirm  = $_POST['confirmationPassword'] ?? '';
    $email    = trim($_POST['inputEmail'] ?? '');
    $token    = $_POST['csrf_token'] ?? '';
    $captcha  = $_POST['captcha'] ?? '';

    $errors = [];

    // Validations avec clés nommées pour l'affichage spécifique
    if ($token !== ($_SESSION['token'] ?? '')) {
        $errors['csrf'] = "Erreur de sécurité CSRF.";
    }
    
    // Forcer le type string pour comparer avec le POST
    if ($captcha !== (string)($_SESSION['captcha'] ?? '')) {
        $errors['captcha'] = "Le code captcha est incorrect.";
    }

    if (empty($username)) {
        $errors['username'] = "L'identifiant est obligatoire.";
    }

    if (strlen($password) < 8) {
        $errors['password'] = "Le mot de passe doit faire au moins 8 caractères.";
    }

    if ($password !== $confirm) {
        $errors['confirm'] = "Les mots de passe ne correspondent pas.";
    }

    if (empty($errors)) {
        unset($_SESSION['captcha']);
        
        $result = createAccount($pdo, $username, $password, $email);
        
        if ($result === true) {
            $_SESSION['success'] = "Compte créé ! Connectez-vous.";
            header("Location: /login");
            exit;
        } else {
            // Si le modèle renvoie une erreur (ex: email déjà pris)
            $errors['global'] = $result; 
        }
    }
    
    // Enregistre les erreurs (le tableau associatif) en session
    $_SESSION['errors'] = $errors;
    
    // Renvoie aussi les données saisies (sauf le mot de passe) 
    // pour éviter à l'utilisateur de tout retaper
    $_SESSION['old'] = [
        'username' => $username,
        'email' => $email
    ];

    header("Location: /registerview");
    exit;
}