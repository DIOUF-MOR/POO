<div class="bitwin fw-bold">
    <h3><?= $titre ?></h3>
    <form class="d-flex">
        <a class="btn " href="addClasse">Ajouter Classe</button></a>
    </form>
</div>

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr class="table-primary">
            <th>N°</th>
            <th>libelle</th>
            <th>filiere</th>
            <th>Niveau</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($classes as $classe) { ?>
        <tr class="bg-secondary fw-bold">
            <td><?= $i++ ?></td>
            <td><?= $classe->libelle ?></td>
            <td><?= $classe->filiere ?></td>
            <td><?= $classe->niveau ?></td>
            <td class="text-center">
                <a href="modifieClasse/<?=$classe->id_classe?>" class="btn btn-success">Modifier</a>
                <a href="detailClasse/<?=$classe->id_classe?>" class="btn btn-info">Detail</a>
                <a href="supprimeClasse/<?=$classe->id_classe?>" class="btn btn-danger">Suprimer</a>
            </td>
        </tr>
    <?php }
    ?>
</table>