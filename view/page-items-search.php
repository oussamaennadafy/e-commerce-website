<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Type some info" />
	<meta name="author" content="Type name" />

	<title>ENSON | Search</title>

	<!-- Tailwind css -->
	<script src="https://cdn.tailwindcss.com"></script>

	<!-- Font awesome 5 -->
	<link href="../../view/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet" />
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
							<path d="M47.481 2.65997C47.443 2.65997 47.405 2.65997 47.367 2.65997C47.348 2.65997 47.31 2.65997 47.291 2.65997C47.234 2.65997 47.196 2.67897 47.139 2.67897C47.082 2.69797 47.006 2.69797 46.949 2.71697C46.892 2.73597 46.835 2.75497 46.778 2.77397H46.759C46.74 2.77397 46.721 2.79297 46.702 2.79297C46.683 2.81197 46.664 2.81197 46.645 2.83097C46.303 3.00197 46.018 3.26797 45.828 3.60997L46.037 3.21097L8.51198 26.239C7.94198 26.581 7.59998 27.189 7.59998 27.854V64.923C7.59998 65.588 7.94198 66.196 8.51198 66.538L19.912 73.53C20.805 74.081 21.983 73.796 22.534 72.903C22.724 72.599 22.819 72.257 22.819 71.915V35.302L47.519 20.159L72.219 35.302V71.915C72.219 72.96 73.074 73.815 74.119 73.815C74.48 73.815 74.822 73.72 75.107 73.53L86.507 66.538C87.077 66.196 87.419 65.588 87.419 64.923V27.854C87.419 27.189 87.077 26.581 86.507 26.239L48.583 3.00197C48.507 2.94497 48.431 2.90697 48.336 2.86897C48.279 2.84997 48.241 2.81197 48.184 2.79297H48.165H48.146C48.089 2.77397 48.032 2.75497 47.975 2.73597C47.918 2.71697 47.861 2.71697 47.804 2.69797C47.804 2.69797 47.804 2.69797 47.785 2.69797H47.766C47.728 2.69797 47.671 2.67897 47.633 2.67897C47.595 2.67897 47.576 2.67897 47.538 2.67897C47.538 2.65997 47.519 2.65997 47.481 2.65997ZM47.5 6.78297L83.6 28.899V63.84L76 68.495V34.238C76 33.573 75.658 32.965 75.088 32.623L48.488 16.321C47.88 15.941 47.101 15.941 46.493 16.321L19.893 32.623C19.323 32.965 18.981 33.573 18.981 34.238V68.514L11.381 63.859V28.918L47.5 6.78297ZM41.743 31.084C41.42 31.084 41.078 31.198 40.812 31.369L29.412 38.361C28.842 38.703 28.5 39.311 28.5 39.976V77.729C28.5 78.394 28.842 79.002 29.412 79.344L46.227 89.642L46.018 89.357C46.189 89.585 46.436 89.794 46.702 89.908C46.816 89.965 46.93 90.003 47.063 90.041C47.12 90.06 47.177 90.079 47.253 90.079C47.31 90.079 47.367 90.098 47.405 90.098C47.424 90.098 47.424 90.098 47.443 90.098H47.462C47.5 90.098 47.538 90.098 47.557 90.098C47.595 90.098 47.614 90.098 47.652 90.098C47.69 90.098 47.709 90.098 47.747 90.098C47.785 90.098 47.823 90.079 47.88 90.079C47.937 90.06 48.013 90.06 48.07 90.041C48.127 90.022 48.184 90.003 48.241 89.984C48.298 89.965 48.336 89.946 48.393 89.908C48.735 89.737 49.02 89.471 49.21 89.129L49.001 89.528L65.588 79.325C66.158 78.983 66.5 78.375 66.5 77.71V39.957C66.5 39.292 66.158 38.684 65.588 38.342L54.188 31.35C53.295 30.799 52.117 31.084 51.566 31.977C51.376 32.281 51.281 32.623 51.281 32.965V70.319L47.519 72.618L43.7 70.262V32.984C43.7 31.939 42.845 31.084 41.8 31.084C41.781 31.084 41.762 31.084 41.743 31.084ZM39.9 36.366V71.326C39.9 71.991 40.242 72.599 40.812 72.941L46.55 76.456C47.158 76.836 47.918 76.836 48.526 76.456L54.188 72.998C54.758 72.656 55.1 72.029 55.1 71.383V36.366L62.7 41.021V76.646L47.538 85.975L32.3 76.665V41.04L39.9 36.366Z" fill="#1063eb" />
						</svg>
						<p class="text-lg font-semibold text-blue-600">ENSON</p>
					</a>
				</div>
				<!-- Brand .//end -->

				<!-- Search -->
				<form class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-2/4" action="http://localhost/fill-rouge/user/search/<?php echo $searchSentence; ?>" method="POST">
					<input class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-md mr-2 py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" type="text" placeholder="Search" value="<?php echo $searchSentence ?>" name='search_input'>
					<button name='search_btn' type="submit" class="px-4 py-2 inline-block text-white border border-transparent bg-blue-600 text-white rounded-md hover:bg-blue-700">
						Search
					</button>
				</form>
				<!-- Search .//end -->

				<!-- Actions -->
				<div class="flex items-center space-x-2 ml-auto">

					<?php if (isset($_SESSION['user'])) : ?>
						<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="#">
							<i class="text-gray-400 w-5 fa fa-heart"></i>
							<span class="hidden lg:inline ml-1">Wishlist</span>
						</a>

						<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="http://localhost/fill-rouge/user/cart">
							<i class="text-gray-400 w-5 fa fa-shopping-cart"></i>
							<span class="hidden lg:inline ml-1">My cart</span>
						</a>

						<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="http://localhost/fill-rouge/user/profile">
							<i class="text-gray-400 w-5 fa fa-user"></i>
							<span class="hidden lg:inline ml-1">account</span>
						</a>
				</div>
			<?php else : ?>
				<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="http://localhost/fill-rouge/user/signIn">
					<i class="text-gray-400 w-5 fa fa-user"></i>
					<span class="hidden lg:inline ml-1">Sign in</span>
				</a>
			<?php endif ?>
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

	<!-- nav -->
	<?php include_once 'view\reusables\navigation.php'; ?>
	<!-- nav end -->
	<!--  COMPONENT: HEADER //END -->

	<!--  PAGE HEADER -->
	<section class="py-5 sm:py-7 bg-blue-100">
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- breadcrumbs start -->
			<h2 class="text-3xl font-semibold mb-2">
				<?php 
				// if ($category == 'OurSports') {
				// 	echo 'Our Sports';
				// } elseif ($category == 'mens') {
				// 	echo 'Men’s';
				// } elseif ($category == 'womens') {
				// 	echo 'Women’s';
				// } elseif ($category == 'kids') {
				// 	echo 'Kid’s';
				// } elseif ($category == 'accessoires') {
				// 	echo 'Accessoires';
				// }
				?>
			</h2>
			<ol class="inline-flex flex-wrap text-gray-600 space-x-1 md:space-x-3 items-center">
				<li class="inline-flex items-center">
					<a class="text-gray-600 hover:text-blue-600" href="#">Home</a>
					<i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center">
					<?php 
					// if ($category == 'OurSports') {
					// 	echo 'Our Sports';
					// } elseif ($category == 'mens') {
					// 	echo 'Men’s';
					// } elseif ($category == 'womens') {
					// 	echo 'Women’s';
					// } elseif ($category == 'kids') {
					// 	echo 'Kid’s';
					// } elseif ($category == 'accessoires') {
					// 	echo 'Accessoires';
					// }
					?>
				</li>
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
						<h3 class='text-center font-semibold text-lg mb-4'>Filters</h3>

						<hr class="my-4">

						<h3 class="font-semibold mb-2">By Brand</h3>
						<ul class="space-y-1">
							<li>
								<label class="flex items-center cursor-pointer">
									<input name="" type="checkbox" checked="" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> KALENJI </span>
								</label>
							</li>
							<li>
								<label class="flex items-center cursor-pointer">
									<input name="" type="checkbox" checked="" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> KIPRUN </span>
								</label>
							</li>
							<li>
								<label class="flex items-center cursor-pointer">
									<input name="" type="checkbox" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> QUECHUA </span>
								</label>
							</li>
							<li>
								<label class="flex items-center cursor-pointer">
									<input name="" type="checkbox" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> KIPSTA </span>
								</label>
							</li>
							<li>
								<label class="flex items-center cursor-pointer">
									<input name="" type="checkbox" class="h-4 w-4">
									<span class="ml-2 text-gray-500"> TARMAK </span>
								</label>
							</li>
						</ul>

						<hr class="my-4">

						<h3 class="font-semibold mb-2">By Price</h3>
						<ul class="text-gray-500 space-y-1">
							<div class='flex justify-between'>
								<li class='mb-4'>
									<a class="text-center w-28 w-full block hover:bg-gray-200 transition rounded py-2 bg-gray-100 border border-gray-200" href="#">0 - $20 </a>
								</li>
								<li class='mb-4'><a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> $20 - $50 </a></li>
							</div>
							<div class='flex justify-between'>
								<li class='mb-4'>
									<a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#">$50 - $100 </a>
								</li>
								<li class='mb-4'><a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> $100 - $200 </a></li>
							</div>
							<div class='flex justify-between'>
								<li>
									<a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#">$200 - $500 </a>
								</li>
								<li><a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> + $500 </a></li>
							</div>
						</ul>


						<hr class="my-4">

						<h3 class="font-semibold mb-2">By Color</h3>
						<ul class="space-y-1">
							<div class='flex justify-start gap-12 mb-1'>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" checked="" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-white border border-gray-300'></span>
										<span class="ml-2 text-gray-500"> White </span>
									</label>
								</li>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-black border border-transparent'></span>
										<span class="ml-2 text-gray-500"> Black </span>
									</label>
								</li>
							</div>
							<div class='flex justify-start gap-12 mb-1'>
								<li class='mb-1'>
									<label class="flex items-center w-16 w-16">
										<!-- <input name="myselection" type="radio" checked="" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-blue-800 border border-gray-300'></span>
										<span class="ml-2 text-gray-500"> Blue </span>
									</label>
								</li>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-green-600 border border-transparent'></span>
										<span class="ml-2 text-gray-500"> Green </span>
									</label>
								</li>
							</div>
							<div class='flex justify-start gap-12 mb-1'>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" checked="" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-[#4DBABE] border border-gray-300'></span>
										<span class="ml-2 text-gray-500"> Turquoise </span>
									</label>
								</li>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-[#56332A] border border-transparent'></span>
										<span class="ml-2 text-gray-500"> Marron </span>
									</label>
								</li>
							</div>
							<div class='flex justify-start gap-12 mb-1'>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" checked="" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-gray-600 border border-gray-300'></span>
										<span class="ml-2 text-gray-500"> Gray </span>
									</label>
								</li>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-violet-900 border border-transparent'></span>
										<span class="ml-2 text-gray-500"> Violet </span>
									</label>
								</li>
							</div>
							<div class='flex justify-start gap-12 mb-1'>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" checked="" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-[#7D7755] border border-gray-300'></span>
										<span class="ml-2 text-gray-500"> Kaki </span>
									</label>
								</li>
								<li class='mb-1'>
									<label class="flex items-center w-16">
										<!-- <input name="myselection" type="radio" class="h-4 w-4"> -->
										<span class='p-[10px] rounded-full bg-[#BA8E43] border border-transparent'></span>
										<span class="ml-2 text-gray-500"> Ocher </span>
									</label>
								</li>
							</div>
						</ul>



						<hr class="my-4">

						<h3 class="font-semibold mb-2">By Sizes</h3>
						<ul class="text-gray-500 space-y-1">
							<div class='flex justify-between'>
								<li class='mb-4'>
									<a class="text-center w-28 w-full block hover:bg-gray-200 transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> XS </a>
								</li>
								<li class='mb-4'><a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> S </a></li>
							</div>
							<div class='flex justify-between'>
								<li class='mb-4'>
									<a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> L </a>
								</li>
								<li class='mb-4'><a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> XL </a></li>
							</div>
							<div class='flex justify-between'>
								<li>
									<a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> 2XL </a>
								</li>
								<li><a class="text-center w-28 hover:bg-gray-200 block transition rounded py-2 bg-gray-100 border border-gray-200" href="#"> 3XL </a></li>
							</div>
						</ul>

					</div>
					<!-- filter wrap -->
				</aside> <!-- col.// -->
				<main class="md:w-2/3 lg:w-3/4 px-3">

					<?php foreach ($products as $product) { ?>
						<!-- COMPONENT: PRODUCT ITEM -->
						<article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
							<div class="flex flex-col md:flex-row">
								<div class="md:w-1/4">
									<a href="http://localhost/fill-rouge/user/details/<?php echo $product['id'] ?>">
										<img class="mx-auto" src="../../view/uploads/<?php echo $product['first_img'] ?>" alt="<?php echo $product['first_img'] ?>">
									</a>
								</div> <!-- col.// -->
								<div class="md:w-2/4">
									<div class="p-4">
										<a href="http://localhost/fill-rouge/user/details/<?php echo $product['id'] ?>" class="hover:text-blue-600">
											<?php echo $product['name_item'] ?>
										</a>
										<div class="flex flex-wrap items-center space-x-2 mb-2">
											<img src="../../view/images/misc/stars-active.svg" alt="">
											<b class="text-gray-300">•</b>
											<span class="ml-1 text-yellow-500">9.3</span>
										</div>
										<p class="text-gray-500 mb-2">
											<?php echo $product['description_item'] ?>
										</p>
										<p class="space-y-2">
											<?php 
											$count = 0;
											$product['tages_item'] = explode(',',$product['tages_item']);
											foreach ($product['tages_item'] as $value) {
												if(!empty($value) && $count < 4) {
												?>
											<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full">
												 <?php 
													echo $value; 
													$count ++;
													?> 
											</span>
											 <?php } ?>
											<?php } ?> 
											<!-- <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Pink Color </span>
											<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Retina Screen </span>
											<span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Original </span> -->
										</p>
									</div>
								</div> <!-- col.// -->
								<div class="md:w-1/4 border-t lg:border-t-0 lg:border-l border-gray-200">
									<div class="p-5">
										<p>
											<span class="text-xl font-semibold text-black">$<?php echo $product['price_item'] ?></span>
											<del class="line-through text-sm text-gray-400"> $<?php echo $product['price_item'] + 20 ?></del>
										</p>
										<p class="text-green-500">Free Shipping</p>
										<div class="my-3">
											<a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700" href="http://localhost/fill-rouge/user/order"> Buy now </a>
											<a class="px-3 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
												<i class="fa fa-heart"></i>
											</a>
										</div>

										<a class="px-6 py-2 inline-block text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700" href="#">+ add to cart </a>
									</div>
								</div> <!-- col.// -->
							</div> <!-- flex.// -->
						</article>
						<!-- COMPONENT: PRODUCT ITEM //END -->
					<?php } ?>

				</main> <!-- col.// -->
			</div> <!-- grid.// -->

		</div> <!-- container .// -->
	</section>
	<!--  SECTION-CONTENT  //END -->



	<!-- footer -->
	<?php include_once 'view\reusables\footer.php'; ?>
	<!-- footer end -->

</body>

</html>