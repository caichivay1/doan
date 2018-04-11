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
            <div class="page-content gray-bg" style="background: white">
                <div class="container">
                <p style="font-size: 20px;padding-left: 200px">Bước 2: Chọn dịch vụ</p>
                    <div class="text-center" style="margin-bottom: 30px;color:blue"><h2>Lựa chọn dịch vụ</h2></div>
                        <form action="{{route('broser12')}}" method="post" data-parsley-validate="" enctype="multipart/form-data" novalidate>
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$post->id}}">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                        <ul class="nav nav-pills nav-stacked" style="border:1px solid #e8e8e8">
                                              <li role="presentation" class="active"><a href="{{route('manager_client')}}">Danh sách bài viết<span style="margin-left: 30px;border-radius:25px;background: white;padding: 3px 8px;color:blue">{{count($posts)}}</span></a></li>
                                              <li role="presentation"><a href="{{route('loading_post')}}">Bài viết chờ duyệt<span style="margin-left: 30px;border-radius:25px;background: #337ab7;padding: 3px 8px;color:white">{{count($posts1)}}</span></a></li>
                                              <li role="presentation"><a href="{{route('add_post')}}">Tạo bài viết mới</a></li>
                                        </ul>
                                </div>
                                <div class="col-md-9">
                                   <input type="radio" name="radio" id="radio" value="1"><label for="radio">Top Listing 20 ngày</label><span style="padding-left: 100px;color:red">Phí :50000VND</span>
                                   <p style="color:12px;opacity: 0.5">Xuất hiện tại vị trí đầu trang search.Luôn đứng đầu trên trang chủ,trong các trang chi tiết đều được xuất hiện,lượt xem sẽ được nhiều hơn.</p>
                                   <p class="tt" hidden>
                                   <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=nguyenanhvan.nav@gmail.com&product_name=Phi noi bat&price=50000&return_url={{URL::previous()}}&comments=(Ghi chú về đơn hàng)"><img src="https://www.nganluong.vn/css/newhome/img/button/fee-sm.png"border="0" /></a>
                                   </p>

                                   <input type="radio" name="radio" class="bassic" value="0" id="a"><label for="a">Bassic Listing 15 ngày</label><span style="padding-left: 100px;">Miễn phí</span>
                                   <p style="color:12px;opacity: 0.5">Hiện thị sau cùng trong danh sách tìm kiếm. sau 15 ngày bài viết sẽ tự động bị xóa</p>
                                </div>
                            </div>
                            



                            <div class="col-md-offset-6">
                                                                <button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
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
<script type="text/javascript">
    $(document).ready(function(){
        $("#radio").click(function(){
            $(".tt").show();
        });
        $(".bassic").click(function(){
            $(".tt").hide();
        });
    });

</script>
</html>