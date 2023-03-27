<link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-50 m-auto">

        <div class="bitwin fw-bold">
            <h3 class="h3 mb-3 fw-normal">Ajouter Annee scolaire </h3>
            <form class="d-flex">
                <a class="btn " href="/anneeListe">Lister Annee Scolaire</button></a>
            </form>
        </div>
        <form method="POST" action="/addAnnee" class="bg-secondary">
            <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

            <div class="text-start">
                <label for="floatingInput">Annee Scolaire</label>
                <input type="text" class="form-control " id="floatingInput" placeholder="Annee Scolaire" name="libelle_annee" value="<?= isset($annees->id_anneeScolaire) ? $annees->libelle_annee :""?>">
                <input type="hidden" name="id" id="" value="<?= isset($annees->id_anneeScolaire) ? $annees->id_anneeScolaire :""?>">
            </div>


            <div class="mt-3">
            <button class="btn btn-lg btn-dark" type="submit">Ajouter</button>
            <p class="mt-5 mb-3 text-muted">&copy;ODC 2021–2022</p>
            </div>
            <!-- <button type="submit" class="btn btn-primaryoutline-danger">Create new</button> -->

        </form>
    </main>