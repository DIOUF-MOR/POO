<?php

namespace App\Controller;

use App\model\Rp;
use App\Core\Controller;


class RpController extends Controller
{

    public function listerRp()
    {

        $rps = Rp::findAll();
        $data = [
            "lesrps" => $rps,
            "titre" => "La liste des RP"
        ];
        $this->render("rp/liste.rp.html.php", $data);
    }

    public function ajouterRp()
    {
        if ($this->request->isGet()) {

            $this->render("rp/ajout.rp.html.php");

        }else {
            extract($_POST);

            $rp=new Rp;
            $rp->setNomComplet($nom_complet);
            $rp->setLogin($login);
            $rp->setPassword($password);
            $rp->insert();
            $_POST=[];
            
            $this->redirectToRoute("rpListe");
        }
    }
}
