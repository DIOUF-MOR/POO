<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Role;
use App\Exception\RouteNotFound;
use App\model\Classe;
use App\model\Etudiant;
use App\model\Inscription;

class EtudiantController extends Controller
{


    public function listerEtudiant()
    {
        if (($this->request->isGet() && (Role::getRole() == "ROLE_AC") || $this->request->isPost())) {
            
            $etudiant = Etudiant::findAll();

            $data = [
                "etus" => $etudiant,
                "titre" => "la liste des etudiants"
            ];
            $this->render("etudiant/liste.etudiant.html.php", $data);
        }else {
            echo "seule les Attachés ont accé à cette page";
        }
    }


    public function ajouterEtudiant()
    {

        if ($this->request->isGet() && Role::getRole() == "ROLE_AC") {

            $class = Classe::findAll();

            $this->render("etudiant/ajout.etudiant.html.php", ["classe" => $class]);
        } elseif ($this->request->isPost()) {
            // var_dump($_POST);die;   

            extract($_POST);

            $etu = new Etudiant;
            $matricule = "MAT" . date("dmyhis");
            $etu->setNomComplet($nom_complet);
            $etu->setLogin($login);
            $etu->setPassword($password);
            $etu->setAdresse($adresse);
            $etu->setMatricule($matricule);
            $etu->setSexe($sexe);
            $lastId = $etu->insert();
            if ($lastId > 0) {
                Inscription::inscrire($lastId, $_SESSION["user-connect"]->id, $classe, 3);
                $this->redirectToRoute("etudiantListe");
            }

            $_POST = [];
        } else {
            throw new RouteNotFound();
        }
    }
}
