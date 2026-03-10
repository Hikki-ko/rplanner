<!DOCTYPE html>
<html lang=fr>
<head>
	<meta charset="UTF-8">
	<title>Créer un personnage - RPlanner</title>
</head>

<body>
	<noscript>
		<p>Veuillez activer le JavaScript pour le bon fonctionnement de cette page.</p>
	</noscript>
	<form method="POST" id="add_character_form">
		<!-- Champ invisible temporaire jusqu'à l'ajout de la relation campagne-personnage -->
		<input type="hidden" name="campaign_id" id="campaign_id" value="666">
		<input type="text" name="first_name" id="first_name" placeholder="Prénom">
		<input type="text" name="last_name" id="last_name" placeholder="Nom">
		<input type="number" name="age" id="age" placeholder="Âge">
		<input type="text" name="nationality" id="nationality" placeholder="Nationalité">
		<input type="text" name="pronouns" id="pronouns" placeholder="Pronoms">
		<input type="text" name="gender" id="gender" placeholder="Genre">
		<input type="text" name="sex" id="sex" placeholder="Sexe">
		<input type="text" name="sexual_orientation" id="sexual_orientation" placeholder="Orientation sexuelle">
		<input type="text" name="occupation" id="occupation" placeholder="Occupation">
		<input type="text" name="voice" id="voice" placeholder="Voix">
		<input type="text" name="voice_link" id="voice_link" placeholder="Lien vers la voix">
		<textarea name="psychology" id="psychology" placeholder="Psychologie"></textarea>
		<textarea name="hobbies" id="hobbies" placeholder="Passions"></textarea>
		<input type="number" name="height" id="height" placeholder="Taille">
		<input type="number" name="weight" id="weight" placeholder="Poids">
		<input type="text" name="eye_color" id="eye_color" placeholder="Couleur des yeux">
		<input type="text" name="hair_color" id="hair_color" placeholder="Couleur des cheveux">
		<textarea name="physical_description" id="physical_description" placeholder="Description physique"></textarea>
		<textarea name="health" id="health" placeholder="Santé"></textarea>
		<input type="text" name="faceclaim" id="faceclaim" placeholder="Faceclaim">
		<input type="text" name="image" id="image" placeholder="Image">
		<div id="custom_fields_container"></div>
		<p>Créer un nouveau champ :</p>
		<input type="text" id="new_field_name" placeholder="Nom du champ">
		<button type="button" id="add_field">Ajouter le champ</button>
		<br>
		<br>
		<?php if (isset($errors) && $errors) {echo implode("<br>", $errors);} ?>
		<br>
		<br>
		<button type="submit" name="add_character">Ajouter le personnage</button>
	</form>
	<script src="../view/js/character_create.js"></script>
</body>
</html>