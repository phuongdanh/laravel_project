@extends('admin.master')
@section('pageHeader', 'Category')
@section('function', 'edit')
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
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="{!! route('admin.categories.postEdit', $data['id']) !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="parent_id">
                <option value="0">Please Choose Category</option>
                <!-- @foreach($parent as $item)
                <option value="{!! $item["id"] !!}">{!! $item["name"] !!}</option>
                @endforeach -->
                <?php cate_parent($parent,0,"", $data['parent_id']); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{{ old('txtCateName', isset($data['name']) ? $data['name'] : null) }}"/>
        </div>
        <div class="form-group">
            <label>Category Order</label>
            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order"  value="{{ old('txtOrder', isset($data['order']) ? $data['order'] : null) }}"/>
        </div>
        <div class="form-group">
            <label>Category Keywords</label>
            <input class="form-control" name="txtKey" placeholder="Please Enter Category Keywords" value="{{ old('txtKey', isset($data['keywords']) ? $data['keywords'] : null) }}"/>
        </div>
        <div class="form-group">
            <label>Category Description</label>
            <textarea class="form-control" rows="3" name="textDescription">{{ old('textDescription', isset($data['description']) ? $data['description'] : null) }}</textarea>
        </div>
        <div class="form-group">
            <label>Category Status</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Visible
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Invisible
            </label>
        </div>
        <button type="submit" class="btn btn-default">Category Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
            </div>
            @endsection