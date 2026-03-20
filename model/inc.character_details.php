<?php 
	function getCharacterInfos($pdo) {
		if($_SESSION['is_admin'] == 0) {
			$connexion = $pdo->prepare("SELECT * FROM `characters` WHERE user_id = :user_id");
			$connexion->execute([':user_id' => $_SESSION['user_id']]);
			$characters = $connexion->fetchAll(PDO::FETCH_ASSOC);
		} else {
			$connexion = $pdo->prepare("SELECT * FROM `characters`");
			$connexion->execute();
			$characters = $connexion->fetchAll(PDO::FETCH_ASSOC);
		}
		
		

	return $characters;
	}

	function getCharacterDetails($pdo, $character_id) {
		$connexion = $pdo->prepare("SELECT * FROM `characters` where character_id = :character_id;");
		$connexion->execute([':character_id' => $character_id]);
		$attributes = $connexion->fetch(PDO::FETCH_ASSOC);

	return $attributes;
	}
?>