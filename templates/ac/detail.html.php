
<div class="bitwin fw-bold">
    <h3>Details du AC N°<?=$ac->id?></h3>
    <form class="d-flex">
        <a class="btn " href="/acListe">liste</button></a>
    </form>
</div>
<div class="card bg-light mb-3">
  <div class="card-header bg-secondary">Informations</div>
  <div class="card-body bg-white">
    <ul>
        <li>Nom complet:<?=$ac->nom_complet?></li>
        <li>Login:<?=$ac->login?></li>
    </ul>
  </div>
</div>