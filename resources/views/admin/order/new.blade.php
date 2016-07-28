
@extends('admin.master')
@section('pageHeader', 'Đơn hàng')
@section('function', 'Mới')
@section('content')
<!-- /.col-lg-12 -->


<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Người dùng</th>
            <th>Khách hàng</th>
            <th>Điện thoại</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Ngày</th>
            <th>Xóa & Xem</th>
        </tr>
    </thead>
    <tbody>
    <?php $i = 0; foreach ($orders as $order) { 
        $i++;
        $user = DB::table('users')->where('id', $order['user_id'])->first();
        $customerInfo = json_decode($order['customerInfo'], true);
        $status = '';
        if($order['status'] == 0){
            $status = 'Mới';
        }elseif($order['status'] == 1){
            $status = 'Chưa chuyển';
        }elseif($order['status'] == 2){
            $status = 'Đã chuyển';
        }
    ?>
        <tr class="odd gradeX" align="center">
            <td>{{ $i }}</td>
            <td><?php if($user->id != 1){ echo $user->firstname.' '.$user->lastname; }else{ echo 'Không có'; } ?></td>
            <td>{{ $customerInfo['ho'] }} {{ $customerInfo['ten'] }}</td>
            <td>{{ $customerInfo['dienthoai'] }}</td>
            <td>{{ $order['total'] }}</td>
            <td>{{ $status }}</td>
            <td>{{ date("d-m-Y", strtotime($order['created_at'])) }}</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('deleteOrder', $order['id']) }}">Xóa</a> -- <i class="fa fa-pencil fa-fw"></i> <a href="{{ route('viewOrder', $order['id']) }}">Xem</a></td>
        </tr>
    <?php        
        }
    ?>
        

<!--                            <tr class="even gradeC" align="center">
    <td>2</td>
    <td>Áo Thun Polo</td>
    <td>250.000 VNĐ</td>
    <td>1 Hours Age</td>
    <td>Ẩn</td>
    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
</tr>-->

    </tbody>
</table>
@endsection
