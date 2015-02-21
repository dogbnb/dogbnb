@section('css')
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.theme.min.css">
<link rel="stylesheet" type="text/css" href="/theme/js/jquery-ui/jquery-ui.css">
@stop

@section('topscript')
@stop

@section('content')

<div class="section">
    <div class="container">
       <h2><i class="fa fa-lg fa-search"></i>  Find a Host:</h2>

        <form method="GET" action="{{{ action('HomeController@showSearch') }}}">

<!--             <div class="form-group">
            Check In: <input name="in_at" type="text" class="datepicker">
            </div>

            <div class="form-group">
            Check Out: <input name="out_at" type="text" class="datepicker">
            </div> -->
            <div class="form-inline">
                {{ Form::label('radius', 'Within: ') }}
                {{ Form::select('radius', [
               '5' => '5 miles',
               '10' => '10 miles',
               '20' => '20 miles']
            ) }}
            </div>

            <div class="form-group">
                    {{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
            </div>

        </form>
        
    </div>
</div>

@stop

@section('bottomscript')
<script src="/theme/js/jquery-ui/jquery-ui.js"></script>