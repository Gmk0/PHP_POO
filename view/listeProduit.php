<?php

    ob_start();
?>

    <div class="">
        <div class="row">
            <table class="table table-success table-striped">
                   <thead>
                       <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>CATEGORIES</th>
                           <th></th>
                           <th colspan="3">ACTION</th>
                           
                       </tr>
                   </thead>
                   <tbody>
                         <tr>
                         <?php
                        
                        for ($i=0; $i < count($produits); $i++):
                            ?> 
                         <td class="align-middle"><?=$produits[$i]->getId();?></td>
                         <td class="align-middle"><?=$produits[$i]->getName();?></td>
                         <td class="align-middle"><?=$produits[$i]->getSeuil();?></td>
                         <td class="align-middle"><?=$produits[$i]->getCate();?></td>
                         <td class="align-middle"></td>
                         <td ><a href="<?= URL ?>admins/liste/<?=$produits[$i]->getId();?>" class="btn btn-warning">VOIR</a> </td>
                         <td ><a href="<?= URL ?>admins/m/<?=$produits[$i]->getId();?>" class="btn btn-primary">modifier</a> </td>
                         <form action="<?= URL ?>admins/s/<?=$produits[$i]->getId();?>" method="POST" onsubmit="return confirm('voulez vous supprimer cette element');">
                         <td ><button class="btn btn-danger" type="submit">DELETE</button></td>
                         </form>                
                        </tr>
                        <?php endfor; ?>
                      

                   </tbody>
            </table>
        </div>
</div>













<?php
$content=ob_get_clean();
$titre="LISTE PRODUIT";
require 'template.php';

?>