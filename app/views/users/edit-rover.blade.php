@extends ('layouts.master')

@include('partials.navbar')

@section('content')

<div class="page-header"><h1>Update Rover</h1></div>

{{ Form::model($user, array('action' => array('UsersController@update', $user->$id), 'method' => 'put')) }}
  @include('users.rover-form')

    {{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop
