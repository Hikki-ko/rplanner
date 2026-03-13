<!DOCTYPE html>
<html lang=fr>
<head>
	<meta charset="UTF-8">
	<title>Modifier un personnage - RPlanner</title>
</head>

<body>
	<noscript>
		<p>Veuillez activer le JavaScript pour le bon fonctionnement de cette page.</p>
	</noscript>
	<form method="POST" id="add_character_form">
		<?php getEditFields($pdo, $_GET["character_id"], $errors); ?>
	</form>
	<script src="../view/js/character_create.js"></script>
</body>
</html>