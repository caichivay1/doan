@extends('layout.bds-all')
@section('content')
<div class="row">
    <div class="heading-title border-short-bottom text-center ">
        <h3 class="text-uppercase">Danh sách bài viết</h3>
    </div>
                        <!--post style 2 start-->
    <div class="post-list">
        @if($posts->count() ==0)
            <p style="color:red;font-size:20px" class="text-center">{{$null}}</p>
        @endif
        @foreach($posts as $vip)
        <div class="col-md-4" style="margin-bottom: 20px;min-height: 500px">
                        <a href="{{route('homepage').'/'.$vip->slug}}">
                            <img src="{{asset($vip->avatar)}}" alt="Image"  style="height:260px;width: 100%" >
                        </a>
                            <div class="hover-show">
                                <p ><a href="{{route('homepage').'/'.$vip->slug}}" class="title-landlord">{{str_limit($vip->title,60,'(...)')}}</a></p>
                                <p ><i class="fa fa-home" aria-hidden="true">&nbsp&nbsp{{$vip->acr}}m2</i>&nbsp &nbsp<i class="fa fa-money" aria-hidden="true">&nbsp&nbsp <span style="color:red;">{{$vip->price.$vip->type_price}}</span></i>&nbsp&nbsp<i class="fa fa-bar-chart" aria-hidden="true"> <span style="color:red;">{{$vip->type}}</span></i></p>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp &nbsp {{$vip->address.','.$vip->area}}</p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp &nbsp{{date('d-m-Y', strtotime($vip->created_at))}}&nbsp&nbsp&nbsp &nbsp <a href="{{route('homepage').'/'.$vip->slug}}" "email me" style="color:green;">Read more...</a></p>
                            </div>               
        </div>
        @endforeach
    </div>
                        <!--post style 2 end-->
</div>
<div class="container text-center">
                                 {{ $posts->links() }}
                                </div>
@endsection