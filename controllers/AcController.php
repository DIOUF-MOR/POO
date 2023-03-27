<?php
namespace App\Controller;

use App\model\AC;
use App\Core\Role;
use App\Core\Model;
use App\Core\Controller;
use App\Exception\RouteNotFound;

class acController extends Controller{
    
    public function listerAc(){

            $ac= AC::findAll();
    
           $data= [
               "acs"=> $ac,
               "titre"=> "La liste de tous les attaches"
           ];
           
           $this->render("ac/liste.ac.html.php",$data);
        
    }

    public function ajouterAc(){
        
        if ($this->request->isGet() && Role::getRole()=="ROLE_RP") {

            $this->render("ac/ajout.ac.html.php");

        }elseif($this->request->isPost()){
           
            extract($_POST);

            $newac=new AC;
            $newac->setNomComplet($nom_complet);
            $newac->setLogin($login);
            $newac->setPassword($password);
            if ($id =="") {

                $newac->insert();
                
            }else {
                $newac->setId($id);
                $newac->update();
            }

            $this->redirectToRoute("acListe");
        }else {
            throw new RouteNotFound();
        }
    }

    public function detaillerAc($id){

        $ac=AC::findById($id);
        $data=[
            "ac"=>$ac
        ];
        $this->render("ac/detail.html.php",$data);

    }

    public function modifierAc($id){

        $ac=AC::findById($id);

        $data=[
            "ac"=>$ac
        ];

        $this->render("ac/ajout.ac.html.php",$data);
    }

    public function supprimerAc($id){

        $result = AC::delete($id);
        $this->redirectToRoute("acListe");
    }

}