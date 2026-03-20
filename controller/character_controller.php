<?php
session_start();
include_once("../model/inc.connection.php");
include_once("../model/inc.character_create.php");
include_once("../model/inc.character_edit.php");
include_once("../inc/functions/hasPerms.php");
include_once('../inc/functions/check_login.php');
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
	if(hasPerms($pdo, "character", $_GET["character_id"])) {
		include_once("../view/pages/character_edition.php");
	} else {
		$typeAlerte = "perms";
		include_once("./character_list_controller.php");
	}
} elseif(isset($_GET["del_character_id"]) && trim($_GET["del_character_id"]) !== "") {
	if(hasPerms($pdo, "character", $_GET["del_character_id"])) {
		include_once("../model/inc.character_delete.php");
		$character_delete = deleteCharacter($pdo, $_GET["del_character_id"]);
		if(!$character_delete) {
				$typeAlerte = "arguments";
			} else {
				$typeAlerte = "delSuccess";
			}
		deleteCharacter($pdo, $_GET["del_character_id"]);
		include_once("./character_list_controller.php");
	} else {
		$typeAlerte = "delPerms";
		include_once("./character_list_controller.php");
	}
	} else {
		include_once("../view/pages/character_creation.php");
	}
	
?>