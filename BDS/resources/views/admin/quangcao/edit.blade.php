@extends('layout.metronic')
@section('content')
	<div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Thêm quảng cáo</h2></div>
	<form action="{{route('adv.save')}}" method="post" enctype="multipart/form-data" novalidate data-parsley-validate="" required="" data-parsley-required-message="Vui lòng nhap ten">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$model->id}}">
		<div class="col-md-12">
				<div class="form-group row">
					<label class="col-md-3 control-label">Nguồn quảng cáo<span class="text-danger ">*</span></label>
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Nhập tên chuyên mục" name="source" value="{{$model->source}}">
<!-- 						@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('title')}}</span>
						
						@endif -->
					</div>
				</div>
                                     <div class="form-group row">
                                        <label class="col-md-3 control-label">Ảnh </label>
                                        <div class="col-md-9"> 
                                            <input type="file" id="avatar" name="avatar" class="form-control" accept="image/*" >
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-offset-3" >
                                        
                                        <img src="@if($model->url == "") 
                                            {{asset('uploads/default-image.png')}} 
                                        @else 
                                            {{asset($model->url)}} 
                                        @endif" id="exampleImage" width="200">
                                        
                                    </div>

				<div class="form-group row">
						<label class="col-md-3 control-label">Vị trí đặt <span class="text-danger ">*</span></label>
						<span class="col-md-5">
							<select name="location" id="location" class="form-control">
						 		<option value="">----------------</option>
						 		<option @if($model->location == 'Trang chủ') selected @endif>Trang chủ</option>
						 		<option @if($model->location == 'Trang chi tiết') selected @endif>Trang chi tiết</option>
							</select>
						</span>
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-7">
						<input type="checkbox" name="action" value="1" @if($model->action==1) checked @endif id="isMenu">
						<label for="isMenu">Cho phép hiển thị</label>
					</div>
				</div>



		<div class="col-md-offset-4">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<a href="{{URL::previous()}}"><button type="button" class="btn default ">Cancel</button></a>
		</div>
		</div>
	</form>


@endsection