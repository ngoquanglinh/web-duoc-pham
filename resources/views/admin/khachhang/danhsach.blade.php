@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID Khách Hàng</th>
                        <th>Name</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Địa Chỉ</th>
                        <th>Phone</th>
                        <th>Ghi Chú</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($khachhang as $kh)
                    <tr class="odd gradeX" align="center">
                        <td>{{$kh->id}}</td>
                        <td>{{$kh->Ten}}</td>
                        <td>{{$kh->GioiTinh}}</td>
                        <td>{{$kh->Email}}</td>
                        <td>{{$kh->DiaChi}}</td>
                        <td>{{$kh->Phone}}</td>
                        <td>{{$kh->GhiChu}}</td>
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