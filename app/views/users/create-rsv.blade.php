@extends ('layouts.master')

@include('partials.navbar')

@section('content')



<head>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
	<title>Schedule Sleepover</title>

  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
  });
  </script>

</head>

<body>

<div class="section">
	<div class="container">
		<h2>Schedule A Sleepover - Choose your dates:</h2>
 
	<p>Check In: <input type="text" class="datepicker"></p>
	<br>
	<p>Check Out: <input type="text" class="datepicker"></p>

		
	</div>
</div>

</body>
</html>
@stop