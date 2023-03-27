<?php
namespace App\model;

class AC extends User
{
    
    //Attribut navigationnel est une attribut issue d'une association
    //OneToMany=>inscription
    //1ere approche
    // private array $inscription;
    //2ieme approche
    //Fonction navigationnel est une Fonction issue d'une association
    public function inscriptions():array|null{
        return [];
    }

    public function __construct()
    {
        parent::$role = "ROLE_AC";
        // $this->inscriptions = [];
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
        $result=$db->executeSelect($sql,["ROLE_AC"]);
        $db->closeConnexion();
        return $result;
        
    }

    // public function getAttribute1()
    // {
    //     return $this->Attribute1;
    // }

    // public function setAttribute1($Attribute1)
    // {
    //     $this->Attribute1 = $Attribute1;

    //     return $this;
    // }

    public function update(): int
    {
        $db=parent::database();
        $db->connexionBD();
        $sql="update `personne`set nom_complet=?,login=? where id=?";
        $result=$db->executeUpdate($sql,[$this->nomComplet,$this->login,$this->id]);
        $db->closeConnexion();
        return $result;
    }
}
