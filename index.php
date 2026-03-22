<?php
$request = $_SERVER['REQUEST_URI'];

// Suppression de la requête GET
$request = strtok($request, '?');

// Suppression du / final
$request = rtrim($request, '/');

if ($request === '') {
    $request = '/';
}

if ($request === '/') {
    include 'controller/index.php';

} elseif ($request === '/campaigns') {
    include 'controller/campaign_controller.php';

} elseif ($request === '/characters') {
    include 'controller/character_controller.php';
	
} elseif ($request === '/login') {
    include 'controller/login.php';

} elseif ($request === '/register') {
    include 'controller/register.php';

} elseif ($request === '/character_list') {
    include 'controller/character_list_controller.php';
	
} elseif ($request === '/dashboard') {
    include 'controller/dashboard_controller.php';
	
} elseif ($request === '/logout') {
    include 'controller/logout.php';

} elseif ($request === '/registerview') {
    include 'view/pages/account_creation.php';

} else {
    http_response_code(404);
    include 'view/pages/not_found.php';
}
?>