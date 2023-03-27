<div class="container w-100 p-3">
  <div class="bitwin fw-bold mb-10px mt-10px">
    <h3 class="h3 mb-3 fw-normal">Incerir un Etudiant </h3>
    <form class="d-flex">
      <a class="btn " href="etudiantListe">Lister Etudiant</button></a>
    </form>
  </div>
  <form method="POST" action="/addEtudiant" class="bg-secondary p-4">

    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="form-outline text-start">
          <label class="form-label" for="form3Example1">Nom Complet</label>
          <input type="text" class="form-control" id="form3Example2" placeholder="Nom complet" name="nom_complet">
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="form-outline text-start">
          <label class="form-label" for="form3Example2">sexe</label>
          <input type="text" class="form-control" id="form3Example2" placeholder="sexe" name="sexe">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="form-outline text-start">
          <label class="form-label" for="form3Example1">Login</label>
          <input type="text" class="form-control" id="form3Example1" placeholder="name@example.com" name="login">
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="form-outline text-start">
          <label class="form-label" for="form3Example2">Password</label>
          <input type="text" class="form-control" id="form3Example2" placeholder="password" name="password" value="passe" readonly>
        </div>
      </div>
    </div>

    <div class="row ">
      <div class="col-md-6 mb-3">
        <div class="form-outline text-start">
          <label class="form-label" for="form3Example1">Adresse</label>
          <input type="text" class="form-control" id="form3Example1" placeholder="Adresse" name="adresse">
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="">classe</label>
        <select name="classe" id="" class="form-control" placeholder="">
          <option disabled selected>Selectionner une classe</option>
          <?php 
          foreach ($classe as $c) { ?>

            <option value="<?=$c->id_classe?>"><?=$c->libelle?></option>

            <?php }
          ?>
        </select>
      </div>
    </div>

    <div class="">
      <button type="submit" class="btn btn-dark  fw-bold btn--light w-100 fs-4">Terminer</button>
    </div>
  </form>
</div>