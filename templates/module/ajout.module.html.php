<body class="text-center">

<main class="form-signin w-50 m-auto">

<div class="bitwin fw-bold">
    <h3 class="h3 mb-3 fw-normal">Ajouter Module </h3>
    <form class="d-flex">
        <a class="btn " href="anneeListe">Lister Module</button></a>
    </form>
</div>
<form method="POST" action="addModule" class="bg-secondary">
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

    <div class="text-start">
        <label for="floatingInput">Module</label>
        <input type="text" class="form-control " id="floatingInput" placeholder="modole" name="libelleModule">
    </div>


    <div class="mt-3">
    <button class="btn btn-lg btn-dark" type="submit">Ajouter</button>
    <p class="mt-5 mb-3 text-muted">&copy;ODC 2021–2022</p>
    </div>
    <!-- <button type="submit" class="btn btn-primaryoutline-danger">Create new</button> -->

</form>
</main>