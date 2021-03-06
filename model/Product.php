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

  public static function selectOne($table,$id) {
    $ctn = new Connection;
    return $ctn->selectOne($table,$id);
  }

  public static function selectOneCopy($id) {
    $ctn = new Connection;
    return $ctn->selectOneCopy($id);
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

  public static function addSemiOrder($user_id,$product_id,$color,$size,$quantity,$total_price)
  {
    $ctn = new Connection();
    return $ctn->addSemiOrder($user_id,$product_id,$color,$size,$quantity,$total_price);
  }

  public static function isProductInCart($user_id,$product_id)
  {
    $ctn = new Connection();
    return $ctn->isProductInCart($user_id,$product_id);
  }

  public static function getProductPrice($product_id)
  {
    $ctn = new Connection();
    return $ctn->getProductPrice($product_id);
  }

  public static function selectUserOrders($user_id)
  {
    $ctn = new Connection();
    return $ctn->selectUserOrders($user_id);
  }

  public static function moveSemiOrder($semiOrder_id)
  {
    $ctn = new Connection();
    return $ctn->update('semi_order',['status'],['passed_from_cart'],$semiOrder_id);
  }

  public static function selectSemiOrders($user_id)
  {
    $ctn = new Connection();
    return $ctn->selectSemiOrders($user_id);
  }

  public static function searchForProduct($sentence)
  {
    $ctn = new Connection();
    return $ctn->searchForProduct($sentence);
  }

  public static function cancelOrder($type_of_order,$order_id)
  {
    $ctn = new Connection();
    return $ctn->cancelOrder($type_of_order,$order_id);
  }

  public static function updateAddress($new_address,$user_id)
  {
    $ctn = new Connection();
    return $ctn->update('users',['address'],[$new_address],$user_id);
  }

  public static function selectSemiOrder($id)
  {
    $ctn = new Connection();
    return $ctn->selectSemiOrder($id);
  }

  public static function selectProductsInCart($user_id)
  {
    $ctn = new Connection();
    return $ctn->selectProductsInCart($user_id);
  }

  public static function selectOrdersAndQuantity($product_id)
  {
    $ctn = new Connection();
    return $ctn->selectOrdersAndQuantity($product_id);
  }

  public static function updateProductAfterOrder($product_id,$orders,$quantity)
  {
    $ctn = new Connection();
     $ctn->update('products',['orders','quantity'],[$orders,$quantity],$product_id);
  }
  
  public static function deleteSemiOrder($id)
  {
    $ctn = new Connection();
    return $ctn->deleteSemiOrder($id);
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

  public static function UnWishProduct($user_id,$product_id)
  {
    $ctn = new Connection();
    return $ctn->UnWishProduct($user_id,$product_id);
  }

  public static function checkIfProductIsWished($user_id,$product_id)
  {
    $ctn = new Connection();
    return $ctn->checkIfProductIsWished($user_id,$product_id);
  }

}