@extends('layouts.master')

@include('partials.navbar')

<!-- begin section topscript -->
@section('topscript')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
    
    // Autocomplete Block
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.
    var placeSearch, autocomplete, geocoder;
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name',
      latitude: 'latitude',
      longitude: 'longitude'
    };
    function initialize() {
      // Create the autocomplete object, restricting the search
      // to geographical location types.
      
      autocomplete = new google.maps.places.Autocomplete(
          /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
          { types: ['geocode'] });
      // When the user selects an address from the dropdown,
      // populate the address fields in the form.
      google.maps.event.addListener(autocomplete, 'place_changed', function() {
        fillInAddress();
      });
    }
    // [START region_fillform]
    function fillInAddress() {
      // Get the place details from the autocomplete object.
      var place = autocomplete.getPlace();
      for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = false;
      }
      // Get each component of the address from the place details
      // and fill the corresponding field on the form.
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById(addressType).value = val;
        }
      }
      // Fill in lat/lng on form.
      document.getElementById('latitude').value = place.geometry.location.lat();
      document.getElementById('longitude').value = place.geometry.location.lng();
    }
    // [END region_fillform]
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
<!-- end topscript -->


<!-- begin form content -->
@section('content')
	<title>Become A Host</title>
<div class="container">
<h2><i class="fa fa-lg fa-list-alt"></i> Become A Host</h2>
	<div class="signform">
	{{ Form::open(array('action'=> 'UsersController@store', 'files' => true)) }}

		
		<div class="form-group">
			{{ Form::label('fname', 'First Name') }}
			{{ Form::text('fname', Input::old('fname'), array('class'=> 'form-control', 'autofocus')) }}
      {{$errors->first('fname', '<p class="help-block">:message</p>')}}

		</div>

		<div class="form-group">
			{{ Form::label('lname', 'Last Name') }}
			{{ Form::text('lname', Input::old('lname'), array('class'=> 'form-control')) }}
      {{$errors->first('lname', '<p class="help-block">:message</p>')}}
		</div>

		<div class="form-group">
			{{ Form::label('phone', 'Phone Number') }}
			{{ Form::text('phone', Input::old('phone'), array('class'=> 'form-control')) }}
      {{$errors->first('phone', '<p class="help-block">:message</p>')}}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', Input::old('email'), array('class'=> 'form-control')) }}
      {{$errors->first('email', '<p class="help-block">:message</p>')}}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array('class'=> 'form-control')) }}
      {{$errors->first('password', '<p class="help-block">:message</p>')}}

		</div>
		
		<div class="form-group">
            {{ Form::label('address', 'Address')}}
            {{ Form::text('autocomplete', null, array('id' => 'autocomplete', 'class' => 'form-group form-control', 'placeholder' => 'Enter your address...')) }}
            {{$errors->first('address', '<p class="help-block">:message</p>')}}

        </div>
		
    {{ Form::hidden('street_number', null, array('id' => 'street_number', 'class' => 'form-group form-control', 'disabled' => true)) }}
    {{ Form::hidden('street_name', null, array('id' => 'route', 'class' => 'form-group form-control', 'disabled' => true)) }}
    {{ Form::hidden('city', null, array('id' => 'locality', 'class' => 'form-group form-control', 'disabled' => true)) }}
    {{ Form::hidden('state', null, array('id' => 'administrative_area_level_1', 'class' => 'form-group form-control', 'disabled' => true)) }}
    {{ Form::hidden('zip', null, array('id' => 'postal_code', 'class' => 'form-group form-control', 'disabled' => true)) }}
    {{ Form::hidden('country', null, array('id' => 'country', 'class' => 'form-group form-control', 'disabled' => true)) }}
    {{ Form::hidden('latitude', null, array('id' => 'latitude', 'class' => 'form-group form-control', 'disabled' => true)) }}
    {{ Form::hidden('longitude', null, array('id' => 'longitude', 'class' => 'form-group form-control', 'disabled' => true)) }}

		<div class="form-group">
			{{ Form::label('nickname', 'Nickname') }}
			{{ Form::text('nickname', Input::old('nickname'), array('class'=> 'form-control')) }}
		  {{$errors->first('nickname', '<p class="help-block">:message</p>')}}

    </div>

		<div class="form-group">
			{{ Form::label('size-allowed', 'Maximum Size Allowed') }}
			{{ Form::select('size-allowed', [
		   'small' => 'Under 20lbs.',
		   'medium' => '20 - 40lbs.',
		   'large' => 'Over 40lbs.']
			) }}
    {{$errors->first('size-allowed', '<p class="help-block">:message</p>')}}

		</div>

		<div class="form-group">
		    {{ Form::label('description', 'Description') }}
		    {{ Form::textarea('description', Input::old('description'), array('class' => "form-control", 'rows' => '4')) }}
        {{$errors->first('description', '<p class="help-block">:message</p>')}}

		</div>

		<div class="form-group">
		<p>Upload photos</p>
			{{ Form::file('images[]', array('multiple'=>true)) }}
		</div>

		<div class="hidden_role">
			{{ Form::hidden('role', 'host') }}
		</div>

		<div class="form-group">
			{{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
		</div>

	{{ Form::close() }}
	</div>
</div>
@stop
<!-- end form content -->

<!-- Bottom script begin -->
@section('bottomscript')
<script type="text/javascript">
    $(document).ready(function () {
        // Autocomplete        
        initialize();
        $('#autocomplete').focus(geolocate);
        // $('#autocomplete').change(codeAddress);
    });
</script>
<!-- Bottom script end -->
@stop

