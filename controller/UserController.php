<?php



class UserController {

 public function __construct()
 {

  
 }

 public function index() {
  //logic of page
  include_once __DIR__.'./../view/index.php';
 }

 public function signIn() {
  //logic of page
  require_once __DIR__.'./../view/page-sign-in.php';
 }

 public function signUp() {
  //logic of page
  require_once __DIR__.'./../view/page-sign-up.php';
 }

 public function profile() {
  //logic of page
  require_once __DIR__.'./../view/page-profile.php';
 }

 public function items() {
  //logic of page
  require_once __DIR__.'./../view/page-items-list.php';
 }

 public function details() {
  //logic of page
  require_once __DIR__.'./../view/page-detail.php';
 }

 public function cart() {
  //logic of page
  require_once __DIR__.'./../view/page-cart.php';
 }

 public function order() {
  //logic of page
  require_once __DIR__.'./../view/page-order.php';
 }




}