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
                                        <option value="Bán đất">Bán dất</option>
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
                                        <option value="200">Từ 200-300m2</option>
                                        <option value="300">Trên 200m2</option>
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
                    @yield('content')
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