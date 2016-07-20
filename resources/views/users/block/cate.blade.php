<div class="block">	
	<?php $cate_level_1 = DB::table('categories')->where('parent_id', 0)->get(); ?>
	@foreach($cate_level_1 AS $value)
	<ul class="nav nav-list below">
		<li class="nav-header"><a href="{{ route('productsOfCategory', ['id'=>$value->id, 'slug'=>$value->slug]) }}"> {{ $value->name }}</a></li>
		<?php $cate_level_2 = DB::table('categories')->where('parent_id', $value->id)->get(); ?>
		@foreach($cate_level_2 AS $value2)
		<li><a href="{{ route('productsOfCategory', ['id'=>$value2->id, 'slug'=>$value2->slug]) }}">{{ $value2->name }}</a></li>
		@endforeach
	</ul>
	<br/>
	@endforeach	
</div>