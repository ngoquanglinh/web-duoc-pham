@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>{{$slide->TenSlide}}</small>
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
                <form action="admin/slide/sua/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Slide</label>
                        <input class="form-control" name="ten" value="{{$slide->TenSlide}}" />
                    </div>  
                    <div class="form-group">
                        <label>Giá</label>
                        <input class="form-control" name="gia" value="{{$slide->Gia}}"/>
                    </div>  
                    <div class="form-group">
                        <label>Sản Phẩm Khuyễn Mai:</label>
                        <label><input name="spkm" type="radio" 
                            @if($slide->SPKhuyenMai==1)
                            {{"checked"}}
                            @endif
                             value="1" />có
                        </label>
                         <label><input name="spkm" type="radio" 
                            @if($slide->SPKhuyenMai==0)
                            {{"checked"}}
                            @endif
                            value="0" />không
                         </label>
                    </div>  
                    <div class="form-group">
                        <label>Giá Khyễn Mãi</label>
                        <input class="form-control" name="giakm" value="{{$slide->GiaKhuyenMai}}"/>
                    </div>  
                    <div class="form-group">
                        <label>Image</label>
                        <img src="uploads/{{$slide->link}}" width="100px" alt=""><br>
                        <input type="file" class="form-control" name="anh"/>
                    </div>  
                   <div class="form-group">
                        <label>Trạng Thái:</label>
                        <label><input name="status" type="radio"
                            @if($slide->Status==1)
                            {{"checked"}}
                            @endif
                          value="1" />hiển thị trang chủ
                        </label>
                         <label><input name="status" type="radio"
                            @if($slide->Status==0)
                            {{"checked"}}
                            @endif
                           value="0" />không hiển thị trang chủ
                         </label>
                    </div>  
                    <button type="submit" class="btn btn-default">Sửa</button>
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