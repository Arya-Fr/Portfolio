<?php

$dsn = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/config/dsn');
$credentials_handle = fopen($_SERVER['DOCUMENT_ROOT'] . '/config/credentials', 'r');
$credentials_array = [];

$username = fgets($credentials_handle);
$mdp = fgets($credentials_handle);

try {
    $bdd = new PDO($dsn, $username, $mdp);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>