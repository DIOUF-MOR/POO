<?php

use App\Core\Role;
use App\Core\Session;

function dd($data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function shownav(){
    return !Session::isConnect() ? "d-none":"";
}

function noAccess(array $tab){    
   
    foreach ($tab as $t) {
        if (Role::getRole()==$t){

            return "d-none";
        }
    }
    return "";
}
function getDetail(){
    return Role::getNomComplet()." ".Role::monRole();
}

function getMonRole(){
    return Role::monRole();
}

function getMonNom(){
    return Role::getNomComplet();
}
