<?php
    //Appelle de la connexion
    
    include_once("inc.connection.php");

    function getUsername($pdo, $username) {
        $connexion = $pdo->prepare('SELECT * FROM users WHERE username = :username');
        $connexion->execute(['username' => htmlspecialchars($username)]);

        return $connexion->fetch(PDO::FETCH_ASSOC);
    }

?>