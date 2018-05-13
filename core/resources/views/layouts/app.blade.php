<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$gnl->title}} | {{$gnl->subtitle}} </title>
        <!--Favicon add-->
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logo/icon.png') }}">
        <!--bootstrap Css-->
        <link href="{{asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
        <!--font-awesome Css-->
        <link href="{{asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet">
        <!--owl.carousel Css-->
        <link href="{{asset('assets/front/css/owl.carousel.min.css') }}" rel="stylesheet">
        <!--Slick Nav Css-->
        <link href="{{asset('assets/front/css/slicknav.min.css') }}" rel="stylesheet">
        <!--Animate Css-->
        <link href="{{asset('assets/front/css/animate.css') }}" rel="stylesheet">
        <!--Magnitic popup Css-->
        <link href="{{asset('assets/front/css/magnific-popup.css') }}" rel="stylesheet">
        <!--Style Css-->
        <link href="{{asset('assets/front/css/style.css') }}" rel="stylesheet">
        <link href="{{asset('assets/front/css/color.css') }}" rel="stylesheet">
              <link href="{{asset('assets/front/css/color.php?color=') }}{{$gnl->color}}" rel="stylesheet">
        <!--Responsive Css-->
        <link href="{{asset('assets/front/css/responsive.css') }}" rel="stylesheet">
            <script src="{{ asset('assets/admin/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    </head>
    <body>

@php $front = \App\Frontend::first(); @endphp
    @yield('content')
    @include('layouts.alert')


<!--preloader start-->
<div class="preloader">
    <div class="preloader-wrapper">
        <div class="preloader-img">
            <img src="{{asset('assets/images/logo/icon.png') }}" alt="*">
        </div>
    </div>
</div>
<!--preloader end-->

    <!--back to top start-->
    <div class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--back to top end-->
	    <!--jquery script load-->
        <script src="{{asset('assets/front/js/jquery.js') }}"></script>
        <!--Owl carousel script load-->
		<script src="{{asset('assets/front/js/owl.carousel.min.js') }}"></script>
        <!--Propper script load here-->
        <script src="{{asset('assets/front/js/popper.min.js') }}"></script>
        <!--Bootstrap v4 script load here-->
        <script src="{{asset('assets/front/js/bootstrap.min.js') }}"></script>
        <!--Slick Nav Js File Load-->
        <script src="{{asset('assets/front/js/jquery.slicknav.min.js') }}"></script>
        <!--Scroll Spy File Load-->
        <script src="{{asset('assets/front/js/scrollspy.min.js') }}"></script>
        <!--Wow Js File Load-->
        <script src="{{asset('assets/front/js/wow.min.js') }}"></script>
        <!--Magnific popup Js File Load-->
        <script src="{{asset('assets/front/js/jquery.magnific-popup.js') }}"></script>
        <!--Main js file load-->
        <script src="{{asset('assets/front/js/main.js') }}"></script>

        <script src="{{asset('assets/front/js/custom-file-input.js') }}"></script>

        <script type="text/javascript">
            var SlicMenu = $('#main-menu');
            SlicMenu.slicknav();

                var winHeight = $(window).height();
                    $('#contact').css({
                        'min-height':winHeight,
                    });
        </script>

    </body>
</html>
