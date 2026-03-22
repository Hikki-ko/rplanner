<!DOCTYPE html>
<html lang=fr>
<head>
	<meta charset="UTF-8">
	<title>Créer une campagne - RPlanner</title>
	<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../view/css/style.css" />
</head>

<body class="d-flex flex-column h-100 text-center text-bg-dark">
	<noscript>
		<p>Veuillez activer le JavaScript pour le bon fonctionnement de cette page.</p>
	</noscript>
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
			<button type="submit" name="edit_character">Modifier le personnage</button>
</body>
</html>