<option value="">Chọn Phường/Xã </option>
	@foreach($ward as $w)
		<option value="{{$w->wardid}}">{{$w->name}}</option>
	@endforeach