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
 

 public static function selectLastProducts() {
  $ctn = new Connection();
  return $ctn->selectLastProducts('products'); 
 }

 public static function selectOneProduct($id) {
  $ctn = new Connection();
  return $ctn->selectOne('products',$id); 
 }



}


class productImg {
  private $table= 'product_images';
  private $id;
  private $name;
  private $img_dir;
  private $product_id;

  // function __construct($name,$img_dir,$product_id) {
  //   $this->name = $name;
  //   $this->img_dir = $img_dir;
  //   $this->product_id = $product_id;
  // }

  // public function insertProductImg() {
  //   $ctn = new Connection;
  //   $ctn->insert($this->table,['name','img_dir','product_id'],[$this->name,$this->img_dir,$this->product_id]);
  // }

  public static function SelectProductImgs($id) {
    $ctn = new Connection;
    return $ctn->SelectProductImgs($id);
  }


}