<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des motos</title>
    <link rel="stylesheet" href="../stylesheet/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet/css/commentaire.css">
</head>
<?php 

include("entete.php");
?>
    <body>
        <div class="container" id="contenair">
            <form>
                
    <div class="form-group">
      <input type="text" name="commentaire" id="organisateur" class="form-control" hidden>
    </div>
    <div class="form-group">

      <label for="nom" class="armeli" >ENTRER VOTRE NOM</label>
      <input type="text" id="nom" class="form-control" name="nom_visiteur">
    </div>

    
    <div class="form-group">
    <label for="libelle_commentaire"  class="armeli">ENTRER VOTRE COMMENTAIRE</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire"></textarea>
  </div>
    
    <div class="armeenregistrerdiv">
    <button type="submit" class="armeenregistrer"> 
        <a href="listcommentaire.php"  class="armeenregistrer"> Envoyer </a>

        </button>
    </div>
</form>
        </div>
    </body>
<?php 

include("footerB.php");
?>
</html>