<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rover Sleepover</title>
        <meta name="description" content="">
{{--         <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/theme/css/bootstrap.min.css">
        <link rel="stylesheet" href="/theme/css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="/theme/css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="/theme/css/main.css">

        <script src="/theme/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Unkempt' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="/customstyle.css">
        @yield('css')

        @yield('topscript')

    </head>
    <body>

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif

    @if (Session::has('errorMessage'))
        <div class='alert alert-danger'>{{{Session::get('errorMessage')}}}</div>
    @endif

    @yield('content')


      <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="/theme/js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="/theme/js/jquery.fitvids.js"></script>
        <script src="/theme/js/jquery.sequence-min.js"></script>
        <script src="/theme/js/jquery.bxslider.js"></script>
        <script src="/theme/js/main-menu.js"></script>
        <script src="/theme/js/template.js"></script>

        @include('partials.footer')

        @yield('bottomscript')
    </body>
</html>