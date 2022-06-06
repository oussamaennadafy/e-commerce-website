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
 private $created_at;
 
 function __construct($first_name,$last_name,$code_number,$phone_number,$email,$address,$password)
 {
  $this->first_name = $first_name;
  $this->last_name = $last_name;
  $this->code_number = $code_number;
  $this->phone_number = $phone_number;
  $this->email = $email;
  $this->password = $password;
  $this->address = $address;
 }
 
 public function insertUser() {
  $ctn = new Connection();
  return $ctn->insert(
   $this->table,
   ['first_name','last_name','code_number','phone_number','email_address','address','password'],
   [$this->first_name,$this->last_name,$this->code_number,$this->phone_number,$this->email,$this->address,$this->password]
 );
 }

 public static function checkUser($email,$password) {
  $ctn=new Connection();
  $query=$ctn->getconn()->prepare("SELECT * FROM `users` where `email_address` = '$email' AND `password` = '$password'");
		$query->execute();
  $count = $query->rowCount();
  $row   = $query->fetch(PDO::FETCH_ASSOC);
  if($count == 1 && !empty($row)) {
    return $row;
   } else {
    return false;
   }
}















}