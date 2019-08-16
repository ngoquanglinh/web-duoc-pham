@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
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
                 <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
                    @csrf   
                    <div class="form-group">
                        <label>Tên Tin Tức</label>
                        <input class="form-control" type="text" name="ten" value="{{$tintuc->TenTT}}" />
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <img src="uploads/{{$tintuc->Anh}}" width="100px" height="100px;" alt=""><br>
                        <input class="form-control" type="file" name="anh"/>
                    </div>
                    <div class="form-group">
                        <label>Người đăng</label>
                        <input class="form-control" type="text" name="nguoidang" value="{{$tintuc->NguoiDang}}" readonly="" />
                    </div>
                    <div class="form-group">
                        <label>Ngày đăng</label>
                        <input class="form-control" type="text" name="ngaydang" value="{{$tintuc->NgayDang}}" readonly="" />
                    </div>
                     <div class="form-group">
                         <label>Trạng Thái</label>
                         <label class="radio-inline">
                         <input name="status" value="1" type="radio"
                            @if($tintuc->Status==1)
                            {{"checked"}}
                            @endif
                         >Hiện ra trang chủ
                         </label>
                         <label class="radio-inline">
                         <input name="status" value="0" type="radio"
                            @if($tintuc->Status==0)
                            {{"checked"}}
                            @endif
                         >Không Hiện ra trang chủ
                         </label>
                    </div>
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea  id="demo" class="form-scontrol ckeditor" name="tomtat"  row="3" >{{$tintuc->TomTat}}
                        </textarea>
                    </div>
                     <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea  id="demo" class="form-scontrol ckeditor" name="noidung"  row="3" >{{$tintuc->NoiDung}}
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
