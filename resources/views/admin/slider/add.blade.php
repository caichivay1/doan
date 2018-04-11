@extends('layout.metronic')
@section('content')
	<div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Thêm slider</h2></div>
	<form action="{{route('slider.save')}}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}
		<div class="col-md-12">
	<!-- 			<div class="col-md-6">
					<div class="form-group row">
						<label></label>
					</div>
				</div> -->
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



		<div class="col-md-offset-6">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<a href="{{URL::previous()}}"><button type="button" class="btn default ">Cancel</button></a>
		</div>
		</div>
	</form>


@endsection