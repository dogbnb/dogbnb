@extends ('layouts.master')

@include('partials.navbar')

@section('content')

	<title>Create Rover Profile</title>

<h2 class="page-header">Register Rover</h2>

{{ Form::open(array('action'=> 'UsersController@store')) }}

<div class="form-group">
	{{ Form::label('fname', 'First Name') }}
	{{ Form::text('fname', Input::old('fname'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('lname', 'Last Name') }}
	{{ Form::text('lname', Input::old('lname'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('phone', 'Phone Number') }}
	{{ Form::text('phone', Input::old('phone'), array('class'=> 'form-control')) }}
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
	{{ Form::label('street', 'Street Address') }}
	{{ Form::text('street', Input::old('street'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('apt', 'Apartment') }}
	{{ Form::text('apt', Input::old('apt'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('city', 'City') }}
	{{ Form::text('city', Input::old('city'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('state', 'State') }}
	{{ Form::text('state', Input::old('state'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('zip', 'Zip') }}
	{{ Form::text('zip', Input::old('zip'), array('class'=> 'form-control')) }}
</div>

<hr>

<div class="form-group">
	{{ Form::label('dog-name', 'Rover Name') }}
	{{ Form::text('dog-name', Input::old('dog-name'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('dog-size', 'How big is Rover? ') }}
	{{ Form::select('dog-size', [
   'small' => 'Under 20lbs.',
   'medium' => '20 - 40lbs.',
   'large' => 'Over 40lbs.']
) }}
</div>

<div class="hidden_role">
	{{ Form::hidden('role', 'owner') }}
</div>

<div class="form-group">
	{{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
</div>


@stop