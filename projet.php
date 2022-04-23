<?php
    
    require($_SERVER['DOCUMENT_ROOT'] . '/inc/connexionBDD.php');

    $projet = $bdd->prepare('SELECT * FROM projet WHERE id = ' . $_COOKIE['projet']);
    $projet->execute();
    $projet = $projet->fetchAll();
    $projet = $projet[0];

    require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/templates/project_page.php');

?>