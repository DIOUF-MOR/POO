<?php
namespace App\Controller;

use App\Core\Controller;
use App\model\User;

class SecurityController extends Controller
{
    public function authentification()
    {
        if ($this->request->isGet()) {

            $this->render("securite/login.html.php");

        } elseif($this->request->isPost()) {

            extract($_POST);

            $user = User::findUserByLoginAndPassword($login, $password);

            if (isset($user)) {

                $_SESSION['user-connect'] = $user;

                $this->redirectToRoute("acceuil");

            } else {

                $this->redirectToRoute("login");

            }
        }else {
            $this->redirectToRoute("login");
        }
    }


    public function deconnecxion()
    {
        unset($_SESSION['user-connect']);

        $this->redirectToRoute("login");
    }

    public function  acceuil(){
        $this->render('securite/acceuil.html.php');
    }
}

