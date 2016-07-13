@extends('admin.master')
@section('controller','Category')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
	<form action="{!! route('admin.cate.getAdd') !!}" method="POST">
		<input type="hidden" name="_token" value="{!! scrf_token() !!}" />
		<div class="form-group">
			<label>Category Parent</label>
			<select class="form-control" name="sltParent">
				<option value="0">Please Choose Category</option>
				<option value="">Tin Tức</option>
			</select>
		</div>
		<div class="form-group">
			<label>Category Name</label>
			<input class="form-control" type="" name="txtCateName" placeholder="Please Enter Category Name">
		</div>
		<div class="form-group">
			<label>Category Order</label>
			<input class="form-control" type="" name="txtOrder" placeholder="Please Enter Category Order">
		</div>
		<div class="form-group">
			<label>Category Keywords</label>
			<input type="from-control" placeholder="Please Enter Category Keywords" name="txtKeywords">
		</div>
		<div class="form-group">
			<label>Category Description</label>
			<input type="from-control"  name="txtDescription">
		</div>



















	</form>
</div>