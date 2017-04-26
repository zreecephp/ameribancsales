<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <title>Ameribanc National - {{ $seoValues['pageTitle'] }}</title>
        <meta name="description" content="{{ $seoValues['pageDescription'] }}">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="{{ $seoValues['pageKeywords'] }}">
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

        <!-- stylesheets -->
        <link rel="stylesheet" href="/assets/css/grid.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        <link rel="stylesheet" href="/assets/css/ameribanc.css" />
        <link rel="stylesheet" href="/assets/css/responsive.css" />
        <link rel="stylesheet" href="/assets/css/animate.css" />
        <link rel="stylesheet" href="/assets/css/retina.css" />

        <!-- prettyPhoto lightbox stylesheer -->
        <link rel="stylesheet" href="/assets/css/prettyPhoto.css" media="screen" />

        <!-- google web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900,200,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		
        <!-- Icons -->
        <link rel="stylesheet" href="/assets/plugins/pixons/style.css" />
        <link rel="stylesheet" href="/assets/plugins/iconsfont/iconsfont.css" />

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!--[if lt IE 9]>
            <script src="js/selectivizr-min.js"></script>
        <![endif]-->

		<!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
		
		@yield('page-styles')
		
		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-63190981-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<!-- Google Plus -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<!--<script src="/assets/js/html5shiv.js"></script>
		<script src="/assets/js/respond.min.js"></script>-->
		<!-- Facebook Plugin -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=168622759881733";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	
		<!-- Twitter Follow -->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</head>
<body>
	<!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WPMB93"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WPMB93');</script>
    <!-- End Google Tag Manager -->
	
	<div id="header-wrapper" class="clearfix">
		<!-- .top-bar start -->
		<section id="top-bar-wrapper">
			<div id="top-bar" class="clearfix">
				&nbsp;
			</div><!-- .top-bar end -->
		</section><!-- .top-bar-wrapper end -->

		<!-- #header start -->
		        
	</div><!-- .header-wrapper end -->
	
	@yield('content')

	<!-- .footer-wrapper start -->
        <section class="footer-wrapper">
            <!-- .footer start -->
            <footer id="footer">
                <!-- .container start -->
                <div class="container">
                    <!-- .row start -->
                    <div class="row">

                        <!-- animated fadeInTop -->
                        <section class="triggerAnimation animated" data-animate="fadeIn">

                            <!-- .footer-widget-container start -->
                            <ul class="grid_4 footer-widget-container">
                                
                                
                            </ul> <!-- .footer-widget-container end -->

                            <!-- .footer-widget-container start -->
                            <ul class="grid_2 footer-widget-container">
                                
							</ul><!-- .footer-widget-container end -->
							
							<!-- .footer-widget-container start -->
                            <ul class="grid_4 footer-widget-container">
							
                                
                            </ul><!-- .footer-widget-container end -->

                            <!-- .footer-widget-container start -->
                            <ul class="grid_2 footer-widget-container">

                                
                            </ul>
                        </section>
                    </div><!-- .row end -->
                </div><!-- .container end -->                
            </footer><!-- .footer-end -->

            <!-- .copyright-container start -->
            <div class="copyright-container">
                <!-- .container start -->
                <div class="container">
                    <!-- .row start -->
                    <div class="row">
                        <section class="grid_6">
                            <p>Copyright Ameribanc National, LLC {{ date("Y") }}. All Rights Reserved.</p>
                        </section>

                        <section class="grid_6">
                            
                        </section>
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .copyright-container end -->

            <a href="#" class="scroll-up">Scroll</a>
        </section><!-- .footer-wrapper end -->

        <!-- scripts -->
        <script  src="/assets/js/jquery-1.9.1.js"></script> <!-- jQuery library -->  
        <script  src="/assets/js/jquery-migrate-1.2.1.min.js"></script> <!-- jQuery migrate -->
        <script  src="/assets/js/jquery.placeholder.min.js"></script><!-- jQuery placeholder fix for old browsers -->
        <script  src="/assets/js/modernizr.custom.js"></script> <!-- jQuery modernizr -->
        <script  src="/assets/js/jquery.dlmenu.js"></script><!-- responsive navigation -->
        <script  src="/assets/js/waypoints.min.js"></script><!-- js for animating content -->
        <script  src="/assets/js/retina-1.1.0.min.js"></script><!-- retina ready script -->
        <script  src="/assets/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script><!-- revolution slider -->
        <script  src="/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script><!-- revolution slider -->
        <script  src="/assets/js/jquery.stellar.min.js"></script><!-- parallax scrolling -->
         <script  src="/assets/js/jquery.carouFredSel-6.2.1-packed.js"></script><!-- CarouFredSel carousel plugin -->
        <script  src="/assets/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto lightbox -->
		<script  src="/assets/js/nicescroll.min.js"></script> <!-- Nice scroll Plugin -->
        <script  src="/assets/js/include.js"></script> <!-- jQuery custom options -->

		@yield('page-scripts')
        
    </body>
</html>

