<div class="bitwin fw-bold">
    <h3><?= $titre ?></h3>
    <form class="d-flex">
        <a class="btn <?= noAccess(["ROLE_ETUDIANT", "ROLE_AC"]) ?>" href="addAnnee">Ajouter Annee Scolaire</button></a>
    </form>
</div>

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr class="table-primary">
            <th>N°</th>
            <th>Libelle</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($annees as $annee) { ?>
        <tr class="bg-secondary fw-bold">
            <td><?= $i++ ?></td>
            <td><?= $annee->libelle_annee ?></td>
            <td class="text-center">
                <a href="modifieAnnee/<?=$annee->id_anneeScolaire?>" class="btn btn-success">Modifier</a>
                <a href="detailAnnee/<?=$annee->id_anneeScolaire?>" class="btn btn-info">Detail</a>
                <a href="supprimeAnnee/<?=$annee->id_anneeScolaire?>" class="btn btn-danger">Suprimer</a>
            </td>
        </tr>
    <?php }
    ?>
</table>