
@extends('admin.master')
@section('pageHeader', 'Category')
@section('function', 'list')
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
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Category Parent</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @if($data)
        @foreach($data AS $category)
        <tr class="odd gradeX" align="center">
            <td>1</td>
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
            <td>Hiện</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="{!! URL::route('admin.categories.delete',$category->id) !!}"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.categories.getEdit',$category->id) !!}">Edit</a></td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
<!-- /.col-lg-12 -->
@endsection