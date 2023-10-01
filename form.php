<?php
include 'debut.php';
session_start();
?>



    <form action="" method='post'>
        <input type="text" name='nom' placeholder='entrez votre nom' value='<?=$_POST['nom'] ?>'>
        <input type="text" name='mail' placeholder='adresse mail' value='<?=$_POST['mail'] ?>'>
        <input type="submit" value="Se connecter">
    </form>


<?php 
if(isset($_POST['nom']) && isset($_POST['mail'])){
    if(preg_match('/^[a-zA-Z0-9]+@[a-z]+\.(fr|com)$/',$_POST['mail'])){
        $nom= $_POST['nom'];
        $mail= $_POST['mail'];
        $_SESSION['nom']= $nom;
        $_SESSION['mail']=$mail;
        header('Location: contenu.php');
        die();
    }
    else{
        echo '<p> L\'adresse mail n\'est pas valide</p>';
    }
    
}

include 'fin.php';
?>


