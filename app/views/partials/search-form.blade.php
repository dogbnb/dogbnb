@section('css')
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.theme.min.css">
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.css">
@stop

@section('topscript')
@stop

@section('content')

<div class="section">
    <div class="container">
        <h1>Find a Host:</h1>



        <form method="POST" action="{{{ action('HomeController@showSearch') }}}">
        {{ Form::token() }}
        <p>Check In: <input name="in_at" type="text" class="datepicker"></p>
        <br>
        <p>Check Out: <input name="out_at" type="text" class="datepicker"></p>

        <div class="form-group">
                {{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
        </div>

        
    </div>
</div>

@stop

@section('bottomscript')
<script src="/theme/js/jquery-ui/jquery-ui.js"></script>