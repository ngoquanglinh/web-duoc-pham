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
	<div class="content-loaisanpham">
		<div class="col-md-12 col-xs-12">
			<div class="row">
				<div class="col-md-6 col-xs-12 sanpham">
					<div class="thumbnail">
						<img src="uploads/{{$chitietsp->ImageSP}}" class="img-responsive" alt="" class="rv">
					</div>
				</div>
				<!-- ket thuc left sanpham -->
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="row">
								<div class="sanpham-tittle">
									<h3>{{$chitietsp->TenSP}}</h3>
								</div>
								<div class="sanpham-start">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="sanpham-money">
									@if($chitietsp->SPKhuyenMai == 1)
										<span><del>{{number_format($chitietsp->Gia,0,",",".")}} vnd</del></span>
										<span>{{number_format($chitietsp->GiaKhuyenMai,0,",",".")}} vnd</span>
									@else
										<span>{{number_format($chitietsp->Gia,0,",",".")}} vnd</span>
									@endif
								</div>
								{{-- <div class="sanpham-congdung">
									<p>Bổ sung Vitamin – Chống lão hóa – Cải thiện đề kháng</p>
								</div>
								<div class="sanpham-nguyennhan">
									<p>Cơ thể bạn thường xuyên bị suy nhược và mệt mỏi? Bạn muốn bổ sung các  vitamin và khoáng chất cho cơ thể?  Bạn đang tìm một loại thực phẩm có thể cung cấp các vitamin cần thiết cho cơ thể?</p>
								</div>
								<div class="sanpham-check">
									<i class="fas fa-check-square"></i><span>Tổng hợp đầy đủ các vitamin B12, B6, Axit folic</span><br>
									<i class="fas fa-check-square"> </i><span>Tăng cường khả năng hấp thụ các chất dinh dưỡng</span>
								</div> --}}
								<div style="font-size:16px;">
									{!!$chitietsp->MoTaNgan!!}
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
												<a href="cart/add/{{$chitietsp->id}}">
														<div class="sanpham-cart">
															<p>Thêm Vào Giỏ</p>
														</div>
													</a>
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
					<div style="padding:2%; font-size:16px;">
						{!!$chitietsp ->MoTa!!}
					</div>
					<div class="sanpham-ifram">
						<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="{{$chitietsp->LinkVideo}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<hr>
					<div class="sanpham-group">
						<h3>Các sản phẩm liên quan</h3>
					</div>
					<div class="row spcl">
					@foreach($spcungloai as $spcl)
					<div class="col-md-3 col-xs-6">
					<a href="sanpham/{{$spcl->id}}" title="">
					<div class="thumbnail splq">
							<img src="uploads/{{$spcl->ImageSP}}" alt="sanpham">
								<div class="caption">
								<h3>{{$spcl->TenSP}}</h3>
									<div class="content-sanpham-show-start">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
									@if($spcl->SPKhuyenMai == 1 )
									<p>{{number_format($spcl->GiaKhuyenMai,0,",",".")}}vnđ</p>
									@else
									<p>{{number_format($spcl->Gia,0,",",".")}}vnđ</p>
									@endif
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection