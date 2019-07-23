@extends('layout.master')
@section('tittle','Thanh Toán')
@section('main')
<div class="slide hidden-xs">
	<div class="container-fluid about-img container-flui-slide">
		<img src="uploads/banner_About.jpg"  class="img-responsive" alt="">
	</div>
	<div class="sanpham-slide-Breadcrumbs">
		<h2>Thông tin giao hàng</h2>
		<ol class="breadcrumb breadcrumb-edit">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Thông tin giao hàng</a></li>
		</ol>
	</div>
</div>
<!--ket thúc slide  -->
<div class="content">
	<div class="container-fluid about-container-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="giohang-layout">
						<div>
							<ol class="breadcrumb">
								<li class="active"><a href="#">GIỎ HÀNG </a></li>
								<li class="active"><a href="#">THÔNG TIN GIAO HÀNG </a></li>
								<li><a href="" title=""> THANH TOÁN HOÀN TẤT</a></li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 col-xs-12">
							<div class="pay-left">
								<h4>Thông tin thanh toán</h4>
								<div class="table-responsive">
									<table class="table text-center">
										<tr>
											<td colspan="2"><input type="text" name="" placeholder="Họ và tên"></td>
										</tr>
										<tr>
											<td><input type="text" name="" placeholder="Số điện thoại"></td>
											<td><input type="text" name="" placeholder="Email"></td>
										</tr>
										<tr>
											<td>
												<select name="">
													<option value="">Tỉnh/ Thành phố</option>
													<option value=""></option>
													<option value=""></option>
												</select>

											</td>
											<td>
												<select name="">
													<option value="">Quận/ Huyện</option>
													<option value=""></option>
													<option value=""></option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<select name="">
													<option value="">Xã/ Phường</option>
													<option value=""></option>
													<option value=""></option>
												</select>

											</td>
											<td>
												<input type="text" name="" placeholder="Số Nhà">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<textarea name="" placeholder="Ghi chú đơn hàng"></textarea>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="pay-right">
								<h4>Đơn hàng của bạn</h4>
								<div class="pay-donhang">
									<div class="pay-donhang-left">
										<p>Sản phẩm</p>
									</div>
									<div class="pay-donhang-right">
										<p>Tổng</p>
									</div>
									<hr>
								</div>
								<div class="pay-donhang">
									<div  class="pay-donhang-left">
										<ul>
											<li>Vitamin MultiVites x2</li>
											<li>Vitamin MultiVites x1</li>
										</ul>
									</div>
									<div class="pay-donhang-right">
										<ul>
											<li>360.000đ</li>
											<li>180.000đ</li>
										</ul>
									</div>
									<hr>
								</div>
								<div class="pay-donhang">
									<div  class="pay-donhang-left">
										<p>Tổng cộng:</p>
										<p>Phí ship:</p>
										<p>Tổng cộng:</p>
									</div>
									<div class="pay-donhang-right">
										<p>540.000đ</p>
										<p>0đ</p>
										<p>540.000đ</p>
									</div>
								</div>
								<div>
									<h5>Trả tiền mặt khi nhận hàng</h5>
									<p>Khách hàng nhận hàng rồi mới thanh toán tiền hàng. (Phí vận chuyển có thể thay đổi. Nhân viên sẽ xác nhận với bạn ngay khi bạn đặt hàng!)</p>
									<div class="dathang">
										<a href="" title="">Đặt Hàng</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--  -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection