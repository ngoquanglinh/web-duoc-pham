@extends('layout.master')
@section('tittle','Sản Phảm Cho Mẹ')
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
<!-- ket thuc slide -->

<div class="content">
	<div class="container-fluid container-fluid-top">
		<div class="container">
			<div class="row sanpham-boy">
				<div class="col-md-6 col-xs-12">
					<div class="sp-brand">
						<p>FGC Pharmacy</p>
					</div>
					<div class="sp-slogan">
						<h3>Bé yêu vui khỏe mẹ trẻ yên tâm</h3>
					</div>
					<div class="sp-doctor">
						<p>
							Thấu hiểu được những biến đổi về tâm sinh lý, sức khỏe, ngoại hình cũng như những khó khăn của các mẹ bầu gặp phải, Bảo Nhiên không ngừng nổ lực nghiên cứu để tạo ra các dòng sản phẩm với một liệu trình khoa học, hiệu quả và an toàn phù hợp với từng giai đoạn thai kỳ, giúp hành trình trải nghiệm thiên chức làm mẹ được trọn vẹn và tuyệt vời hơn.
						</p>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 sp-image-boy">
					<div>
						<img src="uploads/sp-mom.jpg" class="img-responsive" alt="">
					</div>
					<div class="sp-icon-active mom-active hidden-xs">
						<div>
							<p>Không chất bảo quản, an toàn</p>
						</div>
					</div>
					<div class="sp-icon1 mom1  hidden-xs">
						<div>
							<p>Hiệu quả khi sử dụng thường xuyên</p>
						</div>
					</div>
					<div class="sp-icon2 mom2  hidden-xs">
						<div>
							<p>Không tác dụng phụ vs sức khỏe</p>
						</div>
					</div>
					<div class="sp-icon3 mom3  hidden-xs">
						<div>
							<p>100% Thảo dược hữu cơ</p>
						</div>
					</div>
				</div>
			</div>
			<!--  -->
			<div class="row content-gioithieu-tittle">
				<div class="col-md-12 col-xs-12">
					<h1>
						Dược liệu dành cho mẹ bầu
					</h1>
				</div>
				<div class=" content-gioithieu">
					<p>
						FGC Pharmacy cung cấp các dược liệu chiết xuất từ thiên nhiên tốt nhất dành cho sức khỏe, là đối tác đáng tin cậy của mọi nhà.
					</p>
				</div>
			</div>
			<!--  -->
			<div class="row content-sanpham-show">
				<div class="col-md-12 col-xs-12">
					<div class="row">
						@foreach($spchome as $spcm)
						<div class="col-md-3 col-xs-6">
							<a href="sanpham/{{$spcm->id}}">
							<div class="thumbnail">
							<img src="uploads/{{$spcm->ImageSP}}" alt="sanpham" class="img-responsive">
								<div class="caption">
								<h3>{{$spcm->TenSP}}</h3>
									<div class="content-sanpham-show-start">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
									@if($spcm->SPKhuyenMai == 1 )
										<p>{{number_format($spcm->GiaKhuyenMai,0,",",".")}}vnđ</p>
										@else
										<p>{{number_format($spcm->Gia,0,",",".")}}vnđ</p>
									@endif
								</div>
							</div>
							</a>
						</div>	
						@endforeach
					</div>
					<!--  -->
					<div class="text-center">
						{{$spchome->links()}}
					</div>
					<!--  -->
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="row content-gioithieu-tittle">
								<div>
									<h1>
										Đánh giá của các mẹ bầu
									</h1>
								</div>
								<div class="content-gioithieu">
									<p>
										FGC Pharmacy cung cấp các dược liệu chiết xuất từ thiên nhiên tốt nhất dành cho sức khỏe, là đối tác đáng tin cậy của mọi nhà.
									</p>
								</div>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="content-admin-slide">
								<div id="carousel-example-generic-mylove" class="carousel slide" data-ride="carousel">
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<div class="content-admin-slide-1">
												<div class="content-admin-avatar">
													<img src="uploads/mevabe.png" alt="" class="img-responsive">
												</div>
												<div class="content-admin-profile">
													<h3>Hồ Quỳnh Nhi</h3>
													<p>Mẹ bé Hoàng Anh</p>
													<p class="content-admin-profile-p">Từ khi có con mọi chi tiêu trong gia đình tôi bắt đầu thiếu hụt. Nhưng bây giờ nhờ thêm việc kinh doanh các sản phẩm FGC Pharmacy, mà thu nhập cao hơn hẳn lúc trước, chi tiêu thoải mái hơn, có dư để mua được nhà chứ không cần đi thuê nữa!</p>
												</div>
											</div>
											<div class="carousel-caption">
											</div>
										</div>
										<div class="item">
											<div class="content-admin-slide-1">
												<div class="content-admin-avatar">
													<img src="uploads/mevabe.png" class="img-responsive" alt="">
												</div>
												<div class="content-admin-profile">
													<h3>Hồ Quỳnh Nhi</h3>
													<p>Mẹ bé Hoàng Anh</p>
													<p class="content-admin-profile-p">Từ khi có con mọi chi tiêu trong gia đình tôi bắt đầu thiếu hụt. Nhưng bây giờ nhờ thêm việc kinh doanh các sản phẩm FGC Pharmacy, mà thu nhập cao hơn hẳn lúc trước, chi tiêu thoải mái hơn, có dư để mua được nhà chứ không cần đi thuê nữa!</p>
												</div>
											</div>
											<div class="carousel-caption">
											</div>
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control btn-left" href="#carousel-example-generic-mylove" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control btn-right" href="#carousel-example-generic-mylove" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="row">
						<div class="content-doitac">
							<h4>
								Đối tác toàn quốc
							</h4>
						</div>
					</div>
					<!--  -->
				</div>
			</div>
		</div>
		<!--  -->
		<div class="row">
	<div class="container-fluid">
		<div id="carousel-example-generica" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">	
					@foreach($doitac1 as $dt)
					<div class="col-md-2 col-xs-4  thumbnail-logo">
						<a href="#" class="thumbnail">
							<img src="uploads/{{$dt->anh}}" alt="..." class="img-responsive" class="brand-logo"> 
						</a>
					</div>	
					@endforeach
				</div>
				<div class="item">
					@foreach($doitac2 as $dt2)
					<div class="col-md-2 col-xs-4  thumbnail-logo">
						<a href="#" class="thumbnail">
							<img src="uploads/{{$dt2->anh}}" alt="..." class="img-responsive" class="brand-logo"> 
						</a>
					</div>	
					@endforeach
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generica" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generica" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
</div>
	</div>
</div>
@endsection