<?php

require_once 'Connection.php';


class Product
{

  private $table = 'products';
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


  public static function selectLastProducts()
  {
    $ctn = new Connection();
    return $ctn->selectLastProducts('products');
  }

  public static function selectOneProduct($id)
  {
    $ctn = new Connection();
    return $ctn->selectOne('products', $id);
  }

  public static function SelectProductsByCategory($categoty)
  {
    $ctn = new Connection();
    return $ctn->SelectProductsByCategory($categoty);
  }
  
}


class productImg
{
  private $table = 'product_images';
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

  public static function SelectProductImgs($id)
  {
    $ctn = new Connection;
    return $ctn->SelectProductImgs($id);
  }
}

class wished_products {

  public static function SelectIdsWishedProducts($user_id)
  {
    $ctn = new Connection();
    return $ctn->SelectIdsWishedProducts($user_id);
  }

  public static function SelectProductsByIds($ids_products)
  {
    $ctn = new Connection();
    return $ctn->SelectProductsByIds($ids_products);
  }

  public static function WishProduct($user_id,$product_id)
  {
    $ctn = new Connection();
    return $ctn->WishProduct($user_id,$product_id);
  }

  public static function checkIfProductIsWished($user_id,$product_id)
  {
    $ctn = new Connection();
    return $ctn->checkIfProductIsWished($user_id,$product_id);
  }

}