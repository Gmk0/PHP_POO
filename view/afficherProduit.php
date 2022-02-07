<?php

    ob_start();
?>


    <div class="row">
        <div class="col-6">
            <label for="">ID:<?=$produits->getId();?></label>
                <br>
            <label for="">Name:<?=$produits->getName();?></label>
        </div>
    </div>
  



<?php
$content=ob_get_clean();
$titre="Produit";
require 'template.php';

?>