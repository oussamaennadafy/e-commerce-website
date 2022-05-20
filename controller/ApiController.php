<?php 

require_once __DIR__ . "./../model/user.php";
require_once __DIR__ . "./../model/product.php";


class ApiController {


 public function wish() {
  include_once __DIR__ . './../api/wish.php';
 }



}