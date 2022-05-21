<?php

require_once __DIR__ . "./../model/user.php";
require_once __DIR__ . "./../model/product.php";


class UserController
{

    public function __construct()
    {
    }

    public function index()
    {
        //logic of page
        if(isset($_POST['search_btn']) and !empty(trim($_POST['search_input']))) {
            header("Location: http://localhost/fill-rouge/user/search/".$_POST['search_input']);
        } 
        if(isset($_POST['search_btn']) and empty(trim($_POST['search_input']))) {
            header("Location: http://localhost/fill-rouge/user/index");
        }
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

    public function search($searchSentence)
    {
        //logic of page
        if(isset($_POST['search_btn']) and !empty(trim($_POST['search_input']))) {
            header("Location: http://localhost/fill-rouge/user/search/".$_POST['search_input']);
        }
        session_start();
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
                            $phone = $_POST['code_number'] . $_POST['phone_number'];
                            if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                if (!empty($_POST['address'])) {
                                    if (!empty($_POST['password'])) {
                                        if (isset($_POST['terms_and_conditions'])) {
                                            $user = new User($_POST['first_name'], $_POST['last_name'], $phone, $_POST['email'], $_POST['address'], $_POST['password']);
                                            $Lastid = $user->insertUser();
                                            $_SESSION['user'] =
                                                [
                                                    'id' => $Lastid,
                                                    'first_name' => $_POST['first_name'],
                                                    'last_name' => $_POST['last_name'],
                                                    'phone' => $phone,
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
        require_once __DIR__ . './../view/page-details.php';
    }

    public function WishedProducts()
    {
        //logic of page
        session_start();
        $wished_products = wished_products::SelectWishedProducts($_SESSION['user']['id']);
        print_r($wished_products);
        exit;
        require_once __DIR__ . './../view/wish-page.php';
    }

    public function WishProduct()
    {
        //logic of page
        wished_products::WishProduct($_POST['user_id'],$_POST['product_id']);
        header('Location: http://localhost/fill-rouge/user/index');
    }

    public function cart()
    {
        //logic of page
        session_start();
        require_once __DIR__ . './../view/page-cart.php';
    }

    public function order()
    {
        //logic of page
        session_start();
        require_once __DIR__ . './../view/page-order.php';
    }
}
