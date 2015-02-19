<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery Theme - Jssor Slider, Carousel, Slideshow with Javascript Source Code</title>

    <style>

    /***
 * BxSlider v4.2.3 - Fully loaded, responsive content slider
 * http://bxslider.com
 *
 * Written by: Steven Wanderski, 2014
 * http://stevenwanderski.com
 * (while drinking Belgian ales and listening to jazz)
 *
 * CEO and founder of bxCreative, LTD
 * http://bxcreative.com
 ***/


/** RESET AND LAYOUT
===================================*/

.bx-wrapper {
    position: relative;
    margin: 0 auto 60px;
    padding: 0;
    *zoom: 1;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    img {
        max-width: 100%;
        display: block;
    }
}

.bxslider {
    margin: 0;
    padding: 0;
}

ul.bxslider {
    list-style: none;
}

.bx-viewport {
    /*fix other elements on the page moving (on Chrome)*/
    -webkit-transform: translatez(0);
}

/** THEME
===================================*/

.bx-wrapper {
    -moz-box-shadow: 0 0 5px #ccc;
    -webkit-box-shadow: 0 0 5px #ccc;
    box-shadow: 0 0 5px #ccc;
    border:  5px solid #fff;
    background: #fff;
    .bx-pager,
    .bx-controls-auto {
        position: absolute;
        bottom: -30px;
        width: 100%;    
    }
}

/* LOADER */
.bx-wrapper .bx-loading {
    min-height: 50px;
    background: url(images/bx_loader.gif) center center no-repeat #fff;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2000;
}

/* PAGER */
.bx-wrapper {
    .bx-pager {
        text-align: center;
        font-size: .85em;
        font-family: Arial;
        font-weight: bold;
        color: #666;
        padding-top: 20px;
        &.bx-default-pager a {
            background: #666;
            text-indent: -9999px;
            display: block;
            width: 10px;
            height: 10px;
            margin: 0 5px;
            outline: 0;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            &:hover,
            &.active,
            &:focus {
                background: #000;
            }
        }
    }
    .bx-pager-item,
    .bx-controls-auto .bx-controls-auto-item {
        display: inline-block;
        *zoom: 1;
        *display: inline;
    }
    .bx-pager-item {
        font-size: 0;
        line-height: 0;
    }
}

/* DIRECTION CONTROLS (NEXT / PREV) */  
.bx-wrapper {
    .bx-prev {
        left: 10px;
        background: url(images/controls.png) no-repeat 0 -32px;
        &:hover,
        &:focus {
            background-position: 0 0;
        }
    }
    .bx-next {
        right: 10px;
        background: url(images/controls.png) no-repeat -43px -32px;
        &:hover,
        &:focus {
            background-position: -43px 0;
        }
    }
    .bx-controls-direction a {
        position: absolute;
        top: 50%;
        margin-top: -16px;
        outline: 0;
        width: 32px;
        height: 32px;
        text-indent: -9999px;
        z-index: 9999;
        &.disabled {
            display: none;
        }
    }
}
    
/* AUTO CONTROLS (START / STOP) */
.bx-wrapper .bx-controls-auto {
    text-align: center;
    .bx-start {
        display: block;
        text-indent: -9999px;
        width: 10px;
        height: 11px;
        outline: 0;
        background: url(images/controls.png) -86px -11px no-repeat;
        margin: 0 3px;
        &:hover,
        &.active,
        &:focus {
            background-position: -86px 0;
        }
    }
    .bx-stop {
        display: block;
        text-indent: -9999px;
        width: 9px;
        height: 11px;
        outline: 0;
        background: url(images/controls.png) -86px -44px no-repeat;
        margin: 0 3px;
        &:hover,
        &.active,
        &:focus {
            background-position: -86px -33px;
        }
    }
}

/* PAGER WITH AUTO-CONTROLS HYBRID LAYOUT */
.bx-wrapper {
    .bx-controls.bx-has-controls-auto.bx-has-pager {
        .bx-pager {
            text-align: left;
            width: 80%;
        }
        .bx-controls-auto {
            right: 0;
            width: 35px;
        }
    }
}

/* IMAGE CAPTIONS */
.bx-wrapper .bx-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    background: #666;
    background: rgba(80, 80, 80, 0.75);
    width: 100%;
    span {
        color: #fff;
        font-family: Arial;
        display: block;
        font-size: .85em;
        padding: 10px;
    }
}

#bx-pager img{
    float: left;
    width: 100px;
}
</style>
</head>

<body>

    <ul class="bxslider">
        @if($user->location->images)
            @foreach ($user->location->images as $image)
                <div>
                    <li><img src="{{{ $image->img_name }}}" /></li>
                </div>
            @endforeach
        @endif
    </ul>

    <div id="bx-pager">
        @if($user->location->images)
            <?php $i = 0; ?>
            @foreach ($user->location->images as $image)
                <div>
                    <a data-slide-index="{{ $i }}" href=""><img src="{{{ $image->img_name }}}" /></a>
                </div>
                <?php $i++; ?>
            @endforeach
        @endif
    </div>

    <!-- Jssor Slider End -->
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <script>
        $('.bxslider').bxSlider({
          pagerCustom: '#bx-pager'
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 456px; background: #191919; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">



               @foreach($user->location->images as $image)
                <div>
                   <img u="image" src="{{{ $image->img_name }}}">
                   <img u="thumb" src="{{{ $image->img_name }}}">
                </div>
               @endforeach
       </div> 
    </div>
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
                position: absolute;
                cursor: pointer;
                display: block;
                background: url(../img/a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 01 css */
                /*
                .jssort01 .p           (normal)
                .jssort01 .p:hover     (normal mouseover)
                .jssort01 .pav           (active)
                .jssort01 .pav:hover     (active mouseover)
                .jssort01 .pdn           (mousedown)
                */
                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }
                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                }
                .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                    background: url(../img/t01.png) center center;
                    border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 68px;
                    height: 68px;
                }
                .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 70px;
                    height: 70px;
                    border: #fff 1px solid;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>