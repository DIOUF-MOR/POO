<?php

namespace App\Controller;

use App\Core\Controller;
use App\model\Professeur;

class ProfesseurController extends Controller
{

    public function affecterClasse()
    {
    }

    public function listerProfs()
    {
        $profs = Professeur::findAll();
        $data = [
            "profs" => $profs,
            "titre" => "Liste des Professeurs"
        ];
        $this->render("professeur/liste.professeur.html.php", $data);
    }


    public function ajouterprofs()
    {
        if ($this->request->isGet()) {

            $this->render("professeur/ajout.professeur.html.php");
        } else {

            extract($_POST);
           
            $profs = new Professeur;
            $profs->setNomComplet($nom_complet);
            $profs->setGrade($grade);
            $profs->insert();
            $_POST=[];

            $this->redirectToRoute("profsListe");
        }
    }
}
