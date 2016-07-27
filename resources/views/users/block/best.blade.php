<?php $best_products = DB::table('products')->select('id', 'name', 'saleprice', 'image', 'cate_id', 'slug', 'created_at')->orderBy('saled', 'DESC')->skip(0)->take(3)->get(); ?>

<div class="block">								
	<h4 class="title"><strong>Bán</strong> Chạy Nhất</h4>								
	<ul class="small-product">
		@foreach($best_products AS $item)
		<li>
			<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}" title="{{ $item->name }}">
				<img src="{{ asset('resources/upload/images/products/avatar/'.$item->image) }}" alt="{{ $item->name }}">
			</a>
			<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}">{{ $item->name }}</a>
		</li> 
		@endforeach  
	</ul>
</div>