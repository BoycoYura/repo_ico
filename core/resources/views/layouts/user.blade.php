<!DOCTYPE html>
<html lang="">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>{{$gnl->title}} | Dashboard</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="{{ asset('assets/user/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/user/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/user/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/user/css/animate.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/user/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/user/css/style-responsive.min.css') }}" rel="stylesheet" /><link href="{{ asset('assets/user/css/style-responsive.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/user/css/theme/default.css') }}" rel="stylesheet" id="theme" />
<!-- ================== END BASE CSS STYLE ================== -->

<link rel="shortcut icon" href="{{ asset('assets/images/logo/icon.png') }}" /> 

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('assets/user/plugins/pace/pace.min.js') }}"></script>

<script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</head>

<body >

<div id="page-loader" class="fade in"><span class="spinner"></span></div>

<div id="page-container" class="fade page-sidebar-fixed page-header-fixed" style="">

@include('layouts.sidebar')
<div id="content" class="content">
@include('layouts.alert')
@yield('content')
</div>

<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>
@yield('scripts')

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/user/plugins/jquery/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  
    <script src="{{ asset('assets/user/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('assets/user/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('assets/user/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/user/js/dashboard.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/apps.min.js') }}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>

<script>

    $(".customize-items .item img").click(function () {
        var bg_code;

        bg_code = $(this).attr('src');

        $(".pace-done").css("background",'url('+bg_code+')');
    });


    $(".open-link").click(function () {
        $(".drop-settings-inner").toggleClass("open-drop");
        $(".drop-settings-inner").toggleClass("close-drop");

        $(".drop-settings").toggleClass("active-cast");



        $(".open-drop").animate({right: 10}, 1000);
        $(".close-drop").animate({right: -350}, 1000);
    });
</script>
</body>
</html>
