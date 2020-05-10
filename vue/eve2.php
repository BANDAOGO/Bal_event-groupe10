<?php 
require_once '../models/connexion.php';
require_once '../models/autoload_B.php';



$bdd= bd();
$evenement_ctrl =new EvenementController($bdd);
$list_evenement=$evenement_ctrl->liste();

if(isset($_GET['id_evenementiel']))
{
    $evenement_ctrl->supprimer($_GET['id_evenementiel']);
    header("location: eve2.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BAL EVENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/eve.css">
    <link rel="stylesheet" href="../stylesheet/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet/css/bootstrap.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href= "../stylesheet/css/responsive.css">
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../stylesheet/css/Admin.css">
    <div id="div_general_entete_B">
        <div id="div_1B"> <img src="images/logoB.jpg" class="logoB" alt="logoB"> </div>
        <div id="div_2B"> <a href="../index.php" class="lien_accueilB"><b> Accueil</b></a></div>
        <div id="div_3B"><a href="evenementielle+.php" class="lien_evenementielB"><b>Evenementiel+</b></a></div>
        <div id="div_3B"><a href="eve2.php" class="lien_evenementielB"><b>liste des evenements</b></a></div>
        <div id="div_4B"><a href="eve1.php" class="lien_adminB"> <b> Nouveau compte</b></a></div>

    </div>

</head>
<body>

<h1 class="h1ll">Liste des evenements</h1>
    <div class="table">
        <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Nom de l'évènement</th>
                    <th scope="col">Date de debut</th>
                    <th scope="col">Date de fin</th>
                    <th scope="col">Organisateur</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>

                  </tr>
                </thead>
                <!-- <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    
                  </tr>
                </tbody> -->
                <tbody >
                           <tr>             
                                       <?php
    
                                       foreach($list_evenement as $key => $value) {
    
                                       ?> 
                                         <tr>
                                            
                                            <td><?=$value->getNom_evenement()?></td>
                                            <td><?=$value->getDate_debut()?></td>
                                            <td><?=$value->getDate_fin()?></td>
                                            <td><?=$value->getOrganisateur()?></td>
                                            <td><a href="modifier_evenement.php?id_evenementiel=<?= $value->getId_evenementiel()?>"  type="button"><img src="images/icons8_Delete_48px.png" alt="" class="signe"> </a></td>
                                            <td><a href="eve2.php?id_evenementiel=<?= $value->getId_evenementiel()?>" type="button"> <img src="images/delete_sign_48px.png" alt="" class="signe"> </a></td>
                                         </tr>
                                        <?php
                                        }
                                        ?>   
                                    </tr>
                            </tbody>
              
              </table>
              <p><button><a href="page_administration.php">Nouvel evenement</a></button></p>
              
<?php include("footerB.php"); ?>
            </div>

</body>

</html>
