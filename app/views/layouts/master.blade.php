<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rover Sleepover</title>
</head>

<body>
@include('partials.site-navbar')



@if (Session::has('successMessage'))
    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

@yield('content')

</body>
</html>