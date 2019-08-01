@extends('layout.master')
@section('tittle','Kiến Thức Sức Khỏe')
@section('main')
		<div class="slide hidden-xs">
			<div class="container-fluid about-img container-flui-slide">
				<img src="uploads/banner_About.jpg"  class="img-responsive" alt="">
			</div>
			<div class="sanpham-slide-Breadcrumbs">
				<h2>Vitamin Multivites</h2>
				<ol class="breadcrumb breadcrumb-edit">
					<li><a href="#">Trang chủ</a></li>
					<li><a href="#">Kiến Thức Sức Khỏe</a></li>
				</ol>
			</div>
		</div>
		<!-- ket thuc slide -->
		<div class="container">
			<div class="row content-blog">
				<div class="col-md-9 col-xs-12">
					<div class="row">
						<div class="col-md-12 col-xs-12 blog-left-danhsach">
							<ul>
								<li><img src="uploads/blog1.jpg" alt="me cho con sua" class="img-responsive"></li>
								<li>Thứ 6, 20-12-2018 /By Admin FGC</li>
								<li>Các loại sữa cho mẹ sau sinh bổ sung dinh dưỡng</li>
								<li>Nếu lượng khoáng chất mà mẹ sau sinh lấy vào thường sắt và canxi thấp, thì cơ thể sẽ dùng lượng dữ trự để đảm bảo chất lượng sữa mẹ. Điều này tất nhiên là dẫn tới việc tiêu thụ hết lượng dự trữ có được trong thời kì....<a href="" title=""><span>[ Đọc thêm ]</span></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-xs-12 blog-left-danhsach">
							<ul>
								<li><img src="uploads/blog2.jpg" alt="me cho con sua" class="img-responsive"></li>
								<li>Thứ 6, 20-12-2018    /    By Admin FGC</li>
								<li>Chia sẻ thực đơn cho mẹ sau sinh nhiều sữa</li>
								<li>Nếu lượng khoáng chất mà mẹ sau sinh lấy vào thường sắt và canxi thấp, thì cơ thể sẽ dùng lượng dữ trự để đảm bảo chất lượng sữa mẹ. Điều này tất nhiên là dẫn tới việc tiêu thụ hết lượng dự trữ có được trong thời kì.... <a href="" title=""><span>[ Đọc thêm ]</span></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-xs-12 blog-left-danhsach">
							<ul>
								<li><img src="uploads/blog5.jpg" alt="me cho con sua" class="img-responsive"></li>
								<li>Thứ 6, 20-12-2018    /    By Admin FGC</li>
								<li>Cẩm nang cần thiết cho bà bầu đang mang thai và sau sinh</li>
								<li>Nếu lượng khoáng chất mà mẹ sau sinh lấy vào thường sắt và canxi thấp, thì cơ thể sẽ dùng lượng dữ trự để đảm bảo chất lượng sữa mẹ. Điều này tất nhiên là dẫn tới việc tiêu thụ hết lượng dự trữ có được trong thời kì.... <a href="" title=""><span>[ Đọc thêm ]</span></a>
								</li>
							</ul>
						</div>
					</div>
					<!--  -->
					<div class="row">
						<ul class="pagination blog-phantrang">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<!-- ket thuc left -->
				<div class="col-md-3 col-xs-12">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="row">
								<form action="" method="" >
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Tìm kiếm...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
										</span>
									</div><!-- /input-group -->
								</form>
							</div>
							<div class="row blog-right-tittle">
								<h3>Bài viết đọc nhiều</h3>
							</div>
							<div class="row blog-right-danhsach-active">
								<ul>
									<li><img src="uploads/blog4.jpg" alt="uong sua nao" class="img-responsive"></li>
									<li>Các loại sữa cho mẹ sau sinh bổ sung dinh dưỡng</li>
									<li>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs.</li>
								</ul>
							</div>
							<div class="row blog-right-danhsach">
								<ul>
									<li><img src="uploads/blog4.jpg" alt="uong sua nao" class="img-responsive"></li>
									<li>Các loại sữa cho mẹ sau sinh bổ sung dinh dưỡng</li>
									<li>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs.</li>
								</ul>
							</div>
							<div class="row blog-right-danhsach">
								<ul>
									<li><img src="uploads/blog4.jpg" alt="uong sua nao" class="img-responsive"></li>
									<li>Các loại sữa cho mẹ sau sinh bổ sung dinh dưỡng</li>
									<li>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- ket thuc right -->
			</div>
		</div>
		<!-- ket thuc content -->
@endsection('main')