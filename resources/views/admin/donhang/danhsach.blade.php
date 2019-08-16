@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hóa Đơn
                    <small>Danh Sách</small>
                </h1>
                @if(session('xoa'))
                <div class="alert alert-success">
                    {{session('xoa')}}
                </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Khách Hàng</th>
                        <th>Ngày Đặt</th>
                        <th>Tổng Tiền</th>
                        <th>Hình Thức Thanh Toán</th>
                        <th>Ghi Chú</th>
                        <th>Trạng Thái</th>
                        <th>Chi Tiết</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hoadon as $hd)
                    <tr class="odd gradeX" align="center">
                        <td>{{$hd->id}}</td>
                        <td>{{$hd->KhachHang->Ten}}</td>
                        <td>{{$hd->NgayDat}}</td>
                        <td>{{number_format($hd->TongTien,0,",",".")}}</td>
                        <td>{{$hd->ThanhToan}}</td>
                        <td>{{$hd->GhiChu}}</td>
                        <td>
                            @if($hd->TrangThai==1)
                                {{"Chưa giao"}}
                            @elseif($hd->TrangThai==2)
                                {{"Đang giao"}}
                            @elseif($hd->TrangThai==3)
                                {{"Đã giao"}}
                             @elseif($hd->TrangThai==4)
                                {{"Hoàn trả"}}
                             @elseif($hd->TrangThai==5)
                                {{"Đã nhận hoàn trả"}}
                             @elseif($hd->TrangThai==6)
                                {{"Hủy đơn"}}
                            @endif
                        </td>
                        <td><a href="admin/donhang/chitiet/{{$hd->id}}">Xem Chi Tiết</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/donhang/xoa/{{$hd->id}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/donhang/sua/{{$hd->id}}">Edit</a></td>
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