<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin w-50 m-auto">

    <div class="bitwin fw-bold">
      <h1 class="h3 mb-3 fw-normal">Veuiller ajouter un Professeur </h1> 
      <form class="d-flex">
        <a class="btn " href="profsListe">Lister Profs</button></a>
      </form>
    </div>
    <form method="POST" action="addProfs" class="bg-dark">
      <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

      <div class="text-start">
        <label for="floatingInput">Nom Complet</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nom_complet">
      </div>
      <div class="text-start">
        <label for="floatingInput">Grate</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="grade">
      </div>

      <div class="checkbox mb-3">
        <label>
          <!-- <input type="checkbox" value="remember-me"> Remember me -->
        </label>
      </div>
      <div class="d-flex align-items-center justify-content-center pb-4">
        <!-- <p class="mb-0 me-2">Don't have an account?</p> -->
        <button type="submit" class="btn btn-outline-white btn-light">Create new</button>
      </div>
    </form>
  </main>