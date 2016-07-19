<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="{{ asset('public/themes/images/logo.png') }}" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<?php $cate_level_1 = DB::table('categories')->where('parent_id', 0)->get(); ?>
							@foreach($cate_level_1 AS $value)
							<li><a href="./products.html">{{ $value->name }}</a>
								<ul>									
									<?php $cate_level_2 = DB::table('categories')->where('parent_id', $value->id)->get(); ?>
									@foreach($cate_level_2 AS $value2)
									<li><a href="./products.html">{{ $value2->name }}</a></li>
									@endforeach
								</ul>
							</li>
							@endforeach															
							<!-- <li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li> -->
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>