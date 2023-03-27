<?php
namespace App\model;

class Etudiant extends User
{
    protected string $adresse;
    protected string $matricule;
    protected string $sexe;

    public function __construct()
    {
        parent::$role="ROLE_ETUDIANT";
    }
    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        $sql="INSERT INTO `personne` (`nom_complet`, `role`, `login`,`password`,`matricule`,`sexe`,`adresse`) VALUES (?,?,?,?,?, ?, ?)";
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password,$this->matricule,$this->sexe,$this->adresse]);
        $db->closeConnexion();
        return $result;
    }
    
    public static function findAll():array{
        $db=parent::database();
        $db->connexionBD();
        $sql="select id,`nom_complet`, `role`,`login`,`password`,`matricule`,`sexe`,`adresse` from ".parent::table()." where role like ?";
        $result=$db->executeSelect($sql,["ROLE_ETUDIANT"]);
        $db->closeConnexion();
        return $result;
        
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setMatricule($matricule):self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe):self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse):self
    {
        $this->adresse = $adresse;

        return $this;
    }
}