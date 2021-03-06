<?php

require_once 'Connection.php';

Class User {

 private $table= 'Users';
 private $id;
 private $first_name;
 private $last_name;
 private $phone_number;
 private $code_number;
 private $email;
 private $address;
 private $password;
 
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

 public static function updateUser($first_name,$last_name,$code_number,$phone_number,$email,$password,$id) {
  $ctn=new Connection();
  $query=$ctn->getconn()->prepare("UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name',`code_number`='$code_number',`phone_number`='$phone_number',`email_address`='$email',`password`='$password' WHERE id=$id");
	$query->execute();
}















}