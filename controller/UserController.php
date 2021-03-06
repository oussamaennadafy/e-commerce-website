<?php

require_once __DIR__ . "./../model/user.php";
require_once __DIR__ . "./../model/product.php";
require_once __DIR__ . "./../model/orderOne.php";
require_once __DIR__ . "./../model/OrderCheckout.php";


class UserController
{

    public function __construct()
    {
    }

    public function index()
    {
        //logic of page
        session_start();
        $LastProducts = Product::selectLastProducts();
        include_once __DIR__ . './../view/index.php';
    }
    
    public function nav($category)
    {
        session_start();
        $products = Product::SelectProductsByCategory($category);
        //////////////////filter/////////////////////
        if(isset($_POST['apply_brand_filter'])) {
                $string = "";
                isset($_POST['KALENJI']) ? $string.='KALENJI,' : "";
                isset($_POST['KIPRUN']) ? $string.='KIPRUN,' : "";
                isset($_POST['QUECHUA']) ? $string.='QUECHUA,' : "";
                isset($_POST['KIPSTA']) ? $string.='KIPSTA,' : "";
                isset($_POST['TARMAK']) ? $string.='TARMAK,' : "";
                echo $string = substr($string,0,-1);
                $array = explode(',', $string);

                // print_r($_SESSION['filter_by_brand']);
            }
        //////////////////filter/////////////////////
        require_once __DIR__ . './../view/page-items-nav.php';
    }

    public function search()
    {
        //logic of page
        session_start();
        if(isset($_POST['search_input']) && !empty(trim($_POST['search_input']))) {
            $products = Product::searchForProduct($_POST['search_input']);
        } else {
            $products = Product::selectLastProducts();
        }
        require_once __DIR__ . './../view/page-items-search.php';
    }

    public function signIn()
    {
        //logic of page
        session_start();
        $email = false;
        $password = false;
        $userNotFound = false;
        if (!isset($_SESSION['user'])) {
            //code...
            if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                if (!empty($_POST['password'])) {
                    //code...
                    $User = User::checkUser($_POST['email'], $_POST['password']);
                    if ($User !== false) {
                        // print_r($User);
                        $_SESSION['user'] =
                            [
                                'id' => $User['id'],
                                'first_name' => $User['first_name'],
                                'last_name' => $User['last_name'],
                                'code_phone' => $User['code_number'],
                                'phone' => $User['phone_number'],
                                'email' => $User['email_address'],
                                'address' => $User['address'],
                                'password' => $User['password']
                            ];
                        header('Location: http://localhost/fill-rouge/user/index');
                    } else {
                        $userNotFound = true;
                    }
                    // echo 'passed';
                } else {
                    $password = true;
                }
            } else {
                $email = true;
            }
            require_once __DIR__ . './../view/page-sign-in.php';
        } else {
            header('Location: http://localhost/fill-rouge/user/index');
        }
    }

    public function signUp()
    {
        //logic of page
        session_start();
        if (!isset($_SESSION['user'])) {
            /////////variables//////////
            $first_name = false;
            $last_name = false;
            $number = false;
            $email = false;
            $address = false;
            $password = false;
            $terms = false;
            ////////////////////////////
            if (isset($_POST['register'])) {
                if (!empty($_POST['first_name'])) {
                    if (!empty($_POST['last_name'])) {
                        if (!empty($_POST['code_number']) && !empty($_POST['phone_number']) && is_numeric($_POST['code_number']) && is_numeric($_POST['phone_number'])) {
                            if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                if (!empty($_POST['address'])) {
                                    if (!empty($_POST['password'])) {
                                        if (isset($_POST['terms_and_conditions'])) {
                                            $user = new User($_POST['first_name'], $_POST['last_name'], $_POST['code_number'],$_POST['phone_number'], $_POST['email'], $_POST['address'], $_POST['password']);
                                            $Lastid = $user->insertUser();
                                            $_SESSION['user'] =
                                                [
                                                    'id' => $Lastid,
                                                    'first_name' => $_POST['first_name'],
                                                    'last_name' => $_POST['last_name'],
                                                    'code_phone' => $_POST['code_number'],
                                                    'phone' => $_POST['phone_number'],
                                                    'email' => $_POST['email'],
                                                    'address' => $_POST['address'],
                                                    'password' => $_POST['password']
                                                ];
                                            header('Location: http://localhost/fill-rouge/user/index');
                                        } else {
                                            $terms = true;
                                        }
                                    } else {
                                        $password = true;
                                    }
                                } else {
                                    $address = true;
                                }
                            } else {
                                $email = true;
                            }
                        } else {
                            $number = true;
                        }
                    } else {
                        $last_name = true;
                    }
                } else {
                    $first_name = true;
                }
            }
            require_once __DIR__ . './../view/page-sign-up.php';
        } elseif (isset($_SESSION['user'])) {
            header('Location: http://localhost/fill-rouge/user/index');
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['user']);
        header('Location: http://localhost/fill-rouge/user/index');
    }

    public function profile()
    {
        //logic of page
        session_start();
        if (isset($_SESSION['user'])) {
            $userOrders = Product::selectUserOrders($_SESSION['user']['id']);
            $all_orders=array_merge($userOrders['orders'], $userOrders['checkout']);
            $time = array();
            foreach ($all_orders as $key => $value) {
                $time[$key]=$value['created_at'];
            }
            array_multisort($time, SORT_DESC, $all_orders);
            //cancel order
            if(isset($_POST['cancel_order'])) {
                Product::cancelOrder($_POST['type_of_order'],$_POST['order_id']);
                header("Refresh:0");
            }
            if(isset($_POST['save_address'])) {
                if(!empty(trim($_POST['only_address']))) {
                    Product::updateAddress($_POST['only_address'],$_SESSION['user']['id']);
                    $_SESSION['user']['address'] = $_POST['only_address'];
                }
            }
            //edite profile
             /////////variables//////////
             $first_name = false;
             $last_name = false;
             $number = false;
             $email = false;
             $address = false;
             $password = false;
             $terms = false;
             //////
             $edited_profile = false;
             //////
             ////////////////////////////
             if (isset($_POST['save'])) {
                 if (!empty(trim($_POST['first_name']))) {
                     if (!empty(trim($_POST['last_name']))) {
                         if (!empty(trim($_POST['code_number'])) && !empty(trim($_POST['phone_number'])) && is_numeric($_POST['code_number']) && is_numeric($_POST['phone_number'])) {
                             if (!empty(trim($_POST['email'])) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                 if (!empty(trim($_POST['password']))) {
                                            User::updateUser($_POST['first_name'],$_POST['last_name'],$_POST['code_number'],$_POST['phone_number'],$_POST['email'],$_POST['password'],$_SESSION['user']['id']);
                                             $_SESSION['user'] =
                                                 [
                                                     'id' => $_SESSION['user']['id'],
                                                     'first_name' => $_POST['first_name'],
                                                     'last_name' => $_POST['last_name'],
                                                     'code_phone' => $_POST['code_number'],
                                                     'phone' => $_POST['phone_number'],
                                                     'address' => $_SESSION['user']['address'],
                                                     'email' => $_POST['email'],
                                                     'password' => $_POST['password']
                                                 ];
                                            $edited_profile = true;
                                     } else {
                                         $password = true;
                                     }
                             } else {
                                 $email = true;
                             }
                         } else {
                             $number = true;
                         }
                     } else {
                         $last_name = true;
                     }
                 } else {
                     $first_name = true;
                 }
             }
            require_once __DIR__ . './../view/page-profile.php';
        } else {
            header('Location: http://localhost/fill-rouge/user/index');
        }
    }

    public function orderHistory()
    {
        //logic of page
        session_start();
        if (isset($_SESSION['user'])) {
            $userOrders = Product::selectUserOrders($_SESSION['user']['id']);
            $all_orders=array_merge($userOrders['orders'], $userOrders['checkout']);
            $time = array();
            foreach ($all_orders as $key => $value) {
                $time[$key]=$value['created_at'];
            }
            array_multisort($time, SORT_DESC, $all_orders);
            //cancel order
            if(isset($_POST['cancel_order'])) {
                Product::cancelOrder($_POST['type_of_order'],$_POST['order_id']);
                header("Refresh:0");
            }
            require_once __DIR__ . './../view/ordersHistory.php';
        } else {
            header('Location: http://localhost/fill-rouge/user/index');
        }
    }


    public function details($id)
    {
        //logic of page
        session_start();
        $product = Product::selectOneProduct($id);
        $product['sizes'] = explode(',', $product['sizes']);
        $product['colors'] = explode(',', $product['colors']);
        $imgs = productImg::SelectProductImgs($id);
        ///////order////////
        /////
        $invalid_quantity = false;
        $unavailbale_quantity = false;
        $invalid_color = false;
        $invalid_size = false;
        /////
        if(isset($_POST['add_to_cart_btn'])) {
            if($_POST['quantity'] >= 1) {
             if($_POST['quantity'] <= $product['quantity']) {
              if($_POST['color'] != 'Select Color') {
                if($_POST['size'] != 'Select Size') {
                    product::addSemiOrder($_SESSION['user']['id'],$product['id'],$_POST['color'],$_POST['size'],$_POST['quantity'],$product['price_item']*$_POST['quantity']);
                    header('Location: http://localhost/fill-rouge/user/index');
                } else {
                $invalid_size = true;
                }
              } else {
                $invalid_color = true;
              }                 
             } else {
                $unavailbale_quantity = true;
             }
            } else { 
              $invalid_quantity = true;
            }   
        }
        /////
        if(isset($_POST['buy_now'])) {
            if($_POST['quantity'] >= 1) {
             if($_POST['quantity'] <= $product['quantity']) {
              if($_POST['color'] != 'Select Color') {
                if($_POST['size'] != 'Select Size') {
                    setcookie("quantity", $_POST['quantity'] , time() + 3600*24 , "/");
                    setcookie("color", $_POST['color'] , time() + 3600*24 , "/");
                    setcookie("size", $_POST['size'] , time() + 3600*24 , "/");
                    isset($_SESSION['user']) ? $guestState = 'buyNowClient' : $guestState = 'buyNow';
                    header('Location: http://localhost/fill-rouge/user/'.$guestState.'/'.$_POST['product_id']);
                } else {
                $invalid_size = true;
                }
              } else {
                $invalid_color = true;
              }                 
             } else {
                $unavailbale_quantity = true;
             }
            } else { 
              $invalid_quantity = true;
            }   
        }
        ////////////////////
        require_once __DIR__ . './../view/page-details.php';
    }

    public function buyNowClient($id) {
        ////////////////////
        //logic of page
        session_start();
        $first_name = false;
        $last_name = false;
        $code = false;
        $phone = false;
        $email = false;
        $terms_and_conditions = false;
        $address = false;
        $zip = false;
        $card_number = false;
        $expired = false;
        $cvv = false;


        if(isset($_POST['place_order'])) {
            if(isset($_POST['first_name']) && !empty($_POST['first_name'])) {
            if(isset($_POST['last_name']) && !empty($_POST['last_name'])) {
            if(isset($_POST['code_number']) && !empty($_POST['code_number'])) {
                if(isset($_POST['phone_number']) && !empty($_POST['phone_number'])) {
                if(isset($_POST['email']) && !empty($_POST['email'])) {
                    if(isset($_POST['terms_and_conditions'])) {
                    if(isset($_POST['address']) && !empty($_POST['address'])) {
                    if(isset($_POST['zip']) && !empty($_POST['zip'])) {
                    if(isset($_POST['card_number']) && !empty($_POST['card_number'])) {
                        if(isset($_POST['expired']) && !empty($_POST['expired'])) {
                        if(isset($_POST['cvv']) && !empty($_POST['cvv'])) {
                        $ctn = new Order($id,$_COOKIE['quantity'],$_COOKIE['size'],$_COOKIE['color'],$_POST['first_name'].' '.$_POST['last_name'],$_POST['code_number'].$_POST['phone_number'],$_POST['email'],$_POST['shipping_method'],$_POST['address'],$_POST['zip'],$_POST['other_info'],$_POST['card_number'],$_POST['expired'],$_POST['cvv'],$_SESSION['user']['id']);
                        $ctn->addOrderGuest();
                        $product_passed = Product::selectOrdersAndQuantity($id);
                        Product::updateProductAfterOrder($id,$product_passed['orders'] + $_COOKIE['quantity'],$product_passed['quantity'] - $_COOKIE['quantity']);
                        header('Location: http://localhost/fill-rouge/user/index');
                        } else {
                        $cvv = true;
                        }
                        } else {
                        $expired = true;
                        }
                    } else {
                        $card_number = true;
                    }
                    } else {
                        $zip = true;
                    }
                    } else {
                    $address = true;
                    }
                    } else {
                    $terms_and_conditions = true;
                    }
                } else {
                $email = true;
                }
                } else {
                $phone = true;
                }
            } else {
                $code = true;
            }
            } else {
            $last_name = true;
            }
            } else {
            $first_name = true;
            }
        //    echo $_POST['first_name'];
        //    echo $_POST['last_name'];
        //    echo $_POST['code_number'];
        //    echo $_POST['phone_number'];
        //    echo $_POST['email'];
        //    echo $_POST['terms_and_conditions'];
        //    echo $_POST['shipping_method'];
        //    echo $_POST['address'];
        //    echo $_POST['zip'];
        //    echo $_POST['other_info'];
        //    echo $_POST['save_info'];
        //    echo $_POST['card_number'];
        //    echo $_POST['expired'];
        //    echo $_POST['cvv'];
        }
        $product = Product::selectOneCopy($id);
        require_once __DIR__ . './../view/page-buy-now-client.php';
    }

    public function WishedProducts()
    {
        //logic of page
        session_start();
        $ids_products = wished_products::SelectIdsWishedProducts($_SESSION['user']['id']);
        $formated_ids = '';
        foreach ($ids_products as $id_product) {
            $formated_ids .= $id_product['product_id'].',';
        }
        $formated_ids = substr($formated_ids, 0, -1);
        if($formated_ids != null) {
            $wished_products = wished_products::SelectProductsByIds($formated_ids);
        }
        require_once __DIR__ . './../view/wish-page.php';
    }

    public function WishProduct()
    {
        //logic of page
        wished_products::WishProduct($_POST['user_id'],$_POST['product_id']);
        header('Location: http://localhost/fill-rouge/user/'.$_POST['current_page']);
    }

    public function UnWishProduct()
    {
        //logic of page
        wished_products::UnWishProduct($_POST['user_id'],$_POST['product_id']);
        header('Location: http://localhost/fill-rouge/user/'.$_POST['current_page']);
    }

    public function cart()
    {
        //logic of page
        session_start();
        $semi_orders = product::selectProductsInCart($_SESSION['user']['id']);
        //count total price of order
        $total_price_order = 0;
        foreach($semi_orders as $semi_order) {
            $total_price_order +=  floatval($semi_order['price_item'])*$semi_order['quantity'];
        }
        //
        require_once __DIR__ . './../view/page-cart.php';
    }

    public function deleteSemiOrder($id)
    {
    //logic of page
    product::deleteSemiOrder($id);
    header('Location: http://localhost/fill-rouge/user/cart');
    }

    public function checkout()
    {
        ////////////////////
        //logic of page
        session_start();
        $first_name = false;
        $last_name = false;
        $code = false;
        $phone = false;
        $email = false;
        $terms_and_conditions = false;
        $address = false;
        $zip = false;
        $card_number = false;
        $expired = false;
        $cvv = false;

        //////// count total price and making string of semi orders ///////////////
        $semi_orders = product::selectSemiOrders($_SESSION['user']['id']);
        $total_price = 0;
        $str_semi_orders = '';
        foreach ($semi_orders as $semi_order) {
            # code...
            $total_price+= $semi_order['total_price'];
            $str_semi_orders .= $semi_order['id'].',';
        }
        $str_semi_orders = substr($str_semi_orders, 0, -1);
        ////////////////////////////////////////////////////////////////////////////


        if(isset($_POST['place_order'])) {
            if(isset($_POST['first_name']) && !empty($_POST['first_name'])) {
            if(isset($_POST['last_name']) && !empty($_POST['last_name'])) {
            if(isset($_POST['code_number']) && !empty($_POST['code_number'])) {
                if(isset($_POST['phone_number']) && !empty($_POST['phone_number'])) {
                if(isset($_POST['email']) && !empty($_POST['email'])) {
                    if(isset($_POST['terms_and_conditions'])) {
                    if(isset($_POST['address']) && !empty($_POST['address'])) {
                    if(isset($_POST['zip']) && !empty($_POST['zip'])) {
                    if(isset($_POST['card_number']) && !empty($_POST['card_number'])) {
                        if(isset($_POST['expired']) && !empty($_POST['expired'])) {
                        if(isset($_POST['cvv']) && !empty($_POST['cvv'])) {
                        $ctn = new OrderCheckout($_POST['first_name'].' '.$_POST['last_name'],$_POST['code_number'].$_POST['phone_number'],$_POST['email'],$_POST['shipping_method'],$_POST['address'],$_POST['zip'],$_POST['other_info'],$_POST['card_number'],$_POST['expired'],$_POST['cvv'],$_SESSION['user']['id'],$str_semi_orders);
                        $ctn->addCheckoutOrder();
                        //move products from cart user to orders page
                        foreach($semi_orders as $semi_order) {
                         Product::moveSemiOrder($semi_order['id']);
                        }
                        // update products quantity and orders number
                        foreach($semi_orders as $semi_order) {
                        $product_passed = Product::selectOrdersAndQuantity($semi_order['product_id']);
                        Product::updateProductAfterOrder($semi_order['product_id'],$product_passed['orders'] + $_COOKIE['quantity'],$product_passed['quantity'] - $_COOKIE['quantity']);
                        }
                        header('Location: http://localhost/fill-rouge/user/index');
                        } else {
                        $cvv = true;
                        }
                        } else {
                        $expired = true;
                        }
                    } else {
                        $card_number = true;
                    }
                    } else {
                        $zip = true;
                    }
                    } else {
                    $address = true;
                    }
                    } else {
                    $terms_and_conditions = true;
                    }
                } else {
                $email = true;
                }
                } else {
                $phone = true;
                }
            } else {
                $code = true;
            }
            } else {
            $last_name = true;
            }
            } else {
            $first_name = true;
            }
        //    echo $_POST['first_name'];
        //    echo $_POST['last_name'];
        //    echo $_POST['code_number'];
        //    echo $_POST['phone_number'];
        //    echo $_POST['email'];
        //    echo $_POST['terms_and_conditions'];
        //    echo $_POST['shipping_method'];
        //    echo $_POST['address'];
        //    echo $_POST['zip'];
        //    echo $_POST['other_info'];
        //    echo $_POST['save_info'];
        //    echo $_POST['card_number'];
        //    echo $_POST['expired'];
        //    echo $_POST['cvv'];
        }
        require_once __DIR__ . './../view/page-checkout.php';
    }
    
    public function buyNow($id)
    {
        //logic of page
        session_start();
        $first_name = false;
        $last_name = false;
        $code = false;
        $phone = false;
        $email = false;
        $terms_and_conditions = false;
        $address = false;
        $zip = false;
        $card_number = false;
        $expired = false;
        $cvv = false;


        if(isset($_POST['place_order'])) {
         if(isset($_POST['first_name']) && !empty($_POST['first_name'])) {
          if(isset($_POST['last_name']) && !empty($_POST['last_name'])) {
            if(isset($_POST['code_number']) && !empty($_POST['code_number'])) {
             if(isset($_POST['phone_number']) && !empty($_POST['phone_number'])) {
                if(isset($_POST['email']) && !empty($_POST['email'])) {
                 if(isset($_POST['terms_and_conditions'])) {
                  if(isset($_POST['address']) && !empty($_POST['address'])) {
                   if(isset($_POST['zip']) && !empty($_POST['zip'])) {
                    if(isset($_POST['card_number']) && !empty($_POST['card_number'])) {
                     if(isset($_POST['expired']) && !empty($_POST['expired'])) {
                      if(isset($_POST['cvv']) && !empty($_POST['cvv'])) {
                        $ctn = new Order($id,$_COOKIE['quantity'],$_COOKIE['size'],$_COOKIE['color'],$_POST['first_name'].' '.$_POST['last_name'],$_POST['code_number'].$_POST['phone_number'],$_POST['email'],$_POST['shipping_method'],$_POST['address'],$_POST['zip'],$_POST['other_info'],$_POST['card_number'],$_POST['expired'],$_POST['cvv'],null);
                        $ctn->addOrderGuest();
                        $product_passed = Product::selectOrdersAndQuantity($id);
                        $product_updated = Product::updateProductAfterOrder($id,$product_passed['orders'] + $_COOKIE['quantity'],$product_passed['quantity'] - $_COOKIE['quantity']);
                        header('Location: http://localhost/fill-rouge/user/index');
                      } else {
                        $cvv = true;
                      }
                     } else {
                        $expired = true;
                     }
                    } else {
                     $card_number = true;
                    }
                   } else {
                       $zip = true;
                   }
                  } else {
                    $address = true;
                  }
                 } else {
                    $terms_and_conditions = true;
                 }
                } else {
                $email = true;
                }
             } else {
             $phone = true;
             }
            } else {
             $code = true;
            }
           } else {
            $last_name = true;
           }
          } else {
            $first_name = true;
          }
        //    echo $_POST['first_name'];
        //    echo $_POST['last_name'];
        //    echo $_POST['code_number'];
        //    echo $_POST['phone_number'];
        //    echo $_POST['email'];
        //    echo $_POST['terms_and_conditions'];
        //    echo $_POST['shipping_method'];
        //    echo $_POST['address'];
        //    echo $_POST['zip'];
        //    echo $_POST['other_info'];
        //    echo $_POST['save_info'];
        //    echo $_POST['card_number'];
        //    echo $_POST['expired'];
        //    echo $_POST['cvv'];

        }
        $product = Product::selectOneCopy($id);
        require_once __DIR__ . './../view/page-buy-now.php';
    }
    
    public function terms_and_conditions() {
        session_start();
        require_once __DIR__ . './../view/terms_and_conditions.php';
    }
    public function about_us() {
        session_start();
        require_once __DIR__ . './../view/about_us.php';
    }

}
