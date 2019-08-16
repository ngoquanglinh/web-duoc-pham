@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Khách Hàng 
                    <small>{{$lienhe->HoTen}}</small>
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
            <form action="admin/lienhe/sua/{{$lienhe->id}}" method="post">
                    @csrf
                    <div class="form-group">
                     <label>Trạng Thái</label>
                        <select class="form-control" name="trangthai">
                            <option  @if($lienhe->TrangThai ==0)
                                {{"selected"}}
                                @endif 
                            value="0">Chưa trả lời</option>
                            <option @if($lienhe->TrangThai ==1)
                                {{"selected"}}
                                @endif 
                            value="1">Đã trả lời</option>
                        </select>
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