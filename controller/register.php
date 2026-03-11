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

    // Vérification du Captcha 
    if ($captcha !== $_SESSION['captcha_code']) {
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