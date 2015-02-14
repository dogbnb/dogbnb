@extends ('layouts.master')

@section('content')


{{ Form::open(array('action'=> 'HomeController@showLogin')) }}

<div class="form-group">
	{{ Form::label('email', 'Email Address') }}
	{{ Form::email('email', Input::old('email'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{Form::submit('Login', array('class'=> 'btn btn-primary')) }}
</div>

{{ Form::close() }}



@stop