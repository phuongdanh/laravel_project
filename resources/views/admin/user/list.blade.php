
@extends('admin.master')
@section('pageHeader', 'User')
@section('function', 'list')
@section('content')
                
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Họ và tên</th>
                                <th>Địa chỉ</th>
                                <th>Vai trò</th>
                                <th>Email</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach($users AS $item)
                            <?php $i++; ?>
                            <tr class="odd gradeX" align="center">
                                <td>{{ $i }}</td>
                                <td>{{ $item['firstname'] }} {{ $item['lastname'] }}</td>
                                <td>{{ $item['address'] }}</td>
                                <td>
                                    @if($item['role'] == 0)
                                    Người dùng 
                                    @else 
                                        Admin 
                                    @endif
                                </td>
                                <td>{{ $item['email'] }}</td>
                                <td class="center"><i class="fa fa-remove fa-fw"></i> <a href="{{ route('deleteUser', $item['id']) }}">Xóa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
           @endsection
                    
   