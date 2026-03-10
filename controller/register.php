<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['InputUsername']);
    $password = $_POST['InputPassword'];
    $confirm = $_POST['PasswordConfirmation'];
    $email = trim($_POST['InputEmail']);

    
}