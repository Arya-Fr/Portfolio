<?php
    
    require($_SERVER['DOCUMENT_ROOT'] . '/inc/connexionBDD.php');

    $blog = $bdd->prepare('SELECT * FROM blog WHERE id_b = ' . $_COOKIE['blog']);
    $blog->execute();
    $blog = $blog->fetchAll()[0];
    foreach($blog as &$val){
        if (isset($val)){
            $val = utf8_encode($val);
        }
    }

    $post = $bdd->prepare('SELECT * FROM poste WHERE id_b = ' . $_COOKIE['blog']);
    $post->execute();
    $post = $post->fetchAll();
    foreach($post as &$p){
        foreach($p as &$val){
            if (isset($val)){
                $val = utf8_encode($val);
            }
        }
    }

    require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/templates/blog_page.php');

?>