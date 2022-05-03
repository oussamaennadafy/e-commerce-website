<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Type some info" />
    <meta name="author" content="Type name" />

    <title>Tailwind Ecommerce Kit</title>

    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome 5 -->
    <link
      href="../view/fonts/fontawesome/css/all.min.css"
      type="text/css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!--  COMPONENT: HEADER -->
    <header class="bg-white py-3 border-b">
      <div class="container max-w-screen-xl mx-auto px-4">
        <div class="flex flex-wrap items-center">
          <!-- Brand -->
          <div class="flex-shrink-0 mr-5">
            <a href="#">
              <img src="../view/images/logo.svg" height="38" alt="Brand" />
            </a>
          </div>
          <!-- Brand .//end -->

          <!-- Actions -->
          <div class="flex items-center space-x-2 ml-auto">
            <a
              class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
              href="#"
            >
              <i class="text-gray-400 w-5 fa fa-user"></i>
              <span class="hidden lg:inline ml-1">Sign in</span>
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
    <!--  COMPONENT: HEADER //END -->

    <!--  PAGE HEADER -->
    <section class="py-5 sm:py-7 bg-blue-100">
      <div class="container max-w-screen-xl mx-auto px-4">
        <!-- breadcrumbs start -->
        <ol
          class="inline-flex flex-wrap text-gray-600 space-x-1 md:space-x-3 items-center"
        >
          <li class="inline-flex items-center">
            <a class="text-gray-600 hover:text-blue-600" href="#">Home</a>
            <i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
          </li>
          <li class="inline-flex items-center" aria-current="page">
            <a class="text-gray-600 hover:text-blue-600" href="#"> Cart </a>
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
                    href="#"
                  >
                    Sign in
                  </a>

                  <a
                    class="px-4 py-2 inline-block text-white bg-blue-600 shadow-sm border border-transparent rounded-md hover:bg-blue-700"
                    href="#"
                  >
                    Create account
                  </a>
                </div>
              </div>
            </article>
            <!-- card.// -->

            <article
              class="border border-gray-200 bg-white shadow-sm rounded p-4 lg:p-6 mb-5"
            >
              <h2 class="text-xl font-semibold mb-5">Guest checkout</h2>

              <div class="grid grid-cols-2 gap-x-3">
                <div class="mb-4">
                  <label class="block mb-1"> First name </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    type="text"
                    placeholder="Type here"
                  />
                </div>

                <div class="mb-4">
                  <label class="block mb-1"> Last name </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    type="text"
                    placeholder="Type here"
                  />
                </div>
              </div>

              <div class="grid lg:grid-cols-2 gap-x-3">
                <div class="mb-4">
                  <label class="block mb-1"> Phone </label>
                  <div class="flex w-full">
                    <input
                      class="appearance-none w-24 border border-gray-200 bg-gray-100 rounded-tl-md rounded-bl-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400"
                      type="text"
                      placeholder="Code"
                      value="+998"
                    />
                    <input
                      class="appearance-none flex-1 border border-gray-200 bg-gray-100 rounded-tr-md rounded-br-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400"
                      type="text"
                      placeholder="Type phone"
                    />
                  </div>
                </div>

                <div class="mb-4">
                  <label class="block mb-1"> Email </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    type="email"
                    placeholder="Type here"
                  />
                </div>
              </div>

              <label class="flex items-center w-max my-4">
                <input checked="" name="" type="checkbox" class="h-4 w-4" />
                <span class="ml-2 inline-block text-gray-500">
                  I agree with Terms and Conditions
                </span>
              </label>

              <hr class="my-4" />

              <h2 class="text-xl font-semibold mb-5">Shipping information</h2>

              <!-- radio selection -->
              <div class="grid sm:grid-cols-3 gap-3 mb-6">
                <label
                  class="flex p-3 border border-gray-200 rounded-md bg-gray-50 hover:border-blue-400 hover:bg-blue-50 cursor-pointer"
                >
                  <span
                    ><input name="shipping" type="radio" class="h-4 w-4 mt-1"
                  /></span>
                  <p class="ml-2">
                    <span>Express delivery</span>
                    <small class="block text-sm text-gray-400"
                      >3-4 days via Fedex</small
                    >
                  </p>
                </label>
                <label
                  class="flex p-3 border border-gray-200 rounded-md bg-gray-50 hover:border-blue-400 hover:bg-blue-50 cursor-pointer"
                >
                  <span
                    ><input name="shipping" type="radio" class="h-4 w-4 mt-1"
                  /></span>
                  <p class="ml-2">
                    <span>Post office</span>
                    <small class="block text-sm text-gray-400"
                      >20-30 days via post</small
                    >
                  </p>
                </label>
                <label
                  class="flex p-3 border border-gray-200 rounded-md bg-gray-50 hover:border-blue-400 hover:bg-blue-50 cursor-pointer"
                >
                  <span
                    ><input name="shipping" type="radio" class="h-4 w-4 mt-1"
                  /></span>
                  <p class="ml-2">
                    <span>Self pick-up</span>
                    <small class="block text-sm text-gray-400"
                      >Nearest location</small
                    >
                  </p>
                </label>
              </div>
              <!-- radio selection .//end -->

              <div class="grid md:grid-cols-3 gap-x-3">
                <div class="mb-4 md:col-span-2">
                  <label class="block mb-1"> Address* </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    type="text"
                    placeholder="Type here"
                  />
                </div>

                <div class="mb-4 md:col-span-1">
                  <label class="block mb-1"> City* </label>
                  <div class="relative">
                    <select
                      class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    >
                      <option>Select here</option>
                      <option>Second option</option>
                      <option>Third option</option>
                    </select>
                    <i class="absolute inset-y-0 right-0 p-2 text-gray-400">
                      <svg
                        width="22"
                        height="22"
                        class="fill-current"
                        viewBox="0 0 20 20"
                      >
                        <path d="M7 10l5 5 5-5H7z" />
                      </svg>
                    </i>
                  </div>
                </div>
              </div>

              <div class="grid md:grid-cols-3 gap-x-3">
                <div class="mb-4 md:col-span-1">
                  <label class="block mb-1"> House </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    type="text"
                    placeholder="Type here"
                  />
                </div>

                <div class="mb-4 md:col-span-1">
                  <label class="block mb-1"> Building </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    type="text"
                    placeholder="Type here"
                  />
                </div>

                <div class="mb-4 md:col-span-1">
                  <label class="block mb-1"> ZIP code </label>
                  <input
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                    type="text"
                    placeholder="Type here"
                  />
                </div>
              </div>

              <div class="mb-4">
                <label class="block mb-1"> Other info </label>
                <textarea
                  placeholder="Type your wishes"
                  class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full"
                ></textarea>
              </div>

              <label class="flex items-center w-max my-4">
                <input checked="" name="" type="checkbox" class="h-4 w-4" />
                <span class="ml-2 inline-block text-gray-500">
                  Save my information for future purchase
                </span>
              </label>

              <div class="flex justify-end space-x-2">
                <a
                  class="px-5 py-2 inline-block text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600"
                  href="#"
                >
                  Back
                </a>
                <a
                  class="px-5 py-2 inline-block text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700"
                  href="#"
                >
                  Continue
                </a>
              </div>
            </article>
            <!-- card.// -->
          </main>
          <aside class="md:w-1/3">
            <article class="text-gray-600" style="max-width: 350px">
              <h2 class="text-lg font-semibold mb-3">Summary</h2>
              <ul>
                <li class="flex justify-between mb-1">
                  <span>Total price:</span>
                  <span>$245.97</span>
                </li>
                <li class="flex justify-between mb-1">
                  <span>Discount:</span>
                  <span class="text-green-500">- $60.00</span>
                </li>
                <li class="flex justify-between mb-1">
                  <span>TAX:</span>
                  <span>$14.00</span>
                </li>
                <li class="border-t flex justify-between mt-3 pt-3">
                  <span>Total price:</span>
                  <span class="text-gray-900 font-bold">$420.00</span>
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
                  <div
                    class="block relative w-20 h-20 rounded p-1 border border-gray-200"
                  >
                    <img
                      width="70"
                      height="70"
                      src="../view/images/items/1.jpg"
                      alt="Title"
                    />
                    <span
                      class="absolute -top-2 -right-2 w-6 h-6 text-sm text-center flex items-center justify-center text-white bg-gray-400 rounded-full"
                    >
                      1
                    </span>
                  </div>
                </div>
                <figcaption class="ml-3">
                  <p>
                    GoPRO Action Camera <br />
                    Model: G-200
                  </p>
                  <p class="mt-1 text-gray-400">Total: $12.99</p>
                </figcaption>
              </figure>

              <figure class="flex items-center mb-4 leading-5">
                <div>
                  <div
                    class="block relative w-20 h-20 rounded p-1 border border-gray-200"
                  >
                    <img
                      width="70"
                      height="70"
                      src="../view/images/items/2.jpg"
                      alt="Title"
                    />
                    <span
                      class="absolute -top-2 -right-2 w-6 h-6 text-sm text-center flex items-center justify-center text-white bg-gray-400 rounded-full"
                    >
                      2
                    </span>
                  </div>
                </div>
                <figcaption class="ml-3">
                  <p>Modern Product Name Here</p>
                  <p class="mt-1 text-gray-400">Total: $12.99</p>
                </figcaption>
              </figure>

              <figure class="flex items-center mb-4 leading-5">
                <div>
                  <div
                    class="block relative w-20 h-20 rounded p-1 border border-gray-200"
                  >
                    <img
                      width="70"
                      height="70"
                      src="../view/images/items/8.jpg"
                      alt="Title"
                    />
                    <span
                      class="absolute -top-2 -right-2 w-6 h-6 text-sm text-center flex items-center justify-center text-white bg-gray-400 rounded-full"
                    >
                      5
                    </span>
                  </div>
                </div>
                <figcaption class="ml-3">
                  <p>
                    Another Best Product <br />
                    Name Goes Here
                  </p>
                  <p class="mt-1 text-gray-400">Total: $12.99</p>
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

    <footer class="py-6 bg-gray-200">
      <p class="text-center">
        <a href="https://tailwind-ecommerce.com">Tailwind ecommerce</a>
      </p>
    </footer>
  </body>
</html>
