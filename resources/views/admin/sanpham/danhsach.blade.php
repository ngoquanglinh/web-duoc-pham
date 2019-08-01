@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản Phẩm
                    <small>Danh Sách</small>
                </h1>
                 @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên Sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Giá KM</th>
                        <th>SPkhuyễn mãi</th>
                        <th>active</th>
                        <th>SP Mới</th>
                        <th>status</th>
                        <th>Đánh Giá</th>
                        <th>idLoại SP</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($sanpham as $sp)
                    <tr class="odd gradeX" align="center">
                        <td>{{$sp->id}}</td>
                        <td>{{$sp->TenSP}}</td>
                        <td>{{$sp->ImageSP}}</td>
                        <td>{{$sp->Gia}}</td>
                        <td>{{$sp->GiaKhuyenMai}}</td>
                        <td>{{$sp->SPKhuyenMai}}</td>
                        <td>{{$sp->active}}</td>
                        <td>{{$sp->SPMoi}}</td>
                        <td>{{$sp->status}}</td>
                        <td>{{$sp->DanhGia}}</td>
                        <td>{{$sp->idLoaiSP}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Edit</a></td>
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