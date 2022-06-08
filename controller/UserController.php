<?php

require_once __DIR__ . "./../model/user.php";
require_once __DIR__ . "./../model/product.php";
require_once __DIR__ . "./../model/orderOne.php";


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
        //logic of page
        if(isset($_POST['search_btn']) and !empty(trim($_POST['search_input']))) {
            header("Location: http://localhost/fill-rouge/user/search/".$_POST['search_input']);
        }
        session_start();
        $products = Product::SelectProductsByCategory($category);
        require_once __DIR__ . './../view/page-items-nav.php';
    }

    public function search()
    {
        //logic of page
        session_start();
        // echo $_POST['search_input'];
        if(isset($_POST['search_btn']) and empty(trim($_POST['search_input']))) {
            header('Location: http://localhost/fill-rouge/user/'.$_POST['page_name']);
        }


        $products = Product::selectLastProducts();
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
            require_once __DIR__ . './../view/page-profile.php';
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
                        $ctn = new Order($id,$_COOKIE['quantity'],$_COOKIE['size'],$_COOKIE['color'],$_POST['first_name'].$_POST['last_name'],$_POST['code_number'].$_POST['phone_number'],$_POST['email'],$_POST['shipping_method'],$_POST['address'],$_POST['zip'],$_POST['other_info'],$_POST['card_number'],$_POST['expired'],$_POST['cvv'],$_SESSION['user']['id']);
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
                            echo 'passed';
                        // $ctn = new Order($id,$_COOKIE['quantity'],$_COOKIE['size'],$_COOKIE['color'],$_POST['first_name'].$_POST['last_name'],$_POST['code_number'].$_POST['phone_number'],$_POST['email'],$_POST['shipping_method'],$_POST['address'],$_POST['zip'],$_POST['other_info'],$_POST['card_number'],$_POST['expired'],$_POST['cvv'],$_SESSION['user']['id']);
                        // $ctn->addOrderGuest();
                        // $product_passed = Product::selectOrdersAndQuantity($id);
                        // $product_updated = Product::updateProductAfterOrder($id,$product_passed['orders'] + $_COOKIE['quantity'],$product_passed['quantity'] - $_COOKIE['quantity']);
                        // header('Location: http://localhost/fill-rouge/user/index');
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
        $semi_orders = product::selectSemiOrders($_SESSION['user']['id']);
        $total_price = 0;
        foreach ($semi_orders as $semi_order) {
            # code...
            $total_price+= $semi_order['total_price'];
        }
        echo $total_price;
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
                        $ctn = new Order($id,$_COOKIE['quantity'],$_COOKIE['size'],$_COOKIE['color'],$_POST['first_name'].$_POST['last_name'],$_POST['code_number'].$_POST['phone_number'],$_POST['email'],$_POST['shipping_method'],$_POST['address'],$_POST['zip'],$_POST['other_info'],$_POST['card_number'],$_POST['expired'],$_POST['cvv'],null);
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

}
