<?php

//Attribut navigationnel est une attribut issue d'une relation
namespace App\model;

use App\Core\Model;

class Inscription extends Model
{



    //ManyToOne AC
    public function ac():array|null
    {
        //requette nous permetant de connaitre l' AC qui afait l'inscription
        $sql = "select p.* from personne p,inscription i
                        where role like 'ROLE_AC' 
                        and p.id=i.p_id
                        and i.id=?";
        return parent::findAll($sql,[$this->id],true);
    }
    //ManyToOne AnneeScolaire
    public function anneeScolaire():array|null
    {
        //requette nous permetant de connaitre l' annee de  l'inscription
        $sql = "select a.* from  AnneeScolaire a,inscription i
                        where a.id=i.annee_id
                        and i.id=?";
        return parent::findAll($sql, [$this->id],true);
    }
    public function classe():array|null
    {
        $sql = "select c.* from  classe c,inscription i
                        where c.id=i.c_id
                        and i.id=?";
        return parent::findAll($sql, [$this->id],true);
    }
    
    public function etudiant():array|null
    {
        $sql = "select p.* from  personne p,inscription i
                        where p.id=i.p_id
                        and i.id=?";
        return parent::findAll($sql, [$this->id],true);
    }
    //ManyToOne Classe
    // public function classe():Classe{
    //     return new Classe();
    // }

    public function __construct()
    {
    }

    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }
    public static function inscrire($etudiantId,$acId,$classeId,$anneeId){
        $db=self::database();
        $db->connexionBD();
        $sql="INSERT INTO `inscription` (`ac_id`, `anneScolaire_id`, `etudiant_id`, `classe_id`) VALUES (?,?,?,?)";
        $result=$db->executeUpdate($sql,[$acId,$anneeId,$etudiantId,$classeId]);
        $db->closeConnexion();
        return $result;
    }
}
