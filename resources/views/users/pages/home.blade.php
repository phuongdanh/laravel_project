@extends('users.master')

@section('content')
@include('users.block.slider')
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
									<?php $i = 0;?>
									@foreach($best_products AS $item)
									<?php $i++; 
										if($i == 5){
											break;
										}
									?>												
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<p><a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}"><img src="{{ asset('resources/upload/images/products/avatar/'.$item->image) }}" alt="" /></a></p>
											<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="title">{{ $item->name }}</a><br/>
											<?php $cate = DB::table('categories')->where('id', $item->cate_id)->first(); ?>
											<a href="{{ route('productsOfCategory', ['id'=>$cate->id, 'slug'=>$cate->slug]) }}" class="category">{{ $cate->name }}</a>
											<p class="price">{{ number_format($item->saleprice) }} VNĐ</p>
										</div>
									</li>
									@endforeach
									
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails">
									
									<?php $i = 0; ?>
									@foreach($best_products AS $item)
									<?php $i++; 
										if($i <= 4){
											continue;
										}
									?>
									<li class="span3">
										<div class="product-box">
											<p><a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}"><img src="{{ asset('resources/upload/images/products/avatar/'.$item->image) }}" alt="" /></a></p>
											<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="title">{{ $item->name }}</a><br/>
											<?php $cate = DB::table('categories')->where('id', $item->cate_id)->first(); ?>
											<a href="{{ route('productsOfCategory', ['id'=>$cate->id, 'slug'=>$cate->slug]) }}" class="category">{{ $cate->name }}</a>
											<p class="price">{{ number_format($item->saleprice) }} VNĐ</p>
										</div>
									</li>		
									@endforeach																
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
									
									<?php $i = 0;?>
									@foreach($new_products AS $item)
									<?php $i++; 
										if($i == 5){
											break;
										}
									?>
									<li class="span3">
										<div class="product-box">
											<p><a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}"><img src="{{ asset('resources/upload/images/products/avatar/'.$item->image) }}" alt="" /></a></p>
											<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="title">{{ $item->name }}</a><br/>
											<?php $cate = DB::table('categories')->where('id', $item->cate_id)->first(); ?>
											<a href="{{ route('productsOfCategory', ['id'=>$cate->id, 'slug'=>$cate->slug]) }}" class="category">{{ $cate->name }}</a>
											<p class="price">{{ number_format($item->saleprice) }} VNĐ</p>
										</div>
									</li>		
									@endforeach
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails">
									<?php $i = 0; ?>
									@foreach($new_products AS $item)
									<?php $i++; 
										if($i <= 4){
											continue;
										}
									?>
									<li class="span3">
										<div class="product-box">
											<p><a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}"><img src="{{ asset('resources/upload/images/products/avatar/'.$item->image) }}" alt="" /></a></p>
											<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="title">{{ $item->name }}</a><br/>
											<?php $cate = DB::table('categories')->where('id', $item->cate_id)->first(); ?>
											<a href="{{ route('productsOfCategory', ['id'=>$cate->id, 'slug'=>$cate->slug]) }}" class="category">{{ $cate->name }}</a>
											<p class="price">{{ number_format($item->saleprice) }} VNĐ</p>
										</div>
									</li>		
									@endforeach																																
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



