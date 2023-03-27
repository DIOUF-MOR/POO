<div class="bitwin fw-bold">
    <h3><?= $titre ?></h3>
    <form class="d-flex">
        <a class="btn " href="addAc">Ajouter AC</button></a>
    </form>
</div>

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr class="table-primary fw-bold">
            <th>N°</th>
            <th>Nom_complet</th>
            <th>Role</th>
            <th>login</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    <?php
    $i = 1;
    foreach ($acs as $ac) { ?>
        <tr class="bg-secondary fw-bold">
            <td><?= $i++ ?></td>
            <td><?= $ac->nom_complet ?></td>
            <td><?= $ac->role ?></td>
            <td><?= $ac->login ?></td>
            <td class="text-center">
                <a href="modifieAc/<?=$ac->id?>" class="btn btn-success">Modifier</a>
                <a href="detailAc/<?=$ac->id?>" class="btn btn-info">Detail</a>
                <a href="supprimeAc/<?=$ac->id?>" class="btn btn-danger">Danger</a>
            </td>
        </tr>

    <?php }
    ?>
</table>