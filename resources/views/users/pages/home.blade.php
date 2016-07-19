@extends('users.master')

@section('content')
<section class="main-content">
	<div class="row">
		<div class="span12">													
			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Sản phẩm <strong>Tiêu biểu</strong></span></span></span>
						<span class="pull-right">
							<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
						</span>
					</h4>
					<div id="myCarousel" class="myCarousel carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								<ul class="thumbnails">												
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
											<a href="products.html" class="category">Commodo consequat</a>
											<p class="price">$17.25</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Quis nostrud exerci tation</a><br/>
											<a href="products.html" class="category">Quis nostrud</a>
											<p class="price">$32.50</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Know exactly turned</a><br/>
											<a href="products.html" class="category">Quis nostrud</a>
											<p class="price">$14.20</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">You think fast</a><br/>
											<a href="products.html" class="category">World once</a>
											<p class="price">$31.45</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails">
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Know exactly</a><br/>
											<a href="products.html" class="category">Quis nostrud</a>
											<p class="price">$22.30</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
											<a href="products.html" class="category">Commodo consequat</a>
											<p class="price">$40.25</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">You think water</a><br/>
											<a href="products.html" class="category">World once</a>
											<p class="price">$10.45</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
											<a href="products.html" class="category">Quis nostrud</a>
											<p class="price">$35.50</p>
										</div>
									</li>																																	
								</ul>
							</div>
						</div>							
					</div>
				</div>						
			</div>
			<br/>
			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Sản phẩm <strong>Mới nhất</strong></span></span></span>
						<span class="pull-right">
							<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
						</span>
					</h4>
					<div id="myCarousel-2" class="myCarousel carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								<ul class="thumbnails">												
									
									<?php $i = 0; ?>
									@foreach($new_products AS $item)
									<?php $i++; 
										if($i == 5){
											break;
										}
									?>
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">{{ $item->name }}</a><br/>
											<a href="products.html" class="category">Commodo consequat</a>
											<p class="price">$25.50</p>
										</div>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails">
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Know exactly</a><br/>
											<a href="products.html" class="category">Quis nostrud</a>
											<p class="price">$45.50</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
											<a href="products.html" class="category">Commodo consequat</a>
											<p class="price">$33.50</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">You think water</a><br/>
											<a href="products.html" class="category">World once</a>
											<p class="price">$45.30</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.html"><img src="{{ asset('public/themes/images/ladies/1.jpg') }}" alt="" /></a></p>
											<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
											<a href="products.html" class="category">Quis nostrud</a>
											<p class="price">$25.20</p>
										</div>
									</li>																																	
								</ul>
							</div>
						</div>							
					</div>
				</div>						
			</div>

			<div class="row feature_box">						
				<div class="span4">
					<div class="service">
						<div class="responsive">	
							<img src="{{ asset('public/themes/images/feature_img_2.png') }}" alt="" />
							<h4>MODERN <strong>DESIGN</strong></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
						</div>
					</div>
				</div>
				<div class="span4">	
					<div class="service">
						<div class="customize">			
							<img src="{{ asset('public/themes/images/feature_img_1.png') }}" alt="" />
							<h4>FREE <strong>SHIPPING</strong></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="service">
						<div class="support">	
							<img src="{{ asset('public/themes/images/feature_img_3.png') }}" alt="" />
							<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
						</div>
					</div>
				</div>	
			</div>		
		</div>				
	</div>
</section>
<section class="our_client">
	<h4 class="title"><span class="text">Manufactures</span></h4>
	<div class="row">					
		<div class="span2">
			<a href="#"><img alt="" src="{{ asset('public/themes/images/clients/14.png') }}"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{ asset('public/themes/images/clients/35.png') }}"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{ asset('public/themes/images/clients/1.png') }}"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{ asset('public/themes/images/clients/2.png') }}"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{ asset('public/themes/images/clients/3.png') }}"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{ asset('public/themes/images/clients/4.png') }}"></a>
		</div>
	</div>
</section>																		
@endsection



