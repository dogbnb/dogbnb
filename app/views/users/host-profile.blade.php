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
                                            <td>Name:</td>
                                            <td>{{{ $user->fname }}} {{{ $user->lname }}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{{ $user->email }}}</td>
                                        </tr>
                                        <tr>
                                            <td>Max. Size Allowed:</td>
                                            <td>{{{ $user->size_allowed }}}</td>
                                        </tr>
                                        <tr>
                                            <td>Apartment/Home:</td>
                                            <td>Home</td>
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
