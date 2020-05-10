<?php
    session_start();
    require('eve1_connexion_B.php');




    //admin
    $nomAdmin = htmlspecialchars($_POST['nomAdmin']);
    $password = SHA1(htmlspecialchars($_POST['password']));
    $repeat_password = SHA1(htmlspecialchars($_POST['repeat_password']));
 

    //On insère les données reçues de l'admin
    
    $insert = $connect->prepare("
    INSERT INTO compte (user_name, mot_de_passe, repeat_password)
    VALUES(?, ?, ?)");

    $insert->execute(array($nomAdmin, $password, $repeat_password));
?>