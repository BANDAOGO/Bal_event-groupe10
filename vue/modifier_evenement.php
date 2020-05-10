<?php
require_once '../models/connexion.php';
require_once '../models/autoload_B.php';

$bdd=bd();
$evenement_ctrl =new EvenementController($bdd);
if(isset($_GET['id_evenementiel']))
{
    $id_evenementiel=$_GET['id_evenementiel'];
    $valuer=$evenement_ctrl->get((int) $id_evenementiel);
    //echo $email;
}

if(isset($_POST['id_evenementiel']) and $_POST['photo_evenementiel'] and $_POST['nom_evenement'] and $_POST['date_debut'] and $_POST['date_fin'] and $_POST['organisateur']
and $_POST['description_evenementiel'] )
{
  
    $evenement_ctrl =new EvenementController($bdd);
    $evenement=new Evenement($_POST);
    $evenement_ctrl->modifier($evenement);
    header("location: page_administration.php");
}
?>


<DOCTYPE html>
  <html lang=fr>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BAL EVENT</title>
    <link rel="stylesheet" href="../stylesheet/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/style.css">
</head>
<?php 

include("entete.php");
?>
             
                                         <!-- Le corps du travail -->

                                                    <!-- Le formulaire -->
  
   
                                                    <p class="titrearme1">ESPACE ADMIN</p>
<div class="container" id="contenair">
<P class="titrearme2">+ NOUVEL EVENEMENT </P>
<form action="../models/traitement_B.php" method="POST">
<fieldset>
<legend> <button class="btn buttuon_dossier"> <h4 class="titre_patient">Modifier l'évènement N° <?= $id_evenementiel ?></h4></button></legend>

<div class="row">
    <div class="col">
    <div class="custom-file"> 
    <input type="file" name="photo" class="custom-file-input" id="validatedCustomFile" value="<?= $valuer->getPhoto_evenementiel()?>">
    <label class="custom-file-label" for="validatedCustomFile">Charger la photo...</label>
  </div>
    <div class="form-group">
      <label for="nom" class="armeli">NOM DE L'EVENEMENT</label>
      <input type="text" id="nom" class="form-control" name="nom_evenement" value="<?= $valuer->getNom_evenement()?>" >
    </div>

    <div class="form-group">
      <label for="organisateurs" class="armeli">ORGANISATEURS</label>
      <input type="text" id="organisateur" class="form-control" name="organisateur" value="<?= $valuer->getOrganisateur()?>">
    </div>

    <div class="form-group">
      <label for="datedebut" class="armeli">DATE DE DEBUT</label>
      <input type="date" id="datedebut" class="form-control" name="date_debut " value="<?= $valuer->getDate_debut()?>">
    </div>
    <div class="form-group">
      <label for="datefin" class="armeli">DATE DE FIN</label>
      <input type="date" id="datefin" class="form-control" name="date_fin" value="<?= $valuer->getDate_fin()?>">
    </div>

    <div class="form-group">
    <label for="description"  class="armeli">DESCRIPTION DE L'EVENEMENT</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_evenementiel" value="<?= $valuer->getDescription_evenementiel()?>"></textarea>
  </div>
    
    <div class="armeenregistrerdiv">
    <button type="submit"class="armeenregistrer">Enregistrer</button>
    </div>
    </fieldset>
</form>
</div>

                                        <!-- Le Footer de l'interface d'utilisateur -->


         
</body>
<?php include("footerB.php"); ?>
</html>