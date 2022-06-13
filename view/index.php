<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Type some info" />
    <meta name="author" content="Type name" />
    <!-- <base href="/" /> -->
    <title>Welcome to ENSON</title>
    <!-- Font awesome 5 -->
    <link
      href="../view/fonts/fontawesome/css/all.min.css"
      type="text/css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    

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
          <!-- Search -->
          <form
            method="POST"
            action="http://localhost/fill-rouge/user/search"
            class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-2/4"
          >
          <!-- <input type="hidden" name="page_name" value='index'> -->
            <input
              class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-md mr-2 py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400"
              type="text"
              name="search_input"
              placeholder="Search"
            />
            <button
              type="submit"
              name="search_btn"
              class="px-4 py-2 inline-block text-white border border-transparent bg-blue-600 rounded-md hover:bg-blue-700"
            >
              <i class="fa fa-search"></i>
            </button>
          </form>
          <!-- Search .//end -->

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
    <!-- nav -->
    <?php include_once 'view\reusables\navigation.php'; ?>
    <!-- nav end -->
    <!--  COMPONENT: HEADER //END -->

    <!--  INTRO SECTION  -->
    <section class="bg bg-blue-500">
      <div class="container max-w-screen-xl mx-auto px-4">
        <div class="pl-5 py-10 sm:py-20 flex justify-between">
          <article class="my-10">
            <h1 class="text-3xl md:text-5xl text-white font-bold">
              Best products &amp; <br />brands in our store
            </h1>
            <p class="text-lg text-white font-normal mt-4 mb-6">
              Trendy Products, Factory Prices, Excellent Service
            </p>
            <div>
              <a
                class="px-4 py-2 inline-block font-semibold bg-yellow-500 text-white border border-transparent rounded-md hover:bg-yellow-600"
                href="http://localhost/fill-rouge/user/nav/OurSports"
              >
                Discover
              </a>
              <a
                class="px-4 py-2 inline-block font-semibold text-blue-600 border border-transparent rounded-md hover:bg-gray-100 bg-white"
                href="http://localhost/fill-rouge/user/terms_and_conditions"
              >
                Learn more
              </a>
            </div>
          </article>
          <div class='w-[36%] h-auto hidden lg:block'>
            <div class='relative w-full h-full'>
              <div class='absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 rounded-full bg-gray-200 opacity-20'></div>
              <img class='absolute' src="./../view/images/hero-img.png" alt="img">
            </div>
          </div>
        </div>
      </div>
      <!-- container //end -->
    </section>
    <!--  INTRO SECTION //END -->

    <!-- SECTION-CONTENT -->
    <section class="bg-gray-100 py-12">
      <div class="container max-w-screen-xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8">New products</h2>

        <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"
        >
        <?php foreach ($LastProducts as $LastProduct) {?>
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200 h-full shadow-sm">
              <a href="http://localhost/fill-rouge/user/details/<?php echo $LastProduct['id'] ?>" class="block relative p-1">
                <img
                  src="<?php echo '../view/uploads/'.$LastProduct['first_img']; ?>"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$<?php echo $LastProduct['price_item'] ?></p>
                <a
                  href="http://localhost/fill-rouge/user/details/<?php echo $LastProduct['id'] ?>"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                <?php echo $LastProduct['name_item'] ?>
                </a>
                <div>
                  <?php if(isset($_SESSION['user'])) { ?>
                  <?php if(product::isProductInCart($_SESSION['user']['id'],$LastProduct['id']) == 0) { ?>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 select-none"
                    href="http://localhost/fill-rouge/user/details/<?php echo $LastProduct['id'] ?>"
                  >
                    Add to cart
                  </a>
                  <?php } else { ?>
                    <a
                    class="px-4 py-2 inline-block text-white text-center bg-green-600 border border-transparent rounded-md hover:bg-green-700 select-none"
                    href="http://localhost/fill-rouge/user/cart"
                  >
                    Added to cart
                  </a>
                  <?php } ?>
                  <?php } else { ?>
                    <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 select-none"
                    href="http://localhost/fill-rouge/user/signIn"
                  >
                    Add to cart
                  </a>
                    <?php } ?>
                  <?php if(isset($_SESSION['user'])) { ?>
                  <?php if(wished_products::checkIfProductIsWished($_SESSION['user']['id'],$LastProduct['id']) == 0) { ?>
                  <form class='inline-block' action="http://localhost/fill-rouge/user/WishProduct" method="POST">
                    <input type="hidden" name="user_id" value='<?php echo $_SESSION['user']['id'] ?>'>
                    <input type="hidden" name="product_id" value='<?php echo $LastProduct['id'] ?>'>
                    <input type="hidden" name="current_page" value='<?php echo 'index' ?>'>
                    <button
                      type='submit'
                      class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 cursor-pointer select-none"
                      id="heart_link"
                    >
                      <i id="heart_icon" class="fa fa-heart"></i>
                    </button>
                  </form>
                  <?php } else { ?>
                    <form class='inline-block' action="http://localhost/fill-rouge/user/UnWishProduct" method="POST">
                    <input type="hidden" name="user_id" value='<?php echo $_SESSION['user']['id'] ?>'>
                    <input type="hidden" name="product_id" value='<?php echo $LastProduct['id'] ?>'>
                    <input type="hidden" name="current_page" value='<?php echo 'index' ?>'>
                    <button
                      type='submit'
                      class="px-3 py-2 inline-block text-blue-500 bg-white border border-gray-300 rounded-md hover:bg-gray-100 cursor-pointer select-none"
                      id="heart_link"
                    >
                      <i id="heart_icon" class="fa fa-heart"></i>
                    </button>
                  </form>
                  <?php } ?>
                  <?php } else { ?>
                    <a
                      href='http://localhost/fill-rouge/user/signIn'
                      class="px-3 py-2 inline-block text-blue-500 bg-white border border-gray-300 rounded-md hover:bg-gray-100 cursor-pointer select-none"
                      id="heart_link"
                    >
                      <i id="heart_icon" class="fa fa-heart"></i>
                    </a>
                  <?php } ?>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
          <?php } ?>
        </div>
        <!-- grid .// -->
      </div>
    </section>
    <!--  SECTION-CONTENT  //END -->

    <!-- SECTION-FEATURES -->
    <section class="bg-white py-12">
      <div class="container max-w-screen-xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8">Why choose us</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
          <div>
            <figure class="flex mb-4">
              <div class="flex-shrink-0 mr-3">
                <span
                  class="block w-16 h-16 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center"
                >
                  <i class="fa fa-money-bill text-2xl"></i>
                </span>
              </div>
              <figcaption>
                <h5 class="font-semibold">Reasonable prices</h5>
                <p class="text-gray-500">
                  We Have The Best Prices and Deals Speacialy Our Black Friday And More 
                </p>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="flex mb-4">
              <div class="flex-shrink-0 mr-3">
                <span
                  class="block w-16 h-16 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center"
                >
                  <i class="fa fa-star text-2xl"></i>
                </span>
              </div>
              <figcaption>
                <h5 class="font-semibold">Best quality</h5>
                <p class="text-gray-500">
                  We Have The Best Products Quality As Our Costumers Says
                </p>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="flex mb-4">
              <div class="flex-shrink-0 mr-3">
                <span
                  class="block w-16 h-16 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center"
                >
                  <i class="fa fa-plane text-2xl"></i>
                </span>
              </div>
              <figcaption>
                <h5 class="font-semibold">Worldwide shipping</h5>
                <p class="text-gray-500">
                  We Ship Our Products For Free In Almost All Places The World
                </p>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="flex mb-4">
              <div class="flex-shrink-0 mr-3">
                <span
                  class="block w-16 h-16 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center"
                >
                  <i class="fa fa-users text-2xl"></i>
                </span>
              </div>
              <figcaption>
                <h5 class="font-semibold">Customer satisfaction</h5>
                <p class="text-gray-500">
                  We Are Proud Of Our Customer's satisfaction Including You
                </p>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="flex mb-4">
              <div class="flex-shrink-0 mr-3">
                <span
                  class="block w-16 h-16 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center"
                >
                  <i class="fa fa-thumbs-up text-2xl"></i>
                </span>
              </div>
              <figcaption>
                <h5 class="font-semibold">Happy customers</h5>
                <p class="text-gray-500">
                   The Happiness Of Our customers Make Us More Productif   
                </p>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="flex mb-4">
              <div class="flex-shrink-0 mr-3">
                <span
                  class="block w-16 h-16 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center"
                >
                  <i class="fa fa-box text-2xl"></i>
                </span>
              </div>
              <figcaption>
                <h5 class="font-semibold">Thousand items</h5>
                <p class="text-gray-500">
                  We Have Lot Of Choices To Let Our customers Choose 
                </p>
              </figcaption>
            </figure>
          </div>
        </div>
        <!-- grid .// -->
      </div>
      <!-- container .// -->
    </section>
    <!-- SECTION-FEATURES //END -->
    <!-- footer -->
    <?php include_once 'view\reusables\footer1.php'; ?>
    <!-- footer end -->
  </body>
</html>
