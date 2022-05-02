<?php
session_start();
/**
 * Deco
 */
// Détruit la variable de session "user"
unset($_SESSION['user']);

//Détruit toutes les variables de session

session_unset();

// Détruit toute les session existantes

session_destroy();

header('Location: ../pagesAccueil/index.php');