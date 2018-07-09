<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="author" content="Ben Borla">
    <title>@yield('app.name', config('app.name'))</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    @foreach (config('icons') as $favicon)
    <link rel="apple-touch-icon" sizes="{{ $favicon['size'] }}" href="{{ $favicon['src'] }}" />
    @endforeach

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,700%7cMarcellus+SC" rel="stylesheet">

@if (config('app.use_bundle') === false)
    @include('layouts.components._stylesheets')
@else
    <link rel="stylesheet" href="{{ asset('assets/css/bundle.css') }}">
@endif

@stack('styles')

</head>
<body id="app">
@include('layouts.components._preloader')
@include('layouts.components._navigation')

@yield('content')

@include('layouts.components._prefooter')

@if (config('app.use_bundle') === false)
    @include('layouts.components._scripts')

@else
    <script src="{{ asset('assets/js/bundle.js') }}"></script>
@endif


<script type="text/javascript">
    var tpj = jQuery;
    var revapi50;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_50_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_50_1");
        } else {
            revapi50 = tpj("#rev_slider_50_1").show().revolution({
                sliderType: "carousel",
                jsFileLocation: "assets/plugins/revolution/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    onHoverStop: "off",
                },
                carousel: {
                    maxRotation: 8,
                    vary_rotation: "off",
                    minScale: 20,
                    vary_scale: "off",
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "off",
                    vary_fade: "off",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: -90,
                    stretch: "off"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [800, 600, 400, 320],
                gridheight: [600, 400, 320, 280],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>
@stack('scripts')
@include('cookieConsent::index')
</body>

</html>