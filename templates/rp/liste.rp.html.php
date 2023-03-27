<div class="bitwin fw-bold mb-10px mt-10px">
  <h3 class="h3 mb-3 fw-normal">La liste des Rp </h3>
    <form class="d-flex">
      <a class="btn " href="addRp">Ajouter RP</button></a>
    </form>
  </div>
<table class="table">
    <tr class="table-primary">
        <th>N°</th>
        <th>nom_complet</th>
        <!-- <th>role</th> -->
        <th>login</th>
        <th class="text-center">Action</th>
    </tr>

    <?php
    $i = 1;
    foreach ($lesrps as $rp) { ?>
        <tr class="bg-secondary fw-bold">
            <td><?= $i++ ?></td>
            <td><?= $rp->nom_complet ?></td>
            <td><?= $rp->login ?></td>
            <td class="text-center">
                <span class="badge rounded-pill bg-success">Modifier</span>
                <span class="badge rounded-pill bg-info">Detail</span>
                <span class="badge rounded-pill bg-danger">Suprimer</span>
            </td>
        </tr>
    <?php }
    ?>

</table>