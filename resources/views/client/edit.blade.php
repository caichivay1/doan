<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from massive.markup.themebucket.net/mp-index-hotel-resort.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:38:10 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <title>Hotel & resort</title>
   @include('sub.client.css')
</head>

<body> 
    @include('sub.client.header')
    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->
    <div class="wrapper">
        <!--header start-->
  
        <!--header end-->
        <!--hero section-->

        <!--hero section-->
        <!--body content start-->
        <section class="body-content">
            <!--book form-->
            <div class="gray-bg p-tb-50">
                <ol class="breadcrumb"> 
                  <li><a href="{{route('homepage')}}"><i class="fa fa-home">&nbsp</i>Home</a></li>
                  <li><a href="#">List-all</a></li>
                </ol>
            </div>
            <!--book form-->
            <!--intro post-->

            <!--intro post-->
            <!--room post-->
            <div class="page-content gray-bg" style="background: white">
                <div class="container">
                    <div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Chỉnh sửa bài viết</h2></div>
                        <form action="{{route('save.post.client')}}" method="post" enctype="multipart/form-data" data-parsley-validate="" novalidate>
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$posts->id}}">
                            <input type="hidden" name="action" value="{{$posts->action}}">
                            <input type="hidden" name="user_id" value="{{$posts->user_id}}">
                            <input type="hidden" name="like" value="{{$posts->like}}">
                            <input type="hidden" name="id_post" value="{{$posts->id_post}}">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                        <ul class="nav nav-pills nav-stacked" style="border:1px solid #e8e8e8">
                                              <li role="presentation" class="active"><a href="{{route('manager_client')}}">Danh sách bài viết<span style="margin-left: 30px;border-radius:25px;background: white;padding: 3px 8px;color:blue">{{count($posts1)}}</span></a></li>
                                              <li role="presentation"><a href="{{route('loading_post')}}">Bài viết chờ duyệt<span style="margin-left: 30px;border-radius:25px;background: #337ab7;padding: 3px 8px;color:white">{{count($posts2)}}</span></a></li>
                                              <li role="presentation"><a href="{{route('add_post')}}">Tạo bài viết mới</a></li>
                                        </ul>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group row"> 
                                        <label class=" control-label col-xs-3">Loại giao dịch <span class="text-danger ">*</span></label>
                                        <span class="col-xs-3">
                                                                    <label class="radio-inline cuslableItem">
                                             <input required="true" data-parsley-required-message="Vui lòng chọn 1 loại giao dịch" @if($posts->type =='Cần Bán') checked @endif
                                              type="radio" name="type" id="radioChothue" value="Cần Bán" >
                                            Cần Bán
                                            </label>
                                        </span>
                                        <span class="col-xs-3">
                                            <label class="radio-inline cuslableItem">
                                             <input @if($posts->type =='Cho thuê') checked @endif
                                             type="radio"  name="type" id="radioChothue" value="Cho thuê">
                                           Cho thuê
                                            </label>

                                        </span>
                                        <span class="col-xs-3">
                                                            <label class="radio-inline cuslableItem">
                                             <input @if($posts->type =='Cần mua') checked @endif
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
					                                <option @if($posts->land_type == 'Đất') selected @endif value="Đất">Đất</option>
					                                <option @if($posts->land_type == 'Kho xưởng') selected @endif value="Kho xưởng">Kho xưởng</option>
					                                <option @if($posts->land_type == 'Nhà') selected @endif value="Nhà">Nhà</option>
					                                <option @if($posts->land_type == 'Dự án') selected @endif value="Dự án">Dự án</option>
					                                <option @if($posts->land_type == 'Căn hộ') selected @endif value="Căn hộ">Căn hộ</option>

                                                </select>
                                            </span>
                                        @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('land_type')}}</span>
                                            
                                            @endif

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Tiêu đề <span class="text-danger ">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Tên danh mục" name="title" value="{{$posts->title}}" required="" data-parsley-required-message="Vui lòng điền tiêu đề">
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
                                                    <option value="">{{$posts->province}}</option>
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
                                                    <option value="">{{$posts->distrist}}</option>
                                                </select>
                                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('district')}}</span>
                                            
                                            @endif
                                            </span>
                                            <span class="col-md-3">
                                                <select id="ward" name="ward1" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn phường/xã">
                                                    <option value="">{{$posts->ward}}</option>

                                                </select>
                                            </span>
                                                                            @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('ward1')}}</span>
                                            
                                            @endif

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Địa chỉ<span class="text-danger ">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="" name="address" value="{{$posts->address}}" required="" data-parsley-required-message="Vui lòng điền địa chỉ">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-md-3 control-label">Ảnh đại diện</label>
                                        <div class="col-md-9"> 
                                            <input type="file" id="avatar" name="avatar" class="form-control" accept="image/*" >
                                        </div>
                                    </div>
                                    <div class="col-md-offset-3" >
                                        
                                        <img src="@if($posts->avatar == "") 
                                            {{asset('uploads/default-image.png')}} 
                                        @else 
                                            {{asset($posts->avatar)}} 
                                        @endif" id="exampleImage" width="200">
                                        
                                    </div>
                                        <div class="form-group row">
                                        <label class="col-md-3 control-label">Điện thoại<span class="text-danger ">*</span></label>
                                        <div class="col-md-4">
                                            <input type="tel"  class="form-control" placeholder="0987654321" name="phone" value="{{$posts->phone}}" maxlength="11" minlength="6" ata-parsley-length-message="Chiều dài không hợp lệ,Vui lòng điền 6-11 kí tự" data-parsley-type="digits" data-parsley-type-message="Vui lòng nhập số điện thoại kiểu số." required="" data-parsley-required-message="Vui lòng nhập số điện thoại">
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
					                                <option @if($posts->trend == 'Đông') selected @endif value="Đông">Đông</option>
					                                <option @if($posts->trend == 'Tây') selected @endif value="Tây">Tây</option>
					                                <option @if($posts->trend == 'Nam') selected @endif value="Nam">Nam</option>
					                                <option @if($posts->trend == 'Bắc') selected @endif value="Bắc">Bắc</option>
					                                <option @if($posts->trend == 'Đông Bắc') selected @endif value="Đông Bắc">Đông Bắc</option>
					                                <option @if($posts->trend == 'Đông Nam') selected @endif value="Đông Nam">Đông Nam</option>
					                                <option @if($posts->trend == 'Tây Bắc') selected @endif value="Tây Bắc">Tây Bắc</option>
					                                <option @if($posts->trend == 'Tây Nam') selected @endif value="Tây Nam">Tây Nam</option>
					                                <option value="Không xác định">Không xác định</option>

                                                </select>
                                            </span>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label">Số mặt tiền</label>
                                            <span class="col-md-4">
                                                <input type="text" name="facade" value="{{$posts->facade}}">
                                            </span>
                                    </div> -->
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label">Giá <span class="text-danger ">*</span></label>
                                            <span class="col-md-8">
                                                <input type="text" name="price" value="{{$posts->price}}" data-parsley-type="number" data-parsley-type-message="Vui lòng nhập tiền kiểu số." required="" data-parsley-required-message="Vui lòng nhập số tiền">
                                                <select name="type_price" id="type" style="background: #e8e8e8;">
                                                    <option @if($posts->type_price == 'Triệu VND') selected @endif>Triệu VND</option>
                                                    <option @if($posts->type_price == 'Tỉ VND') selected @endif>Tỉ VND</option>
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
                                                <input type="text" name="acr" value="{{$posts->acr}}" data-parsley-type="number" data-parsley-type-message="Sai định dạng.Diện tích kiểu số" required="" data-parsley-required-message="Vui lòng nhập diện tích">
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
                                        <textarea name="description" required="" data-parsley-required-message="Vui lòng nhập mô tả">{!!$posts->description!!}</textarea>
                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('description')}}</span>
                                            
                                            @endif
                                    </div>
                            </div>


                                </div>

                              <!--   <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Ảnh đại diện</label>
                                        <div class="col-md-9"> 
                                            <input type="file" id="avatar" name="avatar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-offset-3" >
                                        
                                        <img src="{{asset('uploads/default-image.png')}}" id="exampleImage" width="200" style="margin-left: 10px">

                                        
                                    </div>
                                </div> -->
                            </div>
                            



                            <div class="col-md-offset-6">
                                                                <button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
                                                                <a href="{{URL::previous()}}"><button type="button" class="btn default">Back</button></a>
                            </div>
                        </form>
                </div>
            </div>
            <!--room post-->
            <!--fun factor-->

            <!--fun factor-->
            <!--amenities-->
            
        </section>
        <!--body content end-->
            <!-- pagenation -->
                                
      <!--  end pagenation -->
        <!--footer start 1-->
        @include('sub.client.footer')
        <!--footer 1 end-->
    </div>
    <!-- inject:js -->
   @include('sub.client.js')
    <!-- endinject -->
</body>
<!-- Mirrored from massive.markup.themebucket.net/mp-index-hotel-resort.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:38:45 GMT -->

</html>