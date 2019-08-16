@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đối Tác
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                 @if(session('loi'))
                    <div class="alert alert-success">
                        {{session('loi')}}
                    </div>
                @endif
                <form action="admin/doitac/them" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Đối Tác</label>
                        <input class="form-control" name="ten" placeholder="Nhập tên slide..." />
                    </div>  
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" class="form-control" name="anh"/>
                    </div>    
                    <div class="form-group">
                        <label>Trạng Thái:</label>
                        <label><input name="status" type="radio"  value="1" checked="" />hiển thị trang chủ
                        </label>
                         <label><input name="status" type="radio"  value="0" />không hiển thị trang chủ
                         </label>
                    </div>    
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm Mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection