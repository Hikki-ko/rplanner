<?php
session_start();

// Appelle du modèle

include_once("../model/inc.user_login.php");

// Définition des listes et variables de vérifications

$erreurs_username= [];
$erreurs_password = [];
$erreurs_connexion = [];
$username_ok = false;
$password_ok = false;

if (isset($_POST['login'])) {


// -- Champ identifiant -- //

  if (isset($_POST['usernametInput'])) {
    if (array_key_exists('usernametInput', $_POST) && !empty($_POST['usernametInput'])) {
      $username_ok = true;
      $username = strip_tags($_POST['usernametInput']);

    } else {
      $erreurs_username[] = "Le champs 'Identifiant' est vide";
      $username_ok = false;
    }
  }

// -- Champ mot de passe -- //

  if (isset($_POST['passwordInput'])) {
    if (array_key_exists('passwordInput', $_POST) && !empty($_POST['passwordInput'])) {
      $password_ok = true;
      $password = ($_POST['passwordInput']);
      
    } else {
      $erreurs_password[] = "Le champs 'Mot de passe' est vide";
      $password_ok = false;
    }
  }

  // Vérification finale, relation identifiant et mot de passe

  if ($username_ok && $password_ok) {

	$username_bdd = getUsername($pdo, $username);

    if (!$username_bdd) {
      $erreurs_connexion[] = "Aucun compte avec ce nom d'utilisateur";
    } else {
      if (password_verify($password, $username_bdd['password'])) {
        $_SESSION['username'] = htmlspecialchars($username);
		$_SESSION['user_id'] = htmlspecialchars($username_bdd["user_id"]);
		$_SESSION['is_admin'] = htmlspecialchars($username_bdd["is_admin"]);
        // header("Location: ../index.php");
        // die;
        // echo "<h1 style = 'color : white'>Bonjour : " . htmlspecialchars($username) . "</h1>";

        // echo '
        // <div class="login_popup">
        //     <div class="popup-box">
        //         <h2 class="popup-title">Connexion réussi !</h2>
        //         <p>Vous allez être redirigé dans 3 secondes...</p>
        //     </div>
        // </div>
        // ';

        header("Location: ../controller/dashboard_controller.php");
      } else {
        $erreurs_connexion[] = "Le mot de passe est invalide";
      }
    }
  }
}

//Appelle de la vue

require_once("../view/pages/account_login.php");
?>
