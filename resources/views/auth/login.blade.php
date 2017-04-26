@extends('appLogin')

@section('content')
<h3>Sign in to your account</h3>
	<p>
		Please enter your Email and Password to log in.
	</p>
		<form class="form-login" role="form" method="POST" action="{{ url('/auth/login') }}">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<fieldset>
				<div class="form-group">
					<span class="input-icon">
						<input type="username" class="form-control" name="username" placeholder="Email Address" value="{{ old('username') }}">
						<i class="fa fa-envelope"></i> </span>
				</div>

				<div class="form-group form-actions">
					<span class="input-icon">
						<input type="password" class="form-control password" name="password" placeholder="Password">
						<i class="fa fa-lock"></i>
						<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                        
					</span>
				</div>

				<div class="form-actions" style="">
					<label for="remember" class="checkbox-inline">
						<input type="checkbox" class="grey remember" id="remember" name="remember">
						Remember Me
					</label>
					<button type="submit" class="btn btn-bricky pull-right">
						Login <i class="fa fa-arrow-circle-right"></i>
					</button>
				</div>
			</fieldset>

		</form>



@endsection
