<?php

require($_SERVER['DOCUMENT_ROOT'] . '/inc/connexionBDD.php');

$projet = $bdd->prepare('SELECT COUNT(*) FROM projet');
$projet->execute();
$projet = $projet->fetchColumn();

$blog = $bdd->prepare('SELECT * FROM blog ORDER BY date LIMIT 5 ');
$blog->execute();
$blog = $blog->fetchAll();
foreach($blog as &$bb){
    foreach($bb as &$val){
        if (isset($val)){
            $val = utf8_encode($val);
        }
    }
}

if (isset($_POST['proj'])){
    setcookie("projet", $_POST['proj']);
    header("Location: /projet");
}

if (isset($_POST['blog'])){
    setcookie("blog", $_POST['blog']);
    header("Location: /blog");
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/templates/main_page.php');

?>