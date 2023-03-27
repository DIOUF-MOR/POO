<?php
namespace App\Controller;

use App\Core\Controller;
use App\model\AnneeScolaire;

class AnneScolaireController extends Controller
{
    public function listerAnneeScolaire()
    {
        $annee = AnneeScolaire::findAll();
        $data = [
            "annees" => $annee,
            "titre" => "la liste de tous les annees scolaires"
        ];
        $this->render("anneescolaire/liste.anneescolaire.html.php", $data);
    }

    public function ajouterAnneeScolaire()
    {

        if ($this->request->isget()) {

            $this->render("anneescolaire/ajout.anneescolaire.html.php");

        } else {

            extract($_POST);
            $annee = new AnneeScolaire;
            $annee->setLibelle_annee($libelle_annee);

            if ($id == "") {
                $annee->insert();
            } else {
                $annee->setId_anneeScolaire($id);
                $annee->update();
            }
            $_POST = [];
            $this->redirectToRoute("anneeListe");
        }
    }

    public function detaillerAnnee($id)
    {
        $a = AnneeScolaire::findById($id);
        $data = [
            "annees" => $a
        ];
        $this->render("anneescolaire/detail.html.php", $data);
    }

    public function modifierAnnee($id)
    {
        $a = AnneeScolaire::findById($id);

        $data = [
            "annees" => $a
        ];
        $this->render("anneescolaire/ajout.anneescolaire.html.php", $data);
    }

    public function supprimerAnnee($id)
    {
        $result = AnneeScolaire::delete($id);
        $this->redirectToRoute("anneeListe");
    }
}
