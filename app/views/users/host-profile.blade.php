@extends('layouts.master')

@include('partials.navbar')

@section('topscript')
<style type="text/css">
#bx-pager img{
    /*float: left;*/
    width: 100px;
}
</style>
@stop

@section('content')
 
<!-- Page Title -->
    <div class="section">
        <div class="container">
                <h2> Host Profile: {{{ $user->nickname }}}</h2>
                @include('partials.slide-show')
        </div>
    </div>




        <div class="section">
            <div class="container">
                

<div class="row"></div>
                <div class="row"> 


                    <!-- Host Profile Info -->
                    <div class="col-sm-6 product-details">
                        
                         @if (Auth::check())
                            <a href="{{{ action('ReservationsController@create', $user->id)}}}" class="btn">Reserve a Sleepover!</a>
                        @endif    
                    </div>
                    <!-- End Product Summary & Options -->
                    
                    <!-- Full Description & Specification -->
                    <div class="col-sm-12">
                        <div class="tabbable">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs product-details-nav">
                                <li class="active"><a href="#tab1" data-toggle="tab">Host Overview</a></li>
                                <li><a href="#tab2" data-toggle="tab">Location Details</a></li>
                            </ul>
                            <!-- Tab Content (Full Description) -->
                            <div class="tab-content product-detail-info">
                                <div class="tab-pane active" id="tab1">
                                
                                    <h4>
                                    {{{ $user->location->description }}} 
                                    </h4>
                                    
                                </div>
                                <!-- Tab Content (Specification) -->
                                <div class="tab-pane" id="tab2">
                                    <table>
                                        <tr>
                                            <td>Total sensor Pixels (megapixels)</td>
                                            <td>Approx. 16.7</td>
                                        </tr>
                                        <tr>
                                            <td>Effective Pixels (megapixels)</td>
                                            <td>Approx. 16.1</td>
                                        </tr>
                                        <tr>
                                            <td>Automatic White Balance</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td>White balance: preset selection</td>
                                            <td>Daylight, Shade, Cloudy, Incandescent, Fluorescent, Flash</td>
                                        </tr>
                                        <tr>
                                            <td>White balance: custom setting</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td>White balance: types of color temperature</td>
                                            <td>YES (G7 to M7,15-step) (A7 to B7,15-step)</td>
                                        </tr>
                                        <tr>
                                            <td>White balance bracketing</td>
                                            <td>NO</td>
                                        </tr>
                                        <tr>
                                            <td>ISO Sensitivity Setting</td>
                                            <td>ISO100 - 25600 equivalent</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Full Description & Specification -->
                </div>
            </div>
        </div>

  
@stop

@section('bottomscript')
    <script>
        $(window).load(function() {
            var minWidth;

            $(".bxslider li img").each(function(index, img) {
                if (minWidth == undefined || img.width < minWidth) {
                    minWidth = img.width;
                }
            });
            $('.bxslider').bxSlider({
                pagerCustom: '#bx-pager',
                slideWidth: minWidth
            });
        });
    </script>
@stop
