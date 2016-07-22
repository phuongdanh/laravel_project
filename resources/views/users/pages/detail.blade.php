@extends('users.master')
@section('content')
<?php $title_banner = 'Chi tiếc sản phẩm'; ?>
@include('users.block.banner')
<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="#resources/upload/images/products/avatar/{{ $product['image'] }}"  class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="resources/upload/images/products/avatar/{{ $product['image'] }}"></a>								
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/ladies/2.jpg" alt=""></a>
									</li>								
									<li class="span1">
										<a href="themes/images/ladies/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="themes/images/ladies/3.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="themes/images/ladies/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="themes/images/ladies/4.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="themes/images/ladies/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="themes/images/ladies/5.jpg" alt=""></a>
									</li>
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Tên sản phẩm:</strong> <span>{{ $product['name'] }}</span><br>
									<strong>Mã sản phẩm:</strong> <span>Sản phẩm {{ $product['id'] }}</span><br>
									<strong>Loại sản phẩm:</strong> <span>{{ $cate['name'] }}</span><br>
									<strong>Kích thước:</strong> 
										<span>
											<select>
												@foreach($result_size AS $size)
												<option value="{{ $size->id }}">{{ $size->name }}</option>
												@endforeach
											</select>
										</span>
									<br>								
								</address>									
								<h4><strong>Giá: {{ number_format($product['saleprice']) }} VNĐ</strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline">
									
									<p>&nbsp;</p>
									<label>Số lượng:</label>
									<input type="text" class="span1" value="1">
									<button class="btn btn-inverse" type="submit">Thêm vào giỏ hàng</button>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home1"  data-toggle="tab">Mô tả sản phẩm</a></li>
									<li class=""><a href="#profile1"  data-toggle="tab">Giới thiệu sản phẩm</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home1">
										{!! $product['description'] !!}
									</div>
									<div class="tab-pane" id="profile1">
										{!! $product['intro'] !!}
									</div>
								</div>							
							</div>				
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<?php $i = 0; ?>
												@foreach($related_products AS $item)
												<?php $i++; if($i == 4){ break; } ?>  
												<li class="span3">
													<div class="product-box">							<a href="{{ route('productDetail', ['id' => $item['id'], 'slug' => $item['slug']]) }}"><img alt="" src="{{ asset('resources/upload/images/products/avatar/'. $item['image']) }}"></a><br/>
														<a href="{{ route('productDetail', ['id' => $item['id'], 'slug' => $item['slug']]) }}" class="title">Praesent tempor sem</a><br/>
														<a href="#" class="category">{{ $cate['name'] }}</a>
														<p class="price">{{ number_format($product['saleprice']) }} VNĐ</p>
													</div>
												</li>	
												@endforeach											
											</ul>
										</div>

										<div class="item">
											<ul class="thumbnails listing-products">
												<?php $i = 0; ?>
												@foreach($related_products AS $item)
												<?php $i++; if($i <= 2){ continue; } ?>  
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>	
														<a href="{{ route('productDetail', ['id' => $item['id'], 'slug' => $item['slug']]) }}"><img alt="" src="{{ asset('resources/upload/images/products/avatar/'. $item['image']) }}"></a><br/>
														<a href="{{ route('productDetail', ['id' => $item['id'], 'slug' => $item['slug']]) }}" class="title">Praesent tempor sem</a><br/>
														<a href="#" class="category">{{ $cate['name'] }}</a>
														<p class="price">{{ number_format($product['saleprice']) }} VNĐ</p>
													</div>
												</li>	
												@endforeach	
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						@include('users.block.cate')
						@include('users.block.random')
						@include('users.block.best')
					</div>
				</div>
			</section>
@endsection