
@extends('admin.master')
@section('pageHeader', 'Sản phẩm')
@section('function', 'Danh sách')
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
            <th>Xóa</th>
            <th>Xem</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $order) { 
        $user = DB::table('users')->where('id', $order['user_id'])->first();
        $customerInfo = json_decode($order['customerInfo'], true);
    ?>
        <tr class="odd gradeX" align="center">
            <td>1</td>
            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
            <td>{{ $customerInfo['ho'] }} {{ $customerInfo['ten'] }}</td>
            <td>{{ $customerInfo['dienthoai'] }}</td>
            <td>{{ $order['total'] }}</td>
            <td>20/6/2016</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="">Xóa</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Sửa</a></td>
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
