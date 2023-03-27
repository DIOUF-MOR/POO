<?php
namespace App\model;
use App\Core\Model;
//une class abstract est non instanciable , elle peut contenir des methodes abstraite et des methodes concretes
//une class concrete produit des objet ctd elle est instanciable,elle ne peut contenir que des methodes concrete
//Une class final est une class qui ne peut pas rentrer dans une relation de specialisation ctd ne peuvent pas avoir de class fille
//--une methode concrete on connait sa definition 
//--une methode abstrete on ne connait pas sa definition
//on parle d'attribut d'instance losque'il est specifique à un Objet

abstract class Personne extends Model{
    protected int $id;
    protected string $nomComplet;
    protected static  $role;
    
   
    //constructeur par defaut
    public function __construct(){
        
    }
    
    //Les Getters et les stters 
    //les getters sont des methodes public qui permetent d'acceder ou d'optenir les attributs en private ou protected au niveau de l'interface de l'objet
    //les getters sont des methodes public qui permetent de modifier la valeur des attributs en private ou protected au niveau de l'interface de l'objet
    
    public function getId():int
    {
        return $this->id;
    }

    public function getNomComplet():string
    {
        return $this->nomComplet;
    }

    public function setId(int $id):void
    {
        $this->id = $id;

    }

    public function setNomComplet($nomComplet):void
    {
        $this->nomComplet = $nomComplet;

    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
   
}