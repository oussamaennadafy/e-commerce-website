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
	<link href="../view/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<!--  COMPONENT: HEADER -->
	<header class="bg-white py-3 border-b">
		<div class="container max-w-screen-xl mx-auto px-4">
			<div class="flex flex-wrap items-center">
				<!-- Brand -->
				<div class="flex-shrink-0 mr-5">
					<a href="#"> <img src="../view/images/logo.svg" height="38" alt="Brand" /> </a>
				</div>
				<!-- Brand .//end -->
				
				<!-- Search -->
				<div class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-2/4">
					<input class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-md mr-2 py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" type="text" placeholder="Search">
					<button type="button" class="px-4 py-2 inline-block text-white border border-transparent bg-blue-600 text-white rounded-md hover:bg-blue-700">
						Search
					</button>
				</div>
				<!-- Search .//end -->

				<!-- Actions -->
				<div class="flex items-center space-x-2 ml-auto">
					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="#"> 
						<i class="text-gray-400 w-5 fa fa-user"></i> 
						<span class="hidden lg:inline ml-1">Sign in</span>
					</a>

					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="#"> 
						<i class="text-gray-400 w-5 fa fa-heart"></i> 
						<span class="hidden lg:inline ml-1">Wishlist</span> 
					</a>

					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="#"> 
						<i class="text-gray-400 w-5 fa fa-shopping-cart"></i> 
						<span class="hidden lg:inline ml-1">My cart</span>
					</a>
				</div>
				<!-- Actions .//end -->
				
				<!-- mobile-only -->
				<div class="lg:hidden ml-2">
					<button type="button" class="bg-white p-3 inline-flex items-center rounded-md text-black hover:bg-gray-200 hover:text-gray-800 border border-transparent">
						<span class="sr-only">Open menu</span>
						<i class="fa fa-bars fa-lg"></i>
					</button>
				</div>
				<!-- mobile-only //end  -->

			</div> <!-- flex grid //end -->
		</div> <!-- container //end -->
	</header>
	<nav>
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- Bottom -->
			<div class="hidden lg:flex flex-1 items-center py-1">
				<a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#"> Category </a>
				<a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#"> About </a>
				<a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#"> Services </a>
				<a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#"> Projects </a>
				<a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#"> Offers </a>
				<a class="px-3 py-2 rounded-md hover:bg-gray-100" href="#"> Others </a>
			</div>
			<!-- Bottom //end -->
		</div> <!-- container //end -->
	</nav>
	<!--  COMPONENT: HEADER //END -->


	<section class="bg-blue-100 py-4">
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- breadcrumbs start -->
			<ol class="inline-flex flex-wrap text-gray-600 space-x-1 md:space-x-3 items-center">
				<li class="inline-flex items-center">
					<a class="text-gray-600 hover:text-blue-600" href="#">Home</a>  
					<i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center" aria-current="page">
					<a class="text-gray-600 hover:text-blue-600" href="#"> Clothes </a> 
					<i class="ml-3 text-gray-400  fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center" aria-current="page">
					<a class="text-gray-600 hover:text-blue-600" href="#"> Men's wear </a> 
					<i class="ml-3 text-gray-400  fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center"> Detail </li>
			</ol>
			<!-- breadcrumbs end -->
		</div> <!-- container .// -->
	</section>

	<section class="bg-white py-10">
		<div class="container max-w-screen-xl mx-auto px-4">
			
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
				<aside>
					<!-- gallery -->
					<div class="border border-gray-200 shadow-sm p-3 text-center rounded mb-5">
						<img class="object-cover inline-block" width="400" src="../view/images/items/detail/big.jpg" alt="Product title">
					</div>
					<div class="space-x-2 overflow-auto text-center whitespace-nowrap">
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14" src="../view/images/items/detail/thumb.jpg" alt="Product title">
						</a>
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500 ">
							<img class="w-14 h-14 object-cover" src="../view/images/items/detail/thumb1.jpg" alt="Product title">
						</a>
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14 object-cover" src="../view/images/items/detail/thumb2.jpg" alt="Product title">
						</a>
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14 object-cover" src="../view/images/items/detail/thumb3.jpg" alt="Product title">
						</a>
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14 object-cover" src="../view/images/items/detail/thumb4.jpg" alt="Product title">
						</a>
					</div>
					<!-- gallery end.// -->
				</aside>
				<main>
					<h2 class="font-semibold text-2xl mb-4">
						Sweater Men New Arrival Casual Pullover <br> Men Long Sleeve
					</h2>

					<div class="flex flex-wrap items-center space-x-2 mb-2">

						<img class="d-inline-block h-4" src="../view/images/misc/stars-active.svg" alt="Rating">
						<span class="text-yellow-500">9.3</span>

						<svg width="6px" height="6px" viewbox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
							<circle cx="3" cy="3" r="3" fill="#DBDBDB" />
						</svg>

						<span class="text-gray-400">
							<i class="fa fa-shopping-bag mr-2"></i> 154 orders
						</span>

						<svg width="6px" height="6px" viewbox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
							<circle cx="3" cy="3" r="3" fill="#DBDBDB" />
						</svg>

						<span class="text-green-500">Verified</span>

					</div>

					<p class="mb-4 font-semibold text-xl">$98.00 
						<span class="text-base font-normal">/1 box</span>
					</p>

					<p class="mb-4 text-gray-500">
						Virgil Abloh’s Off-White is a streetwear-inspired collection that
						continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers. 
					</p>

					
					<ul class="mb-5">
						<li class="mb-1"> <b class="font-medium w-36 inline-block">Model#:</b> 
							<span  class="text-gray-500">Odsy-1000</span>
						</li>
						<li class="mb-1"> <b class="font-medium w-36 inline-block">Color:</b> 
							<span  class="text-gray-500">Brown</span>
						</li>
						<li class="mb-1"> <b class="font-medium w-36 inline-block">Delivery:</b> 
							<span  class="text-gray-500">Russia, USA & Europe</span></li>
						<li class="mb-1"> <b class="font-medium w-36 inline-block">Color:</b> 
							<span  class="text-gray-500">Brown</span>
						</li>
					</ul>

					<div class="flex flex-wrap mb-4">
						<!-- select-custom -->
						<div class="relative w-1/3 lg:w-1/4 mr-2 mb-4">
					      <select class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 pr-5 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full">
					        <option>Select size</option>
					        <option>Extra large</option>
					        <option>Medium size</option>
					        <option>Normal size</option>
					      </select>
					      <i class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
					        <svg width="24" height="24" class="fill-current h-5 w-5" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5H7z"/></svg>
					      </i>
					    </div>
					    <!-- select-custom .//end  -->

					    <!-- select-custom -->
						<div class="relative w-1/3 lg:w-1/4 mr-2 mb-4">
					      <select class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 pr-5 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full">
					        <option>Select color</option>
					        <option>Lightblue</option>
					        <option>Green</option>
					        <option>Black</option>
					      </select>
					      <i class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
					        <svg width="24" height="24" class="fill-current h-5 w-5" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5H7z"/></svg>
					      </i>
					    </div>
					    <!-- select-custom .//end  -->
					</div>
					<!-- action buttons -->
					<div class="flex flex-wrap gap-2">
						<a class="px-4 py-2 inline-block text-white bg-yellow-500 border border-transparent rounded-md hover:bg-yellow-600" href="#">
    						Buy now
						</a>
						<a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
							href="#">
							<i class="fa fa-shopping-cart mr-2"></i> 
							Add to cart 
						</a>
						<a class="px-4 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100"
							href="#">
							<i class="fa fa-heart mr-2"></i> 
							Save for later 
						</a>
					</div>
					<!-- action buttons .//end -->
				</main>
			</div> <!-- grid .// -->
		</div> <!-- container .// -->
	</section>

	<section class="bg-gray-100 py-10">
		<div class="container max-w-screen-xl mx-auto px-4">
			
			<div class="flex flex-wrap -mx-2">
				<div class="lg:w-3/4 px-2">

					<article class="border border-gray-200 shadow-sm rounded bg-white">
						<nav class="border-b px-4">
							<a href="#" class="px-3 py-4 mx-1 inline-block border-b border-blue-600 text-blue-600 hover:border-blue-600 hover:text-blue-500">Overview</a>
							<a href="#" class="px-3 py-4 mx-1 inline-block hover:border-blue-600 hover:text-blue-500">Specification</a>
							<a href="#" class="px-3 py-4 mx-1 inline-block hover:border-blue-600 hover:text-blue-500">Delivery</a>
							<a href="#" class="px-3 py-4 mx-1 inline-block hover:border-blue-600 hover:text-blue-500">Payment info</a>
							<a href="#" class="px-3 py-4 mx-1 inline-block hover:border-blue-600 hover:text-blue-500">Seller profile</a>
						</nav>
						<div class="p-5 text-gray-700">
							<p class="mb-3">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p class="mb-3">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. <br> Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p class="mb-3">
								Dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. <br> Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p class="mb-3">
								Consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>
					</article>
				</div> <!-- col.// -->
				<aside class="lg:w-1/4 px-2">
					
					<article class="border border-gray-200 shadow-sm rounded bg-white p-4">
						<h3 class="mb-5 text-lg font-semibold">Similar products</h3>

						<figure class="flex flex-row mb-4">
							<div>
								<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
									<img src="../view/images/items/8.jpg" alt="Title">
								</a>
							</div>
							<figcaption class="ml-3">
								<p><a href="#" class="text-gray-600 hover:text-blue-600">Travel Bag Jeans Blue Color Modern</a></p>
								<p class="mt-1 font-semibold">$712.00</p>
							</figcaption>
						</figure>

						<figure class="flex flex-row mb-4">
							<div>
								<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
									<img src="../view/images/items/9.jpg" alt="Title">
								</a>
							</div>
							<figcaption class="ml-3">
								<p><a href="#" class="text-gray-600 hover:text-blue-600">Apple Watch Series 4 - Space Gray</a></p>
								<p class="mt-1 font-semibold">$12.99</p>
							</figcaption>
						</figure>

						<figure class="flex flex-row mb-4">
							<div>
								<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
									<img src="../view/images/items/10.jpg" alt="Title">
								</a>
							</div>
							<figcaption class="ml-3">
								<p><a href="#" class="text-gray-600 hover:text-blue-600">Apple Watch Series 4 - Space Gray</a></p>
								<p class="mt-1 font-semibold">$12.99</p>
							</figcaption>
						</figure>

						<figure class="flex flex-row mb-4">
							<div>
								<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
									<img src="../view/images/items/11.jpg" alt="Title">
								</a>
							</div>
							<figcaption class="ml-3">
								<p><a href="#" class="text-gray-600 hover:text-blue-600">Apple Watch Series 4 - Space Gray</a></p>
								<p class="mt-1 font-semibold">$12.99</p>
							</figcaption>
						</figure>

					</article>

				</aside> <!-- col.// -->
			</div> <!-- grid.// -->

		</div> <!-- container.// -->
	</section>

	<footer class="py-6 bg-gray-200">
		<p class="text-center"><a href="https://tailwind-ecommerce.com">Tailwind ecommerce</a></p>
	</footer>

</body>
</html>