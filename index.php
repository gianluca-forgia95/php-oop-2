<?php 

class Product {

//Attr
 public $category;
 public $img;
 protected $price;
 protected $code;

//Construct
 public function __construct($category, $price, $code, $img = NULL )
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
}

class Shoe extends Product {
  //Attr
    public $avaibleSize;
    public $brand;
 //Construct
    public function __construct($category, $price, $code, $img = NULL, $avaibleSize, $brand)
    {
        parent::__construct($category, $price, $code, $img);
        $this->avaibleSize = $avaibleSize;
        $this->brand = $brand;
    }
}




$rolex = new Product('Watch', 20000 , '111-333-444');

var_dump($rolex);


$stanSmith = new Shoe('Shoe', 70 , '111-333-444-777', 'https://kedoff.net/images/product/large/jenskie-krossovki-adidas-stan-smith-j-m20605-img-4.jpg?v=1583487201' ,44 , 'Adidas');

var_dump($stanSmith);

