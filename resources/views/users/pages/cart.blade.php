@extends('users.master')
@section('content')
<?php $title_banner = 'Giỏ hàng của bạn'; ?>
@include('users.block.banner')
<section class="main-content">		
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Xóa</th>
									<th>Hình ảnh</th>
									<th>Tên</th>
									<th>Số lượng</th>
									<th>Kích thước</th>
									<th>Giá</th>
									<th>Tổng</th>
								</tr>
							</thead>
							<tbody>

								@foreach($carts AS $item)
								<tr>
									<td><a href="{{ route('xoa-gio-hang', $item['rowid']) }}">Xóa</a></td>
									<td><a href=""><img width="200px" alt="" src="{{ isset($item['options']['image']) ? asset('resources/upload/images/products/avatar/'. $item['options']['image']) : null }}"></a></td>
									<td>{{ $item['name'] }}</td>
									<td><input type="text" value="{{ $item['qty'] }}" class="input-mini"></td>
									<td>
										<?php  
										if(isset($item['options']['size'])){
											$size = DB::table('sizes')->where('id', $item['options']['size'])->first();
											$size = json_encode($size);
											$size = json_decode($size, true);
											echo $size['name'];

										}  
										?>

									</td>
									<td>{{ number_format($item['price']) }} VNĐ</td>
									<td>{{ number_format($item['price'] * $item['qty']) }} VNĐ</td>
								</tr>
								@endforeach
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>{{ number_format(Cart::total()) }} VNĐ</strong></td>
								</tr>		  
							</tbody>
						</table>
						
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="button">Update</button>
							<button class="btn" type="button">Continue</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
						</p>					
					</div>
					<div class="span3 col">
						@include('users.block.cate')
						@include('users.block.random')
					</div>
				</div>
			</section>	
			@endsection