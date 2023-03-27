<div class="bitwin fw-bold">
    <h3>Details du Classe N°<?=$classe->id_classe?></h3>
    <form class="d-flex">
        <a class="btn " href="/acListe">liste</button></a>
    </form>
</div>
<div class="card bg-light mb-3">
  <div class="card-header bg-secondary">Informations</div>
  <div class="card-body bg-white">
    <ul>
        <li>Libelle:<?=$classe->libelle?></li>
        <li>FILIERE:<?=$classe->filiere?></li>
        <li>NIVEAU:<?=$classe->niveau?></li>
       
    </ul>
  </div>
</div>