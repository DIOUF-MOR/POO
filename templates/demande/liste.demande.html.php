<div class="bitwin fw-bold">
    <h3><?= $titre ?></h3>
    <form class="d-flex">
        <a class="btn btn-secondary my-2 my-sm-0 <?= noAccess(["ROLE_RP", "ROLE_AC"]) ?>" href="addDemande">Ajouter Demande</button></a>
    </form>
</div>

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr class="table-primary">
            <th>N°</th>
            <th>Motif</th>
            <th>Date</th>
            <th>Etat</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($dmdes as $dmde) { ?>
        <tr class="bg-secondary fw-bold">
            <td><?= $i++ ?></td>
            <td><?= $dmde->motif ?></td>
            <td><?= $dmde->date ?></td>
            <td><?= $dmde->etat ?></td>
            <td class="text-center">
                <span class="badge rounded-pill bg-success">Modifier</span>
                <span class="badge rounded-pill bg-info">Detail</span>
                <span class="badge rounded-pill bg-danger">Suprimer</span>
            </td>
        </tr>
    <?php }
    ?>
</table>