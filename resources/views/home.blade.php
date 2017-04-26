@extends('app')


@section('page-styles')
	<!-- Revolution slider -->
	<link rel="stylesheet" href="/assets/plugins/rs-plugin/css/settings.css"/>
	<link rel="stylesheet" href="/assets/plugins/rs-plugin/css/theme-settings.css"/>
	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <link rel="stylesheet" href="/assets/css/counter/jquery.counter-analog4.css">
@endsection

@section('page-scripts')

<script>
/* <![CDATA[ */

jQuery(document).ready(function($) {
	'use strict';

	//REVOLUTION SLIDE
	var revapi;
	revapi = jQuery('.tp-banner').revolution(
			{
				delay: 5000,
				startwidth: 1170,
				startheight: 500,
				hideThumbs: 10,
				fullWidth: "on",
				forceFullWidth: "on",
                controlNav: true,
                navigationType: "bullet" // bullet, thumb, none
			});


	// PRETTYPHOTO LIGHTBOX START
	if (jQuery().prettyPhoto) {
		piPrettyphoto();
	}
	function piPrettyphoto() {
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools: false});
	}// PRETTYPHOTO LIGHTBOX END


});

/* ]]> */
</script>

<script type="text/javascript" src="/assets/js/countdown.js"></script>
<script type="text/javascript" src="/assets/js/jquery.counter.js"></script>

<!-- countdown -->
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function(){
	
		/*$("#countdown").countdown({
                    date: "29 September 2015 12:12:00",
                    format: "on"
                },

                function() {
                    // callback function
					alert('hit');
                }
		);*/
	
				
	
                    $('.counter').counter({});
               		
					

					/*d = new Date();
					alert(d);*/


		
		
		
		
    });
    //]]>
</script>
<!-- scripts end -->


<script src="/assets/plugins/flex-slider/jquery.flexslider.js"></script>

<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 500,
    itemMargin: 10
  });
});
</script>






@endsection

@section('content')

<span id="countdown2"></span>

<!-- .page-content start -->
<section class="page-content background-black add-margin">
<!-- .tp-wrapper start -->
	<div class="tp-wrapper">
		<!-- .tp-banner-container start -->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<!-- slide 1 start -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
						<!-- main image -->
						<img src="/assets/img/slider/slide-1-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

						<!-- layer 1 -->
						<div class="tp-caption regular lft"
							 data-x="0"
							 data-y="80"
							 data-speed="300"
							 data-start="1000"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><h2 style="color: #000">The Premier <b>Merchant Service</b> Provider.</h2>
						</div>

						<!-- layer 2 -->
						<div class="tp-caption regular small sfl"
							 data-x="405"
							 data-y="130"
							 data-speed="300"
							 data-start="1500"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><h3><b>AmeriBanc National</b></h3>
						</div>

						<!-- layer 3 -->
						<div class="tp-caption sfl"
							 data-x="550"
							 data-y="225"
							 data-speed="300"
							 data-start="1500"
							 data-easing="Back.easeOut"
							 data-endspeed="300">
                             <img src="/assets/img/Ameribanc-National.png" />
                        </div>

						<!-- layer 4 -->
						<div class="tp-caption list-left sfl"
							 data-x="0"
							 data-y="170"
							 data-speed="300"
							 data-start="2200"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><p><span style="color: #000">Free Equipment Placement</span></p>
						</div>

						<!-- layer 5 -->
						<div class="tp-caption list-left sfl"
							 data-x="0"
							 data-y="230"
							 data-speed="300"
							 data-start="2800"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><p><span style="color: #000">A+ BBB Rating</span></p>
						</div>
						
						<!-- layer 6 -->
						<div class="tp-caption list-left sfl"
							 data-x="40"
							 data-y="300"
							 data-speed="400"
							 data-start="3400"
							 data-easing="Back.easeOut"
							 data-endspeed="300">
                            <img src="/assets/img/bbb-a-plus-accredited-logo.png" style="width: 198px; height: 75px;">
						</div>
						
						

						<!-- layer 7 -->
						<div class="tp-caption list-left sfl"
							 data-x="0"
							 data-y="400"
							 data-speed="300"
							 data-start="4000"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><p><span style="color: #000">Merchant Services</span></p>
						</div>
					</li>

                    <!-- slide 2 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        <img src="/assets/img/slider/slide-2-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                        <!-- layer box -->
                        <div class="tp-caption list-left sfr"
                             data-easing="easeInCubic"
                             data-x="570"
                             data-y="50"
                             data-speed="100"
                             data-start="800"
                             data-endspeed="300" style="background-color: #014ea3; height: 390px; width: 800px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="70"
                             data-speed="400"
                             data-start="200"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2><b>By 2017 less than 23% of all <br>transactions will be in cash</b></h2>
                        </div>

						<!-- layer 2 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="170"
                             data-speed="400"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4>Business experts project less than 15% of Small Businesses</br>
                                                    will be equipped to accept EMV/Chip cards by end of 2015</br>
                                                    and anticipate credit card fees to be drastically increased</br>
                                                    for merchants who have not met the deadline until such time as</br>
                                                    they do upgrade their equipment at the check-out counter…</h4>
                        </div>

                        <!-- layer 4 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="370"
                             data-speed="400"
                             data-start="800"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4>Most small businesses are unhappy with the cost or service <br>they receive from their current Merchant Service Company</h4>
                        </div>


					</li>
						
                    <!-- slide 3 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        <img src="/assets/img/slider/slide-3-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                        <!-- layer box -->
                        <div class="tp-caption list-left sfl"
                             data-x="500"
                             data-y="0"
                             data-speed="400"
                             data-start="200"
                             data-endspeed="300" style="background-color: #fff; height: 500px; width: 8500px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="70"
                             data-speed="400"
                             data-start="200"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2 style="color: #000">At <strong>AmeriBanc</strong> we are <u>committed</u></h2>
                        </div>
						
						<!-- layer 2 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="110"
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h3 style="color: #000">to helping you enhance the business you're building</h3>
                        </div>

						<!-- layer 3 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="170"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">Let us help you identify the benefits<br> of specific payment services for your unique business</h4>
                        </div>

						<!-- layer 4 -->
						<div class="tp-caption list-left sfl"
                             data-x="1100"
                             data-y="270"
                             data-speed="200"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/mobile.png" class="slider-image" />
                        </div>
						
						<!-- layer 5 -->
						<div class="tp-caption list-left sfl"
                             data-x="500"
                             data-y="350"
                             data-speed="200"
                             data-start="450"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/groovv.png" class="slider-image" />
                        </div>
						
						<!-- layer 6 -->
						<div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="270"
                             data-speed="200"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/apple-pay.png" class="slider-image" />
                        </div>
						
						<!-- layer 7 -->
						<div class="tp-caption list-left sfl"
                             data-x="750"
                             data-y="250"
                             data-speed="200"
                             data-start="550"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/google-wallet.png" class="slider-image" />
                        </div>
						
						<!-- layer 8 -->
						<div class="tp-caption list-left sfl"
                             data-x="900"
                             data-y="270"
                             data-speed="200"
                             data-start="600"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/merc_small.png" class="slider-image" />
                        </div>
						
						<!-- layer 9 -->
						<div class="tp-caption list-left sfl"
                             data-x="1000"
                             data-y="350"
                             data-speed="200"
                             data-start="650"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/auth_small.png" class="slider-image" />
                        </div>

					</li>
											
                    <!-- slide 4 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        <img src="/assets/img/slider/slide-4-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                        <!-- layer box -->
                        <div class="tp-caption list-left sfl"
                             data-x="550"
                             data-y="50"
                             data-speed="400"
                             data-start="200"
                             data-endspeed="300" style="background-color: #fff; height: 320px; width: 850px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="70"
                             data-speed="400"
                             data-start="200"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2 style="color: #000">At AmeriBanc you can expect:</h2>
                        </div>
						
						<!-- layer 2 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="150"
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">24-7 Support</h4>
                        </div>
						
						<!-- layer 3 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="210"  
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">A team of highly trained sales and support staff</h4>
                        </div>
						
						<!-- layer 4 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="270"
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">The ability to get your money FASTER (Next Day Deposits)</h4>
                        </div>
						
						<!-- layer 5 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="330"
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">Control over your service (Month-to-Month)</h4>
                        </div>						
					</li>
					
											
                    <!-- slide 5 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        <img src="/assets/img/slider/slide-6-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                        <!-- layer box -->
                        <div class="tp-caption list-left sfl"
                             data-x="550"
                             data-y="50"
                             data-speed="400"
                             data-start="200"
                             data-endspeed="300" style="background-color: #fff; height: 350px; width: 550px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="70"
                             data-speed="400"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2 style="color: #000">Our sales team makes</h2>
                        </div>

                        <!-- layer 2 -->
                        <div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="120"
                             data-speed="400"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2 style="color: #000">us different</h2>
                        </div>
						
						<!-- layer 3 -->
						<div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="170"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h3 style="color: #000"><br>We look for the <strong>best</strong></h3>
                        </div>

                        <!-- layer 3 -->
                        <div class="tp-caption list-left sfl"
                             data-x="700"
                             data-y="200"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h3 style="color: #000"><br>and the <strong>brightest</strong></h3>
                        </div>
						
						<!-- layer 2 -->
						<div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="350"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><a class='btn-medium empty black' href='/career'>Learn More About Becoming a Representative</a>
                        </div>
						
						
					</li>					
				</ul>
			</div><!-- .tp-banner end -->
		</div><!-- .tp-banner end -->
	</div><!-- .tp-wrapper end -->

	<!-- .container start -->
	<div class="container" style="height:30px !important;">
    <?php
                            
	
	date_default_timezone_set('America/Chicago');
	
	$target_sec = new DateTime("2015-10-01");
	$current_sec = new DateTime();
	$sec = $current_sec->diff($target_sec)->format("%s");
	$seconds = $sec;
	
	$target_min = new DateTime("2015-10-01");
	$current_min = new DateTime();
	$min = $current_min->diff($target_min)->format("%i");
	$minutes = $min;
	
	$target_hour = new DateTime("2015-10-01");
	$current_hour = new DateTime();
	$hour = $current_hour->diff($target_hour)->format("%h");
	$hours = $hour;
	
	$target_date = new DateTime("2015-10-01");
	$current_date = new DateTime();
	$day = $current_date->diff($target_date)->format("%a");
	$days = $day;
	
	$stamp = time();
	$cur_date = date($stamp);
	
	echo 'The current date/time is '.$cur_date.'<br />';
	/*echo $seconds.' Seconds<br />';
	echo $minutes.' Minutes<br />';
	echo $hours.' Hours<br />';
	echo $days.' Days<br />';*/
	
	
	
	
	   
   ?>				

		<!-- .row start -->
		<div class="row">
			<article class="grid_6">
				<div class="triggerAnimation animated" data-animate="fadeInUp">
                    
                    <!-- countdown -->
                    <div id="countdown-wrapper">
                        <div id="countdown-wrap">
                        	
							
							<?php /*?><div class="livediv" style="width:400px; background-color:; text-align:center;">
                            	<a href="/services/emv"><h4 class="emvCountdown" style="position: relative; top:10px; padding-top:25px;">EMV Countdown</h4></a>
                                <span class="counter counter-analog4" data-direction="down" data-format="20.23:59:59"><?php //echo $daysleft.' : '.$show_h.' : '.$show_i.' : '.$show_s;  ?></span>
                                <br />
                                <span style="font-size:18px; margin-left:18px; padding-right:3px;">Days&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:18px;">Hours&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:18px; margin-left:;">Minutes&nbsp;&nbsp;</span><span style="font-size:18px;  margin-left:;">Seconds</span>
                                <h5>Are You Ready?</h5>
                            </div><?php */?>
                            
                            
                            <div style="width:600px; background-color:; text-align:center;">
                                <a href="/services/emv"><img src='/assets/css/counter/EMV_header.png' alt='web agency' style="width:400px; padding-bottom:25px;"/><br />
                            </div>
                            
							
                        </div>
                    </div>
                    
                    <!-- countdown end -->
                    
                </div><!-- .triggerAnimation.animated end -->
            </article>
            <article class="grid_6">
                <div class="triggerAnimation animated" data-animate="fadeInUp">
					<div class="note no-bottom-margin" style="">
						<h4>For more information, Contact us at <b>866-569-3505</b></h4><br />
						<a class='btn-medium empty white' href='/business-service-information'>Schedule a Free Consultation</a>
					</div>
                </div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_12 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->


<!-- .container start -->
<div class="container">
    <!-- .row start -->
    <div class="row">
        <article class="grid_12">
            <div class="centerText" data-animate='fadeInUp'>
                AmeriBanc National (ABN) is a registered ISO/MSP of Wells Fargo Bank, N.A., Walnut Creek, CA
            </div><!-- .triggerAnimation.animated end -->
        </article><!-- .grid_12 end -->
    </div><!-- .row end -->
</div>

<!-- .page-content start -->
<section class="page-content">
	<!-- .container start -->
	<div class="container">
		<!-- .row start -->
		<div class="row">
			<article class="grid_12">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<img src='/assets/img/pictures/free-equipment.jpg' alt='web agency'/>
				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_12 end -->
		</div><!-- .row end -->

		<div class="row">
			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="service-box-1">
						<div class="icon fa fa-lock"></div>

						<a href='/services/emv'>
							<h5>EMV Upgrade Services</h5>
						</a>

						<p>
							Visa and MasterCard both assign a "Liability Shift" to merchants that accept fraudulent transactions if they do not have an EMV Terminal
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->
			
			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="service-box-1">
						<div class="icon fa fa-google-wallet"></div>

						<a href='/services/apple-pay'>
							<h5>Apple Pay &amp; Google Wallet</h5>
						</a>

						<p>
							Apple Pay and Google Wallet are HERE.  Are you Ready?  We can help you get started.
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->
			
			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="service-box-1">
						<div class="icon fa fa-cc-mastercard"></div>

						<a href='/services/tablet-card-processing'>
							<h5>Tablet Based Cash Register</h5>
						</a>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->
			
			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="service-box-1">
						<div class="icon fa fa-cc-mastercard"></div>

						<a href='/services/credit-card-processing'>
							<h5>Credit/Debit Card Procesing</h5>
						</a>

						<p>
							AmeriBanc National offers Free Processing Equipment Placement along with our World Class processing service. We cater to the small-medium size businesses, allowing them to utilize the payment technologies that are usually only afforded by the larger stores.
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->
			
			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInDown'>
					<section class="service-box-1">
						<div class="icon fa fa-file-text"></div>

						<a href='/services/groovv'>
							<h5>Groovv Offers</h5>
						</a>

						<p>
							A.M.P. up your business with Text-Based Marketing. Acquire New Customers Every offer is shareable, making it easy for your customers to spread the word.
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->

			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="service-box-1">
						<div class="icon fa fa-credit-card"></div>

						<a href='/services/merchant-cards'>
							<h5>Merchant Cards</h5>
						</a>

						<p>
							Whether you use them as traditional gift cards or in one of the various other highly effective ways we can show you, we have a Merchant Card Solution for your business.
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->
		
			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="service-box-1">
						<div class="icon fa fa-mobile"></div>

						<a href='/services/mobile-solutions'>
							<h5>Mobile Solutions</h5>
						</a>

						<p>
							Coming to the aid of mobile merchants everywhere, AmeriBanc offers the latest and greatest in mobile processing technology.
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->
				
			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInDown'>
					<section class="service-box-1">
						<div class="icon fa fa-money"></div>

						<a href='/services/merchant-loans'>
							<h5>Merchant Loans</h5>
						</a>

						<p>
							From time to time, businesses may run into situations that warrant the need for a little extra help or a little push. Let us help you out.
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->

			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInDown'>
					<section class="service-box-1">
						<div class="icon fa fa-money"></div>

						<a href='/services/authorize-net'>
							<h5>Internet / Authorize.Net</h5>
						</a>

						<p>
							Integrate your online shopping cart. Authorize.net can be utilized by online merchants who are looking to accept payments over the internet for their products and/or services.
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->
		
			<!-- .grid_4 start -->
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="service-box-1">
						<div class="icon fa fa-file-image-o"></div>

						<a href='/services/check-imaging'>
							<h5>Check Imaging</h5>
						</a>

						<p>
							Save valuable time and reduce your risk by using our Check Imaging System. Now you can take checks from anyone in the US with no worries. Trust everyone like they are your next door neighbor.
						</p>
					</section>
				</div><!-- .triggerAnimation animated end -->
			</article><!-- .grid_4 end -->

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

<section class="page-content parallax parallax-3">
	<!-- .container start -->
	<div class="container">
		<!-- .row start -->
		<div class="row">
			<!-- .grid_12 start -->
			<article class="grid_12">
				<!-- .heading-bordered start -->
					
					<h4>Customer Testimonials</h4>
					
					<div class="flexslider col-md-12">
							<ul class="slides">
								<li>
									<p>
										<iframe width="480" height="250" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/f3nOR82PJMU/?rel=0&autoplay=0&loop=0&wmode=opaque" marginwidth="0" marginheight="0"></iframe>
									</p>

									<span class="author">Tiffany Limo</span>
								</li>							

								<li>
									<p>
										<iframe width="480" height="250" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/iaPgZE5FigU/?rel=0&autoplay=0&loop=0&wmode=opaque" marginwidth="0" marginheight="0"></iframe>
									</p>

									<span class="author">Brew House Cafe</span>

								</li>

						  </ul>
					</div>
					
					<p>
                        <a class='btn-medium empty' href='/business-service-information'>Click here to talk to a representative</a>
					</p>
					
					</ul>
				</div>
			</article><!-- .grid_12 end --> 

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->


@endsection
