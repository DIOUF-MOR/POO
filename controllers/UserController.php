<?php
namespace App\Controller;

use App\Core\Controller;
use App\model\User;

class UserController extends Controller{

    public function listerUser(){
        if ($this->request->isGet()) {

            $user=User::findAll();
            $data=[
                "users"=>$user,
                "titre"=>"La liste de tous les users"
            ];
           
            $this->render('user/listeuser.html.php',$data);

        }
    }

}