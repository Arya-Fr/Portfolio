<?php

if (isset($_POST['proj'])){
    setcookie("projet", $_POST['proj']);
    header("Location: /projet");
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/templates/main_page.php');

?>