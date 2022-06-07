<?php

require_once 'Connection.php';


class SemiOrder
{

  private $table = 'semi_order';
  private $id;
  private $user_id;
  private $product_id;
  private $color;
  private $size;
  private $quantity;
  private $total_price;

  public static function select($user_id)
  {
    $ctn = new Connection();
    return $ctn->selectSemiOrders('products');
  }

  
}
