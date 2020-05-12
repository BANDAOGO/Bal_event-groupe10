
<?php
  require_once ("../models/Donne.class.php");
  //require_once ("../autoload.php");
  require_once ("../models/CommentaireManager.class.php");

  $db=new connection();
  $base=$db->getBase();
  $commentManager= new CommentaireManager($base);
  $list=$commentManager->afficher();
  if(isset($_POST['id_evenementiel']) and $_POST['nom_visiteur'] and $_POST['libelle_commentaire']){
    $commentManager= new CommentaireManager($base);
    $comment= new Commentaire($_POST);
    $commentManager->enregistrer($comment);
    header('location:commentaire.php');
  }

  if(isset($_GET['id_commentaire']))
  {
      $commentManager->supprimer($_GET['id_commentaire']);
      header('location:liste_comment.php');
  }
?>

