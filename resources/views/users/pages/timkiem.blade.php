@extends('users.master')
@section('content')
<?php $title_banner = 'Kết quả tìm kiếm'; ?>
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
								@if($products->currentPage() != 1)
								<li><a href="{{ $products->url($products->currentPage() - 1) }}">Trước</a></li>
								@else
								<li class="disabled"><a href="{{ $products->url($products->currentPage() - 1) }}">Trước</a></li>
								@endif
								@for($i = 1; $i <= $products->lastPage(); $i++)
									@if($products->currentPage() == $i)
										<li class="active"><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
									@else
									<li class=""><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
									@endif

								@endfor
								@if($products->currentPage() != $products->lastPage())
								<li><a href="{{ $products->url($products->currentPage() + 1) }}">Tiếp</a></li>
								@else
								<li class="disabled"><a href="{{ $products->url($products->currentPage() + 1) }}">Tiếp</a></li>
								@endif
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