<?php

    ob_start();
?>
<div class="modals-container" id="modals">
<div class="modals">
    <div class="row">
        <h1>AJOUT UN ITEMS</h1>
        <form action="<?=URL?>admins/av" method="POST" role="form" enctype="multipart/form-data" class="form" id="contact-form">
        <div class="form-group">
                    <label for="name">NOM</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="">
                    <p class="comments"></p>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="description" value="">
                    <span class="help-inline"></span>
                </div>
                <div class="form-group">
                    <label for="price">prix</label>
                    <input type="text"  class="form-control" id="price" name="price" placeholder="price" value="">
                    <span class="help-inline"></span>
                </div>
                <div class="form-group">
                    <label for="categorie">CATEGORIE</label>
                  <select class="form-control" name="categorie" id="categorie">
                
                  </select>
                    <span class="help-inline"></span>
                </div>
                <div class="form-group">
                    <label for="image">Selectionner une Image</label>
                    <input type="file" class="form-control" id="image" name="image" value="">
                    <span class="help-inline"></span>
                </div>
            
            <div class="form-action">
            <br>
                        <button  type="submit" class="btn btn-success">AJOUTER</button>
                        <a href="#" id="close" class="btn btn-primary">RETOUR</a>
                        
            </div>
        </form>
        </div>
    </div>
</div>
    

<div class="header">
            <h1>LISTE DES PRODUIT</h1>
            <button id="open" type="submit" class="btn btn-success">AJOUTER</button>
    </div>
    <div class="main-content">
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