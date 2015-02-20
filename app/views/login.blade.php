@extends ('layouts.master')

@include('partials.navbar')     


@section('content')

	<title>Login</title>


<div class="container">
	<h2><i class="fa fa-lg fa-sign-in"></i>  Login</h2>
		<div class="row">
			<div class="col-md-5">
				<div class="signform">
					{{ Form::open(array('action'=> 'HomeController@showLogin')) }}

					<div class="form-group">
						{{ Form::label('email', 'Email Address') }}
						{{ Form::email('email', Input::old('email'), array('class'=> 'form-control', 'autofocus')) }}
					</div>

					<div class="form-group">
						{{ Form::label('password', 'Password') }}
						{{ Form::password('password', array('class'=> 'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::submit('Login', array('class'=> 'btn btn-primary')) }}
					</div>

					{{ Form::close() }}
				</div>
			</div>
			<div class="col-md-7 ">
				<img class="doglogin" src="/theme/img/dog3.jpg">
			</div>
		</div>
</div>

@stop
