
<?php

class Evenement
{
  private $id_evenementiel;
  private $photo_evenementiel;
  private $nom_evenement;
  private $date_debut;
  private $date_fin;
  private $organisateur;
  private $description_evenementiel;

  // les getters

    public function getId_evenementiel()
    {
        return $this->id_evenementiel;
    }

    public function getPhoto_evenementiel()
    {
        return $this->photo_evenementiel;
    }

    public function getNom_evenement()
    {
        return $this->nom_evenement;
    }

    public function getDate_debut()
    {
        return $this->date_debut;
    }

    public function getDate_fin()
    {
        return $this->date_fin;
    }

    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    public function getDescription_evenementiel()
    {
        return $this->description_evenementiel;
    }

    // les setters

    public function setId_evenementiel($id_evenementiel)
    {
        $this->id_evenementiel = $id_evenementiel;
    }

    public function setPhoto_evenementiel($photo_evenementiel)
    {
        $this->photo_evenementiel = $photo_evenementiel;
    }

    public function setNom_evenement($nom_evenement)
    {
        $this->nom_evenement = $nom_evenement;
    }

    public function setDate_debut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    public function setDate_fin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    public function setOrganisateur($organisateur)
    {
        $this->organisateur = $organisateur;
    }

    public function setDescription_evenementiel($description_evenementiel)
    {
        $this->description_evenementiel = $description_evenementiel;
    }

    public function __construct(array $donnee){

      foreach ($donnee as $key => $value) {

          $methode='set'.ucfirst($key);
          
          if((method_exists($this,$methode))){
            $this->$methode($value);
          }
      }
    }
}


