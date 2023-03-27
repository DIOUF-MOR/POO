<?php
namespace App\Controller;

use App\Core\Role;
use App\model\Demande;
use App\Core\Controller;
use App\Exception\RouteNotFound;

class DemandeController extends Controller{
    
    public function ajouterDemande(){
       
        if ($this->request->isGet() && Role::getRole()=="ROLE_ETUDIANT") {

            $this->render('demande/ajout.demande.html.php');

        }elseif ($this->request->isPost()) 
        {
            
            extract($_POST);
            $dmdes=new Demande;
            $dmdes->setMotif($motif);
            $dmdes->setDate($date);
            $dmdes->insert();
            $_POST=[];
            $this->redirectToRoute("demandeListe");
            
        }else {
            throw new RouteNotFound();
        }

    }

    public function listerDemande(){

        $dmdes=Demande::findAll();
        $data=[

            "dmdes"=>$dmdes,
            "titre"=>"Liste des demandes"
        ];
        $this->render("demande/liste.demande.html.php", $data);
    }

}