<?php
function isConnected()
{
  // Vérifie si l'utilisateur est connecté
  if (
    isset($_SESSION['username'])
    && !empty($_SESSION['username'])
  ) {
    return true;
  } else {
    return false;
  }
}
?>