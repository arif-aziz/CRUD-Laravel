@extends('layout.master_login')

@section('container_login')

	<div class="row-fluid">
		<div class="span12 center login-header">
			<h2>Simple CRUD Laravel</h2>
		</div><!--/span-->
	</div><!--/row-->
	
	<div class="row-fluid">
		<div class="well span5 center login-box">
			@if (Session::has('flash_error'))
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Gagal!</strong> {{ Session::get('flash_error') }}
			</div>
			@endif
			<form class="form-horizontal" action="{{ URL::to('login') }}" method="POST">
				<fieldset>
					<div class="input-prepend" title="Username" data-rel="tooltip">
						<span class="add-on"><i class="icon-user"></i></span><input class="input-large span10" name="txt-username" type="text" value="superadmin" />
					</div>
					<div class="clearfix"></div>

					<div class="input-prepend" title="Password" data-rel="tooltip">
						<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="txt-password" type="password" value="superadmin" />
					</div>
					<div class="clearfix"></div>

					<p class="center span5">
					<button type="submit" class="btn btn-primary">Login</button>
					</p>
				</fieldset>
			</form>
		</div><!--/span-->
	</div><!--/row-->

@endsection