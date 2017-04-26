<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ameribanc National</title>
        <meta name="description" content="">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width">

		<link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/icons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/icons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/icons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/icons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/icons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/icons/manifest.json">
		<link rel="shortcut icon" href="/icons/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/icons/mstile-144x144.png">
		<meta name="msapplication-config" content="/icons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

        <!-- start: MAIN CSS -->
		<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/fonts/style.css">
		<link rel="stylesheet" href="/assets/css/main.css">
		<link rel="stylesheet" href="/assets/css/main-responsive.css">
		<link rel="stylesheet" href="/assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="/assets/css/ameribanc.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="/assets/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		@yield('page-styles')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-63190981-1', 'auto');
		  ga('send', 'pageview');

		</script>
	
</head>
<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example2">
		<div class="main-login col-sm-4 col-sm-offset-4">
			<div class="logo">
				<a href="/"><img src="/assets/img/logo.png" /></a>
			</div>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
			
			@yield('content')

			</div>
			<!-- end: LOGIN BOX -->
			
			<!-- start: COPYRIGHT -->
			<div class="copyright">
				<p>Copyright Ameribanc National, LTD {{ date("Y") }}. All Rights Reserved.</p>
			</div>
			<!-- end: COPYRIGHT -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="/assets/plugins/respond.min.js"></script>
		<script src="/assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="/assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="/assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="/assets/js/login.js"></script>
		@yield('page-scripts')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>

