<?php 

class Product {

//Attr
 public $category;
 protected $price;

//Construct
 public function __construct($category, $price)
 {
     $this->category = $category;
     $this->price = $price;

 }
}




$rolex = new Product('Watch', 20000);

var_dump($rolex);