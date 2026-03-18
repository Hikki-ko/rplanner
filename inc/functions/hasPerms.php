<?php 
	function hasPerms($pdo,$object,$object_id) {
		if (!(isset($_SESSION["user_id"]) && !empty($_SESSION["user_id"]))) {
			return false;
		}
		if ($_SESSION["is_admin"]) {
			return true;
		}
		if ($object == "campaign") {
			$connexion = $pdo->prepare('SELECT owner_id FROM campaigns WHERE campaign_id = :campaign_id');
			$connexion->execute(['campaign_id' => $object_id]);
		} elseif ($object == "character") {
			$connexion = $pdo->prepare('SELECT user_id FROM characters WHERE character_id = :character_id');
			$connexion->execute(['character_id' => $object_id]);
		}
		$user_id = $connexion->fetchColumn();
		return $user_id == $_SESSION["user_id"];
	}
?>