<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once("model/inc.connection.php");
    include_once("model/inc.character_details.php");
    
	include_once("view/pages/character_list.php");

?>