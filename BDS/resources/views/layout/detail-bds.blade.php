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
            <!-- <div class="page-content gray-bg"> -->
                              <div class="gray-bg p-tb-50" style="padding:30px;background: rebeccapurple;
    margin-bottom: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                                       <form class="form-inline text-center ticket-register" action="{{route('search_client')}}" method="post">
                                {{csrf_field()}}
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" id="checkin" placeholder="Check In">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="checkout" placeholder="Check Out">
                                </div> -->
                                <div class="form-group">
                                    <select class="form-control" name="land_type">
                                        <option>-- Chọn danh mục --</option>
                                        <option value="Đất">Đất</option>
                                        <option value="Kho xưởng">Kho xưởng</option>
                                        <option value="Nhà">Nhà</option>
                                        <option value="Dự án">Dự án</option>
                                        <option value="Căn hộ">Căn hộ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="type">
                                        <option>-- Chọn loại --</option>
                                        <option value="Cần bán">Cần bán</option>
                                        <option value="Cho thuê">Cho thuê</option>
                                        <option value="Cần mua">Cần mua</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <select class="form-control" name="province">
                                        <option>-- Địa điểm --</option>
                                        @foreach($province as $provin)
                                        <option>{{$provin->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="price">
                                        <option>-- Giá --</option>
                                        <option value="01">Dưới 1 tỷ</option>
                                        <option value="12">Từ 1-2 tỷ</option>
                                        <option value="23">Trên 2 tỷ</option>
                                        <option value="34">Trên 3 tỷ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="acr">
                                        <option>-- Diện tích --</option>
                                        <option value="0">Dưới 100m2 </option>
                                        <option value="100">Từ 100-200m2</option>
                                        <option value="200">Từ 100-200m2</option>
                                        <option value="300">Trên 200m2</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-small  btn-theme-color btn-rounded">Tìm kiếm</button>
                            </form>          
                        </div>
                    </div>
                </div>
            </div>
                <div class="container">
                    <div class="row detail-info">
                        <p class="detail-title-css">{{$post->title}}</p>
                        <p class="detail-price-css" style="font-size: 15px;color:red"><b>Giá:</b> &nbsp;&nbsp;{{$post->price}}&nbsp;{{$post->type_price}}</p>
                        <p class="detail-address-css"><b>Địa chỉ:</b>&nbsp;&nbsp;<em>{{$post->address.'-'.$post->area}}</em></p>
                    </div>
                    <div class="row">
                        <div class="post-list-aside">
                            <div class="post-single">
                                <div class="col-md-8" style="padding-left: 0">
                                    <!--carousel thumb-->
                                    <div class="post-slider-thumb post-img text-center">
                                        <ul class="slides">
                                            @foreach($img as $image)
                                            <li data-thumb="{{asset($image->url)}}">
                                                <a href="javascript:;" title="Freshness Photo">
                                                    <img src="{{asset($image->url)}}" alt="">
                                                </a>
                                            </li>
                                            @endforeach 
                                        </ul>
                                    </div>
                                    <!--carousel thumb-->
                                </div>

                                <div class="col-md-4" style="padding:0">
                                    <div id="map" class="col-md-12" style="padding: 0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
                                        1d3723.8977453149246!2d105.83245751424809!3d21.036777085994046!
                                        2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
                                        1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgSOG7kyBDaMOtIE1pbmg!
                                        5e0!3m2!1svi!2sus!4v1501056274257" frameborder="0" style="border:0" allowfullscreen>
                                        </iframe>
                                    </div>
                                    <div class="col-md-12" style="padding:15px 0 0 0;">
                                        @if($adv)
                                        <img src="{{asset($adv->url)}}" height="330px" width="300px">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--room post-->
            <!--fun factor-->

            <!--fun factor-->
            <!--amenities-->

            <div class="container" style="padding-top:50px">
              <h3 style="">Thông tin bài viết</h3>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Giới thiệu chi tiết</a></li>
                <li><a data-toggle="tab" href="#menu1">Thông tin địa điểm</a></li>
                <li><a data-toggle="tab" href="#menu2">Thông tin cá nhân</a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade in active" style="border:1px solid #e8e8e8">
                  <h3>HOME</h3>
                  <p>{!!$post->description!!}</p>

                </div>
                <div id="menu1" class="tab-pane fade">
                  <h3>Menu 1</h3>
                   <div id="map" style="width:500px;height:500px;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
                                        1d3723.8977453149246!2d105.83245751424809!3d21.036777085994046!
                                        2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
                                        1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgSOG7kyBDaMOtIE1pbmg!
                                        5e0!3m2!1svi!2sus!4v1501056274257" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                                        </iframe>
                                    </div>
                </div>
                <div id="menu2" class="tab-pane fade" style="border:1px solid #e8e8e8">
                  <p><b>Họ tên :</b> &nbsp {{$uc->name}}</p>
                  <p><b>Email</b> : &nbsp {{$uc->email}}</p> 
                  <p><b>Số điện thoại </b>: &nbsp <a href="tel:{{$uc->phone}}">{{$uc->phone}}</a></p>
                  <p><b>Địa chỉ</b> : &nbsp {{$uc->ward.'-'.$uc->district.'-'.$uc->province}} </p>
                </div>
              </div>
            </div>
            
            
            <h3 class="container" style="padding-top: 30px">Bài viết nổi bật</h3>
            <div class="post-care container">
                <div id="img-carousel">
                        @foreach($postvip as $vip) 
                    <div class="item item-show">
                        <a href="#">
                            <img src="{{asset($vip->avatar)}}" alt="Image" class="hover-opacity" style="height:280px" >
                        </a>
                            <div class="hover-show">
                                <p ><a href="#" class="title-landlord">{!!Illuminate\Support\Str::words($vip->title,12,'...')!!}</a></p>
                                <p ><i class="fa fa-home" aria-hidden="true">&nbsp&nbsp{{$vip->acr}}m2</i>&nbsp &nbsp<i class="fa fa-money" aria-hidden="true">&nbsp&nbsp <span style="color:red;">{{$vip->price}}</span></i>&nbsp&nbsp<i class="fa fa-bar-chart" aria-hidden="true"> <span style="color:red;">{{$vip->type}}</span></i></p>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp &nbsp {{$vip->address.','.$vip->area}}</p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp &nbsp{{date('d-m-Y', strtotime($vip->created_at))}}&nbsp&nbsp&nbsp &nbsp <a href="mailto:joe@example.com?subject=feedback" "email me" style="color:green;">Read more...</a></p>
                            </div>                               
                    </div>
                @endforeach
                </div>
            </div>

        </section>
        <!--body content end-->

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