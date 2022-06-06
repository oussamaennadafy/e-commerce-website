<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Type some info" />
    <meta name="author" content="Type name" />

    <title>ENSONE | Order</title>

    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome 5 -->
    <link
      href="../../view/fonts/fontawesome/css/all.min.css"
      type="text/css"
      rel="stylesheet"
    />
    <style>
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
      }
    </style>
  </head>

  <body>
    <!--  COMPONENT: HEADER -->
    <header class="bg-white py-3 border-b">
      <div class="container max-w-screen-xl mx-auto px-4">
        <div class="flex flex-wrap items-center">
        <!-- Brand -->
        <div class="flex-shrink-0 mr-5">
        <a href="http://localhost/fill-rouge/user/index" class="flex items-center gap-1">
          <svg height="50" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M47.481 2.65997C47.443 2.65997 47.405 2.65997 47.367 2.65997C47.348 2.65997 47.31 2.65997 47.291 2.65997C47.234 2.65997 47.196 2.67897 47.139 2.67897C47.082 2.69797 47.006 2.69797 46.949 2.71697C46.892 2.73597 46.835 2.75497 46.778 2.77397H46.759C46.74 2.77397 46.721 2.79297 46.702 2.79297C46.683 2.81197 46.664 2.81197 46.645 2.83097C46.303 3.00197 46.018 3.26797 45.828 3.60997L46.037 3.21097L8.51198 26.239C7.94198 26.581 7.59998 27.189 7.59998 27.854V64.923C7.59998 65.588 7.94198 66.196 8.51198 66.538L19.912 73.53C20.805 74.081 21.983 73.796 22.534 72.903C22.724 72.599 22.819 72.257 22.819 71.915V35.302L47.519 20.159L72.219 35.302V71.915C72.219 72.96 73.074 73.815 74.119 73.815C74.48 73.815 74.822 73.72 75.107 73.53L86.507 66.538C87.077 66.196 87.419 65.588 87.419 64.923V27.854C87.419 27.189 87.077 26.581 86.507 26.239L48.583 3.00197C48.507 2.94497 48.431 2.90697 48.336 2.86897C48.279 2.84997 48.241 2.81197 48.184 2.79297H48.165H48.146C48.089 2.77397 48.032 2.75497 47.975 2.73597C47.918 2.71697 47.861 2.71697 47.804 2.69797C47.804 2.69797 47.804 2.69797 47.785 2.69797H47.766C47.728 2.69797 47.671 2.67897 47.633 2.67897C47.595 2.67897 47.576 2.67897 47.538 2.67897C47.538 2.65997 47.519 2.65997 47.481 2.65997ZM47.5 6.78297L83.6 28.899V63.84L76 68.495V34.238C76 33.573 75.658 32.965 75.088 32.623L48.488 16.321C47.88 15.941 47.101 15.941 46.493 16.321L19.893 32.623C19.323 32.965 18.981 33.573 18.981 34.238V68.514L11.381 63.859V28.918L47.5 6.78297ZM41.743 31.084C41.42 31.084 41.078 31.198 40.812 31.369L29.412 38.361C28.842 38.703 28.5 39.311 28.5 39.976V77.729C28.5 78.394 28.842 79.002 29.412 79.344L46.227 89.642L46.018 89.357C46.189 89.585 46.436 89.794 46.702 89.908C46.816 89.965 46.93 90.003 47.063 90.041C47.12 90.06 47.177 90.079 47.253 90.079C47.31 90.079 47.367 90.098 47.405 90.098C47.424 90.098 47.424 90.098 47.443 90.098H47.462C47.5 90.098 47.538 90.098 47.557 90.098C47.595 90.098 47.614 90.098 47.652 90.098C47.69 90.098 47.709 90.098 47.747 90.098C47.785 90.098 47.823 90.079 47.88 90.079C47.937 90.06 48.013 90.06 48.07 90.041C48.127 90.022 48.184 90.003 48.241 89.984C48.298 89.965 48.336 89.946 48.393 89.908C48.735 89.737 49.02 89.471 49.21 89.129L49.001 89.528L65.588 79.325C66.158 78.983 66.5 78.375 66.5 77.71V39.957C66.5 39.292 66.158 38.684 65.588 38.342L54.188 31.35C53.295 30.799 52.117 31.084 51.566 31.977C51.376 32.281 51.281 32.623 51.281 32.965V70.319L47.519 72.618L43.7 70.262V32.984C43.7 31.939 42.845 31.084 41.8 31.084C41.781 31.084 41.762 31.084 41.743 31.084ZM39.9 36.366V71.326C39.9 71.991 40.242 72.599 40.812 72.941L46.55 76.456C47.158 76.836 47.918 76.836 48.526 76.456L54.188 72.998C54.758 72.656 55.1 72.029 55.1 71.383V36.366L62.7 41.021V76.646L47.538 85.975L32.3 76.665V41.04L39.9 36.366Z" fill="#1063eb"/>
          </svg>
          <p class="text-lg font-semibold text-blue-600">ENSON</p>
        </a>
      </div>
      <!-- Brand .//end -->

				          <!-- Actions -->
                  <div class="flex items-center space-x-2 ml-auto">

<?php if(isset($_SESSION['user'])): ?>
<a
		class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
		href="http://localhost/fill-rouge/user/WishedProducts"
>
		<i class="text-gray-400 w-5 fa fa-heart"></i>
		<span class="hidden lg:inline ml-1">Wishlist</span>
</a>

<a
		class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
		href="http://localhost/fill-rouge/user/cart"
>
		<i class="text-gray-400 w-5 fa fa-shopping-cart"></i>
		<span class="hidden lg:inline ml-1">My cart</span>
</a>

<a
		class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
		href="http://localhost/fill-rouge/user/profile"
>
		<i class="text-gray-400 w-5 fa fa-user"></i>
		<span class="hidden lg:inline ml-1">account</span>
</a>
</div>
<?php else: ?>
<a
		class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
		href="http://localhost/fill-rouge/user/signIn"
>
		<i class="text-gray-400 w-5 fa fa-user"></i>
		<span class="hidden lg:inline ml-1">Sign in</span>
</a>
<?php endif ?>
<!-- Actions .//end -->

          <!-- mobile-only -->
          <div class="lg:hidden ml-2">
            <button
              type="button"
              class="bg-white p-3 inline-flex items-center rounded-md text-black hover:bg-gray-200 hover:text-gray-800 border border-transparent"
            >
              <span class="sr-only">Open menu</span>
              <i class="fa fa-bars fa-lg"></i>
            </button>
          </div>
          <!-- mobile-only //end  -->
        </div>
        <!-- flex grid //end -->
      </div>
      <!-- container //end -->
    </header>
    <!--  COMPONENT: HEADER //END -->

    <!--  PAGE HEADER -->
    <section class="py-5 sm:py-7 bg-blue-100">
      <div class="container max-w-screen-xl mx-auto px-4">
        <!-- breadcrumbs start -->
        <ol
          class="inline-flex flex-wrap text-gray-600 space-x-1 md:space-x-3 items-center"
        >
          <li class="inline-flex items-center">
            <a class="text-gray-600 hover:text-blue-600" href="http://localhost/fill-rouge/user/signIn">Home</a>
            <i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
          </li>
          <li class="inline-flex items-center" aria-current="page">
            <a class="text-gray-600 hover:text-blue-600" href="http://localhost/fill-rouge/user/details/<?php echo $id ?>"> details </a>
            <i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
          </li>
          <li class="inline-flex items-center">Order</li>
        </ol>
        <!-- breadcrumbs end -->
      </div>
      <!-- /.container -->
    </section>
    <!--  PAGE HEADER .//END  -->

    <section class="py-10 bg-gray-50">
      <div class="container max-w-screen-xl mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-4 lg:gap-8">
          <main class="md:w-2/3">
            <?php if(!isset($_SESSION['user'])): ?>
            <article
              class="border border-gray-200 bg-white shadow-sm rounded p-4 lg:p-6 mb-5"
            >
              <div
                class="flex flex-col lg:flex-row lg:justify-between lg:items-center"
              >
                <div class="mb-4 lg:mb-0">
                  <h3 class="text-xl font-semibold">Have an account?</h3>
                  <p class="text-gray-600">
                    By creating account you will get more benefits
                  </p>
                </div>
                <div class="">
                  <a
                    class="px-4 py-2 inline-block text-blue-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600"
                    href="http://localhost/fill-rouge/user/signIn"
                  >
                    Sign in
                  </a>

                  <a
                    class="px-4 py-2 inline-block text-white bg-blue-600 shadow-sm border border-transparent rounded-md hover:bg-blue-700"
                    href="http://localhost/fill-rouge/user/signUp"
                  >
                    Create account
                  </a>
                </div>
              </div>
            </article>
            <?php endif ?>
            <!-- card.// -->
            <form action="http://localhost/fill-rouge/user/buyNow/<?php echo $product['id'] ?>" method='post'>
            <article
              class="border border-gray-200 bg-white shadow-sm rounded p-4 lg:p-6 mb-5"
            >
              <h2 class="text-xl font-semibold mb-5"><?php if(!isset($_SESSION['user'])){echo'Guest checkout';}else { echo 'User checkout';} ?></h2>

              <div class="grid grid-cols-2 gap-x-3">
                <div class="mb-4">
                  <label class="block mb-1"> First name* </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full
                    <?php if($first_name) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>"
                    name='first_name'
                    type="text"
                    placeholder="Type here"
                    value='<?php if(isset($_POST['place_order'])){ echo $_POST['first_name']; }else {echo $_SESSION['user']['first_name']; }?>'
                  />
                  <?php if($first_name) {?>
                  <div class='text-red-500'>first name is required</div>
                  <?php } ?>
                </div>

                <div class="mb-4">
                  <label class="block mb-1"> Last name* </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full
                    <?php if($last_name) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>""
                    type="text"
                    name='last_name'
                    placeholder="Type here"
                    value='<?php if(isset($_POST['place_order'])){ echo $_POST['last_name']; }else {echo $_SESSION['user']['last_name']; }?>'
                  />
                  <?php if($last_name) {?>
                  <div class='text-red-500'>last name is required</div>
                  <?php } ?>
                </div>
              </div>

              <div class="grid lg:grid-cols-2 gap-x-3">
                <div class="mb-4">
                  <label class="block mb-1"> Phone* </label>
                  <div class="flex w-full">
                    <input
                      class="appearance-none w-24 border border-gray-200 bg-gray-100 rounded-tl-md rounded-bl-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400
                      <?php if($code) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>"
                      type="text"
                      placeholder="Code"
                      name='code_number'
                      value='<?php if(isset($_POST['place_order']) && !empty($_POST['code_number'])){ echo $_POST['code_number']; }
                      if(!isset($_POST['place_order'])) {echo '+212';}
                      ?>'
                    />
                    <input
                      class="appearance-none flex-1 border border-gray-200 bg-gray-100 rounded-tr-md rounded-br-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400
                      <?php if($phone) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>""
                      type="text"
                      name='phone_number'
                      placeholder="Type phone"
                      value='<?php if(isset($_POST['place_order'])){ echo $_POST['phone_number']; }?>'
                    />
                  </div>
                  <?php if($phone && !$code) {?>
                  <div class='text-red-500'>phone number is required</div>
                  <?php } ?>
                  <?php if(!$phone && $code) {?>
                  <div class='text-red-500'>code number is required</div>
                  <?php } ?>
                </div>

                <div class="mb-4">
                  <label class="block mb-1"> Email* </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full
                    <?php if($email) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>"""
                    type="email"
                    name='email'
                    placeholder="Type here"
                    value='<?php if(isset($_POST['place_order'])){ echo $_POST['email']; }?>'
                  />
                  <?php if($email) {?>
                  <div class='text-red-500'>email is required</div>
                  <?php } ?>
                </div>
              </div>

              <label class="flex items-center w-max my-4">
                <input <?php if(!$terms_and_conditions) { echo 'checked'; }?> name="terms_and_conditions" type="checkbox" class="h-4 w-4" />
                <span class="ml-2 inline-block text-gray-500">
                  I agree with Terms and Conditions
                </span>
              </label>

              <?php if($terms_and_conditions) {?>
                <div class='text-red-500'>please accept our terms and conditions</div>
              <?php } ?>

              <hr class="my-4" />

              <h2 class="text-xl font-semibold mb-5">Shipping information</h2>

              <!-- radio selection -->
              <div class="grid sm:grid-cols-3 gap-3 mb-6">
                <label
                  class="flex p-3 border border-gray-200 rounded-md bg-gray-50 hover:border-blue-400 hover:bg-blue-50 cursor-pointer"
                >
                  <span
                    ><input checked name="shipping_method" value='fedex' type="radio" class="h-4 w-4 mt-1"
                  /></span>
                  <p class="ml-2">
                    <span>Fedex delivery</span>
                      <small class="inline-block text-sm text-gray-400"
                        >about 5-7 days</small
                      >
                      <small class="inline-block text-xs mt-1 text-green-600"
                        >(Recommanded)</small
                      >
                  </p>
                </label>
                <label
                  class="flex p-3 border border-gray-200 rounded-md bg-gray-50 hover:border-blue-400 hover:bg-blue-50 cursor-pointer"
                >
                  <span
                    ><input name="shipping_method" value='DHL' type="radio" class="h-4 w-4 mt-1"
                  /></span>
                  <p class="ml-2">
                    <span>DHL delivery</span>
                    <small class="block text-sm text-gray-400"
                      >about 3-9 days</small
                    >
                  </p>
                </label>
                <label
                  class="flex p-3 border border-gray-200 rounded-md bg-gray-50 hover:border-blue-400 hover:bg-blue-50 cursor-pointer"
                >
                  <span
                    ><input name="shipping_method" value='UPS' type="radio" class="h-4 w-4 mt-1"
                  /></span>
                  <p class="ml-2">
                    <span>UPS delivery</span>
                    <small class="block text-sm text-gray-400"
                      >about 2-10 days</small
                    >
                  </p>
                </label>
              </div>
              <!-- radio selection .//end -->

              <div class="grid md:grid-cols-3 gap-x-3">
                <div class="mb-4 md:col-span-2">
                  <label class="block mb-1"> Address* </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full
                    <?php if($address) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>"
                    type="text"
                    name='address'
                    placeholder="Type here"
                    value='<?php if(isset($_POST['place_order'])){ echo $_POST['address']; }?>'
                  />
                  <?php if($address) {?>
                  <div class='text-red-500'>address is required</div>
                  <?php } ?>
                </div>

                <div class="mb-4 md:col-span-1">
                  <label class="block mb-1"> Zip code* </label>
                  <div class="relative">
                    <input
                      class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full
                      <?php if($zip) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>"
                      type="text"
                      name='zip'
                      value='<?php if(isset($_POST['place_order'])){ echo $_POST['zip']; }?>'
                      placeholder="Type here"
                    />
                    <?php if($zip) {?>
                    <div class='text-red-500'>zip code is required</div>
                    <?php } ?>
                  </div>
                </div>
              </div>

              <div class="mb-4">
                <label class="block mb-1"> Other info </label>
                <textarea
                  placeholder="Type your wishes"
                  name='other_info'
                  class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                ><?php if(isset($_POST['place_order'])){ echo $_POST['other_info']; }?></textarea>
              </div>
              
              <hr class="my-4" />
              <!-- payment -->
              <h2 class="text-xl font-semibold mb-5">Payment information</h2>
              <div class='grid grid-cols-4 gap-x-3'>
              <div class='mb-4 col-span-2'>
                <label class='mb-1 inline-block' for="card_number">
                  Card Number
                </label>
                <input class='appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full
                <?php if($card_number) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>'
                 type="number" name="card_number" id="card_number" placeholder='Ex: xxxx xxxx xxxx xxxx'
                 value='<?php if(isset($_POST['place_order'])){ echo $_POST['card_number']; }?>'
                 />
                 <?php if($card_number) {?>
                  <div class='text-red-500'>card number is required</div>
                <?php } ?>
              </div>
              <div class='mb-4'>
                <label class='mb-1 inline-block' for="expired">
                  Expired
                </label>
                <input class='appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full
                <?php if($expired) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>''
                 type="text" name="expired" id="expired" placeholder='mm / yy'
                 value='<?php if(isset($_POST['place_order'])){ echo $_POST['expired']; }?>'>
                 <?php if($expired) {?>
                  <div class='text-red-500'>expired date is required</div>
                <?php } ?>
              </div>
              <div class='mb-4'>
                <label class='mb-1 inline-block' for="cvv">
                  CVV
                </label>
                <input class='appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full
                <?php if($cvv) { echo 'border-red-500 hover:border-red-600 focus:border-red-600'; }?>'''
                 type="number" name="cvv" id="cvv" placeholder='123'
                 value='<?php if(isset($_POST['place_order'])){ echo $_POST['cvv']; }?>'>
                 <?php if($cvv) {?>
                  <div class='text-red-500'>cvv number is required</div>
                <?php } ?>
              </div>
              </div>
              <p class='text-gray-400 my-1'><i class="w-5 fa fa-lock"></i>Your Data is not Secure via SSL</p>
              <!-- end payment -->
              


              <div class="flex justify-end space-x-2">
                <a
                  class="px-5 py-2 inline-block text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600"
                  href="http://localhost/fil-rouge/index"
                >
                  Back
                </a>
                <input
                  type='submit'
                  value='Place Order'
                  name='place_order'
                  class="px-5 py-2 inline-block text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700 cursor-pointer"
                  href="#"
                >
                </input>
              </div>
            </article>
            </form>
            <!-- card.// -->
          </main>
          <aside class="md:w-1/3">
            <article class="text-gray-600" style="max-width: 350px">
              <h2 class="text-lg font-semibold mb-3">Summary</h2>
              <ul>
                <li class="flex justify-between mb-1">
                  <span>Total price:</span>
                  <span>$<?php echo $product['price_item']*$_COOKIE['quantity'] ?></span>
                </li>
                <li class="flex justify-between mb-1">
                  <span>Discount:</span>
                  <span class="text-green-500">- $0.00</span>
                </li>
                <li class="flex justify-between mb-1">
                  <span>TAX:</span>
                  <span>$0.99</span>
                </li>
                <li class="border-t flex justify-between mt-3 pt-3">
                  <span>Total price:</span>
                  <span class="text-gray-900 font-bold">$<?php echo $product['price_item']*$_COOKIE['quantity'] + 0.99 ?></span>
                </li>
              </ul>

              <hr class="my-4" />

              <div class="flex gap-3">
                <input
                  class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                  type="text"
                  placeholder="Coupon code"
                />
                <button
                  type="button"
                  class="px-4 py-2 inline-block text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600"
                >
                  Apply
                </button>
              </div>

              <hr class="my-4" />

              <h2 class="text-lg font-semibold mb-3">Items in cart</h2>

              <figure class="flex items-center mb-4 leading-5">
                <div>
                  <a
                    href='http://localhost/fill-rouge/user/details/<?php echo $product['id']; ?>'
                    class="block relative w-20 h-20 rounded p-1 border border-gray-200"
                  >
                    <img
                      width="70"
                      height="70"
                      src="../../view/uploads/<?php echo $product['first_img'] ?>"
                      alt="Title"
                    />
                    <span
                      class="absolute -top-2 -right-2 w-6 h-6 text-sm text-center flex items-center justify-center text-white bg-gray-400 rounded-full"
                    >
                      <?php echo $_COOKIE['quantity'] ?>
                    </span>
                  </a>
                </div>
                <figcaption class="ml-3">
                  <p>
                   <div class='whitespace-nowrap w-64 overflow-hidden'>
                     <a class='bg-gradient-to-r from-gray-500 via-gray-500 via-gray-500 to-transparent bg-clip-text text-transparent hover:from-blue-600 hover:via-blu-600 hover:to-transparent' href='http://localhost/fill-rouge/user/details/<?php echo $product['id']; ?>'>
                     <?php echo $product['name_item'] ?>
                    </a> 
                    </div>
                  </p>
                  <p class="mt-1 text-gray-400">color: <?php echo $_COOKIE['color'] ?></p>
                  <p class="mt-1 text-gray-400">size: <?php echo $_COOKIE['size'] ?></p>
                </figcaption>
              </figure>

            </article>
          </aside>
          <!-- col.// -->
        </div>
        <!-- grid.// -->
      </div>
      <!-- container.// -->
    </section>

    <!-- footer -->
    <?php include_once 'view\reusables\footer.php'; ?>
    <!-- footer end -->
  </body>
</html>
