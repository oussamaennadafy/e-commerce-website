<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Type some info" />
    <meta name="author" content="Type name" />
    <!-- <base href="/" /> -->
    <title>Tailwind Ecommerce Kit</title>
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
            <a href="http://localhost/fill-rouge/user/index">
              <img src="../view/images/logo.svg" height="38" alt="Brand" />
              <!-- <img src="/view/" alt=""> -->
            </a>
          </div>
          <!-- Brand .//end -->
          <!-- Search -->

          <form
            method="POST"
            action="http://localhost/fill-rouge/user/items"
            class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-2/4"
          >
            <input
              class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-md mr-2 py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400"
              type="text"
              placeholder="Search"
            />
            <button
              type="submit"
              class="px-4 py-2 inline-block text-white border border-transparent bg-blue-600 rounded-md hover:bg-blue-700"
            >
              <i class="fa fa-search"></i>
            </button>
          </form>

          <!-- Search .//end -->

          <!-- Actions -->
          <div class="flex items-center space-x-2 ml-auto">
            <a
              class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
              href="http://localhost/fill-rouge/user/signIn"
            >
              <i class="text-gray-400 w-5 fa fa-user"></i>
              <span class="hidden lg:inline ml-1">Sign in</span>
            </a>

            <a
              class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
              href="#"
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
          </div>
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
    <nav class="relative shadow-sm">
      <div class="container max-w-screen-xl mx-auto px-4">
        <!-- Bottom -->
        <div class="hidden lg:flex flex-1 items-center py-1">
          <a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#">
            Category
          </a>
          <a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#"> About </a>
          <a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#">
            Services
          </a>
          <a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#">
            Projects
          </a>
          <a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#">
            Offers
          </a>
          <a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#">
            Others
          </a>
        </div>
        <!-- Bottom //end -->
      </div>
      <!-- container //end -->
    </nav>
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
                href="http://localhost/fill-rouge/user/items"
              >
                Discover
              </a>
              <a
                class="px-4 py-2 inline-block font-semibold text-blue-600 border border-transparent rounded-md hover:bg-gray-100 bg-white"
                href="#"
              >
                Learn more
              </a>
            </div>
          </article>
            <img src="../view/images/shoe.png" alt="shoe" class="absolute top-100 left-100">
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
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200">
              <a href="#" class="block relative p-1">
                <img
                  src="../view/images/items/10.jpg"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$99.50</p>
                <a
                  href="#"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                  Sample name of the product just goes here
                </a>
                <div>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Add to cart
                  </a>
                  <a
                    class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    <i class="fa fa-heart"></i>
                  </a>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200">
              <a href="#" class="block relative p-1">
                <img
                  src="../view/images/items/11.jpg"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$99.50</p>
                <a
                  href="#"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                  Sample name of the product just goes here
                </a>
                <div>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Add to cart
                  </a>
                  <a
                    class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    <i class="fa fa-heart"></i>
                  </a>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200">
              <a href="#" class="block relative p-1">
                <img
                  src="../view/images/items/12.jpg"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$99.50</p>
                <a
                  href="#"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                  Sample name of the product just goes here
                </a>
                <div>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Add to cart
                  </a>
                  <a
                    class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    <i class="fa fa-heart"></i>
                  </a>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200">
              <a href="#" class="block relative p-1">
                <img
                  src="../view/images/items/13.jpg"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$99.50</p>
                <a
                  href="#"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                  Sample name of the product just goes here
                </a>
                <div>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Add to cart
                  </a>
                  <a
                    class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    <i class="fa fa-heart"></i>
                  </a>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200">
              <a href="#" class="block relative p-1">
                <img
                  src="../view/images/items/8.jpg"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$99.50</p>
                <a
                  href="#"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                  Sample name of the product just goes here
                </a>
                <div>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Add to cart
                  </a>
                  <a
                    class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    <i class="fa fa-heart"></i>
                  </a>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200">
              <a href="#" class="block relative p-1">
                <img
                  src="../view/images/items/6.jpg"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$99.50</p>
                <a
                  href="#"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                  Sample name of the product just goes here
                </a>
                <div>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Add to cart
                  </a>
                  <a
                    class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    <i class="fa fa-heart"></i>
                  </a>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200">
              <a href="#" class="block relative p-1">
                <img
                  src="../view/images/items/1.jpg"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$99.50</p>
                <a
                  href="#"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                  Sample name of the product just goes here
                </a>
                <div>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Add to cart
                  </a>
                  <a
                    class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    <i class="fa fa-heart"></i>
                  </a>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
          <div>
            <!-- COMPONENT: PRODUCT CARD -->
            <article class="shadow-sm rounded bg-white border border-gray-200">
              <a href="#" class="block relative p-1">
                <img
                  src="../view/images/items/2.jpg"
                  class="mx-auto w-auto"
                  height="240"
                  alt="Product title here"
                />
              </a>
              <div class="p-4 border-t border-t-gray-200">
                <p class="font-semibold">$99.50</p>
                <a
                  href="#"
                  class="block text-gray-600 mb-3 hover:text-blue-500"
                >
                  Sample name of the product just goes here
                </a>
                <div>
                  <a
                    class="px-4 py-2 inline-block text-white text-center bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Add to cart
                  </a>
                  <a
                    class="px-3 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    <i class="fa fa-heart"></i>
                  </a>
                </div>
              </div>
            </article>
            <!-- COMPONENT: PRODUCT CARD //END -->
          </div>
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do
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

    <footer class="bg-blue-600">
      <!-- section footer top -->

      <section class="py-12 text-white">
        <div class="container max-w-screen-xl mx-auto px-4">
          <div class="flex flex-wrap">
            <aside class="w-full md:w-1/3 lg:w-1/4 mb-5">
              <img src="../view/images/logo-white.png" height="38" alt="Company name" />
              <p class="my-4">
                Company name. <br />
                © 2018- 2021 Templatemount. <br />
                All rights reserved.
              </p>
            </aside>
            <!-- col .// -->
            <aside class="w-1/2 sm:w-auto flex-auto mb-5">
              <h3 class="font-semibold">Store</h3>
              <ul class="mt-2 space-y-1">
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100"> Join us </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Find store
                  </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Categories
                  </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Partnership
                  </a>
                </li>
              </ul>
            </aside>
            <!-- col .// -->
            <aside class="w-1/2 sm:w-auto flex-auto mb-5">
              <h3 class="font-semibold">About</h3>
              <ul class="mt-2 space-y-1">
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    About us
                  </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Our history
                  </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Our team
                  </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100"> Offices </a>
                </li>
              </ul>
            </aside>
            <!-- col .// -->
            <aside class="w-1/2 sm:w-auto flex-auto mb-5">
              <h3 class="font-semibold">Help</h3>
              <ul class="mt-2 space-y-1">
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Contact us
                  </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Submit ticket
                  </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100"> FAQs </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100"> Refunds </a>
                </li>
              </ul>
            </aside>
            <!-- col .// -->
            <aside class="w-1/2 sm:w-auto flex-auto mb-5">
              <h3 class="font-semibold">Links</h3>
              <ul class="mt-2 space-y-1">
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Our terms
                  </a>
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100">
                    Privacy setting</a
                  >
                </li>
                <li>
                  <a href="#" class="opacity-70 hover:opacity-100"> Sign up </a>
                </li>
              </ul>
            </aside>
            <!-- col .// -->
            <aside class="w-full md:w-1/2 lg:w-1/4 mb-5">
              <h3 class="font-semibold mb-2">Newsletter</h3>
              <p class="text-white text-opacity-70 mb-5">
                Stay in touch with latest updates about our products and offers
              </p>
              <!-- email start-->
              <form class="flex w-80">
                <input
                  class="text-black w-full appearance-none border border-transparent bg-gray-100 py-2 px-3 rounded-tl-md rounded-bl-md"
                  type="email"
                  placeholder="Email"
                />

                <button
                  class="px-4 py-2 text-blue-600 bg-blue-100 border border-transparent rounded-tr-md rounded-br-md hover:bg-blue-200"
                >
                  Join
                </button>
              </form>
              <!-- email end-->
            </aside>
            <!-- col .// -->
          </div>
          <!-- grid .// -->
        </div>
        <!-- container .// -->
      </section>
      <!-- section footer top end -->

      <!-- section footer bottom  -->
      <section class="bg-blue-700 py-6 text-white">
        <div class="container max-w-screen-xl mx-auto px-4">
          <div class="lg:flex justify-between">
            <div class="mb-3">
              <img
                src="../view/images/misc/payments.png"
                height="24"
                class="h-6"
                alt="Payment methods"
              />
            </div>
            <!-- col .// -->
            <div class="space-x-6">
              <nav class="text-sm space-x-4">
                <a href="#" class="opacity-70 hover:opacity-100"> Support </a>
                <a href="#" class="opacity-70 hover:opacity-100">
                  Privacy &amp; Cookies
                </a>
                <a href="#" class="opacity-70 hover:opacity-100">
                  Accessibility
                </a>
              </nav>
            </div>
            <!-- col .// -->
          </div>
          <!-- grid .// -->
        </div>
        <!-- container .// -->
      </section>
      <!-- section footer bottom  end -->
    </footer>
  </body>
</html>
