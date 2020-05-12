<?php
require_once '../models/connexion.php';
require_once '../models/autoload_B.php'; 


$bdd=bd();
$evenement_ctrl =new EvenementController($bdd);
if(isset($_GET['id_evenementiel']))
{
    $id_evenementiel=$_GET['id_evenementiel'];
    $value=$evenement_ctrl->get((int) $id_evenementiel);
    
    //echo $email;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Evenementielle+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/evenementiel+.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="general">

    <div class="d1">
        <img src="" alt=""><span> <?= $value->getPhoto_evenementiel()?> </span>
    </div>   

    <div class="d2">
   
        <h4  class="h4ll">NOM:<span> <?= $value->getNom_evenement()?> </span></h4>
        <h4   id="h4l1">DATE DE DEBUT:<span> <?= $value->getDate_debut()?> </span></h4>
        <h4   id="h4l1">DATE DE FIN :<span> <?= $value->getDate_fin()?> </span></h4>
        <h4   class="h4ll">ORGANISATEUR :<span> <?= $value->getOrganisateur()?> </span></h4>
        <h4   class="h4ll">DESCRIPTION DE L'ACTIVITE :<span> <?= $value->getDescription_evenementiel()?> </span></h4>
    </div>   

</div>    


</body>
</html>