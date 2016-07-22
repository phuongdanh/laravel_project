@extends('users.master')
@section('content')
<?php $title_banner = $cate_name; ?>
			@include('users.block.banner')
			<section class="main-content">
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							@foreach($products AS $item)
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>									<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}"><img alt="" src="{{ asset('resources/upload/images/products/avatar/'. $item->image) }}"></a><br/>
									<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="title">{{ $item->name }}</a><br/>
									<!-- <a href="#" class="category">Phasellus consequat</a> -->
									<p class="price">{{ number_format($item->saleprice) }} VNĐ</p>
								</div>
							</li>       
							@endforeach
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
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