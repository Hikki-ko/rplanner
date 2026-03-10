<?php
$db_host = "localhost:3308";
$db_name = "rplanner";
$db_user = "root";
$db_pwd  = "";

// Connexion à la base de données
try {
  $pdo = new PDO('mysql:host=' . $db_host . ';charset=utf8;dbname=' . $db_name . '', $db_user, $db_pwd);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erreur de connexion :" . $e->getMessage();
}