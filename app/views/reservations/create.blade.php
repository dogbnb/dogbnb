@extends ('layouts.master')

@include('partials.navbar')

@section('css')
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.theme.min.css">
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.css">
@stop

@section('topscript')
@stop

@section('content')

<div class="container">
	<h2><i class="fa fa-lg fa-suitcase"></i> Schedule A Sleepover - Choose your dates:</h2>
		<div class="row">
			<div class="col-md-5">
				<div class="signform">
					<form method="POST" action="{{{ action('ReservationsController@store') }}}">
			 		{{ Form::token() }}
					<p><strong>Check In: </strong><input name="in_at" type="text" class="datepicker"></p>
					<br>
					<p><strong>Check Out: </strong><input name="out_at" type="text" class="datepicker"></p>
					<input type="hidden" value="{{{ $guest->dog->id}}}" name="dog_id">
					<input type="hidden" value="{{{ $host->location->id}}}" name="location_id">
				<br>
					<div class="form-group pull-right">
						{{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
					</div>
					{{Form::close()}}
				</div>
			</div>
			<div class="col-md-7 ">
				<img class="doglogin img-responsive" src="/theme/img/suitcase.jpg">
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