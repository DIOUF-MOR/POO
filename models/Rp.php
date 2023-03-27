<?php

namespace App\model;



class Rp extends User
{

    public static function table():string{
        $table= get_called_class();
        $table= ($table=="User" or $table=="AC" or $table=="Rp" or $table=="Professeur" or $table=="Etudiant")?"personne":strtolower($table);
        return $table;
    }

    public function __construct()
    {
        parent::$role="ROLE_RP";
    }
    
    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        $sql="INSERT INTO `personne` (`nom_complet`, `role`, `login`,`password`) VALUES (?,?, ?, ?)";
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
        $db->closeConnexion();
        return $result;
    }
    public static function findAll():array{
        $db=parent::database();
        $db->connexionBD();
        $sql="select id,`nom_complet`, `role`,`login`,`password` from ".parent::table()." where role like ?";
        $result=$db->executeSelect($sql,["ROLE_RP"]);
        $db->closeConnexion(); 
        return $result;
        
    }

    // public static function findAll():array{
    //     $sql="select * from ".parent::table()." where role like '".self::$role."' ";
    //     echo $sql;
    //     return [];
    // }

}
