<?php
namespace App\model;


abstract class User extends Personne
{

    protected string $login;
    protected $password;
    
    

    public function __construct()
    {
        // ...
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login):self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }
 
    public function setPassword($password):self
    {
        $this->password = $password;

        return $this;
    }

    public static function findUserByLoginAndPassword(string $login, string $password):object|null{
        return parent::findBy("select * from personne where login=? and password=?",[$login,$password],true);
    }

    public static function findAll():array{
        $db=parent::database();
        $db->connexionBD();
        $sql="select * from ".parent::table()." where role not like 'ROLE_PROFESSEUR'";
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
}