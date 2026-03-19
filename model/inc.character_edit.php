<?php
// Certaines fonctionnalités de cette page sont gérées en JavaScript (/view/js/character_create.js)
function editCharacter($pdo) {
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
	
	/* CUSTOM FIELDS */
	if (!isset($_POST["custom_fields"])) {
		$custom_fields = null;
	} else {
		$custom_fields = $_POST["custom_fields"];
	}
	
	if ($is_good) {
		$connexion = $pdo->prepare("UPDATE `characters` SET first_name = :first_name, last_name = :last_name, age = :age, nationality = :nationality, pronouns = :pronouns, gender = :gender, sex = :sex, sexual_orientation = :sexual_orientation, occupation = :occupation, voice = :voice, voice_link = :voice_link, psychology = :psychology, hobbies = :hobbies, height = :height, weight = :weight, eye_color = :eye_color, hair_color = :hair_color, physical_description = :physical_description, health = :health, faceclaim = :faceclaim, image = :image, custom_fields = :custom_fields WHERE character_id = :character_id;");
		$connexion->execute([
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
		':image' => $_POST["image"],
		':custom_fields' => $custom_fields,
		':character_id' => $_POST["character_id"]
		]);
		header('Location: ./campaign_controller.php');
		exit;
	} else {
		return $errors;
	}
}

function getEditFields($pdo, $character_id, $errors) {
	$connexion = $pdo->prepare("SELECT * FROM `characters` where character_id = :character_id;");
	$connexion->execute([':character_id' => $character_id]);
	$attributes = $connexion->fetch(PDO::FETCH_ASSOC);
	if (isset($errors) && $errors) {
		$errors = implode("<br>", $errors);
	} else {
		$errors = "";
	}
	if (!$attributes) {
		// echo '<p>Ce personnage n\'existe pas !</p>';
		$typeAlerte = "arguments";
		include_once("./character_list_controller.php");
	} else {
		$customattributes = json_decode($attributes["custom_fields"]);
		echo '
			<input type="hidden" name="character_id" id="character_id" value="'.htmlspecialchars($character_id).'">
			<input type="hidden" name="campaign_id" id="campaign_id" value="666">
			<input type="text" name="first_name" id="first_name" placeholder="Prénom" value="'.htmlspecialchars($attributes["first_name"]).'">
			<input type="text" name="last_name" id="last_name" placeholder="Nom" value="'.htmlspecialchars($attributes["last_name"]).'">
			<input type="number" name="age" id="age" placeholder="Âge" value="'.htmlspecialchars($attributes["age"]).'">
			<input type="text" name="nationality" id="nationality" placeholder="Nationalité" value="'.htmlspecialchars($attributes["nationality"]).'">
			<input type="text" name="pronouns" id="pronouns" placeholder="Pronoms" value="'.htmlspecialchars($attributes["pronouns"]).'">
			<input type="text" name="gender" id="gender" placeholder="Genre" value="'.htmlspecialchars($attributes["gender"]).'">
			<input type="text" name="sex" id="sex" placeholder="Sexe" value="'.htmlspecialchars($attributes["sex"]).'">
			<input type="text" name="sexual_orientation" id="sexual_orientation" placeholder="Orientation sexuelle" value="'.htmlspecialchars($attributes["sexual_orientation"]).'">
			<input type="text" name="occupation" id="occupation" placeholder="Occupation" value="'.htmlspecialchars($attributes["occupation"]).'">
			<input type="text" name="voice" id="voice" placeholder="Voix" value="'.htmlspecialchars($attributes["voice"]).'">
			<input type="text" name="voice_link" id="voice_link" placeholder="Lien vers la voix" value="'.htmlspecialchars($attributes["voice_link"]).'">
			<textarea name="psychology" id="psychology" placeholder="Psychologie">'.htmlspecialchars($attributes["psychology"]).'</textarea>
			<textarea name="hobbies" id="hobbies" placeholder="Passions">'.htmlspecialchars($attributes["hobbies"]).'</textarea>
			<input type="number" name="height" id="height" placeholder="Taille" value="'.htmlspecialchars($attributes["height"]).'">
			<input type="number" name="weight" id="weight" placeholder="Poids" value="'.htmlspecialchars($attributes["weight"]).'">
			<input type="text" name="eye_color" id="eye_color" placeholder="Couleur des yeux" value="'.htmlspecialchars($attributes["eye_color"]).'">
			<input type="text" name="hair_color" id="hair_color" placeholder="Couleur des cheveux" value="'.htmlspecialchars($attributes["hair_color"]).'">
			<textarea name="physical_description" id="physical_description" placeholder="Description physique">'.htmlspecialchars($attributes["physical_description"]).'</textarea>
			<textarea name="health" id="health" placeholder="Santé">'.htmlspecialchars($attributes["health"]).'</textarea>
			<input type="text" name="faceclaim" id="faceclaim" placeholder="Faceclaim" value="'.htmlspecialchars($attributes["faceclaim"]).'">
			<input type="text" name="image" id="image" placeholder="Image" value="'.htmlspecialchars($attributes["image"]).'">
			';
			echo '<div id="custom_fields_container">';
			if ($customattributes) {
				foreach ($customattributes as $attribute => $value) {
					echo '<input class="custom_field" data_name="'.htmlspecialchars($attribute).'" placeholder="'.htmlspecialchars($attribute).'" value="'.htmlspecialchars($value).'">';
				}
			}
			echo '</div>';
			echo '
				<p>Créer un nouveau champ :</p>
				<input type="text" id="new_field_name" placeholder="Nom du champ">
				<button type="button" id="add_field">Ajouter le champ</button>
				<br>
				<br>'.
				$errors
				.'<br>
				<br>
				<button type="submit" name="edit_character">Modifier le personnage</button>
				';
	}
	
}
?>