<?php
	function createItem($pdo) {
		$is_good = true;
		$errors = [];
		
		/* ITEM NAME */
		if (!isset($_POST["item_name"]) || trim($_POST["item_name"]) === "" || strlen($_POST["item_name"]) > 100) {
			$is_good = false;
			$errors[] = "Le nom de l'objet doit être inférieur à 100 caractères et renseigné.";
		}

		/* ITEM DESCRIPTION */
		if (!isset($_POST["item_description"]) || trim($_POST["item_description"]) === "") {
			$is_good = false;
			$errors[] = "La description de l'objet doit être renseignée.";
		}
		
		if ($is_good) {
			$connexion = $pdo->prepare("INSERT INTO `items` (`item_name`, `item_description`) VALUES (:item_name, :item_description);");
			$connexion->execute([
			':item_name' => $_POST["item_name"],
			':item_description' => $_POST["item_description"],
			]);
			// Ce header détruit la requete POST après traitement pour ne pas la renvoyer lorsque la page est refresh.
			header('Location: '.$_SERVER['PHP_SELF']);
			exit;
		} else {
			return $errors;
		}
	};
	
	function showItems($pdo) {
		$connexion = $pdo->prepare("SELECT * FROM `items`");
		$connexion->execute();
		$items = $connexion->fetchAll(PDO::FETCH_ASSOC);
		foreach ($items as $item) {
			echo $item["item_id"]." | ".$item["item_name"]." | ".$item["item_description"]."<a href=\"?delete_id=".$item["item_id"]."\">Supprimer l'objet</a><br>";
		}
	}
	
	function deleteItem($pdo, $item_id) {
		$connexion = $pdo->prepare("DELETE FROM items WHERE item_id=:delete_id");
		$connexion->execute([
		':delete_id' => $_GET["delete_id"]
		]);
	}
?>