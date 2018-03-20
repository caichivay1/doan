@extends('layout.metronic')
@section('content')
<h2 class="text-center" style="color:blue">Danh sách Category</h2>
<table class="table table-hover">
								<thead>
								<tr>
									<th>
										 STT
									</th>
									<th>
										 Tên category
									</th>
									<th>
										Ngày tạo
									</th>
									<th>
										Thư mục cha
									</th>
									<th>
										Trạng thái
									</th>
									<th>#</th>
								</tr>
								</thead>
								<tbody>
									@foreach($cate as $element)
										<tr>
											<td>
												 {{$loop->index+1}}
											</td>
											<td>
												{{$element->name}}
											</td>
											<td>
												{{$element->created_at}}
											</td>
											<td>
												{{$element->parent}}
											</td>
											<td>
												 @if($element->is_menu == 1)
													<i class="fa fa-check fa-2x text-success"></i>	
												@else
													<i class="fa fa-ban fa-2x text-danger"></i>
												@endif
											</td>

											<td>
												<a href="{{route('category.edit',['id' =>$element->id])}}" class="btn btn-sm btn-primary">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="javascript:;" onclick ="confirmRemove('{{route('category.remove',['id' =>$element->id])}}')" class="btn btn-sm btn-danger">
													<i class="fa fa-remove"></i>
												</a>
												
											</td>
										</tr>
									@endforeach

								</tbody>
								</table>
							<div class="container text-center">
                                 {{ $cate->links() }}
                                </div>
@endsection