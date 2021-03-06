<?php

require_once 'Model/ProduitManger.php';

class ProduitControl 
{
    
    private $produits;

    public function __construct()
    {
        $this->produits = new ProduitManager;
        $this->produits->chargementProduit();
    }

    public function chargementAllProduits()
    {
        $produits=$this->produits->getProduit();
        require 'view/listeProduit.php';
    }
    public function getProduitById($id)
    {
        $produits =$this->produits->getProduitById($id);
        require 'view/afficherProduit.php';
    }


}



?>