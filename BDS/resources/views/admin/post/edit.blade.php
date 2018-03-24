@extends('layout.metronic')
@section('content')
	<div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Chỉnh sửa bào viết</h2></div>
                        <form action="{{route('post.save')}}" method="post" enctype="multipart/form-data" data-parsley-validate="" novalidate>
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$model->id}}">
                            <input type="hidden" name="action" value="{{$model->action}}">
                            <input type="hidden" name="user_id" value="{{$model->user_id}}">
                            <input type="hidden" name="like" value="{{$model->like}}">
                            <input type="hidden" name="id_post" value="{{$model->id_post}}">
                            <div class="col-md-12">
                                    <div class="form-group row"> 
                                        <label class=" control-label col-xs-3">Loại giao dịch <span class="text-danger ">*</span></label>
                                        <span class="col-xs-3">
                                                                    <label class="radio-inline cuslableItem">
                                             <input required="true" data-parsley-required-message="Vui lòng chọn 1 loại giao dịch" @if($model->type =='Cần Bán') checked @endif
                                              type="radio" name="type" id="radioChothue" value="Cần Bán">
                                            Cần Bán
                                            </label>
                                        </span>
                                        <span class="col-xs-3"> 
                                            <label class="radio-inline cuslableItem">
                                             <input @if($model->type =='Cho thuê') checked @endif
                                             type="radio"  name="type" id="radioChothue" value="Cho thuê">
                                           Cho thuê
                                            </label>

                                        </span>
                                        <span class="col-xs-3">
                                                            <label class="radio-inline cuslableItem">
                                             <input @if($model->type =='Cần mua') checked @endif
                                             type="radio"  name="type" id="radioChothue" value="Cần mua">
                                           Cần Mua
                                            </label>

                                        </span>
                                        @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('type')}}</span>
                                            
                                            @endif
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label" style="padding-right: 0">Loại bất động sản <span class="text-danger ">*</span></label>
                                            <span class="col-md-4">
                                                <select name="land_type" id="land_type" class="form-control" required="" data-parsley-required-message="Vui lòng chọn loại BDS">
                                                    <option value="">--Loại bất động sản--</option>
                                <option @if($model->land_type == 'Đất') selected @endif value="Bán đất">Đất</option>
                                <option @if($model->land_type == 'Kho xưởng') selected @endif value="Kho xưởng">Kho xưởng</option>
                                <option @if($model->land_type == 'Nhà') selected @endif value="Nhà">Nhà</option>
                                <option @if($model->land_type == 'Dự án') selected @endif value="Dự án">Dự án</option>
                                <option @if($model->land_type == 'Căn hộ') selected @endif value="Căn hộ">Căn hộ</option>


                                                </select>
                                            </span>
                                        @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('land_type')}}</span>
                                            
                                            @endif

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Tiêu đề <span class="text-danger ">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Tên danh mục" name="title" value="{{$model->title}}" required="" data-parsley-required-message="Vui lòng điền tiêu đề">
                                            @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('title')}}</span>
                                            
                                            @endif
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-md-3 control-label">Đường dẫn<span class="text-danger ">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="" name="slug">
                                            @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('slug')}}</span>
                                            
                                            @endif
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label class=" control-label col-md-3">Vị trí <span class="text-danger ">*</span></label>
                                            <span class="col-md-3">
                                                <select name="province1" id="province" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn tỉnh">
                                                    <option value="">{{$model->province}}</option>
                                                    @foreach($province as $p)

                                                    <option value="{{$p->provinceid}}" name="province">{{$p->name}}</option>
                                                    @endforeach 
                                                </select>
                                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('province1')}}</span>
                                            
                                            @endif
                                            </span>
                                            <span class="col-md-3">
                                                <select name="district" id="district" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn quận/huyện">
                                                    <option value="">{{$model->distrist}}</option>
                                                </select>
                                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('district')}}</span>
                                            
                                            @endif
                                            </span>
                                            <span class="col-md-3">
                                                <select id="ward" name="ward1" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn phường/xã">
                                                    <option value="">{{$model->ward}}</option>

                                                </select>
                                            </span>
                                                                            @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('ward1')}}</span>
                                            
                                            @endif

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Địa chỉ<span class="text-danger ">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="" name="address" value="{{$model->address}}" required="" data-parsley-required-message="Vui lòng điền địa chỉ">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-md-3 control-label">Ảnh đại diện</label>
                                        <div class="col-md-9"> 
                                            <input type="file" id="avatar" name="avatar" class="form-control" accept="image/*" >
                                        </div>
                                    </div>
                                    <div class="col-md-offset-3" >
                                        
                                        <img src="@if($model->avatar == "") 
                                            {{asset('uploads/default-image.png')}} 
                                        @else 
                                            {{asset($model->avatar)}} 
                                        @endif" id="exampleImage" width="200">
                                        
                                    </div>
                                        <div class="form-group row">
                                        <label class="col-md-3 control-label">Điện thoại<span class="text-danger ">*</span></label>
                                        <div class="col-md-4">
                                            <input type="tel" maxlength="11" minlength="6" data-parsley-length-message="Chiều dài không hợp lệ,Vui lòng điền 6-11 kí tự"  class="form-control" placeholder="0987654321" name="phone" value="{{$model->phone}}" data-parsley-type="digits" data-parsley-type-message="Vui lòng nhập số điện thoại kiểu số." required="" data-parsley-required-message="Vui lòng nhập số điện thoại">
                                                    @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('phone')}}</span>
                                            
                                            @endif
                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                            <label class="col-md-3 control-label">Hướng</label>
                                            <span class="col-md-4">
                                                <select name="trend" id="trend" class="form-control">
                                                    <option value=""></option>
                                <option @if($model->trend == 'Đông') selected @endif value="Đông">Đông</option>
                                <option @if($model->trend == 'Tây') selected @endif value="Tây">Tây</option>
                                <option @if($model->trend == 'Nam') selected @endif value="Nam">Nam</option>
                                <option @if($model->trend == 'Bắc') selected @endif value="Bắc">Bắc</option>
                                <option @if($model->trend == 'Đông Bắc') selected @endif value="Đông Bắc">Đông Bắc</option>
                                <option @if($model->trend == 'Đông Nam') selected @endif value="Đông Nam">Đông Nam</option>
                                <option @if($model->trend == 'Tây Bắc') selected @endif value="Tây Bắc">Tây Bắc</option>
                                <option @if($model->trend == 'Tây Nam') selected @endif value="Tây Nam">Tây Nam</option>
                                <option value="Không xác định">Không xác định</option>

                                                </select>
                                            </span>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label">Số mặt tiền</label>
                                            <span class="col-md-4">
                                                <input type="text" name="facade" value="{{$model->facade}}">
                                            </span>
                                    </div> -->
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label">Giá <span class="text-danger ">*</span></label>
                                            <span class="col-md-8">
                                                <input type="text" name="price" value="{{$model->price}}"  data-parsley-type="number" data-parsley-type-message="Vui lòng nhập tiền kiểu số." required="" data-parsley-required-message="Vui lòng nhập số tiền">
                                                <select name="type_price" id="type" style="background: #e8e8e8;">
                                                    <option @if($model->type_price == 'Triệu VND') selected @endif>Triệu VND</option>
                                                    <option @if($model->type_price == 'Tỉ VND') selected @endif>Tỉ VND</option>
                                                </select>
                                            </span>
                                            
                                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('price')}}</span>
                                            
                                            @endif
                                            </span>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label">Diện tích <span class="text-danger ">*</span></label>
                                            <span class="col-md-5">
                                                <input type="text" name="acr" value="{{$model->acr}}"  data-parsley-type="number" data-parsley-type-message="Sai định dạng.Diện tích kiểu số" required="" data-parsley-required-message="Vui lòng nhập diện tích">
                                                <span style="background: #e8e8e8;padding: 5px 20px;">m2</span>
                                            </span>
                                            
                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('acr')}}</span>
                                            
                                            @endif
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-3 control-label" >Một số hình ảnh<span class="text-danger ">*</span> </label>


<!--                                     <a href="1" class="img_del">IMG 1</a>
                                    <a href="2" class="img_del">IMG 2</a>
                                    <a href="3" class="img_del">IMG 3</a> -->
                                        <div class="col-md-9">
                                        <div class="field" align="left">
                                            <input type="hidden" name="images_delete" value="">
                                          <input type="file" id="files" name="files[]"  multiple />
                                     @foreach($image as $img)
                                    <span class="pip">
                                        <img class="imageThumb"  src="{{asset($img->url)}}" title="undefined">
                                        <br>
                                        <span class="remove" id="{{$img->id}}" >Remove image</span>
                                    </span>
                                    @endforeach
                                    
                                        </div>

                                    </div>

                                 <!--    <input type="hidden" name="images_delete" value=""> -->

                            </div>
                            <div class="form-group row">
                                    <label class="col-md-3 control-label">Mô tả chi tiết<span class="text-danger ">*</span></label>
                                    <div class="col-md-9"">
                                        <textarea name="description" required="" data-parsley-required-message="Vui lòng nhập mô tả">{!!$model->description!!}</textarea>
                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('description')}}</span>
                                            
                                            @endif
                                    </div>
                            </div>



                            </div>
                            <div class="col-md-offset-6">
                                                                <button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
                                                           <button type="button" class="btn default"><a href="{{URL::previous()}}">Cancel</a></button>
                            </div>
                        </form>


@endsection