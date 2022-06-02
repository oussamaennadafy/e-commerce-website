<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Type some info" />
	<meta name="author" content="Type name" />

	<title>ENSON | Product</title>

	<!-- Tailwind css -->
	<script src="https://cdn.tailwindcss.com"></script>

	<!-- Font awesome 5 -->
	<link href="../../view/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet" />
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
							<path d="M47.481 2.65997C47.443 2.65997 47.405 2.65997 47.367 2.65997C47.348 2.65997 47.31 2.65997 47.291 2.65997C47.234 2.65997 47.196 2.67897 47.139 2.67897C47.082 2.69797 47.006 2.69797 46.949 2.71697C46.892 2.73597 46.835 2.75497 46.778 2.77397H46.759C46.74 2.77397 46.721 2.79297 46.702 2.79297C46.683 2.81197 46.664 2.81197 46.645 2.83097C46.303 3.00197 46.018 3.26797 45.828 3.60997L46.037 3.21097L8.51198 26.239C7.94198 26.581 7.59998 27.189 7.59998 27.854V64.923C7.59998 65.588 7.94198 66.196 8.51198 66.538L19.912 73.53C20.805 74.081 21.983 73.796 22.534 72.903C22.724 72.599 22.819 72.257 22.819 71.915V35.302L47.519 20.159L72.219 35.302V71.915C72.219 72.96 73.074 73.815 74.119 73.815C74.48 73.815 74.822 73.72 75.107 73.53L86.507 66.538C87.077 66.196 87.419 65.588 87.419 64.923V27.854C87.419 27.189 87.077 26.581 86.507 26.239L48.583 3.00197C48.507 2.94497 48.431 2.90697 48.336 2.86897C48.279 2.84997 48.241 2.81197 48.184 2.79297H48.165H48.146C48.089 2.77397 48.032 2.75497 47.975 2.73597C47.918 2.71697 47.861 2.71697 47.804 2.69797C47.804 2.69797 47.804 2.69797 47.785 2.69797H47.766C47.728 2.69797 47.671 2.67897 47.633 2.67897C47.595 2.67897 47.576 2.67897 47.538 2.67897C47.538 2.65997 47.519 2.65997 47.481 2.65997ZM47.5 6.78297L83.6 28.899V63.84L76 68.495V34.238C76 33.573 75.658 32.965 75.088 32.623L48.488 16.321C47.88 15.941 47.101 15.941 46.493 16.321L19.893 32.623C19.323 32.965 18.981 33.573 18.981 34.238V68.514L11.381 63.859V28.918L47.5 6.78297ZM41.743 31.084C41.42 31.084 41.078 31.198 40.812 31.369L29.412 38.361C28.842 38.703 28.5 39.311 28.5 39.976V77.729C28.5 78.394 28.842 79.002 29.412 79.344L46.227 89.642L46.018 89.357C46.189 89.585 46.436 89.794 46.702 89.908C46.816 89.965 46.93 90.003 47.063 90.041C47.12 90.06 47.177 90.079 47.253 90.079C47.31 90.079 47.367 90.098 47.405 90.098C47.424 90.098 47.424 90.098 47.443 90.098H47.462C47.5 90.098 47.538 90.098 47.557 90.098C47.595 90.098 47.614 90.098 47.652 90.098C47.69 90.098 47.709 90.098 47.747 90.098C47.785 90.098 47.823 90.079 47.88 90.079C47.937 90.06 48.013 90.06 48.07 90.041C48.127 90.022 48.184 90.003 48.241 89.984C48.298 89.965 48.336 89.946 48.393 89.908C48.735 89.737 49.02 89.471 49.21 89.129L49.001 89.528L65.588 79.325C66.158 78.983 66.5 78.375 66.5 77.71V39.957C66.5 39.292 66.158 38.684 65.588 38.342L54.188 31.35C53.295 30.799 52.117 31.084 51.566 31.977C51.376 32.281 51.281 32.623 51.281 32.965V70.319L47.519 72.618L43.7 70.262V32.984C43.7 31.939 42.845 31.084 41.8 31.084C41.781 31.084 41.762 31.084 41.743 31.084ZM39.9 36.366V71.326C39.9 71.991 40.242 72.599 40.812 72.941L46.55 76.456C47.158 76.836 47.918 76.836 48.526 76.456L54.188 72.998C54.758 72.656 55.1 72.029 55.1 71.383V36.366L62.7 41.021V76.646L47.538 85.975L32.3 76.665V41.04L39.9 36.366Z" fill="#1063eb" />
						</svg>
						<p class="text-lg font-semibold text-blue-600">ENSON</p>
					</a>
				</div>
				<!-- Brand .//end -->

				<!-- Actions -->
				<div class="flex items-center space-x-2 ml-auto">

					<?php if (isset($_SESSION['user'])) : ?>
						<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="http://localhost/fill-rouge/user/WishedProducts">
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


	<section class="bg-blue-100 py-4">
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- breadcrumbs start -->
			<ol class="inline-flex flex-wrap text-gray-600 space-x-1 md:space-x-3 items-center">
				<li class="inline-flex items-center">
					<a class="text-gray-600 hover:text-blue-600" href="http://localhost/fill-rouge/user/index">Home</a>
					<i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center" aria-current="page">
					<a class="text-gray-600 hover:text-blue-600" href="#">
						<?php
						if ($product['category_item'] == 'OurSports') {
							echo 'Our Sports';
						} else {
							echo ucfirst($product['category_item']);
						}
						?>
					</a>
					<i class="ml-3 text-gray-400  fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center"> Details </li>
			</ol>
			<!-- breadcrumbs end -->
		</div> <!-- container .// -->
	</section>

	<section class="bg-white py-10">
		<div class="container max-w-screen-xl mx-auto px-4">

			<div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
				<aside>
					<!-- gallery -->
					<div class="overflow-hidden transition ctn border border-gray-200 shadow-sm p-3 text-center rounded mb-5">
						<img class="parent transition duration-300 object-cover inline-block" width="900" src="<?php echo '../../view/uploads/' . $product['first_img'] ?>" alt="Product title">
					</div>
					<div class="space-x-2 overflow-auto text-center whitespace-nowrap">
						<?php foreach ($imgs as $img) { ?>
							<a class="cursor-pointer inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
								<img class="child w-14 h-14" src="../../view/uploads/<?php echo $img['name'] ?>" alt="<?php echo $img['name'] ?>">
							</a>
						<?php } ?>
					</div>
					<!-- gallery end.// -->
				</aside>
				<main>
					<h2 class="font-semibold text-2xl mb-4">
						<?php echo $product['name_item'] ?>
					</h2>

					<div class="flex flex-wrap items-center space-x-2 mb-2">

						<img class="d-inline-block h-4" src="../../view/images/misc/stars-active.svg" alt="Rating">
						<span class="text-yellow-500">9.3</span>

						<svg width="6px" height="6px" viewbox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
							<circle cx="3" cy="3" r="3" fill="#DBDBDB" />
						</svg>

						<span class="text-gray-400">
							<i class="fa fa-shopping-bag mr-2"></i>
							<?php echo $product['orders'];
							if ($product['orders'] == 0 || $product['orders'] == 1) {
								echo ' order';
							} else {
								echo ' orders';
							} ?>
						</span>

						<svg width="6px" height="6px" viewbox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
							<circle cx="3" cy="3" r="3" fill="#DBDBDB" />
						</svg>

						<span class="text-green-500">Verified</span>

					</div>

					<p class="mb-4 font-semibold text-xl">$<?php echo $product['price_item'] ?>
						<span class="text-base font-normal">/1 Item</span>
					</p>

					<p class="mb-4 text-gray-500 pr-20">
						<?php echo $product['description_item']; ?>
					</p>


					<ul class="mb-5">
						<li class="mb-1"> <b class="font-medium w-36 inline-block">Brand:</b>
							<span class="text-gray-500"><?php echo $product['Brand'] ?></span>
						</li>
						<li class="mb-1"> <b class="font-medium w-36 inline-block">quantity:</b>
							<?php
							if ($product['quantity'] == 1) {
								echo '<span class="text-red-500"> Only 1 Piece Left in Stock </span>';
							} elseif ($product['quantity'] <= 20) {
								echo '<span class="text-red-500"> Only ' . $product['quantity'] . ' Pcs Left in Stock </span>';
							} else {
								echo '<span class="text-gray-500">' . $product['quantity'] . ' Pcs Left in Stock </span>';
							}
							?>
						</li>
						<li class="mb-1"> <b class="font-medium w-36 inline-block">Delivery:</b>
							<span class="text-gray-500">Russia, USA & Europe</span>
						</li>
						<!-- <li class="mb-1"> <b class="font-medium w-36 inline-block">Colors:</b> 
							<span  class="text-gray-500">Brown</span>
						</li> -->
					</ul>
					<!-- quantity  -->
					<form action="http://localhost/fill-rouge/user/details/<?php echo $product['id'] ?>" method="post">
					<div class='mb-5 '>
						<b class="font-medium w-36 inline-block mb-4">Quantity:</b>

							<div id='minus' class='select-none cursor-pointer inline-block py-2 px-3 bg-gray-200 rounded transition hover:bg-gray-300 border border-gray-300 hover:border-gray-400'>
								<i class="fa fa-minus text-gray-500"></i>
							</div>
							<input id='input' value='<?php if(isset($_POST['add_to_cart_btn'])) {echo $_POST['quantity'] ;}else {echo 1;} ?>' type="number" name="quantity" class='flex-grow appearance-none border border-gray-200 font- bg-gray-100 rounded py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 text-center w-16
							<?php if($invalid_quantity == true || $unavailbale_quantity == true) {echo 'border-red-400 hover:border-red-500 focus:border-red-500';} ?>
							'>
							<div id='plus' class='select-none cursor-pointer inline-block py-2 px-3 bg-gray-200 rounded transition hover:bg-gray-300 border border-gray-300 hover:border-gray-400'>
								<i class="fa fa-plus text-gray-500"></i>
							</div>

							<p class='ml-36 pl-2 text-red-500'>
							<?php 
							if($invalid_quantity == true) { echo 'invalid quantity'; } 
							if($unavailbale_quantity == true) { echo 'unavailable quantity';}
							?>
						</p>
						</div>
					<!-- quantity-end  -->
					<div class="flex flex-wrap mb-4">
						<?php if (!empty($product['colors'][0])) { ?>
							<!-- select-custom -->
							<div class="relative w-1/3 lg:w-1/4 mr-2 mb-4">
								<select
									name='color'
									class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 pr-5 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full cursor-pointer
									<?php if($invalid_color == true) { echo 'border-red-400 hover:border-red-500 focus:border-red-500';} else {
										echo 'border-gray-200 hover:border-gray-400 focus:border-gray-400';} ?>
									">
									<?php if(!empty($product['colors'][1])) { ?>
									<option>Select Color</option>
									<?php foreach ($product['colors'] as $color) { ?>
										<option><?php echo $color ?></option>
									<?php } ?>
									<?php } else {?>
										<option><?php echo $product['colors'][0] ?></option>
										<?php } ?>
								</select>
								<i class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
									<svg width="24" height="24" class="fill-current h-5 w-5" viewBox="0 0 24 24">
										<path d="M7 10l5 5 5-5H7z" />
									</svg>
								</i>
							</div>
							<!-- select-custom .//end  -->
						<?php } ?>
						<?php if (!empty($product['sizes'][0])) { ?>
							<!-- select-custom -->
							<div class="relative w-1/3 lg:w-1/4 mr-2 mb-4">
								<select
								 name='size'
								 class="block appearance-none border bg-gray-100 rounded-md py-2 px-3 pr-5 focus:outline-none w-full cursor-pointer
									<?php if($invalid_size == true) {echo 'border-red-400 hover:border-red-500 focus:border-red-500';} else {
										echo 'border-gray-200 hover:border-gray-400 focus:border-gray-400';
									} ?>
									">
									<?php if(!empty($product['sizes'][1])) { ?>
									<option>Select Size</option>
									<?php foreach ($product['sizes'] as $size) { ?>
										<option><?php echo $size; ?></option>
									<?php } ?>
									<?php } else {?>
										<option><?php echo $product['sizes']['0'] ?></option>
										<?php } ?>
								</select>
								<i class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
									<svg width="24" height="24" class="fill-current h-5 w-5" viewBox="0 0 24 24">
										<path d="M7 10l5 5 5-5H7z" />
									</svg>
								</i>

							</div>
							<!-- select-custom .//end  -->
						<?php } ?>
					</div>
					<?php if($invalid_color == true) { echo "<p class='-mt-6 mb-3 text-red-500'>select your color</p>";} ?>
					<?php if($invalid_size == true) { echo "<p class='-mt-6 mb-3 text-red-500'>select your size</p>";} ?>
					<!-- action buttons -->
					<div class="flex flex-wrap gap-2">
						<!-- /////////////////////// -->
						<form action="">
							<input type="hidden" name="">


							<input type='hidden' value='<?php if(isset($_POST['add_to_cart_btn'])) {echo $_POST['quantity'] ;}else {echo 1;} ?>' type="number" name="quantity" class='flex-grow appearance-none border border-gray-200 font- bg-gray-100 rounded py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 text-center w-16
							<?php if($invalid_quantity == true || $unavailbale_quantity == true) {echo 'border-red-400 hover:border-red-500 focus:border-red-500';} ?>
							'>




							<button
								type='submit'
								name='buy_now'
								class="px-4 py-2 inline-block text-white bg-yellow-500 border border-transparent rounded-md hover:bg-yellow-600">
								Buy now
							</button>
							</form>
						<!-- /////////////////////// -->
						<?php if(isset($_SESSION['user']['id'])) { ?>
						<button
							type='submit'
							name='add_to_cart_btn'
						 class="cursor-pointer px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700">
							<i class="fa fa-shopping-cart mr-2"></i>
							Add to cart
						</button>
						<?php } else { ?>
							<a class='cursor-pointer px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700' href="http://localhost/fill-rouge/user/signin">
							<i class="fa fa-shopping-cart mr-2"></i>
							Add to cart
							</a>
							<?php } ?>
						<input type="hidden" name="user_id" value='<?php echo $_SESSION['user']['id'] ?>'>
						<input type="hidden" name="product_id" value='<?php echo $product['id'] ?>'>
						</form>
						<!-- <a class="cursor-pointer px-4 py-2 inline-block border border-gray-300 rounded-md hover:bg-gray-100">
							<i class="fa fa-heart mr-2 text-gray-200"></i>
							<span class='text-blue-600 select-none'>Save for later</span>
						</a> -->

						<?php if(isset($_SESSION['user'])) { ?>
                  <?php if(wished_products::checkIfProductIsWished($_SESSION['user']['id'],$product['id']) == 0) { ?>
                  <form class='inline-block' action="http://localhost/fill-rouge/user/WishProduct" method="POST">
                    <input type="hidden" name="user_id" value='<?php echo $_SESSION['user']['id'] ?>'>
                    <input type="hidden" name="product_id" value='<?php echo $product['id'] ?>'>
                    <input type="hidden" name="current_page" value='<?php echo 'details/'.$product['id'] ?>'>
                    <button
                      type='submit'
                      class="cursor-pointer px-4 py-2 inline-block border border-gray-300 rounded-md hover:bg-gray-100"
                      id="heart_link"
                    >
																				<i class="fa fa-heart mr-2 text-gray-200"></i>
																				<span class='text-blue-600 select-none'>Save for later</span>
                    </button>
                  </form>
                  <?php } else { ?>
                    <form class='inline-block' action="http://localhost/fill-rouge/user/UnWishProduct" method="POST">
                    <input type="hidden" name="user_id" value='<?php echo $_SESSION['user']['id'] ?>'>
                    <input type="hidden" name="product_id" value='<?php echo $product['id'] ?>'>
                    <input type="hidden" name="current_page" value='<?php echo 'details/'.$product['id'] ?>'>
                    <button
                      type='submit'
                      class="cursor-pointer px-4 py-2 inline-block border border-gray-300 rounded-md hover:bg-gray-100"
                      id="heart_link"
                    >
																				<i class="fa fa-heart mr-2 text-gray-200 text-blue-500"></i>
																				<span class='text-blue-600 select-none'>product is Saved</span>
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
								consequat. Duis aute irure dolor
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
									<img src="../../view/images/items/8.jpg" alt="Title">
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
									<img src="../../view/images/items/9.jpg" alt="Title">
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
									<img src="../../view/images/items/10.jpg" alt="Title">
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
									<img src="../../view/images/items/11.jpg" alt="Title">
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

	<!-- footer -->
	<?php include_once 'view\reusables\footer.php'; ?>
	<!-- footer end -->
	<script>
		const muinus = document.getElementById("minus");
		const input = document.getElementById("input");
		const plus = document.getElementById("plus");
		const imgAnchor = document.getElementById("imgAnchor");

		muinus.addEventListener("click", () => {
			console.log("minus");
			if (input.value > 1) {
				input.value--;
			}
		});


		plus.addEventListener("click", () => {
			console.log("plus");
			input.value++;
		});


		/////////////////////////////////////
		const parent = document.querySelector('.parent');
		const child = document.querySelectorAll('.child');
		child.forEach(item => {
			item.addEventListener('mouseover', event => {
				parent.setAttribute('src', item.getAttribute('src'))
			})
		})
		//////////////////////////////////////////

		const container = document.querySelector(".ctn");
		container.addEventListener("mousemove", onZoom);
		container.addEventListener("mouseover", onZoom);
		container.addEventListener("mouseleave", offZoom);

		function onZoom(e) {
			const x = e.clientX - e.target.offsetLeft;
			const y = e.clientY - e.target.offsetTop;
			parent.style.transformOrigin = `${x}px ${y}px`;
			parent.style.transform = "scale(1.3)";
		}

		function offZoom(e) {
			parent.style.transformOrigin = `center center`;
			parent.style.transform = "scale(1)";
		}

		if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
		}
	</script>
</body>

</html>