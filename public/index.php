<?php

use App\Core\Role;
session_start();
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);
// dd("rr");

require("../vendor/autoload.php");
require_once("../core/fonctions.php");
require_once("../routes/Route.web.php");

// dd(str_replace("public","",$_SERVER["DOCUMENT_ROOT"]));

// dd($_SERVER, ['REQUEST_URI']);
// $request=new Request;
// $request->getUri();
// dd($request->getUri());

        // return isset($_SESSION['user-connect']);
// var_dump($_SESSION['user-connect']);

// var_dump(noAccess(["ROLE_AC"]));
