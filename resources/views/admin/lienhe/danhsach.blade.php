@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Nhắn
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                 <div class="alert alert-success">
                  {{session('thongbao')}}
                 </div>
             @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Họ Tên Khách Hàng</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Chu Đề</th>
                        <th>Nội Dung</th>
                        <th>Trạng Thái</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lienhe as $lh)
                    <tr class="odd gradeX" align="center">
                        <td>{{$lh->HoTen}}</td>
                        <td>{{$lh->Phone}}</td>
                        <td>{{$lh->Email}}</td>
                        <td>{{$lh->ChuDe}}</td>
                        <td>{{$lh->NoiDung}}</td>
                        <td>@if($lh->TrangThai==0)
                            {{"Chưa Trả Lời"}}
                        @else
                         {{"Đã Trả Lời"}}
                         @endif
                    </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/lienhe/xoa/{{$lh->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/lienhe/sua/{{$lh->id}}">Edit</a></td>
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