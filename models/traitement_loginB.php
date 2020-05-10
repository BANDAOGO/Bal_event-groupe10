<?php
    session_start();
    require('connexion_B.php');




    //admin
    $nomAdmin = htmlspecialchars($_POST['nomAdmin']);
    $password = SHA1(htmlspecialchars($_POST['password']));
 

    //On insère les données reçues de l'admin
    
    $insert = $connect->prepare("
    INSERT INTO compte (user_name, mot_de_passe)
    VALUES(?, ?)");

    $insert->execute(array($nomAdmin, $password));
?>