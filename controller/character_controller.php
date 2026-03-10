<?php
include_once("../model/inc.connexion.php");
include_once("../model/inc.character_edit.php");

if (isset($_POST["add_character"])) {
	// createCharacter renvoie uniquement des valeurs si il rencontre une erreur. Si il fonctionne, $errors sera vide.
	$errors = createCharacter($pdo);
}

include_once("../view/pages/character_creation.php");
?>