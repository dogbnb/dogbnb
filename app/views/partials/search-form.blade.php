<div class="section">
    <div class="row">
        <div class="container">
            
               <h2><i class="fa fa-lg fa-search"></i>  Find a Host:</h2>

                <form method="GET" action="{{{ action('HomeController@showSearch') }}}">

                    <div class="form-group">
                    Check In: <input name="in_at" type="text" class="datepicker">
                    </div>

                    <div class="form-group">
                    Check Out: <input name="out_at" type="text" class="datepicker">
                    </div>
                    <div class="form-inline">
                        {{ Form::label('radius', 'Within: ') }}
                        {{ Form::select('radius', [
                       '5' => '5 miles',
                       '10' => '10 miles',
                       '20' => '20 miles']
                    ) }}
                    </div>

                    <div class="form-group pull-right col-md-10">
                            {{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
                    </div>
                </form>
           
        </div>
    </div>
</div>



