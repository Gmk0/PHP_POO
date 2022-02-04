<?php

    ob_start();
?>


    <div class="row">
        <div class="col-6">
            <label for=""><?=$produits->getId();?></label>
            <label for=""><?=$produits->getName();?></label>
          
        </div>
    </div>
  



<?php
$content=ob_get_clean();
$titre="Produit";
require 'template.php';

?>