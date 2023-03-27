<link href="signin.css" rel="stylesheet">
</head>
<section class="background-radial-gradient overflow-hidden animate__animated animate__slideInRight">
  <style>
    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container  text-lg-start my-5 w-50">
    <div class="card bg-glass ">
      <div class="card-body px-4 py-5 px-md-5 bg-secondary">
        <form action="login" method="POST">
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Login</label>
            <input type="email" id="form3Example3" class="form-control" name="login"/>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control" name="password" />
          </div>
          <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-outline-white btn-light btn-centered">
            Connecter
          </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</body>