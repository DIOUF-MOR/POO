<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin w-50 m-auto">
    <div class="bitwin fw-bold">
      <h3 class="h3 mb-3 fw-normal">Veuiller creer une classe </h3>
      <form class="d-flex">
        <a class="btn " href="classeListe">Lister Classe</button></a>
      </form>
    </div>

    <form method="POST" action="addClasse" class="bg-dark p-3">
      <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

      <div class="text-start">
        <label for="floatingInput">Libelle</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="libelle" name="libelle">
      </div>
      <div class="text-start">
        <label for="floatingInput">Filiere</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="filiere" name="filiere">
      </div>
      <div class="text-start">
        <label for="floatingPassword">Niveau</label>
        <input type="text" class="form-control " id="floatingPassword" placeholder="niveau" name="niveau">
      </div>

      <div class="checkbox mb-3">
        <label>
          <!-- <input type="checkbox" value="remember-me"> Remember me -->
        </label>
      </div>
      <div class="mt-3">
        <button class="btn btn-lg btn-white" type="submit">Ajouter</button>
        <p class="mt-5 mb-3 text-muted">&copy;ODC 2021–2022</p>
      </div>
    </form>
  </main>