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
						@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}<br>
							@endforeach
						</div>
						@endif
						<form action="cart/dathang" method="POST">
						<div class="col-md-7 col-xs-12">
							<div class="pay-left">
								<h4>Thông tin thanh toán</h4>					
								<div class="table-responsive">
									<table class="table text-center">
										<tr>
											<td colspan="2"><input type="text" name="name" placeholder="Họ và tên"></td>
										</tr>
										<tr>
											<td>
												<div style="display:flex;width:100%">
													<div  style="width:20% ;margin-top:1%;">
														<span style="color:#727272;margin-right: 25%;">Giới Tính</span>
													</div>
													<div  style="width:20%">
														<span style="color:#727272">Nam</span><input type="radio" value="Nam" name="gioitinh" checked>
													</div>
													<div  style="width:10%">
															<span style="color:#727272">Nữ</span><input type="radio" name="gioitinh" value="Nữ">
													</div>
												</div>					
											</td>
										</tr>
										<tr>
											<td><input type="text" name="phone" placeholder="Số điện thoại"></td>									
										</tr>
										<tr>
											<td><input type="text" name="email" placeholder="Email"></td>
										</tr>
										<tr>
											<td><input type="text" name="address" placeholder="Địa Chỉ"></td>
										</tr>									
										<tr>
											<td colspan="2">
												<textarea name="note" placeholder="Ghi chú đơn hàng"></textarea>
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
								<div class="">
									<br>
									@foreach($items as $item)						
										<span style="font-size:18px;color:black">{{$item->name}}</span>				
										<span style="font-size:18px;color:black;float:right">{{number_format($item->price,0,
												",",".")}}</span>	
									<hr>
									@endforeach
								</div>
								<div class="pay-donhang">
									<div  class="pay-donhang-left">
										<p>Tổng cộng:</p>
										<p>Phí ship:</p>
										<p>Tổng cộng:</p>
									</div>
									<div class="pay-donhang-right">
										<p>{{number_format($total,0,
												",",".")}}</p>
										<p>0đ</p>
										<p>{{number_format($total,0,
												",",".")}}</p>
									</div>
								</div>
								<div>
									<h4>Hình Thức Thanh Toán</h4>
									<div class="radio" style="font-size:18px;color:black;">
										<label><input type="radio" name="pay" value="Trả tiền mặt khi nhận hàng" onchange="hien('pay','payatm')">Thanh Toán Khi Nhận Hàng</label>
										<div style="display:none;" id="pay">
											<h5>Trả tiền mặt khi nhận hàng</h5>
											<p>Khách hàng nhận hàng rồi mới thanh toán tiền hàng. (Phí vận chuyển có thể thay đổi. Nhân viên sẽ xác nhận với bạn ngay khi bạn đặt hàng!)</p>
										</div>
									</div>
									<div class="radio"  style="font-size:18px;color:black;">
											<label><input type="radio" value="Chuyển Khoản" name="pay" onchange="hien('payatm','pay')">Thanh Toán Chuyển Khoản</label>
											<div style="display:none" id="payatm">
												<h5>Chuyển Khoản</h5>
												<p>Chuyển Khoản qua STK:123456</p>
											</div>
										</div>
									<div class="dathang">
										<button type="submit" style="">Đặt Hàng</button>
									</div>
								</div>
							</div>
						</div>
						@csrf
					</form>
					</div>
					<!--  -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
<script type="text/javascript">
	function hien($a,$b){
		var x=document.getElementById($a).style.display='block';	
		var y=document.getElementById($b).style.display='none';
	}
</script>