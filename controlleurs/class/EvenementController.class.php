<?php
class EvenementController
{
    private $_db;
 
    // Le constructeur prend en paramettre l'instance PDO
    public function __construct($db)
    {
        $this->_db=$db;
    }
    public function add(Evenement $evenement)
    {
        $resq=$this->_db->prepare("INSERT INTO evenements SET id_evenementiel=:id_evenementiel, photo_evenementiel=:photo_evenementiel, nom_evenement=:nom_evenement,date_debut=:date_debut, date_fin=:date_fin,   organisateur=:organisateur, description_evenementiel=:description_evenementiel");
        $resq->bindValue(':id_evenementiel', $evenement->getId_evenementiel());
        $resq->bindValue(':photo_evenementiel', $evenement->getPhoto_evenementiel());
        $resq->bindValue(':nom_evenement', $evenement->getNom_evenement());
        $resq->bindValue(':date_debut', $evenement->getDate_debut());
        $resq->bindValue(':date_fin', $evenement->getDate_fin());
        $resq->bindValue(':organisateur', $evenement->getOorganisateur());
        $resq->bindValue(':description_evenementiel', $evenement->getDescription_evenementiel());
        $resq->execute();
    }

    public function get($id_evenementiel)
   {
     $sql=$this->_db->query("SELECT * FROM evenements WHERE id_evenementiel=".$id_evenementiel);
     $row=$sql->fetch();
     $sql->closeCursor();
     $eve=new Evenement($row);
     return $eve;
   }

    public function liste()
    {
        $evenement=[];
        $resq=$this->_db->query("SELECT * FROM evenements ORDER BY id_evenementiel ASC");
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $evenement[]=new Evenement ($donnees);
        }
        return $evenement;
    }

    public function supprimer($id_evenementiel)
    {
        $resq=$this->_db->exec("DELETE  FROM evenements WHERE id_evenementiel=".$id_evenementiel);
        return $resq>0;
    }

    public function update(Evenement $evenement)
    {
        //echo $moto->getId();
         try{ 
                $sql=$this->_db->prepare('UPDATE evenements SET id_evenementiel=:id_evenementiel, photo=:photo, nom_evenement=:nom_evenement,date_debut=:date_debut, date_fin=:date_fin, organisateur=:organisateur,
                description_evenementiel=:description_evenementiel WHERE id_evenementiel=:id_evenementiel=:id_evenementiel=:id_evenementiel');
                $d=$sql->execute(array('id_evenementiel'=>$evenement->getId_evenementiel(),
                'photo_evenementiel'=>$evenement->getPhoto_evenementiel(),
                'nom_evenement'=>$evenement->getNom_evenement(),
                'date_debut'=>$evenement->getDate_debut(),
                'date_fin'=>$evenement->getDate_fin(),
                'organisateur'=>$evenement->getOrganisateur(),
                'description_evenementiel'=>$evenement->getDescription_evenementiel()
              ));  
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }
       }
}