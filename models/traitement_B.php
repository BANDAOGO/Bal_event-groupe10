<?php
    session_start();
    require('connexion.php');



    // //moto
    
    $photo = $_POST['photo_evenementiel'];
    $nom_evenement = $_POST['nom_evenement'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $organisateur = $_POST['organisateur'];
    $description_evenementiel = $_POST['description_evenementiel'];

    
   //On insère les données reçues d'une moto
   $bd= bd();
   $insert = $bd->prepare("
   INSERT INTO evenements (  photo_evenementiel, nom_evenement, date_debut, date_fin, organisateur,description_evenementiel )
   VALUES(?,?,?,?,?,?)");

   $insert->execute(array($photo,$nom_evenement,$date_debut, $date_fin,$organisateur,$description_evenementiel )); 
    
   header("location:../vue/eve2.php");

?>