<?php

namespace App\model;

use App\Core\Model;
// use Symfony\Component\Validator\Constraints\IsNull;

class Classe extends Model
{
    protected int $idClasse;
    protected  $libelle;
    protected  $filiere;
    protected  $niveau;


    // OneToMany de inscription
    public function inscriptions(): array
    {
        return [];
    }
    // ManyToMany de professeur

    public function professeurs(): array|Null
    {
        $sql = "select 'idClasse','nom_complet','role','grade' from" . parent::table() . " c,personne p 
        where 
        p.id=c.professeur_id
        and role like 'ROLE_PROFESSEUR'
        and c.id=?";
        return self::findAll($sql,[$this->idClasse]);
    }

    public function insert():int{
        $db=self::database();
        $db->connexionBD();
        $sql="INSERT INTO `classe` (`libelle`, `filiere`, `niveau`) VALUES (?,?,?)";
        $result=$db->executeUpdate($sql,[$this->libelle,$this->filiere,$this->niveau]);
        $db->closeConnexion();
        return $result;
    }

    public function __construct()
    {
    }

    public function getIdClasse()
    {
        return $this->idClasse;
    }

    public function setIdClasse($idClasse)
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle):self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getFiliere()
    {
        return $this->filiere;
    }

    public function setFiliere($filiere):self
    {
        $this->filiere = $filiere;

        return $this;
    }

    public function getNiveau()
    {
        return $this->niveau;
    }

    public function setNiveau($niveau):self
    {
        $this->niveau = $niveau;

        return $this;
    }



}


