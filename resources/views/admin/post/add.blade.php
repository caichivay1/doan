@extends('layout.metronic')
@section('content')
	<div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Thêm bài viết</h2></div>
	<form action="{{route('post.save')}}" method="post" enctype="multipart/form-data" data-parsley-validate="" novalidate>
		{{csrf_field()}}
		<input type="hidden" name="id">
		<input type="hidden" name="action" value="1">
		<input type="hidden" name="user_id" value="{{$admin->id}}">
		<input type="hidden" name="like" value="1">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="form-group row"> 
					<label class=" control-label col-xs-3">Loại giao dịch <span class="text-danger ">*</span></label>
					<span class="col-xs-3">
												<label class="radio-inline cuslableItem">
                                             <input type="radio"  name="type" id="radioChothue" value="Cần Bán" required="true" data-parsley-required-message="Vui lòng chọn 1 loại giao dịch">
                                            Cần Bán
                        </label>
					</span>
					<span class="col-xs-3">
						                        <label class="radio-inline cuslableItem">
                                             <input type="radio"  name="type" id="radioChothue" value="Cho thuê">
                                           Cho thuê
                        </label>

					</span>
					<span class="col-xs-3">
												<label class="radio-inline cuslableItem">
                                             <input type="radio"  name="type" id="radioChothue" value="Cần mua">
                                           Cần Mua
                        </label>

					</span>
					@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('type')}}</span>
						
						@endif
				</div>
				<div class="form-group row">
						<label class="col-md-3 control-label">Loại bất động sản <span class="text-danger ">*</span></label>
						<span class="col-md-4">
							<select name="land_type" id="land_type" class="form-control" required="" data-parsley-required-message="Vui lòng chọn loại BDS">
						 		<option value="">--Loại bất động sản--</option>
                                        <option value="Đất">Đất</option>
                                        <option value="Kho xưởng">Kho xưởng</option>
                                        <option value="Nhà">Nhà</option>
                                        <option value="Dự án">Dự án</option>
                                        <option value="Căn hộ">Căn hộ</option>

							</select>
						</span>
					@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('land_type')}}</span>
						
						@endif

				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label">Tiêu đề <span class="text-danger ">*</span></label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="Tên danh mục" name="title" value="" required="" data-parsley-required-message="Vui lòng điền tiêu đề">
						@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('title')}}</span>
						
						@endif
					</div>
				</div>
<!-- 				<div class="form-group row">
					<label class="col-md-3 control-label">Đường dẫn<span class="text-danger ">*</span></label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="" name="slug">
						@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('slug')}}</span>
						
						@endif
					</div>
				</div> -->
				<div class="form-group row">
					<label class=" control-label col-md-3">Vị trí <span class="text-danger ">*</span></label>
						<span class="col-md-3">
							<select name="province1" id="province" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn tỉnh">
						 		<option value="">Chọn Tỉnh</option>
						 		@foreach($province as $p)

								<option value="{{$p->provinceid}}" name="province">{{$p->name}}</option>
								@endforeach 
							</select>
													 		@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('province1')}}</span>
						
						@endif
						</span>
						<span class="col-md-3">
							<select name="district" id="district" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn quận/huyện">
							 	<option value="">Chưa chọn huyện</option>
							</select>
														 	@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('district')}}</span>
						
						@endif
						</span>
						<span class="col-md-3">
							<select id="ward" name="ward1" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn phường/xã">
							 	<option value="">Chưa chọn xã</option>

							</select>
						</span>
													 	@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('ward1')}}</span>
						
						@endif

				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label">Địa chỉ</label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="" name="address" required="" data-parsley-required-message="Vui lòng điền địa chỉ">
					</div>
													 	@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('address')}}</span>
						
						@endif
				</div>
					<div class="form-group row">
					<label class="col-md-3 control-label">Điện thoại</label>
					<div class="col-md-4">
						<input type="tel" maxlength="11" minlength="6" data-parsley-length-message="Chiều dài không hợp lệ,Vui lòng điền 6-11 kí tự"  class="form-control" placeholder="0987654321" name="phone" data-parsley-type="digits" data-parsley-type-message="Vui lòng nhập số điện thoại kiểu số." required="" data-parsley-required-message="Vui lòng nhập số điện thoại">
							 	@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('phone')}}</span>
						
						@endif
					</div>
				</div>

                                  <!-- <div class="form-group row">
                                            <label class="col-md-3 control-label">Hướng</label>
                                            <span class="col-md-4">
                                                <select name="trend" id="trend" class="form-control">
                                                    <option value=""></option>
                                                    <option value="Đông">Đông</option>
                                                    <option value="Tây">Tây</option>
                                                    <option value="Nam">Nam</option>
                                                    <option value="Bắc">Bắc</option>
                                                    <option value="Đông Bắc">Đông Bắc</option>
                                                    <option value="Đông Nam">Đông Nam</option>
                                                    <option value="Tây Bắc">Tây Bắc</option>
                                                    <option value="Tây Nam">Tây Nam</option>
                                                    <option value="Không xác định">Không xác định</option>

                                                </select>
                                            </span>
                                    </div>
				<div class="form-group row">
						<label class="col-md-3 control-label">Số mặt tiền <span class="text-danger ">*</span></label>
						<span class="col-md-4">
							<input type="text" name="facade">
						</span>
				</div> -->
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label">Giá <span class="text-danger ">*</span></label>
                                            <span class="col-md-8">
                                                <input type="text" name="price" data-parsley-type="number" data-parsley-type-message="Vui lòng nhập tiền kiểu số." required="" data-parsley-required-message="Vui lòng nhập số tiền">
                                                <select name="type_price" id="type_price" style="background: #e8e8e8ff;" >
                                                    <option >Triệu VND</option>
                                                    <option>Tỉ VND</option>
                                                </select>
                                            </span>
                                            
                                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('price')}}</span>
                                            
                                            @endif
                                            </span>
                                    </div>
		 <div class="form-group row">
                                            <label class="col-md-3 control-label">Diện tích <span class="text-danger ">*</span></label>
                                            <span class="col-md-8">
                                                <input type="text" name="acr" data-parsley-type="number" data-parsley-type-message="Sai định dạng.Diện tích kiểu số" required="" data-parsley-required-message="Vui lòng nhập diện tích">
                                                <span style="background: #e8e8e8ff;padding: 5px 20px; border: 1px">m2</span>
                                            </span>
                                            
                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('acr')}}</span>
                                            
                                            @endif
                                    </div>


			</div>

			<div class="col-md-6">
				<div class="form-group row">
					<label class="col-md-3 control-label">Ảnh đại diện</label>
					<div class="col-md-9"> 
						<input type="file" id="avatar" name="avatar" class="form-control">
					</div>
				</div>
				<div class="col-md-offset-3" >
					
					<img src="{{asset('uploads/default-image.png')}}" id="exampleImage" width="200" style="margin-left: 10px">

					
				</div>
			</div>
		</div>
		<div class="form-group row">
				<label class="col-md-2 control-label" style="padding-left: 45px">Một số hình ảnh </label>
				<div class="col-md-9">
					<div class="field" align="left">
					  <input type="file" id="files" name="files[]" multiple />
					</div>
				</div>
		</div>
		<div class="form-group row">
				<label class="col-md-1 control-label" style="padding-left: 45px">Mô tả </label>
				<div class="col-md-11" style="padding-left: 95px">
					<textarea name="description" ></textarea>
						 	@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('description')}}</span>
						
						@endif
				</div>
		</div>



		<div class="col-md-offset-6">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
		</div>
	</form>


@endsection