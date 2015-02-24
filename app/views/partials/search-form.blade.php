<div class="section">
    <div class="row">
        <div class="container">
            
               <h2><i class="fa fa-lg fa-search"></i>  Find a Host:</h2>

                <form method="GET" action="{{{ action('HomeController@showSearch') }}}">

                    {{-- <div class="form-group">
                        <p><strong>Check In: </strong></p>
                        <p><input name="in_at" type="text" class="datepicker"></p>
                        <p><strong>Check Out: </strong></p>
                        <p><input name="out_at" type="text" class="datepicker"></p>
                    </div>
                <br>
 --}}
                    <div class="form-inline">
                        {{ Form::label('radius', 'Show hosts within: ') }}
                        {{ Form::select('radius', [
                       '5' => '5 miles',
                       '10' => '10 miles',
                       '20' => '20 miles']
                    ) }}
                    {{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
                    </div>

                   {{--  <div class="form-group pull-left col-md-10">
                            {{Form::submit('Submit', array('class'=> 'btn btn-primary')) }}
                    </div> --}}
                </form>
           
        </div>
    </div>
</div>



