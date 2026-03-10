<?php
session_start();

// Création du code aléatoire
$_SESSION['captcha'] = rand(10000,99999);
$captcha = $_SESSION['captcha'];

// Création d'une image
$img = imagecreate(55,25);
$bgColor = imagecolorallocate($img,0,0,0);
$textColor = imagecolorallocate($img,255,255,255);

// Écrire le texte
imagestring($img,5,5,5,$captcha,$textColor);

// Afficher l'image
header('Content-Type: image/jpeg');
imagejpeg($img);

imagedestroy($img);