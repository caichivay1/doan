@extends('layout.metronic')
@section('content')
<h2 class="text-center">Danh sách khách hàng</h2>
<table class="table table-hover">
								<thead>
								<tr>
									<th>
										 STT
									</th>
									<th>
										Tên khách hàng
									</th>
									<th>
										Email
									</th>
									<th>		
										SDT
									</th>
									<th>#</th>
								</tr>
								</thead>
								<tbody>
									@foreach($admin_list as $element)
										<tr>
											<td>
												 {{$loop->index+1}}
											</td>
											<td>
												{{$element->name}}
											</td>
											<td>
												{{$element->email}}
											</td>
											<td>
												 {{$element->phone}}
											</td>

											<td>
												<a href="javascript:;" onclick ="confirmRemove('{{route('user.remove',['id' =>$element->id])}}')" class="btn btn-sm btn-danger">
													<i class="fa fa-remove"></i>
												</a>
												</a>
												<a href="{{route('user.edit',['id' =>$element->id])}}" class="btn btn-sm btn-primary">
													<i class="fa fa-pencil"></i>
												</a>

											</td>
										</tr>
									@endforeach

								</tbody>
								</table>
							<div class="container text-center">
                                 {{ $admin_list->links() }}
                                </div>
@endsection