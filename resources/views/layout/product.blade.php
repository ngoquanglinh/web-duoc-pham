@extends('layout.master')
@section('tittle','Sản Phẩm')
@section('main')
<div class="slide hidden-xs">
	<div class="container-fluid about-img container-flui-slide">
		<img src="uploads/banner_About.jpg"  class="img-responsive" alt="">
	</div>
	<div class="sanpham-slide-Breadcrumbs">
		<h2>Vitamin Multivites</h2>
		<ol class="breadcrumb breadcrumb-edit">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Sản phẩm</a></li>
			<li><a href="" title="">Mẹ bầu</a></li>
		</ol>
	</div>
</div>
<!--ket thúc slide  -->
<div class="container">
	<div class="row content-sanpham">
		<div class="col-md-12 col-xs-12">
			<div class="row">
				<div class="col-md-6 col-xs-12 sanpham-img">
					<img src="uploads/sanpham.jpg" class="img-responsive" alt="">
				</div>
				<!-- ket thuc left sanpham -->
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="row">
								<div class="sanpham-tittle">
									<h3>Vitamin Multivites</h3>
								</div>
								<div class="sanpham-start">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="sanpham-money">
									<span><del>180.000đ</del></span>
									<span>$150.00</span>
								</div>
								<div class="sanpham-congdung">
									<p>Bổ sung Vitamin – Chống lão hóa – Cải thiện đề kháng</p>
								</div>
								<div class="sanpham-nguyennhan">
									<p>Cơ thể bạn thường xuyên bị suy nhược và mệt mỏi? Bạn muốn bổ sung các  vitamin và khoáng chất cho cơ thể?  Bạn đang tìm một loại thực phẩm có thể cung cấp các vitamin cần thiết cho cơ thể?</p>
								</div>
								<div class="sanpham-check">
									<i class="fas fa-check-square"></i><span>Tổng hợp đầy đủ các vitamin B12, B6, Axit folic</span><br>
									<i class="fas fa-check-square"> </i><span>Tăng cường khả năng hấp thụ các chất dinh dưỡng</span>
								</div>
								<div class="sanpham-count">
									<p>Số Lượng</p>
								</div>
								<div class="sanpham-form">
									<form action="" method="get">
										<table>
											<tr>
												<td>
													<input type="number" class="form-control" value="1">
												</td>
												<td>
													<div class="sanpham-cart">
														<p>Thêm Vào Giỏ</p>
													</div>
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="sanpham-share">
									<p>Chia sẻ trên : </p>
									<span>
										<i class="fab fa-twitter-square"></i>
										<i class="fas fa-basketball-ball"></i>								
										<i class="fab fa-skype"></i>
										<i class="fab fa-pinterest"></i>
										<i class="fab fa-facebook-square"></i>
									</span>
								</div>
							</div>
							<!-- end san pham -->
						</div>
					</div>
				</div>
				<!-- ket thuc right sanpham -->
			</div>
			<!--  ket thuc top-->
			<div class="row sanphan-tittle">
				<div class="col-md-12 col-xs-12">
					<h4>Thông Tin Sản Phẩm</h4>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="sanpham-gioithieu">
						<p>Cơ thể bạn thường xuyên bị suy nhược và mệt mỏi? Bạn muốn bổ sung các  vitamin và khoáng chất cho cơ thể?  Bạn đang tìm một loại thực phẩm có thể cung cấp các vitamin cần thiết cho cơ thể? Sản phẩm vitafusion MultiVites 250 viên – Kẹo dẻo cung cấp vitamin sẽ giúp bạn.</p>
					</div>
					<div class="sanpham-gioithieu">
						<h4>Tác dụng chính của vitamin đối với cơ thể là gì?</h4>
					</div>
					<div class="sanpham-gioithieu">
						<i class="fas fa-check"></i><span>Tổng hợp đầy đủ các vitamin B12, B6, Axit folic và axit pantothenic</span><br>
						<i class="fas fa-check"></i><span>Tăng cường khả năng hấp thụ các chất dinh dưỡng cho cơ thể</span><br>
						<i class="fas fa-check"></i><span>Tăng khả năng chống loãng xương và bôi trơn khớp</span><br>
						<i class="fas fa-check"></i><span>Tăng cường thị lực,bảo vệ đôi mắt trong lúc dùng máy tính</span><br>
						<i class="fas fa-check"></i><span>Giúp da, xương và các mô liên kết luôn khỏe mạnh</span><br>
						<i class="fas fa-check"></i><span>Tăng cường hệ thống miễn dịch cho cơ thể</span><br>
						<i class="fas fa-check"></i><span>Tái tạo làn da, phục hồi tóc hư tổn, móng chắc khỏe</span><br>
					</div>
					<div class="sanpham-gioithieu">
						<h4>HƯỚNG DẪN SỬ DỤNG KHI BỔ SUNG VITAMIN VITAFUSION MULTIVITES CHO CƠ THỂ:</h4>
					</div>
					<div class="sanpham-gioithieu">
						<p>Trẻ em đủ 4 tuổi trở lên, dùng 1-2 viên/ ngày.</p>
						<p>Người lớn, dùng 2 viên/ ngày.</p>
						<p>Không được sử dụng ở trẻ em dưới 2 tuổi nếu không được tư vấn y tế.</p>
					</div class="sanpham-gioithieu">
					<div>
						<h4>LƯU Ý KHI BỔ SUNG VITAMIN CHO CƠ THỂ:</h4>
					</div>
					<div class="sanpham-gioithieu">
						<p>Dùng cho người lớn và trẻ em từ 4 tuổi trở lên.</p>
						<p>Nếu bạn đang điều trị bệnh, đang dùng thuốc hoặc đang mang thai, cho con bú hãy hỏi ý kiến bác sĩ trước khi sử dụng.</p>
						<p>Tránh tiếp xúc với nhiệt độ quá cao và độ ẩm. Màu sắc tự nhiên sẽ sẫm theo thời gian. Nhưng vẫn không làm thay đổi hiệu quả của sản phẩm.</p>
						<p>Không được dùng quá liều.</p>
						<p>Nếu niêm phong của sản phẩm bị rách, hoặc mất, không nên sử dụng.</p>
					</div>
					<div class="sanpham-ifram">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OLI_-W7Qoq4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<hr>
					<div class="sanpham-group">
						<h3>Các sản phẩm liên quan</h3>
					</div>
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="thumbnail">
								<img src="uploads/sanpham1.png" alt="sanpham">
								<div class="caption">
									<h3>Swiss B50</h3>
									<div class="content-sanpham-show-start">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
									<p>58.000vnd</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="thumbnail">
								<img src="uploads/sanpham2.png" alt="sanpham">
								<div class="caption">
									<h3>Pure Rosehip</h3>
									<div class="content-sanpham-show-start">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
									<p>18.000vnd</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="thumbnail">
								<img src="uploads/sanpham3.png" alt="sanpham">
								<div class="caption">
									<h3>Super 45+</h3>
									<div class="content-sanpham-show-start">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
									<p>82.000vnd</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="thumbnail">
								<img src="uploads/sanpham4.png" alt="sanpham">
								<div class="caption">
									<h3>Sundown Naturals</h3>
									<div class="content-sanpham-show-start">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
									<p>110.000vnd</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection