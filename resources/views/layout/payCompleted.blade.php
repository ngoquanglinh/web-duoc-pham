@extends('layout.master')
@section('tittle','Thanh Toán Hoàn Tất')
@section('main')
<div class="slide hidden-xs">
	<div class="container-fluid about-img container-flui-slide">
		<img src="uploads/banner_About.jpg"  class="img-responsive" alt="">
	</div>
	<div class="sanpham-slide-Breadcrumbs">
		<h2>Thanh toán hoàn tất</h2>
		<ol class="breadcrumb breadcrumb-edit">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Thanh toán hoàn tất</a></li>
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
								<li class="active"><a href="#">THÔNG TIN GIAO HÀNG </a></li>
								<li class="active"><a href="" title=""> THANH TOÁN HOÀN TẤT</a></li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 col-xs-12>
							<div class="pay-right pay-complete-left">
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
										<p>Giao nhận hàng:</p>
										<p>Phương thức thanh toán:</p>
										<p>Tổng cộng:</p>
									</div>
									<div class="pay-donhang-right">
										<p>540.000đ</p>
										<p>Miễn phí</p>
										<p>Trả tiền mặt khi thanh toán</p>
										<p>540.000đ</p>
									</div>
								</div>
								<div class="pay-chuy">
									<p><b>Lưu ý:</b>  Lựa chọn đúng sản phẩm, đóng gói cẩn thận, gửi hàng nhanh
									các ngày trong tuần.</p>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-xs-12">
							<div class="pay-completed">
								<h4>Cám ơn bạn đã mua hàng ! Đơn đặt hàng của bạn đã được nhận</h4>
								<div class="pay-completed-cart">
									<i class="fas fa-check"></i><span><b>Mã đơn hàng:</b>1234</span>
								</div>
								<div class="pay-completed-cart">
									<i class="fas fa-check"></i><span><b>Ngày đặt hàng:</b>Thứ 6, 21/12/2018</span>
								</div>
								<div class="pay-completed-cart">
									<i class="fas fa-check"></i><span><b>Tổng cộng: </b>540.000đ</span>
								</div>
								<div class="pay-completed-cart">
									<i class="fas fa-check"></i><span><b>Phương thức thanh toán: </b>Trả tiền mặt</span>
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