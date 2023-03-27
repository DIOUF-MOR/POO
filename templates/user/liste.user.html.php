 <h1><?$titre?></h1>

 <table>
     <tr>
         <th>N°</th>
         <th>Nom_complet</th>
         <th>role</th>
         <th>login</th>
     </tr>
     <?php
     $i=1;
     foreach ($users as $user) {?>
     <tr>
         <td><?=$i++?></td>
         <td><?=$user->nom_complet?></td>
         <td><?=$user->role?></td>
         <td><?=$user->login?></td>
     </tr>
     <?php }
     ?>
 </table>