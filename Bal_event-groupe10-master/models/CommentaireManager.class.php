<?php
class CommentaireManager{
    private $_db;

    public function __construct($db){
        $this->_db=$db;
    }
    public function enregister(Commentaire $comment){
        $sql=$this->_db->prepare("INSERT INTO commentaire(id_evenementiel,nom_visiteur,libelle_commentaire) 
        VALUES(:id_evenementiel, :nom_visiteur, :libelle_commentaire)");
        $ql=$sql->execute(array(
            "id_evenementiel"=>$comment->getid_evenementiel(),
            "nom_visiteur"=>$comment->getnom_visiteur(),
            "libelle_commentaire"=>$comment->getlibelle_commentaire()
        )); 
    }
    
    public function afficher(){
        $comment=[];
        $sql=$this->_db->query("SELECT * FROM commentaire");
        $donnee=$sql->fetchAll();
        $sql->closeCursor();
        foreach ($donnee as $value){
          $comment[]= new Commentaire ($value);
        }
        return $comment;
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