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



		<form method="POST" action="{{{ action('ReservationsController@store') }}}">
 		{{ Form::token() }}
		<p>Check In: <input name="in_at" type="text" class="datepicker"></p>
		<br>
		<p>Check Out: <input name="out_at" type="text" class="datepicker"></p>
		<input type="hidden" value="{{{ $guest->dog->id}}}" name="dog_id">
		<input type="hidden" value="{{{ $host->location->id}}}" name="location_id">
		<div class="form-group">
				{{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
		</div>

		
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