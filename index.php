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
                  
                break;
            case 'admins':
               
                if (empty($url[1])) {
                    $produit_Controller->chargementAllProduits();
                }
                else if(($url[1])==="liste")
                {
                    $produit_Controller->getProduitById($url[2]);
                }
                break;
            
            default:
                # code...
                break;
        }
    }




?>