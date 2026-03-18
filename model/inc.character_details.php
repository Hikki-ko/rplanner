<?php 
	function getCharacterInfos($pdo) {
		$connexion = $pdo->prepare("SELECT * FROM `characters`");
		$connexion->execute();
		$characters = $connexion->fetchAll(PDO::FETCH_ASSOC);

	return $characters;
	}

	function getCharacterDetails($pdo, $character_id) {
		$connexion = $pdo->prepare("SELECT * FROM `characters` where character_id = :character_id;");
		$connexion->execute([':character_id' => $character_id]);
		$attributes = $connexion->fetch(PDO::FETCH_ASSOC);

	return $attributes;
	}
?>