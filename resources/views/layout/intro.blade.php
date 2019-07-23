@extends('layout.master')
@section('tittle','Giới thiệu')
@section('main')
<div class="slide hidden-xs">
	<div class="container-fluid about-img container-flui-slide">
		<img src="uploads/banner_About.jpg"  class="img-responsive" alt="">
	</div>
	<div class="sanpham-slide-Breadcrumbs">
		<h2>Giới thiệu</h2>
		<ol class="breadcrumb breadcrumb-edit">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Giới thiệu</a></li>
		</ol>
	</div>
</div>
<!-- ket thuc slide -->

<div class="content">
	<div class="container-fluid about-container-top">
		<div class="container">
			<!-- ket thucc show san pham -->
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="row about-content-gioithieu">
						<div>
							<p class="about-content-tittle">FGC Pharmacy</p>
							<h1>
								Chào mừng mẹ và bé đến với chúng tôi
							</h1>
						</div>
						<div class="about-content-gioithieu">
							<p>
								Trải qua nhiều năm nghiên cứu sản phẩm cổ truyền thảo dược. FGC tự hào là nhà sản xuất những sản phẩm cổ truyền dùng để trị liệu và làm đẹp cho mọi người, nhất là mẹ bầu, mẹ sau sinh và bé yêu. Sản phẩm FGC luôn sử dụng nguyên liệu từ 100% thảo dược thiên nhiên có nguồn gốc rõ ràng, được khảo sát và kiểm định chất lượng theo tiêu chuẩn Vietgap. 
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row about-content-doctor">
				<div class="col-md-12 col-xs-12">
					<img src="uploads/doctor_About.jpg" class="img-responsive text-center" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="row about-content-gioithieu">
						<div>
							<p class="about-content-tittle">FGC Pharmacy</p>
							<h1>
								Giá trị mà chúng tôi mang lại
							</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- ket thuc -->
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="row about-content-video">
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/q15s93f0MxI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

							</iframe>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="row">
							<div class="col-md-12 drdow">
								<div class="dropdown">
									<button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">1. Tầm nhìn của chúng tôi
										<span class="caret"></span></button>
										<ul class="dropdown-menu">
											<span class="dropdown-item-text">Trải qua nhiều năm nghiên cứu sản phẩm cổ truyền thảo dược. FGC tự hào là nhà sản xuất những sản phẩm cổ truyền dùng để trị liệu và làm đẹp cho mọi người, nhất là mẹ bầu, mẹ sau sinh và bé yêu. Sản phẩm FGC luôn sử dụng nguyên liệu từ 100% thảo dược thiên nhiên có nguồn gốc rõ ràng, được khảo sát và kiểm định chất lượng theo tiêu chuẩn Vietgap. </span>
										</ul>
									</div>
									<div class="dropdown">
										<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">2. Sứ mệnh của chúng tôi
											<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<span class="dropdown-item-text">Trải qua nhiều năm nghiên cứu sản phẩm cổ truyền thảo dược. FGC tự hào là nhà sản xuất những sản phẩm cổ truyền dùng để trị liệu và làm đẹp cho mọi người, nhất là mẹ bầu, mẹ sau sinh và bé yêu. Sản phẩm FGC luôn sử dụng nguyên liệu từ 100% thảo dược thiên nhiên có nguồn gốc rõ ràng, được khảo sát và kiểm định chất lượng theo tiêu chuẩn Vietgap. </span>
											</ul>
										</div>
										<div class="dropdown">
											<button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">3. Giá trị cốt lõi
												<span class="caret"></span></button>
												<ul class="dropdown-menu">
													<span class="dropdown-item-text">Trải qua nhiều năm nghiên cứu sản phẩm cổ truyền thảo dược. FGC tự hào là nhà sản xuất những sản phẩm cổ truyền dùng để trị liệu và làm đẹp cho mọi người, nhất là mẹ bầu, mẹ sau sinh và bé yêu. Sản phẩm FGC luôn sử dụng nguyên liệu từ 100% thảo dược thiên nhiên có nguồn gốc rõ ràng, được khảo sát và kiểm định chất lượng theo tiêu chuẩn Vietgap. </span>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="row content-gioithieu-tittle  col-xs-12">
									<div >
										<h1>
											Niềm tin của khách hàng
										</h1>
									</div>
									<div class="content-gioithieu">
										<p class="text-center">
											FGC Pharmacy cung cấp các dược liệu chiết xuất từ thiên nhiên tốt nhất dành cho sức khỏe, là đối tác đáng tin cậy của mọi nhà.
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- ket thuc niem tin khach hagng -->
						<div class="row content-sanpham-show">
							<div class="col-md-12 col-xs-12">
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
																<img src="uploads/avatar1.png" alt="">
															</div>
															<div class="content-admin-profile">
																<h3>Nguyễn Quỳnh Anh</h3>
																<p>Quản lý cửa hàng thuốc</p>
																<p class="content-admin-profile-p">Từ khi có con mọi chi tiêu trong gia đình tôi bắt đầu thiếu hụt. Nhưng bây giờ nhờ thêm việc kinh doanh các sản phẩm FGC Pharmacy, mà thu nhập cao hơn hẳn lúc trước, chi tiêu thoải mái hơn, có dư để mua được nhà chứ không cần đi thuê nữa!</p>
															</div>
														</div>
														<div class="carousel-caption">
														</div>
													</div>
													<div class="item">
														<div class="content-admin-slide-1">
															<div class="content-admin-avatar">
																<img src="uploads/avatar1.png" alt="">
															</div>
															<div class="content-admin-profile">
																<h3>Nguyễn Quỳnh Anh</h3>
																<p>Quản lý cửa hàng thuốc</p>
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
				</div>
			</div>
			<div class="row hidden-xs">
				<div class="container-fluid">
					<div class="row thumbnail-logo">
						<div class="col-md-2">
							<a href="#" class="thumbnail">
								<img src="uploads/6.jpg" alt="...">
							</a>
						</div>
						<div class="col-md-2">
							<a href="#" class="thumbnail">
								<img src="uploads/logo1.jpg" alt="...">
							</a>
						</div>
						<div class="col-md-2">
							<a href="#" class="thumbnail">
								<img src="uploads/2.jpg" alt="...">
							</a>
						</div>
						<div class="col-md-2">
							<a href="#" class="thumbnail">
								<img src="uploads/3.jpg" alt="...">
							</a>
						</div>
						<div class="col-md-2">
							<a href="#" class="thumbnail">
								<img src="uploads/7.jpg" alt="...">
							</a>
						</div>
						<div class="col-md-2">
							<a href="#" class="thumbnail">
								<img src="uploads/5.jpg" alt="...">
							</a>
						</div>
					</div>
				</div>
			</div>
			@endsection
