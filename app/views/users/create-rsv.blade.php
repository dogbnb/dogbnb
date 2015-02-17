@extends ('layouts.master')

@include('partials.navbar')

@section('css')
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.theme.min.css">
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.css">
@stop

@section('topscript')
@stop

@section('content')

<div class="section">
	<div class="container">
		<h2>Schedule A Sleepover - Choose your dates:</h2>
 
	<p>Check In: <input type="text" class="datepicker"></p>
	<br>
	<p>Check Out: <input type="text" class="datepicker"></p>

		
	</div>
</div>

@stop

@section('bottomscript')
<script src="/theme/js/jquery-ui/jquery-ui.js"></script>



<script>

	$(document).ready(function() {
	  $( ".datepicker" ).datepicker();	
	});

</script>

@stop