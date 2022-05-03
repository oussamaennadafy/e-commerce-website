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
					<button type="button" class="px-4 py-2 inline-block border border-transparent bg-blue-600 text-white rounded-md hover:bg-blue-700">
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
	<!--  COMPONENT: HEADER //END -->

	<section class="bg-gray-100 py-10" style="min-height: 86vh">
		<div class="container max-w-screen-xl mx-auto px-4">
			

			<!--  COMPONENT: SIGN IN -->
			<div style="max-width:480px" class="mt-10 mb-20 p-4 md:p-7 mx-auto rounded bg-white shadow-lg">
				<form action="">
					<h2 class="mb-5 text-2xl font-semibold">Sign up</h2>

					<div class="grid md:grid-cols-2 gap-x-2">
						<div class="mb-4">
					      <label class="block mb-1"> First name </label>
					      <input class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full" type="text" placeholder="Type here">
					    </div>
						
						<div class="mb-4">
					      <label class="block mb-1"> Last name </label>
					      <input class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full" type="text" placeholder="Type here">
					    </div>
					</div> <!-- grid -->

					<div class="mb-4">
				      <label class="block mb-1"> Phone </label>

				      <div class="flex  w-full">
				      	<input class="appearance-none w-24 border border-gray-200 bg-gray-100 rounded-tl-md rounded-bl-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" type="text" placeholder="Code" value="+998">
				      	<input class="appearance-none flex-1 border border-gray-200 bg-gray-100 rounded-tr-md rounded-br-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" type="text" placeholder="Type phone">
				      </div>
				    </div>

				    <div class="mb-4">
				      <label class="block mb-1"> Email </label>
				      <input class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full" type="text" placeholder="Type here">
				    </div>
					
					<div class="mb-4">
				      <label class="block mb-1"> Create password </label>
				      <input class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full" type="password" placeholder="Type here">
				    </div>

					<button type="submit" class="my-2 px-4 py-2 text-center w-full inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"> Register </button>

					<label class="flex items-center w-max my-4">
						<input checked name="" type="checkbox" class="h-4 w-4">
						<span class="ml-2 inline-block"> I agree with Terms and Conditions </span>
					</label>

					<hr>

					<p class="text-center mt-5">
						Already have an account?  <a class="text-blue-500" href="#">Sign in</a>
					</p>
				</form>
			</div>
			<!--  COMPONENT: SIGN IN //END -->

		</div>
	</section>

	<footer class="py-6 bg-gray-200">
		<p class="text-center"><a href="https://tailwind-ecommerce.com">Tailwind ecommerce</a></p>
	</footer>

</body>
</html>