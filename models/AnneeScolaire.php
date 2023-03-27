<?php
namespace App\model;
use App\Core\Model;

class AnneeScolaire extends Model
{
    private int  $id_anneeScolaire;
    private  $libelle_annee;
    //OneyToMany
    public function inscriptions():array{
        return [];
    }

    public function __construct()
    {
        
    }
    public function insert(): int
    {
        $db = self::database();
        $db->connexionBD();
        $sql = "INSERT INTO " .self::table(). "(`libelle_annee`) values (?)";
        $result = $db->executeUpdate($sql,[$this->libelle_annee]);
        $db->closeConnexion();
        return $result;
    }

   

    /**
     * Get the value of id_anneeScolaire
     */ 
    public function getId_anneeScolaire()
    {
        return $this->id_anneeScolaire;
    }

    /**
     * Set the value of id_anneeScolaire
     *
     * @return  self
     */ 
    public function setId_anneeScolaire($id_anneeScolaire)
    {
        $this->id_anneeScolaire = $id_anneeScolaire;

        return $this;
    }

    /**
     * Get the value of libelle_annee
     */ 
    public function getLibelle_annee()
    {
        return $this->libelle_annee;
    }

    /**
     * Set the value of libelle_annee
     *
     * @return  self
     */ 
    public function setLibelle_annee($libelle_annee)
    {
        $this->libelle_annee = $libelle_annee;

        return $this;
    }

    public static function findById(int $id): object|null
    {
        $db = self::database();
        $db->connexionBD();
        $sql = "select * from anneescolaire where id_anneeScolaire=?";
        $result = $db->executeSelect($sql, [$id],true);
        $db->closeConnexion();
        return $result;
    }
    public static function delete(int $id): int
    {
        $db = self::database();
        $db->connexionBD();
        $sql = "delete from " . self::table() . " where id_anneeScolaire=$id";
     
        $result = $db->executeUpdate($sql);
        $db->closeConnexion();
        return $result;
    }

    public function update(): int
    {
        $db=parent::database();
        $db->connexionBD();
        $sql="update `anneescolaire`set libelle_annee=? where id_anneeScolaire=?";
        $result=$db->executeUpdate($sql,[$this->libelle_annee,$this->id_anneeScolaire]);
        $db->closeConnexion();
        return $result;
    }
}