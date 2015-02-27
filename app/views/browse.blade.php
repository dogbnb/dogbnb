@extends ('layouts.master')

@include('partials.navbar')


@section('css')
{{-- Begin Search CSS Links --}}
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.theme.min.css">
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.css">
{{-- End Search CSS Links --}}

{{-- Begin Map CSS --}}
<style type="text/css">
    
    .no-padding {
        padding-left: 0px;
        padding-right: 0px;
    }
    #map-canvas {
        margin-bottom: 10px; 
        height: 400px;
        margin-left: 10%;
        margin-right: 10%;
    }
    #autocomplete {
        width: 50%;
    }
</style>
{{-- End Map CSS --}}
@stop


@section('topscript')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
    
    // Autocomplete Block
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.
    var placeSearch, autocomplete, geocoder;
    function initialize() {
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
            { types: ['geocode'] });
    }
    // [START region_geolocation]
    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    
    function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
          var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
          });
          autocomplete.setBounds(circle.getBounds());
        });
      }
    }
    // [END region_geolocation]
    // End Autocomplete Block
    </script>
@stop

@section('bottomscript')

{{-- Map Bottom Script --}}
{{-- Google Map js here --}}
{{-- End Map Bottom Script --}}

{{-- Search Bottom Script --}}
<script src="/theme/js/jquery-ui/jquery-ui.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/theme/js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="/theme/js/bootstrap.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="/theme/js/jquery.fitvids.js"></script>
<script src="/theme/js/jquery.sequence-min.js"></script>
<script src="/theme/js/jquery.bxslider.js"></script>
<script src="/theme/js/main-menu.js"></script>
<script src="/theme/js/template.js"></script>
@stop


<title>Browse Hosts</title>

@section('content')

@if (Auth::check())
@include('partials.search-form')
@endif

@include('partials.map')
@include('partials.host-summaries')
@stop