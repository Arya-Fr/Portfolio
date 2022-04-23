<?php
    
    //require($_SERVER['DOCUMENT_ROOT'] . '/inc/connexionBDD.php');

    // $projet = $bdd->prepare('SELECT * FROM projet WHERE id = ' . $_COOKIE['projet']);
    // $projet->execute();
    // $projet = $projet->fetchAll();

    $projet["titre"] = "Titre";
    $projet["description"] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    $projet["date"] = "01/01/1001";
    $projet["type"] = "gros test";
    $projet["main_image"] = "test1.jpeg";
    $projet["image_compl1"] = "test2.jpg";
    $projet["image_compl2"] = "test3.jpg";
    $projet["image_compl3"] = "test4.jpg";
    $projet["url"] = "Zeldo";

    require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/templates/project_page.php');

?>