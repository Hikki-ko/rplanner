<?php
function createCharacter($pdo) {
	$is_good = true;
	$errors = [];

	/* FIRST NAME */
	if (!isset($_POST["first_name"]) || trim($_POST["first_name"]) === "" || strlen($_POST["first_name"]) > 30) {
		$is_good = false;
		$errors[] = "Le prénom doit être inférieur à 30 caractères et renseigné.";
	}

	/* LAST NAME */
	if (!isset($_POST["last_name"]) || trim($_POST["last_name"]) === "" || strlen($_POST["last_name"]) > 30) {
		$is_good = false;
		$errors[] = "Le nom doit être inférieur à 30 caractères et renseigné.";
	}

	/* AGE */
	if (!isset($_POST["age"]) || trim($_POST["age"]) === "" || !filter_var($_POST["age"], FILTER_VALIDATE_INT)) {
		$is_good = false;
		$errors[] = "L'age doit être numérique et renseigné.";
	}

	/* NATIONALITY */
	if (!isset($_POST["nationality"]) || trim($_POST["nationality"]) === "" || strlen($_POST["nationality"]) > 30) {
		$is_good = false;
		$errors[] = "La nationalité doit être inférieur à 30 caractères et renseignée.";
	}

	/* PRONOUNS */
	if (!isset($_POST["pronouns"]) || trim($_POST["pronouns"]) === "" || strlen($_POST["pronouns"]) > 30) {
		$is_good = false;
		$errors[] = "Les pronoms doivent être inférieurs à 30 caractères et renseignés.";
	}

	/* GENDER */
	if (!isset($_POST["gender"]) || trim($_POST["gender"]) === "" || strlen($_POST["gender"]) > 30) {
		$is_good = false;
		$errors[] = "Le genre doit être inférieur à 30 caractères et renseigné.";
	}

	/* SEX */
	if (!isset($_POST["sex"]) || trim($_POST["sex"]) === "" || strlen($_POST["sex"]) > 30) {
		$is_good = false;
		$errors[] = "Le sexe doit être inférieur à 30 caractères et renseigné.";
	}

	/* SEXUAL ORIENTATION */
	if (!isset($_POST["sexual_orientation"]) || trim($_POST["sexual_orientation"]) === "" || strlen($_POST["sexual_orientation"]) > 30) {
		$is_good = false;
		$errors[] = "L'orientation sexuelle doit être inférieure à 30 caractères et renseignée.";
	}

	/* OCCUPATION */
	if (!isset($_POST["occupation"]) || trim($_POST["occupation"]) === "" || strlen($_POST["occupation"]) > 30) {
		$is_good = false;
		$errors[] = "L'occupation doit être inférieure à 30 caractères et renseigné.";
	}

	/* VOICE */
	if (!isset($_POST["voice"]) || trim($_POST["voice"]) === "" || strlen($_POST["voice"]) > 50) {
		$is_good = false;
		$errors[] = "La voix doit être inférieure à 50 caractères et renseignée.";
	}

	/* VOICE LINK */
	if (!isset($_POST["voice_link"]) || trim($_POST["voice_link"]) === "" || strlen($_POST["voice_link"]) > 100) {
		$is_good = false;
		$errors[] = "Le lien vers la voix doit être inférieur à 100 caractères et renseigné.";
	}
	
	/* PSYCHOLOGY */
	if (!isset($_POST["psychology"]) || trim($_POST["psychology"]) === "") {
		$is_good = false;
		$errors[] = "La psychologie doit être renseignée.";
	}

	/* HOBBIES */
	if (!isset($_POST["hobbies"]) || trim($_POST["hobbies"]) === "") {
		$is_good = false;
		$errors[] = "Les passions doivent être renseignées.";
	}
	
	/* HEIGHT */
	if (!isset($_POST["height"]) || trim($_POST["height"]) === "" || !filter_var($_POST["height"], FILTER_VALIDATE_INT)) {
		$is_good = false;
		$errors[] = "La taille doit être numérique et renseignée.";
	}
	
	/* WEIGHT */
	if (!isset($_POST["weight"]) || trim($_POST["weight"]) === "" || !filter_var($_POST["weight"], FILTER_VALIDATE_INT)) {
		$is_good = false;
		$errors[] = "Le poids doit être numérique et renseigné.";
	}

	/* EYE COLOR */
	if (!isset($_POST["eye_color"]) || trim($_POST["eye_color"]) === "" || strlen($_POST["eye_color"]) > 30) {
		$is_good = false;
		$errors[] = "La couleur des yeux doit être inférieure à 30 caractères et renseignée.";
	}

	/* HAIR COLOR */
	if (!isset($_POST["hair_color"]) || trim($_POST["hair_color"]) === "" || strlen($_POST["hair_color"]) > 30) {
		$is_good = false;
		$errors[] = "La couleur des cheveux doit être inférieure à 30 caractères et renseignée.";
	}
	
	/* PHYSICAL DESCRIPTION */
	if (!isset($_POST["physical_description"]) || trim($_POST["physical_description"]) === "") {
		$is_good = false;
		$errors[] = "La description physique doit être renseignée.";
	}
	
	/* HEALTH */
	if (!isset($_POST["health"]) || trim($_POST["health"]) === "") {
		$is_good = false;
		$errors[] = "La santé doit être renseignée.";
	}
	
	/* FACECLAIM */
	if (!isset($_POST["faceclaim"]) || trim($_POST["faceclaim"]) === "" || strlen($_POST["faceclaim"]) > 100) {
		$is_good = false;
		$errors[] = "Le lien vers le faceclaim doit être inférieur à 100 caractères et renseigné.";
	}

	/* IMAGE */
	if (!isset($_POST["image"]) || trim($_POST["image"]) === "" || strlen($_POST["image"]) > 100) {
		$is_good = false;
		$errors[] = "Le lien vers l'image doit être inférieur à 100 caractères et renseigné.";
	}
	
	if ($is_good) {
		$connexion = $pdo->prepare("INSERT INTO `characters` (`campaign_id`, `first_name`, `last_name`, `age`, `nationality`, `pronouns`, `gender`, `sex`, `sexual_orientation`, `occupation`, `voice`, `voice_link`, `psychology`, `hobbies`, `height`, `weight`, `eye_color`, `hair_color`, `physical_description`, `health`, `faceclaim`, `image`) VALUES (:campaign_id, :first_name, :last_name, :age, :nationality, :pronouns, :gender, :sex, :sexual_orientation, :occupation, :voice, :voice_link, :psychology, :hobbies, :height, :weight, :eye_color, :hair_color, :physical_description, :health, :faceclaim, :image);");
		$connexion->execute([
		':campaign_id' => $_POST["campaign_id"],
		':first_name' => $_POST["first_name"],
		':last_name' => $_POST["last_name"],
		':age' => $_POST["age"],
		':nationality' => $_POST["nationality"],
		':pronouns' => $_POST["pronouns"],
		':gender' => $_POST["gender"],
		':sex' => $_POST["sex"],
		':sexual_orientation' => $_POST["sexual_orientation"],
		':occupation' => $_POST["occupation"],
		':voice' => $_POST["voice"],
		':voice_link' => $_POST["voice_link"],
		':psychology' => $_POST["psychology"],
		':hobbies' => $_POST["hobbies"],
		':height' => $_POST["height"],
		':weight' => $_POST["weight"],
		':eye_color' => $_POST["eye_color"],
		':hair_color' => $_POST["hair_color"],
		':physical_description' => $_POST["physical_description"],
		':health' => $_POST["health"],
		':faceclaim' => $_POST["faceclaim"],
		':image' => $_POST["image"]
		]);
		header('Location: '.$_SERVER['PHP_SELF']);
		exit;
	} else {
		return $errors;
	}
}
?>