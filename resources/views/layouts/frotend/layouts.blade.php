<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Comunidad Picante Pero Edificante</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link rel="icon" type="image/png" href="{{ asset('file_frotend/template/images/logo-ico.jpg') }}">

<!-- CSS
  ================================================== -->
<link href="/file_frotend/Template/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/file_frotend/Template/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="/file_frotend/Template/css/style.css" rel="stylesheet" type="text/css">
<link href="/file_frotend/Template/vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="/file_frotend/Template/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"><!-- MAGINIFIC LIGHTBOX -->
<link href="/file_frotend/Template/vendor/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css"><!-- REVOLUTION SLIDER -->
<link href="/file_frotend/Template/vendor/rs-plugin/css/navstylechange.css" media="screen" rel="stylesheet" type="text/css"><!-- REVOLUTION SLIDER -->
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="/file_frotend/Template/css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="/file_frotend/Template/colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== fav
<script src="/file_frotend/Template/js/modernizr.js"></script><!-- Modernizr -->
</head>
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
	<!-- Start Site Header -->
        @include('frotend.extends.navs')
        @yield('container')
    <!-- Start Footer -->
    @include('frotend.extends.footers')
    <!-- End Footer -->
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> <!-- Jquery Library Call -->
<script src="/file_frotend/Template/vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="/file_frotend/Template/js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="/file_frotend/Template/js/bootstrap.js"></script> <!-- UI -->
<script src="/file_frotend/Template/js/init.js"></script> <!-- All Scripts -->
<script src="/file_frotend/Template/vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="/file_frotend/Template/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="/file_frotend/Template/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/file_frotend/Template/js/revolution-slider-init.js"></script> <!-- Revolutions Slider Intialization -->
<script src="/file_frotend/Template/vendor/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer -->

</body>
</html>
