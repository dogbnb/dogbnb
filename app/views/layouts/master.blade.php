<!DOCTYPE html>
<html lang="en">
<head>

	<title>Rover Sleepover</title>
</head>
<body>



@if (Session::has('successMessage'))
    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
</body>
</html>