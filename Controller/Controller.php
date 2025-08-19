<?php
namespace Controller;


use Model\Product;

class ProductController{
   
    public function view($name, $price, $quantity) {
        return  $name . $price . $quantity;
    }
}