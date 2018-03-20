@extends('layout.metronic')
@section('content')
	<div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Thêm khách hàng</h2></div>
	<form action="{{route('user.save')}}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$user->id}}">
		<input type="hidden" name="role" value="1">
		<div class="col-md-12">
				<div class="form-group row">
					<label class="col-md-3 control-label">Tên khách hàng<span class="text-danger ">*</span></label>
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Nhập tên khách hàng" name="name" value="{{$user->name}}">
<!-- 						@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('title')}}</span>
						
						@endif -->
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label">Email<span class="text-danger ">*</span></label>
					<div class="col-md-5">
						<input type="email" class="form-control" placeholder="Nhập Email" name="email" value="{{$user->email}}">
						@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('title')}}</span>
						
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label">Số điện thoại<span class="text-danger ">*</span></label>
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Nhập số điên thoại " name="phone" value="{{$user->phone}}">
						@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('title')}}</span>
						
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label">Địa chỉ</label>
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address" value="{{$user->address}}">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label">Thành phố</label>
					<div class="col-md-5">
						<select name="province1" id="province" class="form-control">
						 		<option value="">{{$user->province}}</option>
						 		@foreach($province as $p)

								<option value="{{$p->provinceid}}" name="province">{{$p->name}}</option>
								@endforeach 
							</select>
													 		@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('province1')}}</span>
						
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label">Quận</label>
					<div class="col-md-5">
						<select name="district" id="district" class="form-control">
							 	<option  value="">{{$user->district}}</option>
							</select>
														 	@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('district')}}</span>
						
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label">Phường</label>
					<div class="col-md-5">
						<select id="ward" name="ward1" class="form-control">
							 	<option  value="">{{$user->ward}}</option>

							</select>
						@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('ward1')}}</span>
						
						@endif
					</div>
				</div>
				


		<div class="col-md-offset-4">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default"><a href="{{URL::previous()}}">Back</a></button>
		</div>
	</form>


@endsection