    <header class="l-header">

            <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
                <div class="container-fluid" style="background: #e8e8e8">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="{{route('homepage')}}" class="logo-brand">
                            <img class="retina" src="{{asset('assets/img/logo.png')}}" alt="Massive">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                       <!--      <li><a href="#">Dự án</a>
                                <ul class="dropdown">
                                    <li><a href="#">Home General</a> 
                                        <ul class="dropdown">
                                            <li><a href="mp-index-general-1.html">General 1</a>
                                            </li>
                                            <li><a href="mp-index-general-2.html">General 2</a>
                                            </li>
                                            <li><a href="mp-index-general-3.html">General 3</a>
                                            </li>
                                            <li><a href="mp-index-general-4.html">General 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class=""><a href="javascript:void(0)">Mua bán</a>
                            </li>
                             <li class=""><a href="javascript:void(0)">Cho thuê</a>
                            </li> -->
                            @foreach($cate as $c)
                             <li class=""><a href="{{url(App\Category::CATE_URL.$c->slug)}}">{{$c->name}}</a>
                            </li> 
                           @endforeach
                               
                            @if(Auth::guard('admin')->check()==true)
                            
                            <li><a href="{{route('manager_client')}}" class="btn btn-sm btn-theme-color" style="color:white">Đăng tin miễn phí</a></li>    
                            <li><a href="#" style="color:#d6b161;font-size: 14px">Chào bạn:{{$auth->name}}</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('manager_client')}}">Quản lí tin</a></li>
                                    <li class=""><a href="{{route('logout_client')}}">Đăng xuất</a></li>
                                </ul>
                            </li>

                            
                            @else
                            <li><a href="{{route('client')}}" class="btn btn-sm btn-theme-color" style="color:white">Đăng tin miễn phí</a></li>    
                            <li class=""><a href="{{route('client')}}" style="color:#d6b161">Đăng nhập</a></li>
                        
                        @endif
                            

                           
                            
                           <!--  <li>
                                <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                                <div class="megamenu megamenu-quarter-width navbar-search">
                                    <form role="searchform">
                                        <input type="text" class="form-control" placeholder="Search Here">
                                    </form>
                                </div>
                            </li> -->
                        </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div>
     

        </header>
