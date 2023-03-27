<?php

namespace App\model;
use App\Core\Model;

class Demande extends Model
{

    protected   $idDemande;
    protected   $Motif;
    protected   $date;
    protected   $etat;

    public function etudiant():Etudiant{
        return new Etudiant;
    }

    public function __construct()
    {
        // self::table()='demande';
    }

    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        $sql="INSERT INTO `demande` (`motif`, `date`) VALUES (?,?)";
        $result=$db->executeUpdate($sql,[$this->Motif,$this->date]);
        $db->closeConnexion();
        return $result;
    }

    public function getIdDemande()
    {
        return $this->idDemande;
    }

    public function setIdDemande($idDemande)
    {
        $this->idDemande = $idDemande;

        return $this;
    }

    public function getMotif()
    {
        return $this->Motif;
    }

    public function setMotif($Motif):self
    {
        $this->Motif = $Motif;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date):self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat):self
    {
        $this->etat = $etat;

        return $this;
    }
}