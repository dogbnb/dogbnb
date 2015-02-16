@extends ('layouts.master')

@section('content')

<h2 class="page-header">Temporary Upload Photos Page</h2>

{{ Form::open(array('action' => 'HomeController@upload', 'method'=>'POST', 'files'=>true)) }}
{{ Form::file('images[]', array('multiple'=>true)) }}
	{{ Form::submit('Submit') }}
   	{{ Form::close() }}

@stop