<?php
class CommentaireManager{
    private $_db;

    public function __construct($db){
        $this->_db=$db;
    }

    public function afficher($dd="1")
    {
      $comment=[];
      $sql=$this->_db->prepare("SELECT * FROM commentaire WHERE id_commentaire=:dd");
      $sql->execute(array("dd"=>$dd));
      $rows=$sql->fetchAll();
      $sql->closeCursor();
      print_r($rows);
      foreach ($rows as $row) {
 
      $comment[]=new Commentaire($row);
      }
      return $comment;
    }

    public function enregister(Commentaire $comment){

        $sql=$this->_db->prepare("INSERT INTO commentaire(nom_visiteur,libelle_commentaire) 
        VALUES(:nom_visiteur, :libelle_commentaire)");
        $ql=$sql->execute(array(
            "nom_visiteur"=>$comment->getnom_visiteur(),
            "libelle_commentaire"=>$comment->getlibelle_commentaire()
        )); 
    }

    public function supprimer($id_commentaire){
        $sql=$this->_db->prepare("DELETE FROM commentaire WHERE id_commentaire=?");
        $sql->execute(array($id_commentaire));
        
    }
    public function get($id_commentaire){
        $sql=$this->_db->query("SELECT * FROM commentaire  WHERE id_commentaire".$id_commentaire);
        $donnee=$sql->fetchAll();
        $sql->closeCursor();
        $comment=new Commentaire($donnee);
        return $comment;
    }

}
?>

