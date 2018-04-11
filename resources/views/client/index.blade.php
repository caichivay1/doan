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
                    <div class="col-md-3">
                            <ul class="nav nav-pills nav-stacked" style="border:1px solid #e8e8e8">
                                  <li role="presentation" class="active"><a href="{{route('manager_client')}}">Danh sách bài viết<span style="margin-left: 30px;border-radius:25px;background: white;padding: 3px 8px;color:blue">{{count($posts)}}</span></a></li>
                                  <li role="presentation"><a href="{{route('loading_post')}}">Bài viết chờ duyệt<span style="margin-left: 30px;border-radius:25px;background: #337ab7;padding: 3px 8px;color:white">{{count($posts1)}}</span></a> </li>
                                  <li role="presentation"><a href="{{route('add_post')}}">Tạo bài viết mới</a></li>
                            </ul>
                    </div>
                    <div class="col-md-9">
                                            <h2 class="text-center" style="color:blue">Danh sách bài viết</h2>
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
                                                @if(($element->action)==1)
                                                <a href="#" style="color:blue">đã duyệt</a>
                                                @else
                                                chưa duyệt 
                                                @endif
                                            </td>

                                            <td>
                                                <a href="javascript:;" id="delete" onclick ="confirmRemove('{{route('postclient.remove',['id' =>$element->id])}}')" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                                
                                                 
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                    </div>





                <div class="container text-center">
                    {{ $posts->links() }}
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