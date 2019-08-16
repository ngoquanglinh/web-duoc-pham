@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đối Tác
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                 <div class="alert alert-success">
                  {{session('thongbao')}}
                 </div>
             @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên Đối Tác</th>
                        <th>Ảnh</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doitac as $dt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$dt->id}}</td>
                        <td>{{$dt->ten}}</td>
                        <td><img src="uploads/{{$dt->anh}}" width="100px" height="50px;" alt=""></td>
                        <td>@if($dt->Status==1)
                            {{"Hiển thị trang chủ"}}
                            @else
                            {{"Không Hiển thị trang chủ"}}
                        @endif</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/doitac/xoa/{{$dt->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/doitac/sua/{{$dt->id}}">Edit</a></td>
                    </tr> 
                    @endforeach     
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection