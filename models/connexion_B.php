<?php
  
    
    try{
        //On se connecte à la BDD
        $connect = new PDO("mysql:host=localhost;dbname=evenementielle",'root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $connect->query("SET NAMES UTF8");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
		if (isset($_POST['nomAdmin']) AND $_POST['password'] =="admin" || $_POST['password'] =="lionel" || $_POST['password'] =="armelle" || $_POST['password'] =="abdoul") //
           //Si le mot de passe est bon
        {
        // On affiche les codes
        header("Location:../vue/page_administration.php");
    
        }
       
        else // Sinon, on affiche un message d'erreur
        {
        echo '<p>nom d\'utilisateur ou Mot de passe incorrect</p>';
        }
         

        //On renvoie l'utilisateur vers la page de remerciement
        // header("Location:index.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
	}

?>

