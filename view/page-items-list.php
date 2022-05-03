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
				<form 
				class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-2/4"
				action="http://localhost/fill-rouge/user/items"
				method="POST"
				>
					<input 
					class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-md mr-2 py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" 
					type="text" 
					placeholder="Search"
					>
					<button 
					type="submit" 
					class="px-4 py-2 inline-block text-white border border-transparent bg-blue-600 text-white rounded-md hover:bg-blue-700">
						Search
					</button>
				</form>
				<!-- Search .//end -->

				<!-- Actions -->
				<div class="flex items-center space-x-2 ml-auto">
					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="http://localhost/fill-rouge/user/signIn"> 
						<i class="text-gray-400 w-5 fa fa-user"></i> 
						<span class="hidden lg:inline ml-1">Sign in</span>
					</a>

					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="#"> 
						<i class="text-gray-400 w-5 fa fa-heart"></i> 
						<span class="hidden lg:inline ml-1">Wishlist</span> 
					</a>

					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="http://localhost/fill-rouge/user/cart"> 
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
	
	<nav class="relative shadow-sm">
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
			<h2 class="text-3xl font-semibold mb-2">Men’s wear</h2>
			<ol class="inline-flex flex-wrap text-gray-600 space-x-1 md:space-x-3 items-center">
				<li class="inline-flex items-center">
					<a class="text-gray-600 hover:text-blue-600" href="#">Home</a>  
					<i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center" aria-current="page">
					<a class="text-gray-600 hover:text-blue-600" href="#">Clothings</a> 
					<i class="ml-3 text-gray-400  fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center"> Men’s wear </li>
			</ol>
			<!-- breadcrumbs end -->
		</div><!-- /.container -->
	</section>
	<!--  PAGE HEADER .//END  -->

	<!-- SECTION-CONTENT -->
	<section class="py-12">
		<div class="container max-w-screen-xl mx-auto px-4">

			<div class="flex flex-col md:flex-row -mx-4">
				<aside class="md:w-1/3 lg:w-1/4 px-4">
				<!-- filter wrap -->

					<a class="md:hidden mb-5  w-full text-center px-4 py-2 inline-block text-lg text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#"> 
						Filter by
					</a>

					<div class="hidden md:block px-6 py-4 border border-gray-200 bg-white rounded shadow-sm">
						<h3 class="font-semibold mb-2">Category</h3>
						
						<ul class="text-gray-500 space-y-1">
							<li><a class="hover:text-blue-600 hover:underline" href="#">Electronics </a></li> 
							<li><a class="hover:text-blue-600 hover:underline" href="#">Watches </a></li> 
							<li><a class="hover:text-blue-600 hover:underline" href="#">Cinema </a></li> 
							<li><a class="hover:text-blue-600 hover:underline" href="#">Clothes </a></li> 
							<li><a class="hover:text-blue-600 hover:underline" href="#">Home items </a></li> 
							<li><a class="hover:text-blue-600 hover:underline" href="#">Smartwatches </a></li> 
						</ul>
						
						<hr class="my-4">

						<h3 class="font-semibold mb-2">Filter by</h3>
						<ul class="space-y-1">
							<li>
								<label class="flex items-center">
									<input name="" type="checkbox" checked="" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Samsung </span>
								</label>
							</li>
							<li>
								<label class="flex items-center">
									<input name="" type="checkbox" checked="" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Huawei </span>
								</label>
							</li>
							<li>
								<label class="flex items-center">
									<input name="" type="checkbox" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Tesla model </span>
								</label>
							</li>
							<li>
								<label class="flex items-center">
									<input name="" type="checkbox" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Best brand </span>
								</label>
							</li>
							<li>
								<label class="flex items-center">
									<input name="" type="checkbox" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Other brands </span>
								</label>
							</li>
						</ul>
						
						<hr class="my-4">
						
						<h3 class="font-semibold mb-2">Sort by</h3>
						<ul class="space-y-1">
							<li>
								<label class="flex items-center">
									<input name="myselection" type="radio" checked="" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Lightblue </span>
								</label>
							</li>
							<li>
								<label class="flex items-center">
									<input name="myselection" type="radio" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Orange </span>
								</label>
							</li>
							<li>
								<label class="flex items-center">
									<input name="myselection" type="radio" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Silver </span>
								</label>
							</li>
							<li>
								<label class="flex items-center">
									<input name="myselection" type="radio" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> Darkblue </span>
								</label>
							</li>
						</ul>

					</div>
					<!-- filter wrap -->
				</aside> <!-- col.// -->
				<main  class="md:w-2/3 lg:w-3/4 px-3">
					
					
					<!-- COMPONENT: PRODUCT ITEM -->
					<article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
						<div class="flex flex-col md:flex-row">
							<div class="md:w-1/4">
								<img class="mx-auto" src="../view/images/items/6.jpg" alt="Product name text">
							</div> <!-- col.// -->
							<div class="md:w-2/4">
								<div class="p-4">
									<a href="#" class="hover:text-blue-600">
									Canon Cmera EOS 2000, Black 10x zoom
									</a>
									<div class="flex flex-wrap items-center space-x-2 mb-2">
										<img src="../view/images/misc/stars-active.svg" alt=""> 	
										<b class="text-gray-300">•</b>
										<span class="ml-1 text-yellow-500">9.3</span> 
									</div>
									<p class="text-gray-500 mb-2"> 
										The largest Canon Camera display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned
									</p>
									<p class="space-y-2">
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Leather  </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Pink Color </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Retina Screen </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Original </span>
									</p>
								</div>
							</div> <!-- col.// -->
							<div class="md:w-1/4 border-t lg:border-t-0 lg:border-l border-gray-200">
								<div class="p-5">
									<p>
										<span class="text-xl font-semibold text-black">$120.50</span>
										<del class="line-through text-sm text-gray-400"> $230.00</del>
									</p>
									<p class="text-green-500">Free Shipping</p>
									<div class="my-3">
										<a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700" href="#"> Buy now </a>
										<a class="px-3 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
												<i class="fa fa-heart"></i>
										</a>
									</div>
									
									<a class="font-medium text-blue-600 hover:text-blue-700" href="#">+ Add to compare</a>
								</div>
							</div> <!-- col.// -->
						</div> <!-- flex.// -->
					</article>
					<!-- COMPONENT: PRODUCT ITEM //END -->

					<!-- COMPONENT: PRODUCT ITEM -->
					<article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
						<div class="flex flex-col md:flex-row">
							<div class="md:w-1/4">
								<img class="mx-auto" src="../view/images/items/7.jpg" alt="Product name text">
							</div> <!-- col.// -->
							<div class="md:w-2/4">
								<div class="p-4">
									<a href="#" class="hover:text-blue-600">
									Great name of this product just goes here
									</a>
									<div class="flex flex-wrap items-center space-x-2 mb-2">
										<img src="../view/images/misc/stars-active.svg" alt=""> 	
										<b class="text-gray-300">•</b>
										<span class="ml-1 text-yellow-500">9.3</span> 
									</div>
									<p class="text-gray-500 mb-2"> 
										The largest Canon Camera display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned
									</p>
									<p class="space-y-2">
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Leather  </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Pink Color </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Retina Screen </span>
										
									</p>
								</div>
							</div> <!-- col.// -->
							<div class="md:w-1/4 border-t lg:border-t-0 lg:border-l border-gray-200">
								<div class="p-5">
									<p>
										<span class="text-xl font-semibold text-black">$120.50</span>
										<del class="line-through text-sm text-gray-400"> $230.00</del>
									</p>
									<p class="text-green-500">Free Shipping</p>
									<div class="my-3">
										<a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700" href="#"> Buy now </a>
										<a class="px-3 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
												<i class="fa fa-heart"></i>
										</a>
									</div>
									
									<a class="font-medium text-blue-600 hover:text-blue-700" href="#">+ Add to compare</a>
								</div>
							</div> <!-- col.// -->
						</div> <!-- flex.// -->
					</article>
					<!-- COMPONENT: PRODUCT ITEM //END -->

					<!-- COMPONENT: PRODUCT ITEM -->
					<article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
						<div class="flex flex-col md:flex-row">
							<div class="md:w-1/4">
								<img class="mx-auto" src="../view/images/items/8.jpg" alt="Product name text">
							</div> <!-- col.// -->
							<div class="md:w-2/4">
								<div class="p-4">
									<a href="#" class="hover:text-blue-600">
									Super item name of the product goes here
									</a>
									<div class="flex flex-wrap items-center space-x-2 mb-2">
										<img src="../view/images/misc/stars-active.svg" alt=""> 	
										<b class="text-gray-300">•</b>
										<span class="ml-1 text-yellow-500">9.3</span> 
									</div>
									<p class="text-gray-500 mb-2"> 
										The largest Canon Camera display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned
									</p>
									<p class="space-y-2">
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Leather  </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Pink Color </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Original </span>
									</p>
								</div>
							</div> <!-- col.// -->
							<div class="md:w-1/4 border-t lg:border-t-0 lg:border-l border-gray-200">
								<div class="p-5">
									<p>
										<span class="text-xl font-semibold text-black">$120.50</span>
										<del class="line-through text-sm text-gray-400"> $230.00</del>
									</p>
									<p class="text-green-500">Free Shipping</p>
									<div class="my-3">
										<a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700" href="#"> Buy now </a>
										<a class="px-3 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
												<i class="fa fa-heart"></i>
										</a>
									</div>
									
									<a class="font-medium text-blue-600 hover:text-blue-700" href="#">+ Add to compare</a>
								</div>
							</div> <!-- col.// -->
						</div> <!-- flex.// -->
					</article>
					<!-- COMPONENT: PRODUCT ITEM //END -->

					<!-- COMPONENT: PRODUCT ITEM -->
					<article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
						<div class="flex flex-col md:flex-row">
							<div class="md:w-1/4">
								<img class="mx-auto" src="../view/images/items/9.jpg" alt="Product name text">
							</div> <!-- col.// -->
							<div class="md:w-2/4">
								<div class="p-4">
									<a href="#" class="hover:text-blue-600">
									Great name of this product just goes here as demo
									</a>
									<div class="flex flex-wrap items-center space-x-2 mb-2">
										<img src="../view/images/misc/stars-active.svg" alt=""> 	
										<b class="text-gray-300">•</b>
										<span class="ml-1 text-yellow-500">9.3</span> 
									</div>
									<p class="text-gray-500 mb-2"> 
										The largest Canon Camera display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned
									</p>
									<p class="space-y-2">
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Leather  </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Pink Color </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Retina Screen </span>
										<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Original </span>
									</p>
								</div>
							</div> <!-- col.// -->
							<div class="md:w-1/4 border-t lg:border-t-0 lg:border-l border-gray-200">
								<div class="p-5">
									<p>
										<span class="text-xl font-semibold text-black">$120.50</span>
										<del class="line-through text-sm text-gray-400"> $230.00</del>
									</p>
									<p class="text-green-500">Free Shipping</p>
									<div class="my-3">
										<a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700" href="#"> Buy now </a>
										<a class="px-3 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
												<i class="fa fa-heart"></i>
										</a>
									</div>
									
									<a class="font-medium text-blue-600 hover:text-blue-700" href="#">+ Add to compare</a>
								</div>
							</div> <!-- col.// -->
						</div> <!-- flex.// -->
					</article>
					<!-- COMPONENT: PRODUCT ITEM //END -->

					
						
				</main>  <!-- col.// -->
			</div> <!-- grid.// -->

		</div> <!-- container .// -->
	</section>
	<!--  SECTION-CONTENT  //END -->



	<footer class="py-6 bg-gray-200">
		<p class="text-center"><a href="https://tailwind-ecommerce.com">Tailwind ecommerce</a></p>
	</footer>

</body>
</html>