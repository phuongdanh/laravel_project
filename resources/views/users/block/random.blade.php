<div class="block">
	<h4 class="title">
		<span class="pull-left"><span class="text">Ngẫu nhiên</span></span>
		<span class="pull-right">
			<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
		</span>
	</h4>
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			
			<?php $new_pros = DB::table('products')->select("id","name","cate_id","price", 'saleprice','image', 'slug',"created_at")->orderBy('viewed', 'DESC')->skip(0)->take(2)->orderBy('id', 'DESC')->get(); $i = 0;?>
				@foreach($new_pros AS $item)
				<?php if($i == 0){ $class = 'active'; }else{ $class = ''; }  $i++;?>
				<div class="{{ $class }} item">
					<ul class="thumbnails listing-products">
						<li class="span3">
							<div class="product-box">												
								<img alt="" src="{{ asset('resources/upload/images/products/avatar/'. $item->image) }}"><br/>
								<a href="{{ route('productDetail', ['id' => $item->id, 'slug' => $item->slug]) }}" class="title">{{ $item->name }}</a><br/>
								
								<p class="price">{{ number_format($item->saleprice) }} VNĐ</p>
							</div>
						</li>
					</ul>
				</div>
				@endforeach
		</div>
	</div>
</div>