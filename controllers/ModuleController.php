<?php
namespace App\Controller;

use App\model\Module;
use App\Core\Controller;

class ModuleController extends Controller{
    
    public function ajouterModule(){
        if ($this->request->isGet()) {

           $this->render('module/ajout.module.html.php');
        }else {
            
            extract($_POST);
            $module = new Module();
            $module->setLibelleModule($libelleModule);
            $module->insert();
            $_POST=[];
            $this->redirectToRoute('moduleListe');
        }

    }
    public function listerModule(){
        $module=Module::findAll();
        extract($module);
        $data=[
            "modules" => $module,
            "titre" => "La liste des modules"
        ];
        $this->render('module/liste.module.html.php',$data);
    }

    public function modifierModule($id)
    {
        $m = Module::findById($id);

        $data = [
            "modules" => $m
        ];
        $this->render("module/ajout.module.html.php", $data);
    }

    public function supprimerModule($id)
    {
        $result = Module::delete($id);
        $this->redirectToRoute("moduleListe");
    }
}