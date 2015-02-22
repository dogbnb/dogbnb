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
        margin-left: auto;
        margin-right: auto;
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
<script type="text/javascript">
    var locations = {{ $locations->toJson() }};

    $(document).ready(function () {
        // Initialize map
        var mapOptions = {
          center: new google.maps.LatLng(29.4814305, -98.5144044),
          zoom: 10
        };

        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        var markers = [];
        for (var i = 0; i < locations.length; i++) {
            console.log(locations[i].latitude);
            console.log(locations[i].longitude);

            var marker = new google.maps.LatLng(locations[i].latitude, locations[i].longitude);
            addMarker(marker);
        }

        // Add a marker to the map and push to the array.
        function addMarker(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP
            });
            
            markers.push(marker);
        }
        // Removes the markers from the map, but keeps them in the array.
        function clearMarkers() {
            setAllMap(null);
        }
        // Deletes all markers in the array by removing references to them.
        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }
        // Autocomplete        
        initialize();
        $('#autocomplete').focus(geolocate);
        $('#btn-plot').click(function(event) {
            event.preventDefault();
            // Get address value from input
            var address = $('#autocomplete').val();
            
            // Redeclare geocoder variable
            var geocoder = new google.maps.Geocoder();
            
            // Geocode address
            geocoder.geocode({ 'address': address }, function(result, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latLngObj = result[0]["geometry"]["location"];
                    // add marker to array
                    addMarker(latLngObj);
                }
            });
        });
    });
</script>
{{-- End Map Bottom Script --}}

{{-- Search Bottom Script --}}
<script src="/theme/js/jquery-ui/jquery-ui.js"></script>
<script>

    $(document).ready(function() {
      $( ".datepicker" ).datepicker();  
    });
</script>
{{-- End Search Bottom Script --}}

@stop


<title>Browse Hosts</title>

@section('content')
@include('partials.search-form')

@include('partials.map')
@include('partials.hosts')
@stop

