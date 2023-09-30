<?php

require($_SERVER['DOCUMENT_ROOT'] . '/inc/connexionBDD.php');

$projet = $bdd->prepare('SELECT COUNT(*) FROM projet');
$projet->execute();
$projet = $projet->fetchColumn();

$blog = $bdd->prepare('SELECT * FROM poste ORDER BY date DESC LIMIT 6 ');
$blog->execute();
$b = $blog->fetchAll();
foreach($b as &$bb){
    foreach($bb as &$val){
        if (isset($val)){
            $val = utf8_encode($val);
        }
    }
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/templates/main_page.php');

?>