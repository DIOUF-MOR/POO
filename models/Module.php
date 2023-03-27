<?php

namespace App\model;
use App\Core\Model;


class Module extends Model
{

    private   $idModule;
    protected  $libelleModule;
    
    public function __construct()
    {
      
    }
    public  function insert(): int
    {
        $db=self::database();
        $db->connexionBD();
        $sql = "INSERT INTO module (libelle_module) VALUES (?)" ;
        $result = $db->executeUpdate($sql,[$this->libelleModule]);
        $db->closeConnexion();
        return $result;
    }

    public function getIdModule()
    {
        return $this->idModule;
    }

    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;

        return $this;
    }

    
    public function getLibelleModule()
    {
        return $this->libelleModule;
    }

    public function setLibelleModule($libelleModule):self
    {
        $this->libelleModule = $libelleModule;

        return $this;
    }
    public static function delete(int $id): int
    {
        $db = self::database();
        $db->connexionBD();
        $sql = "delete from " . self::table() . " where id_module=$id";
     
        $result = $db->executeUpdate($sql);
        $db->closeConnexion();
        return $result;
    }
}