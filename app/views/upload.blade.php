@extends ('layouts.master')

@section('content')

<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

{{ Form::open(array('action' => 'HomeController@upload', 'method'=>'POST', 'files'=>true)) }}
{{ Form::file('images[]', array('multiple'=>true)) }}
	{{ Form::submit('Submit') }}
   	{{ Form::close() }}

@stop
