<?php 
class Commentaire{
    private $id_commentaire;
    private $nom_visiteur;
    private $libelle_commentaire;


    public function getid_commentaire(){
        return $this->id_commentaire;
    }

    public function getnom_visiteur(){
        return $this->nom_visiteur;
    }
    
    public function getlibelle_commentaire(){
        return $this->libelle_commentaire;
    }

    public function setid_commentaire($id_commentaire){
        $this->id_commentaire=$id_commentaire;
    }

    public function setgetnom_visiteur($getnom_visiteur){
        $this->getnom_visiteur=$getnom_visiteur;
    }

    public function setgetlibelle_commentaire($getlibelle_commentaire){
        $this->getlibelle_commentaire=$getlibelle_commentaire;
    }
 
    public function __construct(array $donnee){
        foreach ($donnee as $key =>$value);
        $methode='set' .ucfirst($key);
        if((method_exist($this,$methode))){
            $this->$methode($value);
        }
    }

    
}


?>