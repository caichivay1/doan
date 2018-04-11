@extends('layout.metronic')
@section('content')
	<h1 class="text-center">Thống kê số lượng truy cập</h1>
	<div class="col-md-12">
		<div class="col-md-6">
			<img src="{{asset('assets/img/a.jpg')}}" width="400px">
		</div>
		<div class="col-md-6" >
			<h4>Tổng số lượt truy cập site:</h4>
			<h4>Visitor lần đầu đến với site :</h4>
			<h4>Vistor trở lại từ lần thứ 2 trở lên.</h4>
			<h4>Số vistor được tính trong 1 khoảng thời gian nhất định.</h4>
			<h4>số lượt page được view, kể cả 1 trang được xem nhiều lần	</h4>
		</div>

	</div>
@endsection