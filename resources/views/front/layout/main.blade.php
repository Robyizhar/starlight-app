<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="starlight publisher">
        <meta name="keywords" content="starlight design, card style, material template, portfolio, corporate, business, creative, agency">
        <meta name="author" content="trendytheme.net">

        <title>Starlight {{ Request::segment(1) }}</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="{{ asset('storage/logo/favicon.png') }}">

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <link href="{{ asset('front/assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/fonts/iconfont/material-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/owl.carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/flexSlider/flexslider.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/materialize/css/materialize.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/css/shortcodes/shortcodes.css') }}" rel="stylesheet">
        <link href="{{ asset('front/style.css') }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/revolution/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/revolution/css/navigation.css') }}">
    </head>

    <body id="top" class="has-header-search">

        <!--header start-->
        @include('front.layout.header')

        <!--banner -->
        @if (empty(Request::segment(1)))
            @include('front.layout.banner')
        @endif

        <!--content -->
        @yield('content')

        <!--footer -->
        @include('front.layout.footer')

        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-position">
                <img src="{{ asset('storage/logo/Logo-Starlightbooks-(Hitam)(coped) (1).png') }}" alt="logo" >
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- jQuery -->
        <script src="{{ asset('front/assets/js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ asset('front/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/assets/materialize/js/materialize.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.sticky.min.js') }}"></script>
        {{-- <script src="{{ asset('front/assets/js/smoothscroll.min.js') }}"></script> --}}
        <script src="{{ asset('front/assets/js/imagesloaded.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.inview.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.shuffle.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/menuzord.js') }}"></script>
        <script src="{{ asset('front/assets/js/bootstrap-tabcollapse.min.js') }}"></script>
        <script src="{{ asset('front/assets/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front/assets/flexSlider/jquery.flexslider-min.js') }}"></script>
        <script src="{{ asset('front/assets/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/scripts.js') }}"></script>

        <!-- RS5.0 Core JS Files -->
        <script src="{{ asset('front/assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('front/assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery(".materialize-slider").revolution({
                    sliderType:"standard",
                    sliderLayout:"fullscreen",
                    delay:9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "gyges",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[700,600,500,500],
                    disableProgressBar:"on",
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,50],
                    }
                });
            });
            function underMaintenance(event) {
                alert('Halaman sedang maintenance!');
            }
        </script>
    </body>
</html>
