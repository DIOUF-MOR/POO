<!-- Custom styles for this template -->


  <main class="form-signin w-50 m-auto">

    <div class="bitwin fw-bold">
      <h3 class="h3 mb-3 fw-normal">Ajouter une Demande </h3>
      <form class="d-flex">
        <a class="btn " href="demandeListe">Lister Demande</button></a>
      </form>
    </div>
    <form method="POST" action="addDemande" class="bg-dark">

      <div class="text-start">
        <label for="floatingInput">Motif</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="motif" name="motif">
      </div>
      <div class="text-start">
        <label for="floatingInput">Date</label>
        <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com" name="date">
      </div>

      <!-- <div class="text-start">
        <label for="">Etat</label>
        <select name="etat" id="" class="">
          <option value="">Valider</option>
          <option value="">Rejeter</option>
          <option value="">Annuler</option>
        </select> -->
        <!-- <input type="text" class="form-control" id="floatingInput" placeholder="motif" name="motif"> -->
      <!-- </div> -->

      <div class="d-flex align-items-center justify-content-center pb-4">
        <button type="submit" class="btn btn-outline-white btn-light">Create new</button>
      </div>
    </form>
  </main>
  