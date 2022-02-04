
<?php

    class Produit{

        private  $id;
        private  $name;
        private $seuil;
        private $cate;
        private $num;
        private $desc;

        public function __construct($id,$name,$seuil,$desc,$cate,$num)
        {
            $this->id=$id;
            $this->desc=$desc;
            $this->name=$name;
            $this->seuil=$seuil;
            $this->cate=$cate;
            $this->num=$num;
        }
        
        public function getId(){return $this->id;}
        public function setId($id){$this->id=$id;}

        public function getName(){return $this->name;}
        public function setName($name){$this->name=$name;}

        public function getSeuil(){return $this->seuil;}
        public function setSeuil($seuil){$this->seuil=$seuil;}

        public function getCate(){return $this->cate;}
        public function setCate($cate){$this->cate=$cate;}

        public function getDesc(){return $this->desc;}
        public function setDesc($desc){$this->desc=$desc;}

        public function getNum(){return $this->num;}
        public function setNum($num){$this->num=$num;}
    }

?>


