<?php
include_once("../model/inc.connection.php");
include_once("../model/inc.character_create.php");
include_once("../model/inc.character_edit.php");
$errors = null;

if (isset($_POST["add_character"])) {
	// createCharacter renvoie uniquement des valeurs si il rencontre une erreur. Si il fonctionne, $errors sera vide.
	$errors = createCharacter($pdo);
}

if (isset($_POST["edit_character"])) {
	// editCharacter renvoie uniquement des valeurs si il rencontre une erreur. Si il fonctionne, $errors sera vide.
	$errors = editCharacter($pdo);
}

// Specifier l'ID d'un personnage renvoie à l'édition de ce personnage. Ne pas spécifier renvoie à la création de personnage.
if (isset($_GET["character_id"]) && trim($_GET["character_id"]) !== "") {
	include_once("../view/pages/character_edition.php");
} else {
	include_once("../view/pages/character_creation.php");
}

?>