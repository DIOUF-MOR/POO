<?php
namespace App\Core;
// namespace App\Route;

use App\Core\Router;
use App\model\Classe;
use App\Controller\AcController;
use App\Controller\RpController;
use App\Exception\RouteNotFound;
use App\Controller\UserController;
use App\Controller\ClasseController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\EtudiantController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Controller\AnneScolaireController;


$Router=new Router();
$Router->route('/userListe',[UserController::class,"listerUser"]);

$Router->route('/login',[SecurityController::class,"authentification"]);
$Router->route('/logout',[SecurityController::class,"deconnecxion"]);

$Router->route('/acceuil',[SecurityController::class,"acceuil"]);


$Router->route('/profsListe',[ProfesseurController::class,"listerProfs"]);
$Router->route('/addProfs',[ProfesseurController::class,"ajouterProfs"]);

$Router->route('/rpListe',[RpController::class,"listerRp"]);
$Router->route('/addRp',[RpController::class,"ajouterRp"]);

$Router->route('/acListe',[AcController::class,"listerAc"]);
$Router->route('/addAc',[AcController::class,"ajouterAc"]);
$Router->route('/modifieAc',[AcController::class,"modifierAc"]);
$Router->route('/detailAc',[AcController::class,"detaillerAc"]);
$Router->route('/supprimeAc',[AcController::class,"supprimerAc"]);

$Router->route('/anneeListe',[AnneScolaireController::class,"listerAnneeScolaire"]);
$Router->route('/addAnnee',[AnneScolaireController::class,"ajouterAnneeScolaire"]);
$Router->route('/modifieAnnee',[AnneScolaireController::class,"modifierAnnee"]);
$Router->route('/detailAnnee',[AnneScolaireController::class,"detaillerAnnee"]);
$Router->route('/supprimeAnnee',[AnneScolaireController::class,"supprimerAnnee"]);

$Router->route('/classeListe',[ClasseController::class,"listerClasse"]);
$Router->route('/addClasse',[ClasseController::class,"ajouterClasse"]);
$Router->route('/modifieClasse',[ClasseController::class,"modifierClasse"]);
$Router->route('/detailClasse',[ClasseController::class,"detaillerClasse"]);
$Router->route('/supprimeClasse',[ClasseController::class,"supprimerClasse"]);

$Router->route('/etudiantListe',[EtudiantController::class,"listerEtudiant"]);
$Router->route('/addEtudiant',[EtudiantController::class,"ajouterEtudiant"]);

$Router->route('/demandeListe',[DemandeController::class,"listerDemande"]);
$Router->route('/addDemande',[DemandeController::class,"ajouterDemande"]);


$Router->route('/moduleListe',[ModuleController::class,"listerModule"]);
$Router->route('/suprimeModule',[ModuleController::class,"suprimerModule"]);
$Router->route('/modifieModule',[ModuleController::class,"modifierModule"]);
$Router->route('/addModule',[ModuleController::class,"ajouterModule"]);

try {
    $Router->resolve();  
} catch (RouteNotFound $ex) {
    echo $ex->message;
}
// $cls=new Classe;
//             $cls->setLibelle("CHEIKH ANTA DIOP");
//             $cls->setFiliere("DEV WEB");
//             $cls->setNiveau("LICINCE 3");
//             $cls->insert();