@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản Phẩm
                    <small>Sửa</small>
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
                 <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Loại Sản Phẩm</label>
                        <select class="form-control" name="lsp" selected>
                         @foreach($loaisanpham as $lsp)
                            <option 
                                @if($sanpham->idLoaiSP == $lsp->id)
                                {{"selected"}}
                                @endif
                                value="{{$lsp->id}}">{{$lsp->TenLoaiSP}}</option>
                         @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Sản phẩm</label>
                        <input class="form-control" type="text" name="tensp" placeholder="Tên sản phẩm" value="{{$sanpham->TenSP}}" />
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <img src="uploads/{{$sanpham->ImageSP}}" width="50px" height="100px;" alt=""><br>
                        <input class="form-control"  type="file" name="anh" placeholder="ảnh sản phẩm"/>
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input class="form-control" type="text" name="gia" placeholder="Giá sản phẩm" value="{{$sanpham->Gia}}"/>
                    </div>
                     <div class="form-group">
                         <label>SPkhuyễn mãi</label>
                         <label class="radio-inline">
                         <input name="spkm" value="1"type="radio" placeholder=""
                            @if($sanpham->SPKhuyenMai==1)
                            {{"checked"}}
                            @endif
                         >Có
                         </label>
                         <label class="radio-inline">
                         <input name="spkm" value="0" type="radio"
                            @if($sanpham->SPKhuyenMai==0)
                            {{"checked"}}
                            @endif
                         >Không
                         </label>
                    </div>
                    <div class="form-group">
                        <label>Giá KM</label>
                        <input class="form-control" type="text" value="{{$sanpham->GiaKhuyenMai}}" name="giakm" placeholder="Giá khuyễn mãi" />
                    </div>
                    <div class="form-group">
                        <label>Video</label>
                        <input class="form-control" name="video" type="text" placeholder="Link video sản phẩm" value="{{$sanpham->LinkVideo}}" />
                    </div>
                    <div class="form-group">
                         <label>active</label>
                         <label class="radio-inline">
                             <input name="active" value="1" type="radio"
                              @if($sanpham->active==1)
                              {{"checked"}}
                              @endif
                             >Có
                         </label>
                         <label class="radio-inline">
                             <input name="active" value="0" type="radio"
                              @if($sanpham->active==0)
                              {{"checked"}}
                              @endif
                             >Không
                         </label>
                    </div>
                    <div class="form-group">
                         <label>SP Mới</label>
                         <label class="radio-inline">
                            <input name="spmoi" value="1" checked="" type="radio"
                             @if($sanpham->SPMoi==1)
                              {{"checked"}}
                              @endif
                            >Có
                         </label>
                         <label class="radio-inline">
                             <input name="spmoi" value="0" type="radio"
                              @if($sanpham->SPMoi==0)
                              {{"checked"}}
                              @endif
                             >Không
                         </label>
                    </div>
                    <div class="form-group">
                         <label>status</label>
                         <label class="radio-inline">
                             <input name="status" value="1" checked="" type="radio"
                               @if($sanpham->status==1)
                              {{"checked"}}
                              @endif
                             >Có
                         </label>
                         <label class="radio-inline">
                             <input name="status" value="0" type="radio"
                              @if($sanpham->status==0)
                              {{"checked"}}
                              @endif
                             >Không
                         </label>
                    </div>
                     <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea  id="demo" class="form-control ckeditor" name="mota" placeholder="Mô tả"  row="3">{{$sanpham->MoTa}}
                        </textarea>
                    </div>
                     <div class="form-group">
                        <label>Mô Tả Ngắn</label>
                        <textarea  id="demo" class="form-control ckeditor" name="motangan" placeholder="Mô tả" row="3" >{{$sanpham->MoTaNgan}}
                        </textarea>
                    </div>
            <button type="submit" class="btn btn-default">Sửa Sản Phẩm</button>
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