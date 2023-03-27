<?php
namespace App\model;

class Professeur extends Personne
{

    private string  $grade;

    //ManyToMany avec Classe
    public function classes():array{
        return[];
    }
    
    public function __construct()
    {
       parent::$role = "ROLE_PROFESSEUR";
    }

    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        $sql="INSERT INTO `personne` (`nom_complet`, `role`, `grade`) VALUES (?, ?, ?)";
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->grade]);
        $db->closeConnexion();
        return $result;
    }

    public static function findAll():array{
        $sql="select `nom_complet`, `role`, `grade` from ".parent::table()." where role like 'ROLE_PROFESSEUR'";
        return  parent:: findBy($sql,[]);
    }

    public function getGrade()
    {
        return $this->grade;
    }

   

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}
