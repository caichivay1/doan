@extends('layout.metronic')
@section('content')
	<div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Sữa chuyên mục</h2></div>
	<form action="{{route('category.save')}}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$cate->id}}">
		<div class="col-md-12">
				<div class="form-group row">
					<label class="col-md-3 control-label">Tên chuyên mục<span class="text-danger ">*</span></label>
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Nhập tên chuyên mục" name="name" value="{{old('name',$cate->name)}}">
<!-- 						@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('title')}}</span>
						
						@endif -->
					</div>
				</div>
				<div class="form-group row">
						<label class="col-md-3 control-label">Thư mục cha <span class="text-danger ">*</span></label>
						<span class="col-md-4">
							<select name="parent" id="parent" class="form-control">
						 		<option>{{$cate->parent}}</option>
						 		@foreach($cate1 as $c)
						 		<option >{{$c->name}}</option>
						 		@endforeach
							</select>
						</span>
					@if (count($errors) > 0)
							<span style="color:red">{{$errors->first('parent')}}</span>
						
						@endif
				</div>
				<div class="form-group row">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-7">
						<input type="checkbox" @if($cate->is_menu==1) checked @endif name="is_menu" value="1">
						<label for="isMenu">Hiển thị trang chủ</label>
					</div>
				</div>



		<div class="col-md-offset-4">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<a href="{{URL::previous()}}"><button type="button" class="btn default ">Cancel</button></a>
		</div>
		</div>
	</form>


@endsection