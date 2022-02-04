<?php

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "htpps" :"http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "Controllers/produit.controllers.php";

$produit_Controller = new ProduitControl;



    if(empty($_GET['page']))
    {
        require 'view/accueil.php';
    }
    else {
        
        $url=explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case 'accueil':
                require 'view/accueil.php';  
                break;
            case 'admins':
                $produit_Controller->chargementAllProduits();
                break;
            
            default:
                # code...
                break;
        }
    }




?>