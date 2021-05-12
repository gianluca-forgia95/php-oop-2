<?php 

class Product {

//Attr
 public $category;
 public $img;
 protected $price;
 protected $code;
 private $sale;

//Construct
 public function __construct($category, $price, $code,  $img = NULL )
 {
     $this->category = $category;
     $this->price = $price;
     $this->code = $code;
     $this->img = $img;
    

 }

 //Methods

 public function getPrice()
 {
     return $this->price;
 }
 public function getCode()
 {
     return $this->code;
 }

 public function setSale($season)
 {
     if($season == 'summer' ) {
         $this->sale = 50;
     }
 }
 public function getSale() {
     return $this->sale;
 }

}
//Shoe subclass
class Shoe extends Product {
  //Attr
    public $avaibleSize;
    public $brand;
 //Construct
    public function __construct($category, $price, $code, $avaibleSize, $brand, $img = NULL)
    {
        parent::__construct($category, $price, $code, $img);
        $this->avaibleSize = $avaibleSize;
        $this->brand = $brand;
    }
}




//Istanze con SuperClasse
$rolex = new Product('Watch', 20000 , '111-333-444');
$iPhoneX = new Product('Smartphone', 60, '222-774-333', 'https://asset.mediaw.it/wcsstore/MMCatalogAssetStore/asset/images/14/36/143680.jpg' );
$rolex->setSale('summer');
$iPhoneX->setSale('autumn');
var_dump($rolex);
var_dump($iPhoneX);

//Istanze con SubClasse
$stanSmith = new Shoe('Shoe', 70 , '111-333-444-777', '44-45' , 'Adidas', 'https://kedoff.net/images/product/large/jenskie-krossovki-adidas-stan-smith-j-m20605-img-4.jpg?v=1583487201');
$airMax = new Shoe('Shoe', 120, '456-887-095', '42-43-44-45-46', 'Nike');
var_dump($stanSmith);
var_dump($airMax);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>
</head>
<body>
  
    
</body>
</html>
