<option value="">--Chọn Quận/Huyện</option>
	@foreach($district as $d)
		<option value="{{$d->districtid}}" name="distrist">{{$d->name}}</option>
	@endforeach