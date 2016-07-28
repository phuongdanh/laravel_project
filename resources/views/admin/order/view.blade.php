
@extends('admin.master')
@section('pageHeader', 'Đơn hàng')
@section('function', 'Xem chi tiếc')
@section('content')

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Thông tin gười mua</a></li>
    <li><a data-toggle="tab" href="#menu1">Thông tin đơn hàng</a></li>
  </ul>
<?php 
        $user = DB::table('users')->where('id', $order['user_id'])->first();
        $customerInfo = json_decode($order['customerInfo'], true);
        $cartInfo = json_decode($order['cartInfo'], true);
        $status = '';
        
    ?>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    	<h4>Tên người dùng: <?php if($user->id != 1){ echo $user->firstname.' '.$user->lastname; }else{ echo 'Không có'; } ?></h4>
    	<table border="0">
    		<tr>
    			<th>Tên khách hàng</th>
    			<td> --- {{ $customerInfo['ho'] }} {{ $customerInfo['ten'] }}</td>
    		</tr>
    		<tr>
    			<th>Email </th>
    			<td> --- {{  $customerInfo['email'] }}</td>
    		</tr>
    		<tr>
    			<th>Điện thoại</th>
    			<td> --- {{  $customerInfo['dienthoai'] }}</td>
    		</tr>
    		<tr>
    			<th>Công ty</th>
    			<td> --- {{ $customerInfo['congty'] }}</td>
    		</tr>
    		<tr>
    			<th>Địa chỉ 1</th>
    			<td> --- {{ $customerInfo['diachi1'] }}</td>
    		</tr>
    		<tr>
    			<th>Địa chỉ 2</th>
    			<td> --- {{ $customerInfo['diachi2'] }}</td>
    		</tr>
    		<tr>
    			<th>Thành phố</th>
    			<td> --- {{ $customerInfo['thanhpho'] }}</td>
    		</tr>
    	</table>

    </div>
    <div id="menu1" class="tab-pane fade">
    <table class="table table-striped ">
		    <thead>
		        <tr>
		            <th>STT</th>
		            <th>Hình ảnh:</th>
		            <th>Tên</th>
		            <th>Số lượng</th>
		            <th>Size</th>
		            <th>Giá bán</th>
		            <th>Tổng giá</th>
		        </tr>
		    </thead>
		    <tbody>
		    	<?php $total = 0; ?>
		    	<?php foreach ($cartInfo as $item) { ?>
		    	<tr>
				    <td>1</td>
				    <td><img width="200px" alt="" src="{{ isset($item['options']['image']) ? asset('resources/upload/images/products/avatar/'. $item['options']['image']) : null }}"></td>
				    <td>{{ $item['name'] }}</td>
				    <td>{{ $item['qty'] }}</td>
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
				<?php $total = $total + $item['price'] * $item['qty']; ?>
				<?php } ?>
			</tbody>
		</table>
    </div>
  </div>
  <hr />
  <h4>Tổng đơn hàng: {{ $total }}</h4> 
  <?php if($order['status'] == 0){ ?>
  		<span> Đây là đơn hàng mới</span>
  		<a href="{{ route('confirmOrder', $order['id']) }}" class="btn btn-danger">Xác nhận đã chuyển</a>
    <?php   }elseif($order['status'] == 1){ ?>
            <a href="{{ route('confirmOrder', $order['id']) }}" class="btn btn-danger">Xác nhận đã chuyển</a>
    <?php   } ?>
@endsection
