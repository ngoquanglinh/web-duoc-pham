@extends('layout.master')
@section('tittle','Giỏ Hàng')
@section('main')
<div class="slide hidden-xs">
	<div class="container-fluid about-img container-flui-slide">
		<img src="uploads/banner_About.jpg"  class="img-responsive" alt="">
	</div>
	<div class="sanpham-slide-Breadcrumbs">
		<h2>Giỏ hàng</h2>
		<ol class="breadcrumb breadcrumb-edit">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Giỏ hàng</a></li>
		</ol>
	</div>
</div>
<!--ket thúc slide  -->
<div class="content">
	<div class="container-fluid about-container-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="giohang-layout">
						<div>
							<ol class="breadcrumb">
								<li class="active"><a href="#">GIỎ HÀNG </a></li>
								<li><a href="#">THÔNG TIN GIAO HÀNG </a></li>
								<li><a href="" title=""> THANH TOÁN HOÀN TẤT</a></li>
							</ol>
						</div>
					</div>
					<div class=" table-responsive giohang-table">
						<table class="table text-center">
							<tr>
								<th>Tên Sản Phẩm</th>
								<th>Số Lượng</th>
								<th>Giá Tiền</th>
								<th>Tổng Tiền</th>
							</tr>
							<tr>
								<td>
									<div class="giohang-image">
										<a href="" title=""><i class="fas fa-times"></i></a>
										<div>
											<img src="uploads/giohangsp.png" alt="">
										</div>
										<div>
											<p>Vitamin Multivites</p>
										</div>
									</div>
								</td>
								<td class="edit-row-table"><input type="number" name="" value="1"></td>
								<td class="edit-row-table"><p>180.000đ</p></td>
								<td class="edit-row-table"><p>360.000đ</p></td>
							</tr>
							<tr>
								<td>
									<div class="giohang-image">
										<a href="" title=""><i class="fas fa-times"></i></a>
										<div>
											<img src="uploads/giohangsp.png" alt="">
										</div>
										<div>
											<p>Vitamin Multivites</p>
										</div>
									</div>
								</td>
								<td class="edit-row-table"><input type="number" name="" value="1"></td>
								<td class="edit-row-table"><p>180.000đ</p></td>
								<td class="edit-row-table"><p>180.000đ</p></td>
							</tr>
							<tr>
								<td colspan="4">
									<div class="giohang-redirect">
										<a href="" title="">
											<div class="giohang-btn-active">
												Tiếp tục xem sản phẩm
											</div>
										</a>
										<a href="" title="">
											<div  class="giohang-btn">
												Cập nhật giỏ hàng
											</div>
										</a>
									</div>
								</td>
							</tr>
						</table>
						<div class="giohang-sum">
							<h4>Tổng Số Lượng</h4>
							<div class="giohang-addres">
								<div>
									<p>Tổng cộng:</p>
									<p>Địa chỉ	:</p>
									<p>Tổng cộng:</p>
								</div>
								<div class="giohang-addres-right">
									<p>540.000đ</p>
									<p>Số 19 Trần Huy Liệu - Tp.Vinh - Nghệ An</p>
									<p>540.000đ</p>
								</div>
							</div>
						</div>
						<div class="thanhtoan-redirect">
							<div class="giohang-btn-active btnthanhtoan">
								Tiến hành thanh toán
							</div>
						</div>
					</div>
					<!--  -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection('main')
