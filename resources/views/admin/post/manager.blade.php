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
										 Tiêu đề bài viết
									</th>
									<th>
										 Loại BDS
									</th>
									<th>
										 Ảnh
									</th>
									<th>
										 Tên người bán
									</th>
									<th>
										Trạng thái
									</th>
									<th>#</th>
								</tr>
								</thead>
								<tbody>
									@foreach($posts as $element)
										<tr>
											<td>
												 {{$loop->index+1}}
											</td>
											<td>
												{{str_limit($element->title,20)}}
											</td>
											<td>
												{{$element->land_type}}
											</td>
											<td>
												 <img src="{{asset($element->avatar)}}" width="100px">
											</td>
											<td>
												 @php
													$a=$user->where('id',$element->user_id)->first();
													if($a==null) echo "admin";
													else{
													echo $a->name;
												}
												 @endphp


											</td>
											<td>
												@if(($element->action)==1)
												đã duyệt
												@else
												chưa duyệt 
												@endif 
											</td>

											<td>
												<a href="{{route('post.browser',['id' =>$element->id])}}" class="btn btn-sm btn-success">
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
                                 {{ $posts->links() }}
                                </div>
@endsection