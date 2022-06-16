				<!-- <aside class="md:w-1/3 lg:w-1/4 px-4">
					<!-- filter wrap -->
					
					<a class="md:hidden mb-5  w-full text-center px-4 py-2 inline-block text-lg text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
						Filter by
					</a>
					
					<div class="hidden md:block px-6 py-4 border border-gray-200 bg-white rounded shadow-sm">
						<h3 class='text-center font-semibold text-lg mb-4'>Filters</h3>

						<hr class="my-4">

						<h3 class="font-semibold mb-2">By Brand</h3>
						<form action="http://localhost/fill-rouge/user/nav/<?php echo $category; ?>" method="post">
							<ul class="space-y-1">
								<li>
									<label class="flex items-center cursor-pointer">
										<input <?php if(isset($_POST['apply_brand_filter'])) {if(in_array('KALENJI',$array)) {echo 'checked';} } ?> name="KALENJI" type="checkbox" class="h-4 w-4">
										<span class="ml-2 text-gray-500"> KALENJI </span>
									</label>
								</li>
								<li>
									<label class="flex items-center cursor-pointer">
										<input <?php if(isset($_POST['apply_brand_filter'])) {if(in_array('KIPRUN',$array)) {echo 'checked';} } ?> name="KIPRUN" type="checkbox" class="h-4 w-4">
										<span class="ml-2 text-gray-500"> KIPRUN </span>
									</label>
								</li>
								<li>
									<label class="flex items-center cursor-pointer">
										<input <?php if(isset($_POST['apply_brand_filter'])) {if(in_array('QUECHUA',$array)) {echo 'checked';} } ?> name="QUECHUA" type="checkbox" class="h-4 w-4">
										<span class="ml-2 text-gray-500"> QUECHUA </span>
									</label>
								</li>
								<li>
									<label class="flex items-center cursor-pointer">
										<input <?php if(isset($_POST['apply_brand_filter'])) {if(in_array('KIPSTA',$array)) {echo 'checked';} } ?> name="KIPSTA" type="checkbox" class="h-4 w-4">
										<span class="ml-2 text-gray-500"> KIPSTA </span>
									</label>
								</li>
								<li>
									<label class="flex items-center cursor-pointer">
										<input <?php if(isset($_POST['apply_brand_filter'])) {if(in_array('TARMAK',$array)) {echo 'checked';} } ?> name="TARMAK" type="checkbox" class="h-4 w-4">
										<span class="ml-2 text-gray-500"> TARMAK </span>
									</label>
								</li>
								<div class='flex w-full justify-between gap-4 mt-3'>
									<li class='w-full mt-2'>
											<input value='apply' name="apply_brand_filter" type="submit" class="bg-blue-500 w-full inline-block text-white rounded px-5 cursor-pointer py-2">
									</li>
									<li class='w-full mt-2'>
											<input value='clear' name="clear" type="submit" class="bg-gray-500 w-full inline-block text-white rounded px-5 cursor-pointer py-2">
									</li>
								</div>
							</ul>
						</form>

						<hr class="my-4">

						<h3 class="font-semibold mb-2">By Price</h3>
						<ul class="text-gray-500 space-y-1">
							<div class='flex justify-between'>
								<li class='mb-4'>
									<form action="http://localhost/fill-rouge/user/nav/<?php echo $category; ?>" method="post">
										<input type="hidden" name="">
									</form>
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
							<li class='mb-1'>
										<input value='clear' name="clear" type="submit" class="bg-gray-500 w-full mt-3 text-white rounded cursor-pointer py-2">
							</li>
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
							<li class='mb-1'>
										<input value='clear' name="clear" type="submit" class="bg-gray-500 w-full mt-3 text-white rounded cursor-pointer py-2">
							</li>
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
							<li class='mb-1'>
										<input value='clear' name="clear" type="submit" class="bg-gray-500 w-full mt-3 text-white rounded cursor-pointer py-2">
							</li>
						</ul>

					</div>
					<!-- filter wrap -->
				</aside>