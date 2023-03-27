<?php
namespace App\Core;

class Role{
    public static function getRole(){
        return $_SESSION['user-connect']->role;
    }
    public static function getNomComplet(){
        return $_SESSION['user-connect']->nom_complet;
    }
    public static function monRole(){
        $role=explode("_",Role::getRole()) ;
        unset($role[0]);
        return  $role[1];
    }
}