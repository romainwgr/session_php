<?php
session_start();
if(!(isset($_SESSION['nom']) && isset($_SESSION['mail']))){
    header('Location: form.php');
    die();
}
echo 'Vous êtes connecté, bonjour '. $_SESSION['nom'];
?>
