<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	
	<!-- .header-wrapper start -->
	<div id="header-wrapper" class="clearfix">
		<!-- .top-bar start -->
		<section id="top-bar-wrapper">
			<div id="top-bar" class="clearfix">
				<ul class="contact-info">
					<li>
						<i class="icon-phone"></i>
						<span>866-569-3505</span>
					</li>

					<li>
						<i class="icon-envelope-alt"></i>
						<span><a href="mailto:info@ameribancmail.com">info@ameribancmail.com</a></span>
					</li>
					<li>
						<i class="icon-user"></i>
						<a href="/auth/login">MY ABN Login</a>
					</li>
                    @if (Auth::user())
                    <li>
                        <i class="icon-user"></i>
                        <a href="/auth/logout">Logout</a>
                    </li>
                    @endif
				</ul><!-- .contact-info end -->
				<!--- .social-links start -->
				<ul class="social-links">
					<li>
						<a href="https://www.facebook.com/AmeribancNational" class="pixons-facebook-2"></a>
					</li>
					<li>
						<a href="https://twitter.com/ameribanc" class="pixons-twitter-1"></a>
					</li>
					<li>
						<a href="https://www.linkedin.com/company/2706829" class="pixons-linkedin"></a>
					</li>
					<li>
						<a href="https://www.pinterest.com/ameribanc" class="pixons-pinterest"></a>
					</li>
					<li>
						<a href="https://www.youtube.com/user/AmeriBancVideo" class="pixons-youtube"></a>
					</li>
					<li>
						<a href="https://plus.google.com/116490424708542511979" class="pixons-google_plus"></a>
					</li>	
				</ul><!-- .social-links end -->

			</div><!-- .top-bar end -->
		</section><!-- .top-bar-wrapper end -->

		<!-- #header start -->
		<header id="header" class="clearfix">
			<section id="logo">
				<a href="/">
					<img src="/assets/img/logo@2x.png"  alt="Ameribanc National" title="Ameribanc National" />
				</a>
			</section>

			<section id="nav-container">
				<nav id="nav">
					<ul>
						<li  class="no-sub @if ($seoValues['menuSelected'] == 'home') current-menu-item @endif" >
							<a href="/">Home</a>
						</li>

						<li class="@if ($seoValues['menuSelected'] == 'services') current-menu-item @endif" >
							<a href="/services">Services</a>
							<ul>
								<li><a href="/services/emv">EMV Upgrade Services</a></li>
								<li><a href="/services/apple-pay">Apple Pay & Google Wallet</a></li>
								<li><a href="/services/credit-card-processing">Credit Card Processing</a></li>
								<li><a href="/services/groovv">Groovv Offers</a></li>
								<li><a href="/services/merchant-cards">Merchant Cards (Gift)</a></li>
								<li><a href="/services/mobile-solutions">Mobile Solutions</a></li>
								<li><a href="/services/merchant-loans">Merchant Loans (OnDeck)</a></li>
								<li><a href="/services/authorize-net">Internet / Authorize.Net</a></li>
								<li><a href="/services/check-imaging">Check Services / Imaging</a></li>
							</ul>
						</li>

						<li  class="no-sub @if ($seoValues['menuSelected']== 'about') current-menu-item @endif">
							<a href="/about">About</a>
						</li>
						@if (Auth::user())
						<li  class="no-sub @if ($seoValues['menuSelected'] == 'career') current-menu-item @endif">
							<a href="/career/career_main">Career</a>
						</li>					
						@else
                        <li  class="no-sub @if ($seoValues['menuSelected'] == 'career') current-menu-item @endif">
							<a href="/career">Career</a>
						</li>
                        @endif
                        <li class="@if ($seoValues['menuSelected'] == 'services') current-menu-item @endif" >
                            <a href="/contact">Contact Us</a>
                            <ul>
								<li><a href="/business-service-information">Are you looking for a new Merchant account?</a></li>
                                <li><a href="/career">Are you looking for a Career?</a></li>
                                <li><a href="/customer-service">Are you looking for Customer service?</a><ul>
										<li><a href="/customer-service/supplies">I Need Supplies for my Terminal</a></li>
										<li><a href="/customer-service/upgrade">I Need Terminal Swap/Upgrade</a></li>
										<li><a href="/customer-service/service-call">I Need Customer Service Call</a></li>
										<li><a href="/customer-service/tech-support">I Need Technical Support/Installation Help</a></li>
									</ul>
								</li>
                                <li><a href="/customer-service">Are you wanting to express a concern?</a><ul>
										<li><a href="/customer-service/call-list">I Need to have my number removed from Call List</a></li>
										<li><a href="/customer-service/problem">I Need to report a problem - I'm not happy</a></li>
										<li><a href="/customer-service">I Need Service/Support</a></li>
									</ul>
								</li>
                            </ul>
                        </li>

					</ul>
				</nav><!-- #nav end -->                  
			</section><!-- #nav-container end -->

			<!-- #dl-menu.dl-menuwrapper start -->
			<div id="dl-menu" class='dl-menuwrapper'>
				<button class="dl-trigger">Open Menu</button>
				<ul class="dl-menu">
						<li class="current-menu-item">
							<a href="/">Home</a>
						</li>

						<li>
							<a href="/services">Services</a>
							<ul>
                                <li><a href="/services/emv">EMV Upgrade Services</a></li>
                                <li><a href="/services/apple-pay">Apple Pay & Google Wallet</a></li>
                                <li><a href="/services/credit-card-processing">Credit Card Processing</a></li>
                                <li><a href="/services/groovv">Groovv Offers</a></li>
                                <li><a href="/services/merchant-cards">Merchant Cards (Gift)</a></li>
                                <li><a href="/services/mobile-solutions">Mobile Solutions</a></li>
                                <li><a href="/services/merchant-loans">Merchant Loans (OnDeck)</a></li>
                                <li><a href="/services/authorize-net">Internet / Authorize.Net</a></li>
                                <li><a href="/services/check-imaging">Check Services / Imaging</a></li>
							</ul>
						</li>

						<li class="no-sub">
							<a href="/about">About</a>
						</li>
						
						<li class="no-sub">
							<a href="/career">Career</a>
						</li>					

						<li class="no-sub">
							<a href="/contact">Contact</a>
						</li>
				</ul><!-- .dl-menu end -->
			</div><!-- #dl-menu.dl-menuwrapper end -->

		</header><!-- .header end -->        
	</div><!-- .header-wrapper end -->
	
	@yield('content')

	

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
