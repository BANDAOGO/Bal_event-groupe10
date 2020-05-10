<DOCTYPE html>
  <html lang=fr>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des motos</title>
    <link rel="stylesheet" href="../stylesheet/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/style.css">
</head>
<?php 

include("entete_footer/entete.php");
?>
<p class="titrearme1">ESPACE ADMIN</p>
<div class="container" id="contenair">
<P class="titrearme2">+ NOUVEL EVENEMENT </P>
<form>
<div class="row">
    <div class="col">
    <div class="custom-file"> 
    <input type="file" class="custom-file-input" id="validatedCustomFile">
    <label class="custom-file-label" for="validatedCustomFile">Charger la photo...</label>
  </div>
    <div class="form-group">
      <label for="nom" class="armeli">NOM DE L'EVENEMENT</label>
      <input type="text" id="nom" class="form-control" name="nom_evenement" >
    </div>

    <div class="form-group">
      <label for="organisateurs" class="armeli">ORGANISATEURS</label>
      <input type="text" id="organisateur" class="form-control" name=" organisateur  ">
    </div>
    <!-- <div class="form-group">
      <label for="prenom" class="armeli">PRENOM DE L'EVENEMENT</label>
      <input type="text" id="prenom" class="form-control">
    </div> -->
    <div class="form-group">
      <label for="datedebut" class="armeli">DATE DE DEBUT</label>
      <input type="date" id="datedebut" class="form-control" name="date_debut " >
    </div>
    <div class="form-group">
      <label for="datefin" class="armeli">DATE DE FIN</label>
      <input type="date" id="datefin" class="form-control" name="date_fin">
    </div>

  

    <!-- <div class="form-group">
      <label for="description" class="armeli">ORGANISATEUR</label>
      <textarea name="" id="" cols="125" rows="5"></textarea>
    </div> -->
    
    <!-- <div class="form-group">
      <label for="description" class="armeli">DESCRIPTION DE L'EVENEMENT</label>
      <textarea name="" id="" cols="131" rows=""></textarea>
    </div> -->
    <div class="form-group">
    <label for="description"  class="armeli">DESCRIPTION DE L'EVENEMENT</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_evenementiel"></textarea>
  </div>
    
    <div class="armeenregistrerdiv">
    <button type="submit"class="armeenregistrer">Enregistrer</button>
    </div>
</form>
</div>
</div></div>
<?php 

include("entete_footer/footerB.php");
?>
</html>