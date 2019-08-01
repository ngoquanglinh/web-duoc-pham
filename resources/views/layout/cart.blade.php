@extends('layout.master')
@section('tittle','Giỏ Hàng')
@section('main')
<div class="slide hidden-xs">
	<div class="container-fluid about-img container-flui-slide">
		<img src="uploads/banner_About.jpg"  class="img-responsive" alt="">
	</div>
	<div class="sanpham-slide-Breadcrumbs">
		<h2>Giỏ hàng</h2>
		<ol class="breadcrumb breadcrumb-edit">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Giỏ hàng</a></li>
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
								<li><a href="#">THÔNG TIN GIAO HÀNG </a></li>
								<li><a href="" title=""> THANH TOÁN HOÀN TẤT</a></li>
							</ol>
						</div>
					</div>
					@if(Cart::getSubTotal() >= 1)
					<div class=" table-responsive giohang-table">
						<table class="table text-center">
							<tr>
								<th>Tên Sản Phẩm</th>
								<th>Số Lượng</th>
								<th>Giá Tiền</th>
								<th>Tổng Tiền</th>
							</tr>
							@foreach($items as $item )
							<tr>
								<td>
									<div class="giohang-image">
									<a href="cart/delete/{{$item->id}}" title=""><i class="fas fa-times"></i></a>
										<div style="width:50%">
											<img src="uploads/{{$item->attributes->img}}" alt="" >
										</div>
										<div>
											<p>{{$item->name}}</p>
										</div>
									</div>
								</td>
							<td class="edit-row-table"><input type="number" name="" value="{{$item->quantity}}" onchange="updateCart(this.value,'{{$item->id}}')"></td>
							<td class="edit-row-table">
								<p>{{number_format($item->price,0,
							",",".")}}</p>
							</td>
								<td class="edit-row-table"><p>{{number_format($item->price*$item->quantity,0,
										",",".")}}</p></td>
							</tr>
							@endforeach
							<tr>
								<td colspan="4">
									<div class="giohang-redirect">
										<a href="TrangChu" title="">
											<div class="giohang-btn-active">
												Tiếp tục xem sản phẩm
											</div>
										</a>
										<a href="cart/show" title="">
											<div  class="giohang-btn">
												Cập nhật giỏ hàng
											</div>
										</a>
									</div>
								</td>
							</tr>
						</table>
						<div class="giohang-sum">
							<h4>Tổng Số Lượng</h4>
							<div class="giohang-addres">
								<div>
									<p>Tổng cộng:</p>
									<p>Địa chỉ	:</p>
									<p>Tổng cộng:</p>
								</div>
								<div class="giohang-addres-right">
									<p>{{number_format($total,0,",",".")}}</p>
									<p>Số 19 Trần Huy Liệu - Tp.Vinh - Nghệ An</p>
									<p>{{number_format($total,0,",",".")}}</p>
								</div>
							</div>
						</div>
						<div class="thanhtoan-redirect">
							<a href="cart/pay">
							<div class="giohang-btn-active btnthanhtoan">
								Tiến hành thanh toán
							</div>
							</a>
						</div>
					</div>
					@else
					<div class="text-center">
						<h2>Giỏ Hàng Trống</h2>
					</div>	
					@endif
					<!--  -->
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function updateCart(qty,id){
		$.get(
			'{{asset('cart/update')}}',
			{qty:qty,id:id},
			function(){
				location.reload();
			}
		);
	}
</script>
@endsection('main')
