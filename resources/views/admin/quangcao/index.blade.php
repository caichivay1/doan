@extends('layout.metronic')
@section('content')
<h2 class="text-center">Danh sách quảng cáo</h2>
<table class="table table-hover">
								<thead>
								<tr>
									<th>
										 STT
									</th>
									<th>
										Nguồn
									</th>
									<th>
										Ảnh
									</th>
									<th>		
										Vị trí đặt
									</th>
									<th>
										Trạng thái
									</th>
									<th>#</th>
								</tr>
								</thead>
								<tbody>
									@foreach($adv as $element)
										<tr>
											<td>
												 {{$loop->index+1}}
											</td>
											<td>
												{{$element->source}}
											</td>
											<td>
												<img src="{{asset($element->url)}}" width="120px">
											</td>
											<td>
												 {{$element->location}}
											</td>
											<td>
												 @if($element->action == 1)
													<i class="fa fa-check fa-2x text-success"></i>	
												@else
													<i class="fa fa-ban fa-2x text-danger"></i>
												@endif
											</td>
											<td>
												<a href="{{route('adv.edit',['id' =>$element->id])}}" class="btn btn-sm btn-primary">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="javascript:;" onclick ="confirmRemove('{{route('adv.remove',['id' =>$element->id])}}')" class="btn btn-sm btn-danger">
													<i class="fa fa-remove"></i>
												</a>
												
											</td>										


										</tr>
									@endforeach

								</tbody>
								</table>
							<div class="container text-center">
                                 {{ $adv->links() }}
                                </div>
@endsection