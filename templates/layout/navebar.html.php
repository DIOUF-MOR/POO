 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fw-bold">
  <div class="container-fluid <?=shownav()?>">
    <a class="navbar-brand" href="#"><?=getDetail()?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
      
  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?=noAccess(["ROLE_ETUDIANT","ROLE_AC"])?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">R.Pédagogique</a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="rpListe">Lister Rp</a>
            <a class="dropdown-item " href="addRp">Ajouter RP</a>
          </div>
        </li> <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?=noAccess(["ROLE_ETUDIANT","ROLE_RP"])?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Etudiant</a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="etudiantListe">Lister Etudiant</a>
            <a class="dropdown-item <?=noAccess(["ROLE_RP"])?>" href="addEtudiant">Ajouter Etudiant</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?=noAccess(["ROLE_ETUDIANT","ROLE_AC"])?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Professeur</a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="profsListe">Lister Professeur</a>
            <a class="dropdown-item " href="addProfs">Ajouter Professeur</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?=noAccess(["ROLE_ETUDIANT","ROLE_AC"])?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Attaché</a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="acListe">Lister Attaché</a>
            <a class="dropdown-item " href="addAc">Ajouter Attaché</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?=noAccess(["ROLE_ETUDIANT","ROLE_AC"])?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Classe</a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="classeListe">Lister Classe</a>
            <a class="dropdown-item " href="addClasse">Ajouter Classe</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Demande</a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="demandeListe">Lister Demande</a>
            <a class="dropdown-item <?=noAccess(["ROLE_RP","ROLE_AC"])?>" href="addDemande">Ajouter Demande</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?=noAccess(["ROLE_ETUDIANT","ROLE_AC"])?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Annee Scolaire</a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="anneeListe">Lister Annee Scolaire</a>
            <a class="dropdown-item " href="addAnnee">Ajouter Annee Scolaire</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?=noAccess(["ROLE_ETUDIANT","ROLE_AC"])?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Module</a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="moduleListe">Lister Module</a>
            <a class="dropdown-item " href="addModule">Ajouter Module</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
       <a class="btn btn-secondary my-2 my-sm-0" href="/logout">Deconnexion</button></a>
      </form>
    </div>
  </div>
</nav>
