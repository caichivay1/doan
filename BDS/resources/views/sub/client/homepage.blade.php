@extends('layout.index')
@section('content')
 <!--hero section-->
            <div class="slider-full-width">
                <div class="post-slider  text-center vertical-align">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('assets/img/banner/22.jpg')}}" alt="image01" style="height:495px;" />
                            <div class="caption">Dự án cao cấp</div>

                        </li>

                        <li>
                            <img src="{{asset('assets/img/banner/flex/flex_full2.jpg')}}" alt="image01" />
                            <div class="caption">Dự án mới</div>
                        </li>
                        <li>
                            <img src="{{asset('assets/img/banner/flex/flex_full1.jpg')}}" alt="image01" />
                            <div class="caption">Nhà đất nổi bật</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--hero section-->
            <!--book form-->

            <div class="gray-bg p-tb-50">
                <div class="gray-bg p-tb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-inline text-center ticket-register">
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" id="checkin" placeholder="Check In">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="checkout" placeholder="Check Out">
                                </div> -->
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>-- Chọn danh mục --</option>
                                        <option value="Đất">Đất</option>
                                        <option value="Kho xưởng">Kho xưởng</option>
                                        <option value="Nhà">Nhà</option>
                                        <option value="Dự án">Dự án</option>
                                        <option value="Căn hộ">Căn hộ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>-- Chọn loại --</option>
                                        <option value="Cần bán">Cần bán</option>
                                        <option value="Cho thuê">Cho thuê</option>
                                        <option value="Cần mua">Cần mua</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <select class="form-control">
                                        <option>-- Địa điểm --</option>
                                        @foreach($province as $provin)
                                        <option>{{$provin->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control">
                                        <option>-- Giá --</option>
                                        <option value="Thõa thuận">Thõa thuận</option>
                                        <option value="< 1 tỷ">Dưới 1 tỷ</option>
                                        <option>Từ 1-2 tỷ</option>
                                        <option>Trên 2 tỷ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>-- Diện tích --</option>
                                        <option value="< 1 tỷ">Dưới 1 </option>
                                        <option>Từ 1-2 tỷ</option>
                                        <option>Trên 2 tỷ</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-small  btn-theme-color btn-rounded">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          <!--      <div class="page-content"> 
                   @yield('content')
               </div> -->
            </div>
            <!--book form-->
            <!--body content start-->
            <div class="container">
                <!--image carousel-->

                    <!-- <img src="{{asset('assets/img/a-bds/title.jpg')}}" alt="" width="100%"> -->
                    <div class="title-general text-center">
                       <ul>
                           <li class="hidden-xs"><img src="{{asset('assets/img/a-bds/title/title-general.png')}}" alt=""></li>
                           <li><a href="#"><h3>BẤT ĐỘNG SẢN NỔI BẬT</h3></a></li>
                           <li  class="hidden-xs"><img src="{{asset('assets/img/a-bds/title/title-general.png')}}" alt=""></li>
                       </ul>
                    </div>


                <div id="img-carousel">
                 @foreach($postvip as $vip) 
                    <div class="item item-show" >
                        <a href="#">
                            <img src="{{asset($vip->avatar)}}" alt="Image" class="hover-opacity" style="height:280px" >
                        </a>
                            <div class="hover-show">
                                <p ><a href="{{$vip->slug}}" class="title-landlord">{{$vip->title}}</a></p>
                                <p ><i class="fa fa-home" aria-hidden="true">&nbsp&nbsp{{$vip->acr}}m2</i>&nbsp &nbsp<i class="fa fa-money" aria-hidden="true">&nbsp&nbsp <span style="color:red;">{{$vip->price}}</span></i>&nbsp&nbsp<i class="fa fa-bar-chart" aria-hidden="true"> <span style="color:red;">{{$vip->type}}</span></i></p>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp &nbsp {{$vip->address.','.$vip->area}}</p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp &nbsp{{date('d-m-Y', strtotime($vip->created_at))}}&nbsp&nbsp&nbsp &nbsp <a href="mailto:joe@example.com?subject=feedback" "email me" style="color:green;">Read more...</a></p>
                            </div>                               
                    </div>
                @endforeach

               
                </div>
                     <div class="read-more text-center">
                        <a href="{{url('list-all')}}"><span>Xem thêm</span></a>
                    </div>

                <!--image carousel-->
                    <div class="title-general text-center">
                       <ul>
                           <li class="hidden-xs"><img src="{{asset('assets/img/a-bds/title/title-general.png')}}" alt=""></li>
                           <li><a href="#"><h3>BẤT ĐỘNG SẢN MỚI NHẤT</h3></a></li>
                           <li  class="hidden-xs"><img src="{{asset('assets/img/a-bds/title/title-general.png')}}" alt=""></li>
                       </ul>
                    </div>
                <!--portfolio carousel-->

                <div id="portfolio-carousel-alt" class=" portfolio-with-title col-3 portfolio-gallery">
                @foreach($postnew as $new)
                    <div class="portfolio-item">
                        <div class="thumb">
                            <img src="assets/img/hotel/hotroom1.jpg" alt="" width="100%">
                        </div>

                        <div class="portfolio-title hover-show" style="padding-left:12px">
                            <h3><a href="{{$new->slug}}"   title="lightbox view" style="color:#4d9eb6; font-weight:bold";>{{$new->title}}</a></h3>
                            <p><i class="fa fa-home" aria-hidden="true">&nbsp&nbsp {{$new->acr}}m2</i>&nbsp &nbsp<i class="fa fa-money" aria-hidden="true">&nbsp&nbsp <span style="color:red;">{{$new->price}}</span></i>&nbsp&nbsp<i class="fa fa-bar-chart" aria-hidden="true"> <span style="color:red;">{{$new->type}}</span></i></p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp &nbsp{{$new->address.','.$new->area}}</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp &nbsp{{date('d-m-Y',strtotime($new->created_at))}}&nbsp&nbsp&nbsp &nbsp <a href="{{route('list-all')}}" "email me" style="color:green;">Read more...</a></p>
                        </div>
                       
                    </div>
                     @endforeach
                </div>
                <div class="read-more text-center">
                        <a href="{{route('list-all')}}"><span>Xem thêm</span></a>
                </div>
            </div>
            <!--  end container -->
                                  <!--contact-->
            <div class="parallax-inner dark parallax-hot commercial">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon">
                                    <i class="icon-map light-txt"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4 class="light-txt">location</h4>
                                </div>
                                <div class="desc light-txt">
                                    Địa chỉ liên hệ:
                                    <br/>Thị trấn Nông Cống-Thanh Hóa
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon">
                                    <i class="icon-mobile light-txt"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4 class="light-txt">call us</h4>
                                </div>
                                <div class="desc light-txt">
                                    Liên hệ:Hoạt động 24/7
                                    <br/>+84 969 031 285
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon">
                                    <i class="icon-envelope light-txt"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4 class="light-txt">mail us</h4>
                                </div>
                                <div class="desc light-txt">
                                    Email liên hệ
                                    <br/>nguyenanhvan.nav@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--contact-->
                <!--portfolio carousel-->
        <div class="container">
                    
                
                    <div class="title-general text-center">
                       <ul>
                           <li class="hidden-xs"><img src="{{asset('assets/img/a-bds/title/title-general.png')}}" alt=""></li>
                           <li><a href="#"><h3>TỔNG HỢP CÁC TIN</h3></a></li>
                           <li  class="hidden-xs"><img src="{{asset('assets/img/a-bds/title/title-general.png')}}" alt=""></li>
                       </ul>
                    </div>
                <!-- start post -->
                <div class="col-md-12 all-post" style="padding: 0;"">
                    <!--  content primary -->
                    <div class="col-md-9 outstanding-project">
                        <!-- <div class="col-md-12 detail-post">
                            <div class="article-genaral col-md-12" style="padding-bottom: 20px;">
                                <p class="title-post col-md-12 ">Nội dung tiêu đề nằm ở đây</p>
                                <div class="avatar-post col-md-4" style="padding:  0;">
                                    <img src="assets/img/portfolio/06.jpg" alt="" width="100%" style="box-shadow: 10px 10px 5px #ccc;">
                                </div>
                                <div class="description-post col-md-8">
                                    <ul>
                                        <li><b>Giá</b>&nbsp :&nbspThõa thuận &nbsp&nbsp&nbsp <b>Loại tin</b>&nbsp&nbsp Cho thuê </li>
                                        <li><b>Diện tích</b>&nbsp :&nbsp200m2</li>
                                        <li><b>Địa chỉ</b>&nbsp :&nbspTu hoàng - Xuân Phương - Minh Khai - Hà Nội</li>
                                        <li><b>Ngày đăng</b> &nbsp :&nbsp12-01-2018</li>
                                        <li><b>Mô tả </b> :Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda doloribus animi eius excepturi illo sit accusamus in, deleniti dolor, ea, officia ... <a href="mailto:joe@example.com?subject=feedback" "email me">Read more</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        <div class="post-list" >
                            @foreach($posts as $p)
                            <div class="col-md-6" style="margin-bottom: 20px">
                                <a href="{{$p->slug}}">
                                    <img src="{{asset($p->avatar)}}" alt="Image"  style="height:280px;width: 100%" >
                                </a>
                            <div class="hover-show">
                                <p ><a href="{{$p->slug}}" class="title-landlord">{{$p->title}}</a></p>
                                <p ><i class="fa fa-home" aria-hidden="true">&nbsp&nbsp{{$p->acr}}m2</i>&nbsp &nbsp<i class="fa fa-money" aria-hidden="true">&nbsp&nbsp <span style="color:red;">{{$p->price}}</span></i>&nbsp&nbsp<i class="fa fa-bar-chart" aria-hidden="true"> <span style="color:red;">{{$p->type}}</span></i></p>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp &nbsp {{$p->address.','.$p->area}}</p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp &nbsp{{date('d-m-Y', strtotime($p->created_at))}}&nbsp&nbsp&nbsp &nbsp <a href="mailto:joe@example.com?subject=feedback" "email me" style="color:green;">Read more...</a></p>
                            </div>
                            </div>
                            @endforeach
                        </div>
                    <div class="read-more text-center">
                        <a href="{{route('list-all')}}"><span>Xem thêm</span></a>
                    </div>
                    </div>
                    <!--  end content primary -->
                    <!--    start beside -->
                    <div class="col-md-3 beside">
                        <img src="assets/img/portfolio/06.jpg" alt="" width="100%">
                        <img src="assets/img/portfolio/06.jpg" alt="" width="100%">
                        <img src="assets/img/portfolio/06.jpg" alt="" width="100%">
                        <img src="assets/img/portfolio/06.jpg" alt="" width="100%">
                    </div>
                    <!--  end beside -->
                </div>
                <!-- end content post -->
        </div>
            <!--body content end-->

            <!-- pagenation -->
      
            <!--  end pagenation -->
@endsection