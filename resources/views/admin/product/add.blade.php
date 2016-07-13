@extends('admin.master')
@section('pageHeader', 'Sản phẩm')
@section('function', 'thêm')
@section('content')

@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{!! $error !!}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- /.col-lg-12 -->
<form action="{{ route('postAddProduct') }}" method="POST" enctype="multipart/form-data">
    <div class="col-lg-7" style="padding-bottom:120px">

        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Danh mục sản phẩm</label>
            <select class="form-control" name="category">
                <option value="0">chọn danh mục</option>
                <option value="1">Áo thun</option>
                <option value="2">Áo sơ mi</option>
                <option value="3">Áo khoắc</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input class="form-control" name="txtName" required placeholder="Please Enter name" value="{{ old('txtName') }}"/>
        </div>
        <div class="col-md-12">
            <div class="col-md-6 form-group">
                <label>Giá mua</label>
                <input class="form-control" name="txtPrice" required placeholder="Please Enter price" value="{{ old('txtPrice') }}"/>
            </div>
            <div class="col-md-6 form-group">
                <label>Giá bán</label>
                <input class="form-control" name="txtSalePrice" required placeholder="Please Enter sale price" value="{{ old('txtSalePrice') }}"/>
            </div>
        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input name="txtQuantity" value="{{ old('txtQuantity') }}" required class="form-control" min="0" type="number" placeholder="Please Enter quantity"/>
        </div>
        <div class="form-group">
            <label>Giới thiệu sơ qua</label>
            <textarea  required class="form-control" rows="3" name="txtIntro">{{ old('txtIntro') }}</textarea>
            <!-- <script type="text/javascript">CKEDITOR.replace('txtIntro')</script> -->
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm</label>
            <textarea required class="form-control" rows="3" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="row">
            
            <div class="col-md-6">
                <label>Hình đại diện</label>
                <div class="box">
                    <input type="file" name="fImages" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                </div>
                <input type="text" name="" class="uploadFile" id="uploadFile">
            </div>
            <div class="col-md-6">
                <!-- <img src="" width="200px"> -->
            </div>
        </div>
        <div class="form-group">
            <label>Từ khóa tìm kiếm</label>
            <input class="form-control" required name="txtKeyword" placeholder="Please Enter Category Keywords" value="{{ old('txtOrder') }}" />
        </div>
        <button type="submit" class="btn btn-default">Thêm</button>
        <button type="reset" class="btn btn-default">Nhập lại</button>

    </div>
    <div class="col-lg-5">
        <div class="data _size">
            <span><b>Chọn size cho sản phẩm</b></span><br />
            @foreach($sizes AS $size)
            <label class="checkbox-inline">
              <input type="checkbox" name="size[]" value="{{ $size->id }}">{{ $size->name }}
            </label>
            @endforeach
        </div>
        <div class="data _image">
            <span><b>Hình ảnh chi tiết sản phẩm</b></span><br />
            <input type="file" class="listImage" name="fImagesDetail[]">
            <input type="file" class="listImage" name="fImagesDetail[]">
            <input type="file" class="listImage" name="fImagesDetail[]">
            <input type="file" class="listImage" name="fImagesDetail[]">
            <button type="button" class="addMore">Add</button>
        </div>
    </div>
</form>
@endsection
