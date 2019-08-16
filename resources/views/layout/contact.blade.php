@extends('layout.master')
@section('tittle','Liên Hệ')
@section('main')
<div class="slide hidden-xs">
	<div class="container-fluid about-img container-flui-slide">
		<img src="uploads/banner_About.jpg"  class="img-responsive" alt="">
	</div>
	<div class="sanpham-slide-Breadcrumbs">
		<h2>Liên hệ</h2>
		<ol class="breadcrumb breadcrumb-edit">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Liên hệ</a></li>
		</ol>
	</div>
</div>
<!-- ket thuc slide -->
<div class="content">
	<div class="container-fluid container-fluid-top contact-layout">
		<div class="container">
			<div class="row contact">
				<div class="col-md-8 col-xs-12 table-responsive">
					@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}<br>
							@endforeach
						</div>
						@endif
						@if(session('thongbao'))
							<div class="alert alert-success">
								{{session('thongbao')}}<br>
							</div>
						@endif
					<form action="lienhe/them" method="POST">
						@csrf
						<table class="table">
							<tr>
								<td class="contact-td1"><input type="text" name="name" placeholder="Họ và tên"></td>
								<td class="contact-td2"><input type="text" name="phone" placeholder="Số điện thoại"></td>
							</tr>
							<tr>
								<td class="contact-td1"><input type="email" name="email" placeholder="Email"></td>
								<td class="contact-td2"><input type="text" name="chude" placeholder="Chủ đề"></td>
							</tr>
							<tr>
								<td colspan="2"><textarea name="noidung" rows="10" placeholder="   Tin nhắn"></textarea></td>
							</tr>
							<tr>
								<td class="text-center">
									<button type="submit" name="">Gửi tin nhắn</button>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="contact-tittle">
						<h3>Thông tin liên hệ</h3>
						<div class="contact-adress">
							<i class="fas fa-map-marker-alt"></i>
							<span> Số 55, Nhà liền kề Duy Tân,  Duy Tân, Phường Hưng Dũng, Tp Vinh.</span>
						</div>
						<div  class="contact-adress">
							<i class="fas fa-envelope"></i>
							<span> lienhe@fgc.vn</span>
						</div>
						<div  class="contact-adress">
							<i class="fas fa-phone-square-alt"></i>
							<span>  (+84).02386.556.388 </span>
						</div>
						<div  class="contact-adress">
							<i class="far fa-clock"></i>
							<span>Thứ 2 - Thứ 6 : 08:00-21:00</span>
						</div>
					</div>
					<div  class="contact-adress-share">
						<a href="" title=""><i class="fab fa-facebook"></i></a>
						<a href="" title=""><i class="fab fa-twitter"></i></a>
						<a href="" title=""><i class="fab fa-google-plus"></i></a>
						<a href="" title=""><i class="fab fa-pinterest"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12 contact-map">
				<div class="embed-responsive embed-responsive-16by9">	
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8989.427404369577!2d105.68986352786393!3d18.682446603193835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce0ac6f98b7f%3A0xd3f90c2c26d4eeb!2sFGC+Techlution%2C+JSC!5e0!3m2!1svi!2s!4v1563203812368!5m2!1svi!2s" frameborder="0" style="border:0"allowfullscreen class="embed-responsive-item"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ket thuc content -->
@endsection