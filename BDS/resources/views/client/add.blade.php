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
   <style type="text/css">
       .parsley-required,.parsley-length,.parsley-type{
        color : red;
       }
   </style>
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
            <div class="page-content gray-bg" style="background: white;padding: 0">
                <div class="container" style="background: #e8e8e8;">
                <p style="font-size: 20px;padding-left: 200px;color:green">Bước 1: Soạn tin đăng</p>
                    <div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Thêm bài viết</h2></div>
                        <form action="{{route('save.post.client')}}" method="post" data-parsley-validate="" enctype="multipart/form-data" novalidate>
                            {{csrf_field()}}
                            <input type="hidden" name="id">
                            <input type="hidden" name="action" value="0">
                            <input type="hidden" name="user_id" value="{{$auth->id}}">
                            <input type="hidden" name="like" value="0">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                        <ul class="nav nav-pills nav-stacked" style="border:1px solid #e8e8e8">
                                              <li role="presentation" class="active"><a href="{{route('manager_client')}}">Danh sách bài viết<span style="margin-left: 30px;border-radius:25px;background: white;padding: 3px 8px;color:blue">{{count($posts)}}</span></a></li>
                                              <li role="presentation"><a href="{{route('loading_post')}}">Bài viết chờ duyệt<span style="margin-left: 30px;border-radius:25px;background: #337ab7;padding: 3px 8px;color:white">{{count($posts1)}}</span></a></li>
                                              <li role="presentation"><a href="{{route('add_post')}}">Tạo bài viết mới</a></li>
                                        </ul>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group row"> 
                                        <label class=" control-label col-xs-3">Loại giao dịch <span class="text-danger ">*</span></label>
                                        <span class="col-xs-3">
                                                                    <label class="radio-inline cuslableItem">
                                                                 <input type="radio"  name="type" id="radioChothue" value="Cần Bán"  required="true" data-parsley-required-message="Vui lòng chọn 1 loại giao dịch">
                                                                Cần Bán
                                            </label>
                                        </span>
                                        <span class="col-xs-3">
                                                                    <label class="radio-inline cuslableItem">
                                                                 <input type="radio"  name="type" id="radioChothue" value="Cho thuê">
                                                               Cho thuê
                                            </label>

                                        </span>
                                        <span class="col-xs-3">
                                                                    <label class="radio-inline cuslableItem">
                                                                 <input type="radio"  name="type" id="radioChothue" value="Cần mua">
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
                                                    <option value="Đất">Đất</option>
                                                    <option value="Nhà">Nhà</option>
                                                    <option value="Dự án">Dự án</option>
                                                    <option value="Căn hộ">Căn hộ</option>
                                                    <option value="Kho xưởng">Kho xưởng</option>

                                                </select>
                                            </span>
                                        @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('land_type')}}</span>
                                            
                                            @endif

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Tiêu đề <span class="text-danger ">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Tên danh mục" name="title" value="" required="" data-parsley-required-message="Vui lòng điền tiêu đề">
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
                                        </div> `
                                    </div> -->
                                    <div class="form-group row">
                                        <label class=" control-label col-md-3">Vị trí <span class="text-danger ">*</span></label>
                                            <span class="col-md-3">
                                                <select name="province1" id="province" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn tỉnh">
                                                    <option value="">Chọn Tỉnh</option>
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
                                                    <option value="">Chưa chọn huyện</option>
                                                </select>
                                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('district')}}</span>
                                            
                                            @endif
                                            </span>
                                            <span class="col-md-3">
                                                <select id="ward" name="ward1" class="form-control" required="" data-parsley-required-message="Vui lòng lựa chọn phường/xã">
                                                    <option value="">Chưa chọn xã</option>

                                                </select>
                                            </span>
                                                                            @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('ward1')}}</span>
                                            
                                            @endif

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Địa chỉ<span class="text-danger ">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="" name="address" required="" data-parsley-required-message="Vui lòng điền địa chỉ">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-md-3 control-label">Ảnh đại diện</label>
                                        <div class="col-md-9"> 
                                            <input type="file" id="avatar" name="avatar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-offset-3" >
                                        
                                        <img src="{{asset('uploads/default-image.png')}}" id="exampleImage" width="150" style="margin-left: 20px">

                                        
                                    </div>
                                        <div class="form-group row">
                                        <label class="col-md-3 control-label">Điện thoại<span class="text-danger ">*</span></label>
                                        <div class="col-md-5">
                                            <input type="tel" maxlength="11" minlength="6" data-parsley-length-message="Chiều dài không hợp lệ,Vui lòng điền 6-11 kí tự" class="form-control" placeholder="0987654321" name="phone" data-parsley-type="digits" data-parsley-type-message="Vui lòng nhập số điện thoại kiểu số." required="" data-parsley-required-message="Vui lòng nhập số điện thoại"   >
                                                    @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('phone')}}</span>
                                            
                                            @endif
                                        </div>
                                    </div>

<!--                                     <div class="form-group row">
                                            <label class="col-md-3 control-label">Hướng</label>
                                            <span class="col-md-4">
                                                <select name="trend" id="trend" class="form-control">
                                                    <option value=""></option>
                                                    <option value="Đông">Đông</option>
                                                    <option value="Tây">Tây</option>
                                                    <option value="Nam">Nam</option>
                                                    <option value="Bắc">Bắc</option>
                                                    <option value="Đông Bắc">Đông Bắc</option>
                                                    <option value="Đông Nam">Đông Nam</option>
                                                    <option value="Tây Bắc">Tây Bắc</option>
                                                    <option value="Tây Nam">Tây Nam</option>
                                                    <option value="Không xác định">Không xác định</option>

                                                </select>
                                            </span>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label">Số mặt tiền</label>
                                            <span class="col-md-4">
                                                <input type="text" name="facade">
                                            </span>
                                    </div> -->
                                    <div class="form-group row">
                                            <label class="col-md-3 control-label">Giá <span class="text-danger ">*</span></label>
                                            <span class="col-md-8">
                                                <input type="text" name="price" data-parsley-type="number" data-parsley-type-message="Vui lòng nhập tiền kiểu số." required="" data-parsley-required-message="Vui lòng nhập số tiền">
                                                <select name="type_price" id="type_price" style="background: #e8e8e8;" >
                                                    <option >Triệu VND</option>
                                                    <option>Tỉ VND</option>
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
                                                <input type="text" name="acr" data-parsley-type="number" data-parsley-type-message="Sai định dạng.Diện tích kiểu số" required="" data-parsley-required-message="Vui lòng nhập diện tích">
                                                <span style="background: #e8e8e8;padding: 5px 20px;">m2</span>
                                            </span>
                                            
                                                                @if (count($errors) > 0)
                                                <span style="color:red">{{$errors->first('acr')}}</span>
                                            
                                            @endif
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-3 control-label" >Một số hình ảnh<span class="text-danger ">*</span> </label>
                                    <div class="col-md-9">
                                        <div class="field" align="left">
                                        <em style="font-size:13px;color:green">Chú ý:Hình ảnh có chứa sổ đỏ thì tỉ lệ duyệt bài sẽ được duyệt bài với tỉ lệ cao hơn.</em>
                                          <input type="file" id="files" name="files[]" multiple />
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-md-3 control-label">Mô tả chi tiết<span class="text-danger ">*</span></label>
                                    <div class="col-md-9"">
                                        <textarea name="description" ></textarea>
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
                                                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
                                                                <button type="button" class="btn default">Cancel</button>
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
</script>
</html>