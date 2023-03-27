<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin w-50 m-auto">

    <div class="bitwin fw-bold">
      <h3 class="h3 mb-3 fw-normal">Veuiller incerer un Attache </h3>
      <form class="d-flex">
        <a class="btn " href="/acListe">Lister AC</button></a>
      </form>
    </div>
    <form method="POST" action="/addAc" class="bg-secondary">
      <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

      <div class="text-start">
        <label for="nom_complet">Nom Complet</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="Nom_complet" name="nom_complet" value="<?= isset($ac->id)? $ac->nom_complet :""?>">
        <input type="hidden" name="id" value="<?= isset($ac->id)? $ac->id :""?>">
      </div>
      <div class="text-start">
        <label for="login">login</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="login" value="<?=  isset($ac->id)? $ac->login :""?>">
      </div>
      <div class="text-start">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?=  isset($ac->id)? $ac->password :""?>" <?= isset($ac->id)? "readonly":""?>>
      </div>

      <div class="checkbox mb-3">
        <label>
          <!-- <input type="checkbox" value="remember-me"> Remember me -->
        </label>
      </div>
      <div class="">
      <button type="submit" class="btn btn-dark  fw-bold btn--light w-100 fs-4">Terminer</button>
    </div>
    </form>
  </main>