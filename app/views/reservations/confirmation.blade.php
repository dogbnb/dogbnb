@extends('layouts.master')

@include('partials.navbar')

@section('content')
<h3>Reservation Confirmation</h3>

{{{$reservation->in_at}}}

@stop