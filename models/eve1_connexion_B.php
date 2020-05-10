<?php
  
    
    try{
        //On se connecte à la BDD
        $connect = new PDO("mysql:host=localhost;dbname=evenementielle",'root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $connect->query("SET NAMES UTF8");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //On renvoie l'utilisateur vers la page de remerciement
         header("Location: ../login.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
	}

?>

