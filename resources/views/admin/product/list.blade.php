
@extends('admin.master')
@section('pageHeader', 'Sản phẩm')
@section('function', 'Danh sách')
@section('content')
<!-- /.col-lg-12 -->
@if (Session::has('flash_message'))
    <div class="alert alert-{{ Session::get('flash_level') }}">{{ Session::get('flash_message') }}</div>
@endif
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên</th>
            <th>Giá mua</th>
            <th>Giá bán</th>
            <th>Danh mục</th>
            <th>Ngày</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; ?>
        @foreach($products AS $product) <?php $i++; ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $i !!}</td>
            <td>{!! $product->name !!}</td>
            <td>{!! $product->price !!} VNĐ</td>
            <td>{!! $product->saleprice !!} VNĐ</td>
            <td>
                <?php
                $cate = DB::table('categories')->where('id', $product->cate_id)->first();
                echo $cate->name;
                ?>
            </td>
            <td>20/6/2016</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('deleteProduct', $product->id) !!}">Xóa</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('getEditProduct', $product->id) !!}">Sửa</a></td>
        </tr>
        @endforeach

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
