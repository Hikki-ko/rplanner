<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Récupération des données 
    $username = trim($_POST['inputUsername'] ?? '');
    $password = $_POST['inputPassword'] ?? '';
    $confirm  = $_POST['confirmationPassword'] ?? '';
    $email    = trim($_POST['inputEmail'] ?? '');
    $captcha  = $_POST['captcha'] ?? '';
    $token    = $_POST['csrf_token'] ?? '';

    // Initialisation d'un tableau d'erreurs
    $errors = [];

    // Vérification du Token CSRF
    if (empty($token) || $token !== $_SESSION['token']) {
        $errors[] = "Erreur de sécurité (CSRF).";
    }

    // On récupère ce que l'utilisateur a tapé dans le formulaire
    $user_input_captcha = $_POST['captcha'] ?? ''; 

    // On compare avec ce qui a été stocké par le script de l'image
    if ($user_input_captcha != $_SESSION['captcha']) {
      $errors[] = "Le code captcha est incorrect.";
    }

    // Vérification des champs vides
    if (empty($username) || empty($password)) {
        $errors[] = "L'identifiant et le mot de passe sont obligatoires.";
    }

    // Vérification de la correspondance des mots de passe
    if ($password !== $confirm) {
        $errors[] = "Les mots de passe ne correspondent pas.";
    }

}