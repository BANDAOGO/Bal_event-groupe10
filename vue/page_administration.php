<DOCTYPE html>
  <html lang=fr>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BAL EVENT</title>
    <link rel="stylesheet" href="../stylesheet/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/Admin.css">
    <div id="div_general_entete_B">
        <div id="div_1B"> <img src="images/logoB.jpg" class="logoB" alt="logoB"> </div>
        <div id="div_2B"> <a href="../index.php" class="lien_accueilB"><b> Accueil</b></a></div>
        <div id="div_3B"><a href="evenementielle+.php" class="lien_evenementielB"><b>Evenementiel+</b></a></div>
        <div id="div_3B"><a href="eve2.php" class="lien_evenementielB"><b>liste des evenements</b></a></div>
        <div id="div_4B"><a href="eve1.php" class="lien_adminB"> <b> Nouveau compte</b></a></div>

    </div>
</head>

<p class="titrearme1">ESPACE ADMIN</p>
<div class="container" id="contenair">
<P class="titrearme2">+ NOUVEL EVENEMENT </P>
<form action="../models/traitement_B.php" method="POST">
<div class="row">
    <div class="col">
    <div class="custom-file"> 
     <input type="file"  name="photo_evenementiel"  required ><br require>

  </div>
    <div class="form-group">
      <label for="nom" class="armeli">NOM DE L'EVENEMENT</label>
      <input type="text" id="nom" class="form-control" name="nom_evenement"  require>
    </div>

    <div class="form-group">
      <label for="organisateurs" class="armeli">ORGANISATEURS</label>
      <input type="text" id="organisateur" class="form-control" name="organisateur  " require>
    </div>
    <!-- <div class="form-group">
      <label for="prenom" class="armeli">PRENOM DE L'EVENEMENT</label>
      <input type="text" id="prenom" class="form-control">
    </div> -->
    <div class="form-group">
      <label for="datedebut" class="armeli">DATE DE DEBUT</label>
      <input type="date" id="datedebut" class="form-control" name="date_debut " require >
    </div>
    <div class="form-group">
      <label for="datefin" class="armeli">DATE DE FIN</label>
      <input type="date" id="datefin" class="form-control" name="date_fin" require>
    </div>

    <div class="form-group">
    <label for="description"  class="armeli">DESCRIPTION DE L'EVENEMENT</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_evenementiel" require></textarea>
  </div>
    
    <div class="armeenregistrerdiv">
    <button type="submit"class="armeenregistrer">Enregistrer</button>
    </div>
</form>
</div>
</div></div>
<?php 

include("footerB.php");
?>
</html>