@extends('layout.metronic')
@section('content')
<h2 class="text-center" style="color:blue">Quản lí bài viết</h2>
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
									<th>
										Trạng thái
									</th>
									<th>#</th>
								</tr>
								</thead>
								<tbody>
									@foreach($user as $element)
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
												@if(($element->action)==1)
												<span color="blue">đã duyệt</span>
												@else
												<span style="color:blue">chưa được duyệt</span>
												@endif 
											</td>

											<td>
												<a href="{{route('user.browser',['id' =>$element->id])}}" class="btn btn-sm btn-success">
													Duyệt
												</a>
												<a href="{{route('post.edit',['id' =>$element->id])}}" class="btn btn-sm btn-primary">
													<i class="fa fa-pencil"></i>
												</a>

													<a href="javascript:;" onclick ="confirmRemove('{{route('post.remove',['id' =>$element->id])}}')" class="btn btn-sm btn-danger">
													<i class="fa fa-remove"></i>
												</a>
											</td>
										</tr>
									@endforeach

								</tbody> 
								</table>
							<div class="container text-center">
                                </div>
@endsection