<?php

require_once 'Connection.php';

Class OrderCheckout {

 private $table= 'order_checkout';
 private $id;
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
 private $user_id;
 private $semi_orders;
 
 function __construct($full_name,$phone,$email,$shipping_method,$address,$zip,$other_info,$card_number,$expired,$cvv,$user_id,$semi_orders)
 {
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
  $this->semi_orders = $semi_orders;
 }
 
 public function addCheckoutOrder() {
  $ctn = new Connection();
  return $ctn->insertCheckoutOrder(
   $this->table,
   ['full_name','phone','email','shipping_method','address','zip','other_info','card_number','expired','cvv','user_id','semi_orders'],
   [$this->full_name,$this->phone,$this->email,$this->shipping_method,$this->address,$this->zip,$this->other_info,$this->card_number,$this->expired,$this->cvv,$this->user_id,$this->semi_orders]
 );
 }





}