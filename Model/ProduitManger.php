
<?php

require_once  'Produit_Getters.php';
require_once 'admin.php';

class ProduitManager extends DataBase{

    private $produits;

    public function getProduit()
    {
        return $this->produits;
    }
    public function ajoutProduit($produits)
    {
        return $this->produits[]=$produits;
    }
  


    public function chargementProduit()
    {
        $req="SELECT* FROM descProduit";
        $stmt = $this->setBdd()->prepare($req);
         $stmt->execute();
        $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        

    foreach ($resultat as $produit) {
      $p= new produit($produit['Id'],$produit['Name'],$produit['SeuilRuture'],$produit['Description'],$produit['CategoryNum'],$produit['Num']);
        $this->ajoutProduit($p);
    }
    }
  
    public function getProduitById($id){
        for($i=0; $i < count($this->produits);$i++){
            if($this->produits[$i]->getId() === $id){
                return $this->produits[$i];
            }
        }
    }

}




















?>