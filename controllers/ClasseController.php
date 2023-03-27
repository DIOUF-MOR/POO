<?php
namespace App\Controller;

use App\Core\Role;
use App\model\Classe;
use App\Core\Controller;

class ClasseController extends Controller{

    public function ajouterClasse(){
        
        if ($this->request->isGet() && Role::getRole()== "ROLE_RP") {

           $this->render("classe/ajout.classe.html.php");

        }else {
            
            extract($_POST);
            $cls=new Classe;
            $cls->setLibelle($libelle);
            $cls->setFiliere($filiere);
            $cls->setNiveau($niveau);
            $cls->insert();
            $_POST=[];
            $this->redirectToRoute("classeListe");
        }
    }
    
    public function listerClasse(){
        $classes=Classe::findAll();

        $data=[
            "classes"=>$classes,
            "titre"=>"La liste de tous les classes"
        ];
        $this->render("classe/liste.classe.html.php",$data);

    }
}