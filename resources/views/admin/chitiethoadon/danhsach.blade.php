@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chi Tiết Hóa Đơn
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>ID Hóa Đơn</th>
                        <th>Sản phẩm</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cthd as $ct)
                    <tr class="odd gradeX" align="center">
                        <td>{{$ct->id}}</td>
                        <td>{{$ct->idHoaDon}}</td>
                        <td>{{$ct->SanPham->TenSP}}</td>
                        <td>{{$ct->SoLuong}}</td>
                        <td>{{number_format($ct->DonGia,0,",",".")}}đ</td>
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