	
	<div class="container-fluid">
		<div class="row-fluid">

			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Menu</li>
						@if (Auth::check())
						<li><a class="ajax-link" href="{{ URL::to('/') }}"><i class="icon-home"></i><span class="hidden-tablet"> Beranda</span></a></li>
						<li><a class="ajax-link" href="{{ URL::to('create') }}"><i class="icon-home"></i><span class="hidden-tablet"> Input Artikel</span></a></li>
						<li><a class="ajax-link" href="{{ URL::to('logout') }}"><i class="icon-home"></i><span class="hidden-tablet"> Logout</span></a></li>
						@else
						<li><a class="ajax-link" href="{{ URL::to('login') }}"><i class="icon-home"></i><span class="hidden-tablet"> Login</span></a></li>
						@endif
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->			
			