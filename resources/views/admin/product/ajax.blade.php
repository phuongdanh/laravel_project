
@extends('admin.master')
@section('pageHeader', 'Product')
@section('function', 'list')
@section('content')
<!-- /.col-lg-12 -->
<div class="content_render">

</div>
<!--<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Date</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr class="even gradeC" align="center">
            <td>2</td>
            <td>Áo Thun Polo</td>
            <td>250.000 VNĐ</td>
            <td>1 Hours Age</td>
            <td>Ẩn</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        </tr>
    </tbody>
</table>-->
<script type="text/javascript">
    $.ajax({
        url: 'http://localhost/laravel5/hoclaravel/admin/products/jsonFile',
        type: 'get',
        dataType: 'json',
        success: function (output) {
            var html = '';
            html += '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
            html += '<thead>';
            html += '<tr align="center">';
            html += '<th>ID</th>';
            html += '<th>Name</th>';
            html += '<th>Price</th>';
            html += '<th>Category</th>';
            html += '<th>Date</th>';
            html += '<th>Delete</th>';
            html += '<th>Edit</th>';
            html += '</tr>';
            html += '</thead>';
            //toi phan noi dung
            html += '<tbody>';
            $.each(output,function(key, item){
                html += '<tr class="even gradeC" align="center">';
                html += '<td>1</td>';
                html += '<td>' + item.name + '</td>';
                html += '<td>' + item.price + ' VND</td>';
                html += '<td>' + item.cate_id + '</td>';
                html += '<td>' + item.created_at + '</td>';
                html += '<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>';
                html += '<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>';
                html += '</tr>';
            });
            html += '</tbody>';
            html += '<table>';
            
            //in ra 
            $('.content_render').html(html);
            console.log(output);
        },
    });
//    $.ajax({
//        url: "http://mysafeinfo.com/api/data?list=englishmonarchs&format=json",
//        type: 'GET',
//        dataType: 'json',
//        success: function (result) {
//            console.log(result);
//        }
//    });
</script>

@endsection
