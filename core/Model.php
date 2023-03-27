<?php

namespace App\Core;



abstract class Model implements IModel
{
    //Dependance

    protected static function database(): Database
    {
        return new Database();
    }

    public static function table(): string
    {
        $table = get_called_class();
        $table = str_replace('App\\model\\', "", $table);
        $table = ($table == "User" or $table == "AC" or $table == "Rp" or $table == "Professeur" or $table == "Etudiant") ? "personne" : strtolower($table);
        return $table;
    }
    public function insert(): int
    {
        return 0;
    }
    public function update(): int
    {
        return 0;
    }
    public static function delete(int $id): int
    {
        $db = self::database();
        $db->connexionBD();
        $sql = "delete from " . self::table() . " where id=$id";
        //dd($sql);
        $result = $db->executeUpdate($sql);
        $db->closeConnexion();
        return $result;
    }
    public static function findAll():array
    {
        $db = self::database();
        $db->connexionBD();
        $sql="select * from ".self::table();
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
    public static function findById(int $id): object|null
    {
        $db = self::database();
        $db->connexionBD();
        $sql = "select * from " . self::table() . " where id=?";
        $result = $db->executeSelect($sql, [$id],true);
        $db->closeConnexion();
        return $result;
    }

    
    public static function findBy(string $sql, array $data = null, $single = false): object|null|array
    {
        $db = self::database();
        $db->connexionBD();
        $result = $db->executeSelect($sql, $data, $single);
        $db->closeConnexion();
        return $result;
    }
}
