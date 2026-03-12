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

    // Validations
    if ($token !== $_SESSION['token']) $errors[] = "Erreur de sécurité CSRF.";
    if ($captcha !== ($_SESSION['captcha'] ?? '')) $errors[] = "Captcha incorrect.";
    if (empty($username) || strlen($password) < 8) $errors[] = "Données invalides.";
    if ($password !== $confirm) $errors[] = "Les mots de passe ne correspondent pas.";

    if (empty($errors)) {
        // APPEL AU MODELE
        $result = createAccount($pdo, $username, $password, $email);
        
        if ($result === true) {
            $_SESSION['success'] = "Compte créé ! Connectez-vous.";
            header("Location: login.php");
            exit;
        } else {
            $errors[] = $result;
        }
    }
    
    // Si on arrive ici, il y a des erreurs
    $_SESSION['errors'] = $errors;
    header("Location: ../view/pages/account_creation.php"); // Retour au formulaire
    exit;
}