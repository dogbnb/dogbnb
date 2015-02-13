
@extends ('layouts.master')

@section('content')
<html>
<head>
	<title>Create Rover Profile</title>
</head>
<body>


{{ Form::open(array('action'=> 'UsersController@store')) }}

<div class="form-group">
	{{ Form::label('fname', 'First Name') }}
	{{ Form::fname('fname', Input::old('fname'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('lname', 'Last Name') }}
	{{ Form::lname('lname', Input::old('lname'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('phone', 'Phone Number') }}
	{{ Form::phone('phone', Input::old('phone'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::email('email', Input::old('email'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('dname', 'Dog\'s Name') }}
	{{ Form::dname('dname', Input::old('dname'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('size', 'Dog\'s Size') }}
	{{ Form::size('size', Input::old('size'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('street', 'Street Address') }}
	{{ Form::street('street', Input::old('street'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('apt', 'Apartment') }}
	{{ Form::apt('apt', Input::old('apt'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('city', 'City') }}
	{{ Form::city('city', Input::old('city'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('state', 'State') }}
	{{ Form::state('state', Input::old('state'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('zip', 'Zip') }}
	{{ Form::zip('zip', Input::old('zip'), array('class'=> 'form-control')) }}
</div>

<div class="hidden_role">
	{{ Form::label('role', '') }}
	{{ Form::role('role', Input::old('role'), array('class'=> 'hidden_role')) }}
</div>

<div class="form-group">
	{{Form::submit('Login', array('class'=> 'btn btn-primary')) }}
</div>

</body>
</html>

@stop