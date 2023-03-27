<?php
namespace App\core;

interface IModel{
    //Ces methodes sont abstraites

    //les methodes instances
    public function insert():int;
    public function update():int;
    // les methodes statics
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null;
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array;
} 
