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


	<!--  PAGE HEADER -->
	<section class="py-5 sm:py-7 bg-blue-100">
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- breadcrumbs start -->
			<h2 class="text-3xl font-semibold mb-2">Shopping cart</h2>
			
		</div><!-- /.container -->
	</section>
	<!--  PAGE HEADER .//END  -->

	<section class="py-10">
		<div class="container max-w-screen-xl mx-auto px-4">
			
<div class="flex flex-col md:flex-row gap-4">
	<main  class="md:w-3/4">

		<article class="border border-gray-200 bg-white shadow-sm rounded mb-5 p-3 lg:p-5">
			
			<!-- item-cart -->
			<div class="flex flex-wrap lg:flex-row gap-5  mb-4">
				<div class="w-full lg:w-2/5 xl:w-2/4">
					<figure class="flex leading-5">
						<div>
							<div class="block w-16 h-16 rounded border border-gray-200 overflow-hidden">
								<img src="../view/images/items/1.jpg" alt="Title">
							</div>
						</div>
						<figcaption  class="ml-3">
							<p><a href="#" class="hover:text-blue-600">Modern Product Name Goes Here as demo </a></p>
							<p class="mt-1 text-gray-400"> Color: Yellow, Type: Jeans </p>
						</figcaption>
					</figure>
				</div>
				<div class="">
					<!-- selection -->	
					<div class="w-24 relative">
				    <select class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full">
				        <option>1</option>
						<option>2</option>	
						<option>3</option>	
			      	</select>
				    <i class="absolute inset-y-0 right-0 p-2 text-gray-400">
				        <svg width="22" height="22" class="fill-current" viewBox="0 0 20 20"><path d="M7 10l5 5 5-5H7z"></path></svg>
				    </i>
				   </div>
				   <!-- selection .//end -->	
				</div>
				<div>
					<div class="leading-5">
						<p class="font-semibold not-italic">$1156.00</p>
						<small class="text-gray-400"> $460.00 / per item </small> 
					</div>
				</div>
				<div class="flex-auto">
					<div class="float-right">
						<a href="#" class="px-3 py-2 inline-block text-blue-600 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200"> <i class="fa fa-heart"></i> </a>
						<a class="px-4 py-2 inline-block text-red-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="#">  Remove </a>
					</div>
				</div>
			</div> <!-- item-cart end// -->

			<hr class="my-4">

			<!-- item-cart -->
			<div class="flex flex-wrap lg:flex-row gap-5 mb-4">
				<div class="w-full lg:w-2/5 xl:w-2/4">
					<figure class="flex leading-5">
						<div>
							<div class="block w-16 h-16 rounded border border-gray-200 overflow-hidden">
								<img src="../view/images/items/2.jpg" alt="Title">
							</div>
						</div>
						<figcaption  class="ml-3">
							<p><a href="#" class="hover:text-blue-600">Travel Bag Jeans Blue Color Modern</a></p>
							<p class="mt-1 text-gray-400"> Color: Yellow, Type: Jeans </p>
						</figcaption>
					</figure>
				</div>
				<div class="">
					<!-- selection -->	
					<div class="w-24 relative">
				    <select class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full">
				        <option>1</option>
						<option selected>2</option>	
						<option>3</option>	
			      	</select>
				    <i class="absolute inset-y-0 right-0 p-2 text-gray-400">
				        <svg width="22" height="22" class="fill-current" viewBox="0 0 20 20"><path d="M7 10l5 5 5-5H7z"></path></svg>
				    </i>
				   </div>
				   <!-- selection .//end -->	
				</div>
				<div>
					<div class="leading-5">
						<p class="font-semibold not-italic">$92.00</p>
						<small class="text-gray-400"> $34.00 / per item </small> 
					</div>
				</div>
				<div class="flex-auto">
					<div class="float-right">
						<a href="#" class="px-3 py-2 inline-block text-blue-600 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200"> <i class="fa fa-heart"></i> </a>
						<a class="px-4 py-2 inline-block text-red-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="#">  Remove </a>
					</div>
				</div>
			</div> <!-- item-cart end// -->

			<hr class="my-4">

			<!-- item-cart -->
			<div class="flex flex-wrap lg:flex-row gap-5 mb-4">
				<div class="w-full lg:w-2/5 xl:w-2/4">
					<figure class="flex leading-5">
						<div>
							<div class="block w-16 h-16 rounded border border-gray-200 overflow-hidden">
								<img src="../view/images/items/3.jpg" alt="Title">
							</div>
						</div>
						<figcaption  class="ml-3">
							<p><a href="#" class="hover:text-blue-600">Great product name</a></p>
							<p class="mt-1 text-gray-400"> Color: Blue, Type: Original </p>
						</figcaption>
					</figure>
				</div>
				<div class="">
					<!-- selection -->	
					<div class="w-24 relative">
				    <select class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full">
				        <option>1</option>
						<option>2</option>	
						<option>3</option>	
			      	</select>
				    <i class="absolute inset-y-0 right-0 p-2 text-gray-400">
				        <svg width="22" height="22" class="fill-current" viewBox="0 0 20 20"><path d="M7 10l5 5 5-5H7z"></path></svg>
				    </i>
				   </div>
				   <!-- selection .//end -->	
				</div>
				<div>
					<div class="leading-5">
						<p class="font-semibold not-italic">$980.00</p>
						<small class="text-gray-400"> $120.00 / per item </small> 
					</div>
				</div>
				<div class="flex-auto">
					<div class="float-right">
						<a href="#" class="px-3 py-2 inline-block text-blue-600 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200"> <i class="fa fa-heart"></i> </a>
						<a class="px-4 py-2 inline-block text-red-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="#">  Remove </a>
					</div>
				</div>
			</div> <!-- item-cart end// -->

			<hr class="my-4">

			<h6 class="font-bold">Free Delivery within 1-2 weeks</h6>
			<p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>

		</article> <!-- card end.// -->

	</main>
	<aside class="md:w-1/4">

		<article class="border border-gray-200 bg-white shadow-sm rounded mb-5 p-3 lg:p-5">

			<ul class="mb-5">
				<li class="flex justify-between text-gray-600  mb-1"> 
					<span>Total price:</span> 
					<span>$245.97</span>
				</li>
				<li class="flex justify-between text-gray-600  mb-1"> 
					<span>Discount:</span> 
					<span class="text-green-500">- $60.00</span>
				</li>
				<li class="flex justify-between text-gray-600  mb-1"> 
					<span>TAX:</span> 
					<span>$14.00</span>
				</li>
				<li class="text-lg font-bold border-t flex justify-between mt-3 pt-3"> 
					<span>Total price:</span> 
					<span>$420.00</span>
				</li>
			</ul>

			<a class="px-4 py-3 mb-2 inline-block text-lg w-full text-center font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700" href="#"> Checkout </a>

			<a class="px-4 py-3 inline-block text-lg w-full text-center font-medium text-green-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="#"> Back to shop </a>

		</article> <!-- card end.// -->

	</aside> <!-- col.// -->
</div> <!-- grid.// -->

		</div>
	</section>



	<!-- SECTION-RECOMMENDED -->
	<section class="pt-10 pb-20 bg-gray-100">
		<div class="container max-w-screen-xl mx-auto px-4">
			<h2 class="text-2xl font-semibold mb-8">Recommended products</h2>
			
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
				<div>
					<!-- COMPONENT: PRODUCT CARD -->
					<article class="shadow-sm rounded bg-white border border-gray-200">
						<a href="#" class="relative block p-1">
							<img src="../view/images/items/14.jpg" class="mx-auto w-auto" style="height: 250px" height="250" alt="Product title here">
						</a>
						<div class="p-4 border-t border-t-gray-200">
							<h6>
								<a href="#" class="text-gray-600 hover:text-blue-500">Product name goes here</a>
							</h6>
							<p class="text-sm text-gray-400">Sizes: S, M, XL</p> 
							<span class="font-semibold">$76.00</span>
						</div>
					</article>
					<!-- COMPONENT: PRODUCT CARD //END -->
				</div>
				<div>
					<!-- COMPONENT: PRODUCT CARD -->
					<article class="shadow-sm rounded bg-white border border-gray-200">
						<a href="#" class="relative block p-1">
							<img src="../view/images/items/12.jpg" class="mx-auto w-auto" style="height: 250px" height="250" alt="Product title here">
						</a>
						<div class="p-4 border-t border-t-gray-200">
							<h6>
								<a href="#" class="text-gray-600 hover:text-blue-500">Product name goes here</a>
							</h6>
							<p class="text-sm text-gray-400">Sizes: S, M, XL</p> 
							<span class="font-semibold">$76.00</span>
						</div>
					</article>
					<!-- COMPONENT: PRODUCT CARD //END -->
				</div>
				<div>
					<!-- COMPONENT: PRODUCT CARD -->
					<article class="shadow-sm rounded bg-white border border-gray-200">
						<a href="#" class="relative block p-1">
							<img src="../view/images/items/9.jpg" class="mx-auto w-auto" style="height: 250px" height="250" alt="Product title here">
						</a>
						<div class="p-4 border-t border-t-gray-200">
							<h6>
								<a href="#" class="text-gray-600 hover:text-blue-500">Product name goes here</a>
							</h6>
							<p class="text-sm text-gray-400">Sizes: S, M, XL</p> 
							<span class="font-semibold">$76.00</span>
						</div>
					</article>
					<!-- COMPONENT: PRODUCT CARD //END -->
				</div>
				<div>
					<!-- COMPONENT: PRODUCT CARD -->
					<article class="shadow-sm rounded bg-white border border-gray-200">
						<a href="#" class="relative block p-1">
							<img src="../view/images/items/8.jpg" class="mx-auto w-auto" style="height: 250px" height="250" alt="Product title here">
						</a>
						<div class="p-4 border-t border-t-gray-200">
							<h6>
								<a href="#" class="text-gray-600 hover:text-blue-500">Product name goes here</a>
							</h6>
							<p class="text-sm text-gray-400">Sizes: S, M, XL</p> 
							<span class="font-semibold">$76.00</span>
						</div>
					</article>
					<!-- COMPONENT: PRODUCT CARD //END -->
				</div>
			</div> <!-- grid .// -->
		</div>
	</section>
	<!--  SECTION-RECOMMENDED  //END -->

	<footer class="py-6 bg-gray-200">
		<p class="text-center"><a href="https://tailwind-ecommerce.com">Tailwind ecommerce</a></p>
	</footer>

</body>
</html>