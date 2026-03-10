<?php

function showCharacters($pdo) {
		$connexion = $pdo->prepare("SELECT * FROM `characters`");
		$connexion->execute();
		$characters = $connexion->fetchAll(PDO::FETCH_ASSOC);
		foreach ($characters as $character) {
			echo $character["character_id"]." | ".$character["first_name"]." | ".$character["last_name"]."<a href=\"\">Détails</a><br>";
		}
	}

?>