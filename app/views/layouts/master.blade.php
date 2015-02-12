<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

	@if (Session::has('successMessage'))
	    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif

	@if (Session::has('errorMessage'))
	    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

	@yield('content')
</body>
</html>