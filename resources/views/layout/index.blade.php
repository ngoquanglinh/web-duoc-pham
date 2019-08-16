@extends('layout.master')
@section('tittle','Web Dược Phẩm')
@section('main')
<div class="slide hidden-xs">
	<div class="container-fluid container-flui-slide col-md-12 col-xs-12">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php $i=0; ?>
				@foreach($slide as $sl)
				<div 
				@if($i==0)
				class="item active">
				@else
				class="item">
				@endif
				<img src="uploads/{{$sl->link}}" alt="banner" class="img-responsive">
				<div class="home-slide-text">
					@if($sl->SPKhuyenMai==1)
					<p><del>{{number_format($sl->GiaKhuyenMai,0,",",".")}} vnđ</del></p>
					<p>{{number_format($sl->Gia,0,",",".")}}</p>
					@else
					<p>{{number_format($sl->Gia,0,",",".")}}</p>
					@endif
				</div>
				<div class="home-slide-btn">
					<a href="cart/slide/add/{{$sl->id}}" title=""><p>Thêm Vào Giỏ Hàng</p></a>
				</div>
			</div>
			<?php $i++; ?>
			@endforeach
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
</div>  
</div>
<!-- ket thuc slide -->

<div class="content">
	<div class="container-fluid container-fluid-top">
		<div class="container">
			<div class="row content-sanpham hidden-xs">
				<div class="col-md-6 col-xs-12 content-sanpham-show1">
					<img src="uploads/khuyenmai1.jpg" alt="khuyen mai"  class="img-responsive">
				</div>
				<div class="col-md-6 col-xs-12 content-sanpham-show2">
					<img src="uploads/khuyenmai2.jpg" alt="khuyen mai"  class="img-responsive">
				</div>
			</div>
			<!-- ket thucc show san pham -->
			<div class="row  col-md-12 col-xs-12 content-gioithieu-tittle">
				<div class="col-md-12 col-xs-12">
					<h1>
						Sản phẩm sức khỏe
					</h1>
				</div>
				<div class="content-gioithieu ">
					<p>
						FGC Pharmacy cung cấp các dược liệu chiết xuất từ thiên nhiên tốt nhất dành cho sức khỏe, là đối tác đáng tin cậy của mọi nhà.
					</p>
				</div>
			</div>
			<!-- ket thuc gioi thieu  -->
			<div class="row content-chatluongsp">
				<div class="col-md-3 col-xs-6">
					<div>
						<img src="uploads/icon1.png" alt="icon1" class="img-responsive">
						<p>Hiệu quả chỉ trong duy nhất một liệu trình</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div>
						<img src="uploads/icon2.png" alt="icon2" class="img-responsive">
						<p>Chất lượng sản phẩm tiêu chuẩn quốc tế</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div>
						<img src="uploads/icon3.png" alt="icon3" class="img-responsive">
						<p>Hệ thống phân phối trải dài toàn quốc</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div>
						<img src="uploads/icon4.png" alt="icon4" id="set-icon" class="img-responsive">
						<p>Giao hàng nhanh trên toàn quốc</p>
					</div>
				</div>
			</div>
			<!-- ket thuc chat luong sp -->
			<div class="row content-banner">
				<div class="col-md-12">
					<img src="uploads/banner2.jpg" alt="banner2">
				</div>
				<div class="camket">
					<h2>Tại sao khách hàng tin tưởng chúng tôi?</h2>
					<div class="gachngang">
						
					</div>
					<p>FGC cung cấp các dược liệu chiết xuất từ thiên nhiên tốt cho sức khỏe là đối tác tin cậy cho mọi nhà</p>
					<i class="far fa-play-circle"></i><span>Xem video</span>
				</div>
			</div>
			<!--  -->
			<div class="row col-md-12 col-xs-12 content-gioithieu-tittle">
				<div >
					<h1>
						Sản phẩm của chúng tôi
					</h1>
				</div>
				<div class="content-gioithieu">
					<p>
						FGC Pharmacy cung cấp các dược liệu chiết xuất từ thiên nhiên tốt nhất dành cho sức khỏe, là đối tác đáng tin cậy của mọi nhà.
					</p>
				</div>
			</div>
			<!-- Nav tabs -->
			<div class="row tab-sp">	
				<ul class="nav nav-tabs" role="tablist">
					<?php $i=0;?>
					@foreach($loaisp as $lsp)
					@if($i == 0)
					<li class="active">
						<div class="li-active" id="product-bg">
							<a href="#spmoi" role="tab" data-toggle="tab" onclick=" changebg('product-bg','product-bg-child','product-bg-mom','js-spmoi','js-spbe','js-spme')" id="js-spmoi">{{$lsp->TenLoaiSP}}</a>
						</div>
					</li>	
					@endif
					<?php $i++?>
					@endforeach
					<!--  -->
					<?php $j=0 ?>
					@foreach($loaisp as $lsp)
					@if($j == 1)
					<li>
						<div class="li-sp" id="product-bg-mom">
							<a href="#spme"role="tab" data-toggle="tab" id="js-spme" onclick=" changebg('product-bg-mom','product-bg-child','product-bg','js-spme','js-spbe','js-spmoi')">{{$lsp->TenLoaiSP}}</a>
						</div>
					</li>
					@elseif($j==2)	
					<li>
						<div class="li-sp" id="product-bg-child">
							<a href="#spbe"role="tab" data-toggle="tab" id="js-spbe" onclick="changebg('product-bg-child','product-bg-mom','product-bg','js-spbe','js-spme','js-spmoi')">{{$lsp->TenLoaiSP}}</a>
						</div>
					</li>
					@endif
					<?php $j++?>
					@endforeach
					<!--  -->
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="spmoi">
						<div class="row">
							<div class="col-md-12 col-xs-12 height-thumbnail">
								<div class="row">
									@foreach($loaisp as $lsp)
									<?php 
									$data1=$lsp->sanpham->where('idLoaiSP',1)->sortByDesc('created_at')->take(8);
									?>
									@foreach($data1 as $sp)
									<div class="col-md-3 col-xs-6">
										<a href="sanpham/{{$sp['id']}}" title="">
											<div class="thumbnail">
												<img src="uploads/{{$sp['ImageSP']}}" alt="sanpham">
												<div class="caption">
													<h3>{{$sp['TenSP']}}</h3>
													<div class="content-sanpham-show-start">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													@if($sp['SPKhuyenMai'] == 1 )
													<p>{{number_format($sp['GiaKhuyenMai'],0,",",".")}}vnđ</p>
													@else
													<p>{{number_format($sp['Gia'],0,",",".")}}vnđ</p>
													@endif
												</div>
											</div>
										</a>
									</div>
									@endforeach
									@endforeach
								</div> 
							</div>
						</div>
						<div class="row content-sanpham-more">
							<div class="content-sanpham-more-btn">
								<p>Xem Thêm</p>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="spme">
						<div class="row">
							<div class="col-md-12 col-xs-12 height-thumbnail">
								<div class="">
									@foreach($loaisp as $lsp)
									<?php 
									$data2=$lsp->sanpham->where('idLoaiSP',2)->sortByDesc('created_at')->take(8);
									?>
									@foreach($data2 as $sp)
									<div class="col-md-3 col-xs-6">
										<a href="sanpham/{{$sp['id']}}" title="">
											<div class="thumbnail">
												<img src="uploads/{{$sp->ImageSP}}" alt="sanpham">
												<div class="caption">
													<h3>{{$sp->TenSP}}</h3>
													<div class="content-sanpham-show-start">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													@if($sp['SPKhuyenMai'] == 1 )
													<p>{{number_format($sp['GiaKhuyenMai'],0,",",".")}}vnđ</p>
													@else
													<p>{{number_format($sp['Gia'],0,",",".")}}vnđ</p>
													@endif
												</div>
											</div>
										</a>
									</div>
									@endforeach
									@endforeach
								</div> 
							</div>
						</div>
						<div class="row content-sanpham-more">
							<a href="sanphamchome">
								<div class="content-sanpham-more-btn">
									<p>Xem Thêm</p>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="spbe">
						<div class="row">
							<div class="col-md-12 col-xs-12 height-thumbnail">
								<div class="row">
									@foreach($loaisp as $lsp)
									<?php 
									$data3=$lsp->sanpham->where('idLoaiSP',3)->sortByDesc('created_at')->take(8);
									?>
									@foreach($data3 as $sp)
									<div class="col-md-3 col-xs-6">
										<a href="sanpham/{{$sp['id']}}" title="">
											<div class="thumbnail">
												<img src="uploads/{{$sp->ImageSP}}" alt="sanpham">
												<div class="caption">
													<h3>{{$sp->TenSP}}</h3>
													<div class="content-sanpham-show-start">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													@if($sp['SPKhuyenMai'] == 1 )
													<p>{{number_format($sp['GiaKhuyenMai'],0,",",".")}}vnđ</p>
													@else
													<p>{{number_format($sp['Gia'],0,",",".")}}vnđ</p>
													@endif
												</div>
											</div>
										</a>
									</div>
									@endforeach
									@endforeach
								</div> 
							</div>
						</div>
						<div class="row content-sanpham-more">
							<a href="sanphamchobe">
								<div class="content-sanpham-more-btn">
									<p>Xem Thêm</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!--  -->
		<!--  -->
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="content-gioithieu-tittle">
					<div >
						<h1>
							Niềm tin của khách hàng
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
		<div class="row ">
			<div class="col-md-12 col-xs-12">
				<div class="content-admin-slide">
					<div id="carousel-example-generic-mylove" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="content-admin-slide-1">
									<div class="content-admin-avatar">
										<img src="uploads/avatar1.png" alt="" class="img-responsive">
									</div>
									<div class="content-admin-profile">
										<h3>Nguyễn Quỳnh Anh</h3>
										<p>Quản lý cửa hàng thuốc</p>
										<p class="content-admin-profile-p">Từ khi có con mọi chi tiêu trong gia đình tôi bắt đầu thiếu hụt. Nhưng bây giờ nhờ thêm việc kinh doanh các sản phẩm FGC Pharmacy, mà thu nhập cao hơn hẳn lúc trước, chi tiêu thoải mái hơn, có dư để mua được nhà chứ không cần đi thuê nữa!</p>
									</div>
								</div>	
							</div>
							<div class="item">
								<div class="content-admin-slide-1">
									<div class="content-admin-avatar">
										<img src="uploads/avatar1.png" alt="" class="img-responsive">
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
<script>
	function changebg(x,y,l,z,v,m) {
		var a1=document.getElementById(x);
		var a2=document.getElementById(y);
		var a3=document.getElementById(l);
		var a4=document.getElementById(z);
		var a5=document.getElementById(v);
		var a6=document.getElementById(m);
		a1.style.backgroundColor="#75b239";
		a2.style.background="none";
		a3.style.background="none";
		a4.style.color="#ffffff";
		a5.style.color="black";
		a6.style.color="black";	
	}
</script>
<!-- ket thuc content -->
@section('script')

@endsection
@endsection	