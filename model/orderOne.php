<?php

require_once 'Connection.php';

Class Order {

 private $table= 'order';
 private $id;
 private $product_id;
 private $quantity;
 private $size;
 private $color;
 private $full_name;
 private $phone;
 private $email;
 private $shipping_method;
 private $address;
 private $zip;
 private $other_info;
 private $card_number;
 private $expired;
 private $cvv;
 
 function __construct($product_id,$quantity,$size,$color,$full_name,$phone,$email,$shipping_method,$address,$zip,$other_info,$card_number,$expired,$cvv,user_id)
 {
  $this->product_id = $product_id;
  $this->quantity = $quantity;
  $this->size = $size;
  $this->color = $color;
  $this->full_name = $full_name;
  $this->phone = $phone;
  $this->email = $email;
  $this->shipping_method = $shipping_method;
  $this->address = $address;
  $this->zip = $zip;
  $this->other_info = $other_info;
  $this->card_number = $card_number;
  $this->expired = $expired;
  $this->cvv = $cvv;
  $this->user_id = $user_id;
 }
 
 public function addOrderGuest() {
  $ctn = new Connection();
  return $ctn->insertOrder(
   $this->table,
   ['product_id','quantity','size','color','full_name','phone','email','shipping_method','address','zip','other_info','card_number','expired','cvv','user_id'],
   [$this->product_id,$this->quantity,$this->size,$this->color,$this->full_name,$this->phone,$this->email,$this->shipping_method,$this->address,$this->zip,$this->other_info,$this->card_number,$this->expired,$this->cvv,$this->user_id]
 );
 }





}