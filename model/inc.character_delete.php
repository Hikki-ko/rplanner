<?php
    function deleteCharacter($pdo, $character_id) {
		$connexion = $pdo->prepare("DELETE FROM characters WHERE character_id=:character_id");
		$connexion->execute([
		':character_id' => $_GET["del_character_id"]
		]);

        if ($connexion->rowCount() > 0) {
                return true;  // Le perso a bien été supprimé
            } else {
                return false; // Aucun perso n'a été trouvé/supprimé
            } 
	}
?>