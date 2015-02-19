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
    border:  none;
    background: transparent;
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
</body>
</html>