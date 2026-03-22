<?php 

session_start();
include_once('inc/functions/check_login.php');

if(isConnected()) {
    require_once("view/pages/dashboard.php");
} else {
    require_once("view/pages/error_not_connected.php");
}

?>
