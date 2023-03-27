<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin w-50 m-auto animate__animated animate__fadeInUpBig">
  <div class="bitwin fw-bold mb-10px mt-10px">
  <h3 class="h3 mb-3 fw-normal">Ajouter un Rp </h3>
    <form class="d-flex">
      <a class="btn " href="rpListe">Lister RP</button></a>
    </form>
  </div>

    <form method="POST" action="addRp" class="bg-secondary">
      <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

      <div class="text-start">
        <label for="">Nom Complet</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nom_complet">
      </div>

      <div class="text-start">
        <label for="">login</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="login">
      </div>

      <div class="text-start">
        <label for="">password</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">
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