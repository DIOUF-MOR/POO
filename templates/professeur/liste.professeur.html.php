<div class="bitwin fw-bold">
    <h3><?= $titre ?></h3>
    <form class="d-flex">
        <a class="btn " href="addProfs">Ajouter Professeur</button></a>
    </form>
</div>


<table class="table table-striped table-bordered">
    <thead class="thead-secondary">
        <tr class="table-primary">
            <th>N°</th>
            <th>Nom Complet</th>
            <th>Grade</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    foreach ($profs as $prof) { ?>
        <tr class="bg-secondary fw-bold">
            <td><?= $i++ ?></td>
            <td><?= $prof->nom_complet ?></td>
            <td><?= $prof->grade ?></td>
            <td class="text-center">
                <span class="badge rounded-pill bg-success">Modifier</span>
                <span class="badge rounded-pill bg-info">Detail</span>
                <span class="badge rounded-pill bg-danger">Suprimer</span>
            </td>
        </tr>
    <?php  }
    ?>
</table>