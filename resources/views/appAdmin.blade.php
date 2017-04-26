<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<!-- start: META -->
        <title>Ameribanc National - Admin</title>
        <meta name="description" content="Admin Pages">
        <meta name="author" content="pixel-industry">
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
		<!-- end: META -->
		
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/fonts/style.css">
		<link rel="stylesheet" href="/assets/css/main.css">
		<link rel="stylesheet" href="/assets/css/main-responsive.css">
		<link rel="stylesheet" href="/assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="/assets/css/adminTheme.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="/assets/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		@yield('page-styles')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

        <!-- google web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900,200,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-63190981-2', 'auto');
            ga('send', 'pageview');

        </script>
	
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
	<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="/">
						<img src="/assets/img/Ameribanc-National_small.png" class="img-responsive" />
					</a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: USER DROPDOWN -->
                        <li>
                        	<a href="/">Home</a>
                        </li>
                        <li style="margin-right:40px;">
                        	<a href="/auth/logout">Log Out</a>
                        </li>
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<span class="username">{{ $adminModel['name'] }}</span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="/auth/logout">
										<i class="clip-exit"></i>
										&nbsp;Log Out
									</a>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
					</ul>
                    
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->

	
			<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<ul class="main-navigation-menu">
						<li class="{{ $adminModel['menuItem'] == 'dashboard' ? 'active open' : '' }}">
							<a href="/my"><i class="clip-home-3"></i>
								<span class="title"> Dashboard </span><span class="selected"></span>
							</a>
						</li>
						<li class="{{ $adminModel['menuItem'] == 'training' ? 'active open' : '' }}">
							<a href="javascript:void(0)"><i class="clip-screen"></i>
								<span class="title"> Training </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="/my/training/module1">
										<span class="title orientationtab"> 1. Orientation </span>
									</a>
								</li>
                                <li>
                                    <a href="/my/training/module2">
                                        <span class="title creditcardtab"> 2. Credit Cards 101 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/training/module3">
                                        <span class="title firstfivetab"> 3. First Five Minutes </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/training/module4">
                                        <span class="title valuepresentationtab"> 4. Value Presentation </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/training/module5">
                                        <span class="title closingtab"> 5. Closing </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/training/module6">
                                        <span class="title appointmentstab"> 6. Appointments </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/training/module7">
                                        <span class="title paperworktab"> 7. Paperwork Training </span>
                                    </a>
                                </li>
                                
                                @if ($adminModel['role_id'] <= 4)
                                <li>
                                    <a href="/my/training/moduleMaster">
                                        <span class="title masterstab"> Masters Level </span>
                                    </a>
                                </li>
                                @endif;
							</ul>
						</li>
                        @if ($adminModel['role_id'] == 1 || $adminModel['role_id'] == 2)
                        <li class="{{ $adminModel['menuItem'] == 'admin' ? 'active open' : '' }}">
                            <a href="javascript:void(0)"><i class="clip-atom"></i>
                                <span class="title"> Admin </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/admin">
                                        <span class="title usermanagtab"> User Management </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/register">
                                        <span class="title registerusertab"> Register New User </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/traineeoverview">
                                        <span class="title traineestab"> Trainees </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/graduates">
                                        <span class="title graduatestab"> Graduates </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/register"><i class="clip-user-3"></i>
                                        <span class="title newcandidatetab"> New Candidate Request </span>
                                    </a>
                                </li>
                             </ul>
                        </li>
                        @endif
                        @if ($adminModel['role_id'] < 5)
                        <li class="{{ $adminModel['menuItem'] == 'docs' ? 'active open' : '' }}">
                            <a href="javascript:void(0)"><i class="clip-file"></i>
                                <span class="title"> Forms </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/my/docsAndForms">
                                        <span class="title docsformstab"> Docs and Forms </span>
                                    </a>
                                </li>
                                <li>
                                	<a href="/my/docsAndFormsTraining">
                                        <span class="title appdocsformstab"> Application Docs & Forms </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ $adminModel['menuItem'] == 'handbook' ? 'active open' : '' }}">
                            <a href="javascript:void(0)"><i class="clip-book"></i>
                                <span class="title"> Consultant Handbook </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/my/handbook">
                                        <span class="title welcometab"> Welcome </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/opportunity">
                                        <span class="title opportunitytab"> Opportunity </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/topPerformer">
                                        <span class="title topperformertab"> Becoming a Top Performer </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/resources">
                                        <span class="title resourcestab"> Resources </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/compensation">
                                        <span class="title compensationtab"> Compensation </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/salesMarket">
                                        <span class="title salesmarkettab"> Sales Market </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/presentation">
                                        <span class="title presentguidetab"> Presentation Guide </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/prospecting">
                                        <span class="title prospectingtab"> Prospecting </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/leads">
                                        <span class="title acquiringleadstab"> Acquiring Leads </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/presentationTips">
                                        <span class="title presenttipstab"> Presentation Tips </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/fees">
                                        <span class="title schedulefeestab"> Schedule of Fees </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/afterTheSale">
                                        <span class="title aftersaletab"> After the Sale </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/barn">
                                        <span class="title barntab"> B.A.R.N. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/referenceLetters">
                                        <span class="title lettersreferencetab"> Letters of Reference </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/faqs">
                                        <span class="title faqstab"> FAQs </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/commonTerms">
                                        <span class="title commontermstab"> Common Terms </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/my/handbook/aboutUs">
                                        <span class="title aboutustab"> About Us </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li class="{{ $adminModel['menuItem'] == 'tools' ? 'active open' : '' }}">
                            <a href="javascript:void(0)"><i class="clip-wrench"></i>
                                <span class="title"> Tools </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                            	<li>
                                    <a href="http://ocs.landsend.com/cd/frontdoor?store_name=AmeriBanc_National&store_type=3" target="_blank">
                                        <span class="title shoppingtab"> Shopping </span>
                                    </a>
                                </li>
                                @if ($adminModel['role_id'] <= 4)
                                <li>
                                        <a href="/my/bsCard">
                                            <span class="title buscardstab"> Business Cards </span>
                                        </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @if ($adminModel['role_id'] == 1)
                        <li class="{{ $adminModel['menuItem'] == 'industry' ? 'active open' : '' }}">
                            <a href="javascript:void(0)"><i class="clip-wrench"></i>
                                <span class="title"> Industry </span><i class="icon-arrow"></i>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="/my/news_private">News</a></li>
                                <li><a href="/my/post_news">Post</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
				<!-- end: SIDEBAR -->
			</div>
			<!-- start: PAGE -->
			<div class="main-content">
				<div class="container">
                    <br>
					<!-- start: PAGE CONTENT -->
					@yield('content')
					<!-- end: PAGE CONTENT-->
                    <br>
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				<p>Copyright Ameribanc National, LLC {{ date("Y") }}. All Rights Reserved.</p>
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="/assets/plugins/respond.min.js"></script>
		<script src="/assets/plugins/excanvas.min.js"></script>
		<![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

		<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="/assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		@yield('page-scripts')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>


