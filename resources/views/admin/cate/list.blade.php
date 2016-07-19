
@extends('admin.master')
@section('pageHeader', 'Danh mục')
@section('function', 'Danh sách')
@section('content')
<div class="col-md-12">
    @if(Session::has('flash_message'))
    <div class="alert alert-{!! Session::get('flash_level') !!}">
        {!! Session::get('flash_message') !!}
    </div>
    @endif
</div>

<!--<script type="text/javascript">
</script>-->
<!-- /.col-lg-12 -->
<div class="col-md-8">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>Stt</th>
                <th>Tên</th>
                <th>Danh mục cha</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @if($data)
            @foreach($data AS $category)
            <?php $i++; ?>
            <tr class="odd gradeX" align="center">
                <td>{{ $i }}</td>
                <td><?php echo ($category->name); ?></td>
                <td>
                    <?php
                    $parent_id = $category->parent_id;
                    if ($parent_id == 0) {
                        echo 'None';
                    } else {
                        $parent_name = DB::table('categories')->where('id', $parent_id)->first();
                        echo $parent_name->name;
                    }
                    ?>
                </td>
                <td class="center"><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="{{ route('deleteCategory',$category->id) }}"><i class="fa fa-trash-o  fa-fw"></i></a> -  <button type="button" value="{{ $category->id }}" class="button_edit"><i class="fa fa-pencil fa-fw"></i></button></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
<div class="col-md-4">
    <h4>Chọn icon bút chì để sửa danh mục</h4>
    <!-- Sua se duoc viet bang ajax trong file myscript -->
    <hr />
    <form action="{!! route('postEditCategory') !!}" method="POST" name="formEdit">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="id" value="">
            <div class="form-group">
                <label>Tên danh mục</label>
                <input class="form-control" name="txtCateName" placeholder="Nhập tên danh mục" value="{{ old('txtCateName') }}"/>
            </div>
            <div class="form-group">
                <label>Danh mục cha</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Chọn danh mục cha</option>
                    <?php cate_parent($data, 0, "", 0); ?>
                </select>
            </div>
            <div class="form-group">
                <label>Từ khóa</label>
                <input class="form-control" name="txtKey" placeholder="Nhập từ khóa" value="{{ old('txtKey') }}"/>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" rows="3" name="txtDescription">{{ old('txtDescription') }}</textarea>
            </div>
            <button type="submit" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
        </form>
</div>
<div class="formAdd col-md-12">
<div class="row">
<hr />
<h4>Thêm danh mục cho website</h4>

<form action="{!! route('admin.cate.postAdd') !!}" method="POST">
    <div class="col-md-6">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="txtCateName" placeholder="Nhập tên" value="{{ old('txtCateName') }}"/>
            </div>
            <div class="form-group">
                <label>Danh mục cha</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Chọn danh mục cha</option>
                    <?php cate_parent($data, 0, "", 0); ?>
                </select>
            </div>
            <div class="form-group">
                <label>Từ khóa</label>
                <input class="form-control" name="txtKey" placeholder="Nhập từ khóa" value="{{ old('txtKey') }}"/>
            </div>
    </div>
    <div class="col-md-6">
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" rows="3" name="txtDescription">{{ old('txtDescription') }}</textarea>
            </div>
            <button type="submit" class="btn btn-default">Thêm</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
    </div>
</form>
</div>
</div>
</div>
<!-- /.col-lg-12 -->
@endsection