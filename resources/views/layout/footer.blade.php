<div class="footer">
	<div class="container-fluid footer-bgblack">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-12 footer-col1">
					<img src="uploads/logo.png" alt="">
					<p>Trân trọng giá trị thảo dược, Bảo Nhiên dành trọn tâm huyết của mình để cho ra đời các sản phẩm chất lượng nhất – những bảo vật thật sự đến từ thiên nhiên với ý nghĩa bảo vệ và chăm sóc sức khỏe cộng đồng.</p>
					<img src="uploads/bocongthuong.png" alt="" style="transform:rotate(90deg);padding-left:10%">
				</div>
				<div class="col-md-3 col-xs-12 footer-col2">
					<h4>Thông tin liên hệ</h4>
					<div class="footer-col2-row">
						<i class="fas fa-headphones"></i>
						<span>Điện thoại :  +1 916-875-2235</span>
					</div>
					<div class="footer-col2-row">
						<i class="fas fa-bars"></i>
						<span>Fax: +1 916-875-2235</span>
					</div>
					<div class="footer-col2-row">
						<i class="fas fa-envelope"></i>
						<span>Email:<span><span class="footer-colorbl"> FGClienhe@gmail.com</span>
					</div>
					<div class="footer-col2-row">
						<i class="fas fa-globe"></i>
						<span>Website:</span><span class="footer-colorbl"> www.FGCtechlution.com</span>
					</div>
				</div>
				<div class="col-md-3 col-xs-12  footer-col3">
					<div>
						<span class="footer-colorbl">Khu ươm trồng dược liệu:</span><span> Thôn Dương Lâm 2, Xã Hòa Phong, Huyện Hòa Vang, Đà Nẵng.</span>
					</div>
					<div>
						<span class="footer-colorbl">Nhà máy CGMP:</span><span> 58 Đường số 9, Xã Phong Phú, Huyện Bình Chánh, TP HCM.</span>	
					</div>
					<div>
						<span class="footer-colorbl">Văn phòng:</span><span> Toà nhà Charmington La Pointe, 181 Cao Thắng Nối Dài, Phường 12, Quận 10.</span>	
					</div>	
				</div>
				<div class="col-md-3 col-xs-12 footer-col4">
					<h4>Đăng ký nhận tin</h4>
					<div>
						<p>Hãy là người đầu tiên đăng ký nhận thông tin về sản phẩm của chúng tôi</p>								
					</div>
					<div>
						@if(session('email'))
						<div class="alert alert-success">
							{{session('email')}}<br>
						</div>
						@endif	
						<form action="nhantin/them" method="POST">
							@csrf
							<div class="input-group">
								<input type="email" name="emailtuvan" class="form-control" placeholder="Email của bạn">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fas fa-chevron-right"></i></button>
								</span>
							</div><!-- /input-group -->	
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row footer-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 col-lg-12">
						<div class="footer-footer-left">
							<span> &copy;Copyright 2018</span><span class="footer-colorbl"> FGC Techlution</span>				
							<div class="footer-footer-right">
								<i class="fab fa-twitter"></i>
								<i class="fab fa-facebook-f"></i>
								<i class="fab fa-linkedin"></i>
								<i class="fas fa-camera-retro"></i>
								<i class="fab fa-youtube"></i>
								<i class="fab fa-google-plus"></i>
								<i class="fab fa-pinterest-p"></i>			
							</div>	
						</div>	
					</div>
				</div>			
			</div>
		</div>
		<!-- ket thuc footer -->
		<!-- form -->
		<div class="container">
			<div class="footer-form">
				<div class="row">
					<div class="col-md-12  footer-form-layout">
						<div class="col-md-5  pd-col1">
							<div class="footer-form-layout-col1">
								<h1>Đăng ký tư vấn miễn phí !</h1>
								<p class="hidden-xs">Hãy gửi yêu cầu cho chúng tôi sẽ giải đáp, tư vấn những sản phẩm tốt nhất cho bạn.</p>
							</div>
							@if ($errors->any())
							<div class="alert alert-danger">
								@foreach ($errors->all() as $error)
								{{ $error }}
								@endforeach
							</div>
							@endif
							@if(session('thongbao'))
							<div class="alert alert-success">
								{{session('thongbao')}}<br>
							</div>
							@endif
						</div>
						<div class="col-md-7  input-group">
							<form action="tuvan/them" method="POST" class="form-inline" role="form">
								@csrf
								<div style="display: flex;">
								<div class=" form-group footer-form-layout-col2"><!--  footer-form-layout-col2 -->
									<p>Họ và tên:</p>
									<input type="text" name="name" class="form-control">
									<br>
									<p>Số điện thoại:</p>
									<input type="text" name="phone" class="form-control">
									<br>
								</div>
								<div class="form-group footer-form-layout-col3"><!-- footer-form-layout-col3  -->
									<p>Yêu cầu:</p>
									<textarea type="text" name="noidung" rows="7" cols="55" class="form-control"></textarea>
									<button type="submit">
									<i class="fas fa-chevron-right"></i>
									</button>
								</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ket thuc footer -->
