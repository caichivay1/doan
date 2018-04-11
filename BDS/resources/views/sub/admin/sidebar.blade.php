	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="{{route('dashboard')}}">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="title">Bài Viết</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('post.index')}}">
							<i class="icon-list"></i>
							Danh sách bài viết</a>
						</li>
							<li>
							<a href="{{route('post.manager')}}">
							<i class="fa fa-gavel"></i>
							Quản lí bài viết</a>
						</li>

						<li>
							<a href="{{route('post.add')}}">
							<i class="icon-plus"></i>
							Thêm bài viết</a>
						</li>
					</ul>			
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">Quản lí khách hàng</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('user.index')}}">
							<i class="icon-list"></i>
							Danh sách khách hàng</a>
						</li>
						<li>
							<a href="{{route('user.add')}}">
							<i class="icon-plus"></i>
							Thêm khách hàng</a>
						</li>
							<li>
							<a href="{{route('user.manager')}}">
							<i class="fa fa-gavel"></i>
							Quản lí khách hàng</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-bars"></i>
					<span class="title">Quản lí category</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('category.index')}}">
							<i class="icon-list"></i>
							Danh sách category</a>
						</li>
						<li>
							<a href="{{route('category.add')}}">
							<i class="icon-plus"></i>
							Thêm category</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-sliders"></i>
					<span class="title">Quản lí slider</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('slider.index')}}">
							<i class="icon-list"></i>
							Danh sách slider</a>
						</li>
						<li>
							<a href="{{route('slider.add')}}">
							<i class="icon-plus"></i>
							Thêm slider</a>
						</li>


					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-location-arrow"></i>
					<span class="title">Quản lí quảng cáo</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('adv.index')}}">
							<i class="icon-list"></i>
							Danh sách quảng cáo</a>
						</li>
						<li>
							<a href="{{route('adv.add')}}">
							<i class="icon-plus"></i>
							Thêm quảng cáo</a>
						</li>



					</ul>
				</li>





			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->