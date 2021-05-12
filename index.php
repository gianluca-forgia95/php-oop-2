<?php 

class Product {

//Attr
 public $name;
 public $category;
 public $img;
 protected $price;
 protected $code;
 private $sale;

//Construct
 public function __construct($name,$category, $price, $code,  $img = NULL )
 {
     $this->name = $name;
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
    private $promotionCode;

 //Construct
    public function __construct($name, $category, $price, $code, $avaibleSize, $brand, $img = NULL)
    {
        parent::__construct($name,$category, $price, $code, $img);
        $this->avaibleSize = $avaibleSize;
        $this->brand = $brand;
    }


//Methods
public function setPromotion()
 {
     $this->promotionCode = '181-920';
 }

public function getPromotion()
 {
     return $this->promotionCode;
 }

public function getSale() {
    if ($this->promotionCode == '181-920' ) {
        return $this->sale + 10 ;
    }
    
}

}




//Istanze con SuperClasse
$rolex = new Product('Rolex GMT Master','Watch', 20000 , '111-333-444');
$iPhoneX = new Product('iPhone X11','Smartphone', 60, '222-774-333', 'https://asset.mediaw.it/wcsstore/MMCatalogAssetStore/asset/images/14/36/143680.jpg' );
$rolex->setSale('summer');
$iPhoneX->setSale('autumn');


$products = [$rolex, $iPhoneX];

//Istanze con SubClasse
$stanSmith = new Shoe('Stan Smith','Shoe', 70 , '111-333-444-777', '44-45' , 'Adidas', 'https://kedoff.net/images/product/large/jenskie-krossovki-adidas-stan-smith-j-m20605-img-4.jpg?v=1583487201');
$airMax = new Shoe('Air Max 900','Shoe', 120, '456-887-095', '42-43-44-45-46', 'Nike');
$stanSmith->setSale('winter');
$airMax->setSale('summer');

$shoes = [$stanSmith, $airMax];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prodotti</title>
</head>
<body>
 <h1>Products</h1>
 <section class="products">
  <?php foreach ($products as $product) { ?>
  <div class="box">
  <h2><?php echo $product->name ?></h2>
  <h3> Categoria: <?php echo $product->category ?></h3>
  <span>Costo: <?php echo $product->getPrice() ?></span>
  <img src="<?php echo $product->img ?>" alt="">
  <p>Sconto: <?php echo $product->getSale() ?>%</p>
  </div>
 <?php } ?>
</section>

<section>
<?php foreach ($shoes as $shoe) { ?>
  <div class="box">
  <h2><?php echo $shoe->name ?></h2>
  <h3> Categoria: <?php echo $shoe->category ?></h3>
  <span>Costo: <?php echo $shoe->getPrice() ?></span>
  <img src="<?php echo $shoe->img ?>" alt="">
  <p>Sconto: <?php echo $shoe->getSale() ?>%</p>
  </div>
 <?php } ?>

</section>

 
  
    
</body>
</html>
