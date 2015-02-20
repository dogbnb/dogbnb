@extends ('layouts.master')

@include('partials.navbar')

@section('content')
<title>Browse Hosts</title>
@include('partials.search-form')
@include('partials.hosts')
@stop

