@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
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
                <form action="admin/slide/them" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Slide</label>
                        <input class="form-control" name="ten" placeholder="Nhập tên slide..." />
                    </div>  
                    <div class="form-group">
                        <label>Giá</label>
                        <input class="form-control" name="gia" placeholder="Nhập giá..." />
                    </div>  
                    <div class="form-group">
                        <label>Sản Phẩm Khuyễn Mai:</label>
                        <label><input name="spkm" type="radio" checked="" value="1" />có
                        </label>
                         <label><input name="spkm" type="radio" value="0" />không
                         </label>
                    </div>  
                    <div class="form-group">
                        <label>Giá Khyễn Mãi</label>
                        <input class="form-control" name="giakm" placeholder="Nhập giá khuyễn mãi..." />
                    </div>  
                    <div class="form-group">
                        <label>link</label>
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