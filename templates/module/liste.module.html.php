<div class="bitwin fw-bold">
    <h3><?= $titre ?></h3>
    <form class="d-flex">
        <a class="btn " href="addModule">Ajouter Module</button></a>
    </form>
</div>

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr class="table-primary">
            <th class="text-center">N°</th>
            <th class="text-center">Libelle</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($modules as $module) { ?>
        <tr class="bg-secondary fw-bold">
            <td class="text-center"><?= $i++ ?></td>
            <td class="text-center"><?= $module->libelle_module ?></td>
            <td class="text-center">
               
                <a href="modifieModule/<?=$module->id_module?>" class="btn btn-success">Modifier</a>
                <a href="detailModule/<?=$module->id_module?>" class="btn btn-info">Detail</a>
                <a href="supprimeModule/<?=$module->id_module?>" class="btn btn-danger">Suprimer</a>
            
            </td>
        </tr>
    <?php }
    ?>
</table>