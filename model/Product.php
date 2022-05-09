<?php

require_once 'Connection.php';


Class Product {

 private $table= 'products';
 private $id;
 private $name_item;
 private $description_item;
 private $tags_item;
 private $category_item;
 private $colors;
 private $price_item;
 private $orders;
 private $sizes;
 private $quantity;
 
// function __construct($name_item , $description_item , $tages_item , $category_item , $colors , $price_item , $sizes , $quantity)
//  {
//   $this->name_item = $name_item;
//   $this->description_item = $description_item;
//   $this->tages_item = $tages_item;
//   $this->category_item = $category_item;
//   $this->colors = $colors;
//   $this->price_item = $price_item;
//   $this->sizes = $sizes;
//   $this->quantity = $quantity;
//  }

 public static function selectLastProducts() {
  $ctn = new Connection();
  $ctn->selectLastProducts('products'); 
  // $ctn->selectLastProductsImages(); 
 }



}


class productImg {
  private $table= 'product_images';
  private $id;
  private $name;
  private $img_dir;
  private $product_id;

  function __construct($name,$img_dir,$product_id) {
    $this->name = $name;
    $this->img_dir = $img_dir;
    $this->product_id = $product_id;
  }

  public function insertProductImg() {
    $ctn = new Connection;
    $ctn->insert($this->table,['name','img_dir','product_id'],[$this->name,$this->img_dir,$this->product_id]);
  }


}