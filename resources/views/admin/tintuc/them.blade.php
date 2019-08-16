@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                 @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
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
                <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Tin Tức</label>
                        <input class="form-control" type="text" name="ten" placeholder="Tên tin tức" />
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input class="form-control"  type="file" name="anh" placeholder="ảnh tin tức" />
                    </div>
                    <div class="form-group">
                        <label>Tóm Tắt</label>
                        <textarea  id="demo" class="form-control ckeditor" name="tomtat" placeholder="Mô tả" row="3">
                        </textarea>
                    </div>
                     <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea  id="demo" class="form-control ckeditor" name="noidung" placeholder="Mô tả" row="3">
                        </textarea>
                    </div>
                    @if(Auth::check())
                    <div class="form-group">
                        <label>Người Đăng</label>
                        <input class="form-control" type="text" readonly="" name="nguoidang" value="{{Auth::user()->name}}" />
                    </div> 
                    @endif  
                    <div class="form-group">
                         <label>Trạng Thái</label>
                         <label class="radio-inline">
                             <input name="status" value="1" checked="" type="radio">Hiện Trang Chủ
                         </label>
                         <label class="radio-inline">
                             <input name="status" value="0" type="radio">Không Hiện Trang Chủ
                         </label>
                    </div>
            <button type="submit" class="btn btn-default">Thêm Tin</button>
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