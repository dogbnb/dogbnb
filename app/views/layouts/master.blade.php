<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rover Sleepover</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
<style>
    
    body {
        margin-top: 70px;
    }

</style>

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