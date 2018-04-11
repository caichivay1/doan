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
                                        <option  @if($land_type == 'Đất') selected @endif value="Đất">Đất</option>
                                        <option  @if($land_type == 'Kho xưởng') selected @endif value="Kho xưởng">Kho xưởng</option>
                                        <option  @if($land_type == 'Nhà') selected @endif value="Nhà">Nhà</option>
                                        <option  @if($land_type == 'Dự án') selected @endif value="Dự án">Dự án</option>
                                        <option  @if($land_type == 'Căn hộ') selected @endif value="Căn hộ">Căn hộ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="type">
                                        <option>-- Chọn loại --</option>
                                        <option @if($type == 'Cần Bán') selected @endif value="Cần Bán">Cần bán</option>
                                        <option @if($type == 'Cho thuê') selected @endif value="Cho thuê">Cho thuê</option>
                                        <option @if($type == 'Cần mua') selected @endif value="Cần mua">Cần mua</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <select class="form-control" name="province">
                                        <option>{{$provin}}</option>
                                        @foreach($province as $provin)
                                        <option>{{$provin->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="price">
                                        <option>-- Giá --</option>
                                        <option @if($price == '01') selected @endif value="01">Dưới 1 tỷ</option>
                                        <option @if($price == '12') selected @endif value="12">Từ 1-2 tỷ</option>
                                        <option @if($price == '23') selected @endif value="23">Trên 2 tỷ</option>
                                        <option @if($price == '34') selected @endif value="34">Trên 3 tỷ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="acr">
                                        <option>-- Diện tích --</option>
                                        <option @if($acr == '0') selected @endif value="0">Dưới 100m2 </option>
                                        <option @if($acr == '100') selected @endif value="100">Từ 100-200m2</option>
                                        <option @if($acr == '200') selected @endif value="200">Từ 100-200m2</option>
                                        <option @if($acr == '300') selected @endif value="300">Trên 200m2</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-small  btn-theme-color btn-rounded">Tìm kiếm</button>
                            </form>          
                        </div>
                    </div>
                </div>
            </div>
            <!--book form-->
            <!--intro post-->

            <!--intro post-->
            <!--room post-->
            <div class="page-content gray-bg" style="background: white">
                <div class="container">
                    <div class="row">
    <div class="heading-title border-short-bottom text-center ">
        <h3 class="text-uppercase">Danh sách bài viết</h3>
    </div>
                        <!--post style 2 start-->
    <div class="post-list">
                @if($post->count() == 0)
            <p style="color:red;font-size:20px" class="text-center">{{$null}}</p>
        @endif
        @foreach($post as $vip)
        <div class="col-md-4" style="margin-bottom: 20px;min-height: 500px">
                        <a href="{{$vip->slug}}">
                            <img src="{{asset($vip->avatar)}}" alt="Image"  style="height:280px;width: 100%" >
                        </a>
                            <div class="hover-show">
                                <p ><a href="{{$vip->slug}}" class="title-landlord">{{str_limit($vip->title,60,'(...)')}}</a></p>
                                <p ><i class="fa fa-home" aria-hidden="true">&nbsp&nbsp{{$vip->acr}}m2</i>&nbsp &nbsp<i class="fa fa-money" aria-hidden="true">&nbsp&nbsp <span style="color:red;">{{$vip->price.$vip->type_price}}</span></i>&nbsp&nbsp<i class="fa fa-bar-chart" aria-hidden="true"> <span style="color:red;">{{$vip->type}}</span></i></p>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp &nbsp {{$vip->address.','.$vip->area}}</p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp &nbsp{{date('d-m-Y', strtotime($vip->created_at))}}&nbsp&nbsp&nbsp &nbsp <a href="{{$vip->slug}}" "email me" style="color:green;">Read more...</a></p>
                            </div>                   
        </div>
        @endforeach
    </div>
    <div class="container text-center">
                                
                                </div>
                        <!--post style 2 end-->
</div>
<div class="container text-center">

                                </div>
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