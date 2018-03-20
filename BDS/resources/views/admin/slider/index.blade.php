@extends('layout.metronic')
@section('content')
<h2 class="text-center" style="color:blue">Danh sách slider</h2>
<table class="table table-hover">
								<thead>
								<tr>
									<th>
										 STT
									</th>
									<th>
										 Ảnh
									</th>
									<th>
										Ngày khởi tạo
									</th>
									<th>#</th>
								</tr>
								</thead>
								<tbody>
									@foreach($slider as $element)
										<tr>
											<td>
												 {{$loop->index+1}}
											</td>
											<td>
												 <img src="{{asset($element->url)}}" width="200px">
											</td>
											<td>
												{{$element->created_at}}
											</td>
											<td>
												<a href="javascript:;" onclick ="confirmRemove('{{route('slider.remove',['id' =>$element->id])}}')" class="btn btn-sm btn-danger">
													<i class="fa fa-remove"></i>
												</a>
												
											</td>
										</tr>
									@endforeach

								</tbody>
								</table>
							<div class="container text-center">
                                 {{ $slider->links() }}
                                </div>
@endsection