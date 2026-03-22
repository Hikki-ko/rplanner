<?php
session_start();
include_once("model/inc.connection.php");
include_once("model/inc.item_management.php");
include_once("model/inc.character_list.php");

if (isset($_POST["add_item"])) {
	$errors = createItem($pdo);
}

if (isset($_GET["delete_id"])) {
	deleteItem($pdo, $_GET["delete_id"]);
}

include_once("view/pages/campaign_management.php");
?>