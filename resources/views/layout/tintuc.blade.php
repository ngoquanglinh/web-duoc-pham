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
								<li><img src="uploads/{{$tintuc->Anh}}" alt="me cho con sua" class="img-responsive"></li>
								<li style="color: #75b239">{{$tintuc->NgayDang}}/ {{$tintuc->NguoiDang}}</li>
								<li style="color: #75b239;font-size: 20px;">{{$tintuc->TenTT}}</li>
								<li>{!!$tintuc->NoiDung!!}
								</li>
							</ul>
						</div>
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
								@foreach($xemnhieu as $xn)
								<ul>
									<li><img src="uploads/{{$xn->Anh}}" alt="uong sua nao" class="img-responsive"></li>
									<a href="blog/chitiet/{{$xn->id}}" style="color: #75b239;font-size: 20px">
									<li>{{$xn->TenTT}}</li>
									</a>
									<li>{!!$xn->TomTat!!}</li>
								</ul>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<!-- ket thuc right -->
			</div>
		</div>
		<!-- ket thuc content -->
@endsection('main')