@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản Phẩm
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
                <form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Loại Sản Phẩm</label>
                        <select class="form-control" name="lsp" selected>
                           @foreach($loaisp as $lsp)
                            <option value="{{$lsp->id}}">{{$lsp->TenLoaiSP}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Sản phẩm</label>
                        <input class="form-control" type="text" name="tensp" placeholder="Tên sản phẩm" />
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input class="form-control"  type="file" name="anh" placeholder="ảnh sản phẩm" />
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input class="form-control" type="text" name="gia" placeholder="Giá sản phẩm" />
                    </div>
                     <div class="form-group">
                         <label>SPkhuyễn mãi</label>
                         <label class="radio-inline">
                         <input name="spkm" value="1" checked="" type="radio">Có
                         </label>
                         <label class="radio-inline">
                         <input name="spkm" value="0" type="radio">Không
                         </label>
                    </div>
                    <div class="form-group">
                        <label>Giá KM</label>
                        <input class="form-control" type="text" name="giakm" placeholder="Giá khuyễn mãi" />
                    </div>
                    <div class="form-group">
                        <label>Video</label>
                        <input class="form-control" name="video" type="text" placeholder="Link video sản phẩm" />
                    </div>
                    <div class="form-group">
                         <label>active</label>
                         <label class="radio-inline">
                             <input name="active" value="1" checked="" type="radio">Có
                         </label>
                         <label class="radio-inline">
                             <input name="active" value="0" type="radio">Không
                         </label>
                    </div>
                    <div class="form-group">
                         <label>SP Mới</label>
                         <label class="radio-inline">
                            <input name="spmoi" value="1" checked="" type="radio">Có
                         </label>
                         <label class="radio-inline">
                             <input name="spmoi" value="0" type="radio">Không
                         </label>
                    </div>
                    <div class="form-group">
                         <label>status</label>
                         <label class="radio-inline">
                             <input name="status" value="1" checked="" type="radio">Có
                         </label>
                         <label class="radio-inline">
                             <input name="status" value="0" type="radio">Không
                         </label>
                    </div>
                     <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea  id="demo" class="form-control ckeditor" name="mota" placeholder="Mô tả"  row="3">
                        </textarea>
                    </div>
                     <div class="form-group">
                        <label>Mô Tả Ngắn</label>
                        <textarea  id="demo" class="form-control ckeditor" name="motangan" placeholder="Mô tả" row="3">
                        </textarea>
                    </div>
            <button type="submit" class="btn btn-default">Thêm Sản Phẩm</button>
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