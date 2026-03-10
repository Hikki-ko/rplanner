<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="UTF-8">
		<title>Gestion de campagne - RPlanner</title>
	</head>
	<body>
		<h1>Gestion de campagnes</h1>
		<h2>Gestion d'objets</h2>
		<form method="POST" id="add_item_form">
			<input type="text" name="item_name" id="item_name" placeholder="Nom de l'objet">
			<input type="text" name="item_description" id="item_description" placeholder="Description de l'objet">
			<button type="submit" name="add_item">Ajouter l'objet</button>
		</form>
		<?php if (isset($errors) && $errors) {echo implode("<br>", $errors);} ?>
		
		<h3>Liste d'objets</h3>
		<?php showItems($pdo); ?>
	</body>
</html>