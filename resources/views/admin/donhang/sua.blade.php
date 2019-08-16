@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <form action="admin/donhang/sua/{{$hoadon->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Id Đơn Hàng</label>
                        <input value="{{$hoadon->id}}" class="form-control" name="id"  readonly />
                    </div>
                    <div class="form-group">
                        <label>Id Khách Hàng</label>
                        <input value="{{$hoadon->idKhachHang}}" class="form-control"  name="idkh" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Ngày Đặt</label>
                        <input value="{{$hoadon->NgayDat}}"class="form-control" name="ngaydat" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Tổng Tiền</label>
                         <input value="{{$hoadon->TongTien}}"  readonly class="form-control" name="tongtien"/>
                    </div>
                    <div class="form-group">
                        <label>Hình Thức Thanh Toán</label>
                         <input value="{{$hoadon->ThanhToan}}" readonly class="form-control" name="thanhtoan"/>
                    </div>
                    <div class="form-group">
                        <label>Ghi Chú</label> 
                          <textarea  id="demo" readonly="readonly" class="form-control ckeditor" name="ghichu"  row="3">{{$hoadon->GhiChu}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Trạng Thái</label>
                        <select class="form-control" name="trangthai">
                            <option  @if($hoadon->TrangThai ==1)
                                {{"selected"}}
                                @endif 
                            value="1">Chưa giao hàng</option>
                            <option @if($hoadon->TrangThai ==2)
                                {{"selected"}}
                                @endif 
                            value="2">Đang giao</option>
                            <option @if($hoadon->TrangThai ==3)
                                {{"selected"}}
                                @endif 
                            value="3">Đã giao</option>
                            <option @if($hoadon->TrangThai ==4)
                                {{"selected"}}
                                @endif 
                            value="4">Hoàn Trả</option>
                            <option @if($hoadon->TrangThai ==5)
                                {{"selected"}}
                                @endif 
                            value="5">Đã nhận Hoàn Trả</option>
                            <option @if($hoadon->TrangThai ==6)
                                {{"selected"}}
                                @endif 
                            value="6">Hủy Đơn</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection