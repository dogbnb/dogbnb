@extends('layouts.master')

@include('partials.navbar')

@section('content')

<div class="container">
	<h2><i class="fa fa-lg fa-check"></i> Reservation Confirmation</h2>
		<div class="row">
			<div class="col-md-5">
				<p><h4><strong>Rover: </strong>$dogs->dog_name</h4></p>
				<p><h4><strong>Host: </strong> $location->user->nickname</h4></p>
				<br>
				<p><h4><strong>Check In: </strong>{{{$reservation->in_at}}}</h4></p>
				<p><h4><strong>Check Out: </strong>{{{$reservation->out_at}}}</h4></p>

			</div>
			<div class="col-md-7 ">
					<img class="doglogin img-responsive" src="/theme/img/dog5.jpg">
					<p><em><h4 class="pull-right">"Happy dog, happy life."</h4></em></p>
			</div>
		</div>
</div>
@stop