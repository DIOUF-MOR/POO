<?php
namespace App\Core;

class Session{

    public static function isConnect() {
        
        return isset($_SESSION['user-connect']);
    }
}