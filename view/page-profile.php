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
					<a href="http://localhost/fill-rouge/user/index"> <img src="../view/images/logo.svg" height="38" alt="Brand" /> </a>
				</div>
				<!-- Brand .//end -->
				
				<!-- Search -->

				<!-- <div class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-2/4">
					<input class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-md mr-2 py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" type="text" placeholder="Search">
					<button type="button" class="px-4 py-2 inline-block text-white border border-transparent bg-blue-600 text-white rounded-md hover:bg-blue-700">
						Search
					</button>
				</div> -->
				
				<!-- Search .//end -->

				<!-- Actions -->
				<div class="flex items-center space-x-2 ml-auto">
					<!-- <a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="#"> 
						<i class="text-gray-400 w-5 fa fa-user"></i> 
						<span class="hidden lg:inline ml-1">Sign in</span>
					</a> -->

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

	<!--  PAGE HEADER -->
	<section class="py-5 sm:py-7 bg-blue-100">
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- breadcrumbs start -->
			<ol class="inline-flex flex-wrap text-gray-600 space-x-1 md:space-x-3 items-center">
				<li class="inline-flex items-center">
					<a class="text-gray-600 hover:text-blue-600" href="#">Home</a>  
					<i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center" aria-current="page">
					<a class="text-gray-600 hover:text-blue-600" href="#"> Profile </a> 
					<i class="ml-3 text-gray-400  fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center"> Orders </li>
			</ol>
			<!-- breadcrumbs end -->
		</div><!-- /.container -->
	</section>
	<!--  PAGE HEADER .//END  -->

	<section class="py-10">
		<div class="container max-w-screen-xl mx-auto px-4">

<div class="flex flex-col md:flex-row -mx-4">
	<aside class="md:w-1/3 lg:w-1/4 px-4">
		<ul>
			<li> <a class="block px-3 py-2 text-blue-500 bg-gray-100 hover:bg-blue-100 hover:text-blue-500 rounded-md" href="#">Account main</a>
			</li>
			<li> <a class="block px-3 py-2 text-gray-800 hover:bg-blue-100 hover:text-blue-500 rounded-md" href="#">New orders</a>
			</li>
			<li> <a class="block px-3 py-2 text-gray-800 hover:bg-blue-100 hover:text-blue-500 rounded-md" href="#">Orders history</a>
			</li>
			<li> <a class="block px-3 py-2 text-gray-800 hover:bg-blue-100 hover:text-blue-500 rounded-md" href="#">My wishlist</a>
			</li>
			<li> <a class="block px-3 py-2 text-gray-800 hover:bg-blue-100 hover:text-blue-500 rounded-md" href="#">Transactions</a>
			</li>
			<li> <a class="block px-3 py-2 text-gray-800 hover:bg-blue-100 hover:text-blue-500 rounded-md" href="#">Profile setting</a>
			</li>
			<li> <a class="block px-3 py-2 text-gray-800 hover:bg-blue-100 hover:text-blue-500 rounded-md" href="#">Log out</a>
			</li>
		</ul>
	</aside> <!-- col.// -->
	<main  class="md:w-2/3 lg:w-3/4 px-4">
		
		<article class="border border-gray-200 bg-white shadow-sm rounded mb-5 p-3 lg:p-5">
			
			<figure class="flex items-start sm:items-center">
				<img class="w-16 rounded-full mr-4" src="../view/images/avatars/avatar3.jpg" alt="">
				<figcaption>
					<h5 class="font-semibold text-lg">Mr. Jackson Mike</h5>
					<p>	
						Email: <a href="mailto:myusername@gmail.com">myusername@gmail.com</a> | 
						Phone: <a href="tel:+1234567890988">+1234567890988</a>
					</p>
				</figcaption>
			</figure>
			
			<hr class="my-4">
			
			<div class="sm:flex mb-5 gap-4">
				<figure class="md:w-1/2 flex items-center relative bg-gray-100 p-4 rounded-md">
					<div class="mr-3">
						<span class="flex items-center justify-center text-yellow-500 w-12 h-12 bg-white rounded-full shadow"> 
							<i class="fa fa-map-marker-alt"></i>
						</span>
					</div>
					<figcaption class="text-gray-600">
						<p> Tashkent city, Street name, <br> Building 123, House 321 
							<small class="text-gray-400">(Primary)</small>
						</p>
					</figcaption>
				</figure>
				<figure class="md:w-1/2 flex items-center relative bg-gray-100 p-4 rounded-md">
					<div class="mr-3">
						<span class="flex items-center justify-center text-yellow-500 w-12 h-12 bg-white rounded-full shadow"> 
							<i class="fa fa-map-marker-alt"></i>
						</span>
					</div>
					<figcaption class="text-gray-600">
						<p> Washington DC, Street name, <br> Building 4343, Aprt 32   </p>
					</figcaption>
				</figure>
			</div>
			<button class="px-4 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100">
				<i class="mr-1 fa fa-plus"></i> Add new address
			</button>
			 
			<hr class="my-4">

			
			<h3 class="text-xl font-semibold mb-5">Current orders</h3>
			
			<!-- item-order 1 -->
			<article class="p-3 lg:p-5 mb-5 bg-white border border-blue-600 rounded-md">
				<header class="lg:flex justify-between mb-4">
					<div class="mb-4 lg:mb-0">
						<p class="font-semibold">
							<span>Order ID: 234 </span>  
							<span class="text-green-500"> • Confirmed </span>
						</p>
						<p class="text-gray-500"> Dec 29, Mon, 2018 </p>
					</div>
					<div>
						<button class="px-3 py-1 inline-block text-sm text-red-500 border border-gray-300 rounded-md hover:text-red-500 hover:border-red-600">
							Cancel order
						</button>
						<button
							class="px-3 py-1 inline-block text-white text-sm bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700">
							Track order
						</button>
					</div>
				</header>
				<div class="grid md:grid-cols-3 gap-2"> 
					<div>
						<p class="text-gray-400 mb-1">Person</p>
						<ul class="text-gray-600">
							<li>Mike Johnatan</li>
							<li>Phone: 371-295-9131</li>
							<li>Email: info@mywebsite.com</li>
						</ul>
					</div> 
					<div>
						<p class="text-gray-400 mb-1">Delivery address</p>
						<ul class="text-gray-600">
							<li>4715 Madisen Throughway</li>
							<li>That street 053</li>
							<li>Palo Alto, California</li>
						</ul>
					</div> 
					<div>
						<p class="text-gray-400 mb-1">Payment</p>
						<ul class="text-gray-600">
							<li class="text-green-400">Visa card **** 4216</li>
							<li>Shipping fee: $12.00</li>
							<li>Total paid: $412.00</li>
						</ul>
					</div> 
				</div> <!-- grid.// --> 
				
				<hr class="my-4">

				<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2">
					
					<figure class="flex flex-row mb-4">
						<div>
							<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
								<img src="../view/images/items/10.jpg" alt="Title">
							</a>
						</div>
						<figcaption  class="ml-3">
							<p><a href="#" class="text-gray-600 hover:text-blue-600">Travel Bag Jeans Blue Color Modern</a></p>
							<p class="mt-1 font-semibold">2x = $330.00</p>
						</figcaption>
					</figure>

					<figure class="flex flex-row mb-4">
						<div>
							<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
								<img src="../view/images/items/11.jpg" alt="Title">
							</a>
						</div>
						<figcaption  class="ml-3">
							<p><a href="#" class="text-gray-600 hover:text-blue-600">Travel Bag Jeans Blue Color Modern</a></p>
							<p class="mt-1 font-semibold">1x = $120.90</p>
						</figcaption>
					</figure>

					<figure class="flex flex-row mb-4">
						<div>
							<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
								<img src="../view/images/items/12.jpg" alt="Title">
							</a>
						</div>
						<figcaption class="ml-3">
							<p><a href="#" class="text-gray-600 hover:text-blue-600">Travel Bag Jeans Blue Color Modern</a></p>
							<p class="mt-1 font-semibold">4x = $130.99</p>
						</figcaption>
					</figure>
				</div> <!-- grid.// --> 
			</article>
			<!-- item-order 1 end//-->
			
			<!-- item-order 2 -->
			<article class="p-3 lg:p-5 mb-5 bg-white border border-blue-600 rounded-md">
				<header class="lg:flex justify-between mb-4">
					<div class="mb-4 lg:mb-0">
						<p class="font-semibold">
							<span>Order ID: 234 </span>  
							<span class="text-red-500"> • Pending </span>
						</p>
						<p class="text-gray-500"> Dec 29, Mon, 2018 </p>
					</div>
					<div>
						<button class="px-3 py-1 inline-block text-sm text-red-500 border border-gray-300 rounded-md hover:text-red-500 hover:border-red-600">
							Cancel order
						</button>
						<button
							class="px-3 py-1 inline-block text-white text-sm bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700">
							Track order
						</button>
					</div>
				</header>
				<div class="grid md:grid-cols-3 gap-2"> 
					<div>
						<p class="text-gray-400 mb-1">Person</p>
						<ul class="text-gray-600">
							<li>Mike Johnatan</li>
							<li>Phone: 371-295-9131</li>
							<li>Email: info@mywebsite.com</li>
						</ul>
					</div> 
					<div>
						<p class="text-gray-400 mb-1">Delivery address</p>
						<ul class="text-gray-600">
							<li>4715 Madisen Throughway</li>
							<li>That street 053</li>
							<li>Palo Alto, California</li>
						</ul>
					</div> 
					<div>
						<p class="text-gray-400 mb-1">Payment</p>
						<ul class="text-gray-600">
							<li class="text-green-400">Visa card **** 4216</li>
							<li>Shipping fee: $12.00</li>
							<li>Total paid: $412.00</li>
						</ul>
					</div> 
				</div> <!-- grid.// --> 
				
				<hr class="my-4">

				<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2">
					
					<figure class="flex flex-row mb-4">
						<div>
							<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
								<img src="../view/images/items/1.jpg" alt="Title">
							</a>
						</div>
						<figcaption  class="ml-3">
							<p><a href="#" class="text-gray-600 hover:text-blue-600">Travel Bag Jeans Blue Color Modern</a></p>
							<p class="mt-1 font-semibold">2x = $30.50</p>
						</figcaption>
					</figure>

					<figure class="flex flex-row mb-4">
						<div>
							<a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
								<img src="../view/images/items/2.jpg" alt="Title">
							</a>
						</div>
						<figcaption  class="ml-3">
							<p><a href="#" class="text-gray-600 hover:text-blue-600">Travel Bag Jeans Blue Color Modern</a></p>
							<p class="mt-1 font-semibold">5x = $433.90</p>
						</figcaption>
					</figure>

				</div> <!-- grid.// --> 
			</article>
			<!-- item-order 2 //end -->

		</article> <!-- card.// -->
	</main>
</div> <!-- grid.// -->


		</div> <!-- container.// -->
	</section>

	<footer class="py-6 bg-gray-200">
		<p class="text-center"><a href="https://tailwind-ecommerce.com">Tailwind ecommerce</a></p>
	</footer>

</body>
</html>