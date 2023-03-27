<div class="bitwin fw-bold">
    <h3><?= $titre ?></h3>
    <form class="d-flex">
        <a class="btn  bg-dark fw-bold <?= noAccess(["ROLE_RP"]) ?>" href="addEtudiant">Ajouter Etudiant</a>
    </form>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr class="table-primary">
            <th>N°</th>
            <th>Nom_complet</th>
            <th>Role</th>
            <th>Adresse</th>
            <th>Matricule</th>
            <th>login</th>
            <th>Sexe</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    <?php
    $i = 1;
    foreach ($etus as $etu) { ?>
        <tr class="bg-secondary fw-bold">
            <td><?= $i++ ?></td>
            <td><?= $etu->nom_complet ?></td>
            <td><?= $etu->role ?></td>
            <td><?= $etu->adresse ?></td>
            <td><?= $etu->matricule ?></td>
            <td><?= $etu->login ?></td>
            <td><?= $etu->sexe ?></td>
            <td class="text-center">
                <span class="badge rounded-pill bg-success">Modifier</span>
                <span class="badge rounded-pill bg-info">Detail</span>
                <span class="badge rounded-pill bg-danger">Suprimer</span>
            </td>
        </tr>

    <?php }
    ?>
</table>