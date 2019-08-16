@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại Sản Phẩm
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
                        <th>Tên Slide</th>
                        <th>Giá</th>
                        <th>SPKhuyễn Mãi</th>
                        <th>Giá khuyễn mãi</th>
                        <th>Ảnh</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($slide as $sl)
                    <tr class="odd gradeX" align="center">
                        <td>{{$sl->id}}</td>
                        <td>{{$sl->TenSlide}}</td>
                        <td>{{$sl->Gia}}</td>
                        <td>@if($sl->SPKhuyenMai==1)
                            {{"sản phẩm khuyễn mãi"}}
                            @else
                            {{"Không phải khuyễn mãi"}}
                        @endif</td>
                        <td>{{$sl->GiaKhuyenMai}}</td>
                        <td><img src="uploads/{{$sl->link}}" width="200px" height="50px;" alt=""></td>
                        <td>@if($sl->Status==1)
                            {{"Hiển thị trang chủ"}}
                            @else
                            {{"Không Hiển thị trang chủ"}}
                        @endif</td>
                        <td>{{$sl->Status}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/slide/xoa/{{$sl->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slide/sua/{{$sl->id}}">Edit</a></td>
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