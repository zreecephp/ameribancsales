@extends('app')

@section('page-styles')
    <!-- Nivo slider stylesheer -->
    <link rel="stylesheet" href="/assets/css/nivo-slider.css"/>
@endsection

@section('page-scripts')
    <script  src="/assets/js/jquery.nivo.slider.js"></script><!-- nivo slider -->
    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function($) {
            'use strict';

            //NIVO SLIDER
            $('#slider').nivoSlider();

            $('.skills-bar').waypoint(function() {
                        $('.skills li span').addClass('expand');
                    },
                    {offset: '10%'}
            );

            //  Responsive layout, resizing the items
            $('#client-carousel-1').carouFredSel({
                responsive: true,
                width: '100%',
                auto: false,
                scroll: 1,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                prev: '.c_prev1',
                next: '.c_next1',
                items: {
                    width: 200,
                    height: 120,
                    visible: {
                        min: 1,
                        max: 1
                    }
                }
            });

            //  Responsive layout, resizing the items
            $('#client-carousel-2').carouFredSel({
                responsive: true,
                width: '100%',
                auto: false,
                scroll: 1,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                prev: '.c_prev2',
                next: '.c_next2',
                items: {
                    width: 200,
                    height: 120,
                    visible: {
                        min: 1,
                        max: 1
                    }
                }
            });
        });

        /* ]]> */
    </script>


@endsection

@section('content')

<!-- #page-title start -->
<section id="page-title" class="page-title-1" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="grid_8">
				<div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
					<h1>Mobile Solutions</h1>
					<h5>AmeriBanc is proud to offer the Payment Jack swipe device. This innovative piece of technology allows a merchant to convert their cell phone into a secure POS terminal. Merchants can now quickly and securely process transactions, regardless of their location.</h5>
					<a class='btn-medium empty' href='/business-service-information'>Schedule a call back</a>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" src="/assets/img/pictures/pay_jack.png" alt="services page title image" />
					</div>
				</div>
			</div><!-- .grid_4 end -->
		</div><!-- .row end -->

		<div class="row">
			<div class="grid_8">
				<div class="breadcrumbs triggerAnimation animated" data-animate="fadeInUp">
					<ul>
						<li>
							<span>You are here:</span>
						</li>

						<li>
							<a href="/services">Services / </a>
						</li>

						<li>
							<span class="active">Mobile Solutions</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- .container end -->
</section><!-- #page-title end -->

<!-- .page-content start -->
<section class="page-content">

	<!-- .container start -->
	<div class="container">
		<!-- .row start -->
		<div class="row">
			<!-- .grid_8 start -->
			<article class="grid_12">
				<!-- .heading-bordered start -->

				<div class="triggerAnimation animated" data-animate='fadeInLeft'>
					<section class="heading-bordered">
						<h3>Mobile Solutions</h3>
					</section><!-- .heading-bordered end -->

                    <p>AmeriBanc is one of the nation's premiere merchant service providers, offering all of the "Big Box" store services to the small to medium-sized businesses. Credit and Debit card processing is among the various value-added products and services that AmeriBanc has to offer its merchants. Whether you utilize the built in pin pad functionality of the T4220, or if you decide to go with the Payment Jack device. AmeriBanc helps business owners increase their revenue streams and save time and money in the process.</p>

                    <br><br>

                    <img src="/assets/img/pictures/payment-jack.jpg" class="picture-right" />

                    <h3>Mobile Processing</h3>

                    <p>
                    Our Payment Jack card swipe device turns your smartphone into a secure credit card terminal. You’ll receive a free card swiperand free software to get you up and running. This opens your business to a new world of customers, by enabling you to make a sale wherever you are.
                    </p>

                    <br><br>

                    <strong>With Payment Jack you can:</strong>

                    <br>

                    <ul class="icons-list icon-checkmark-list colored">
                        <li> Get real-time authorization for swiped and keyed transactions</li>
                        <li> Use Signature Capture on touchscreen devices</li>
                        <li> Email receipts to your customers</li>
                        <li> Check transaction history and reports on your phone or online</li>
                    </ul>

                    <br>

                    <strong>Perfect for these industries:</strong>

                    <br>

                    <ul class="icons-list icon-checkmark-list colored">
                        <li> Gardeners and landscapers</li>
                        <li> Use Signature Capture on touchscreen devices</li>
                        <li> General contractors, electricians, masonry and carpentry contractors</li>
                        <li> Taxi, limo and airport services</li>
                        <li> Mobile business owners</li>
                        <li> Mobile market vendors: artists, farmers, antique sellers </li>
                    </ul>

                    <br><br>


					
					</ul><!-- .team-social-links end -->
				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_8 end -->


            <!-- .grid_8 start -->
            <article class="grid_12">
                <!-- .heading-bordered start -->

                <div class="triggerAnimation animated" data-animate='fadeInLeft'>
                    <section class="heading-bordered">
                        <h3>Wireless Terminal</h3>
                    </section><!-- .heading-bordered end -->

                <article class="grid_3">
                    <div class="triggerAnimation animated" data-animate="fadeInDown">

                        <ul id="client-carousel-2" class="carousel-li">
                            <li><img src="/assets/img/pictures/iWL250-1.jpg" alt="iCT220-1"/></li>
                            <li><img src="/assets/img/pictures/iWL250-2.jpg" alt="iCT220-2"/></li>
                            <li><img src="/assets/img/pictures/iWL250-3.jpg" alt="iCT220-3"/></li>
                        </ul>

                        <div class="carousel-nav-container">
                            <ul class="carousel-nav">
                                <li>
                                    <a class="c_prev2" href="#"></a>
                                </li>
                                <li>
                                    <a class="c_next2" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .triggerAnimation.animated end -->

                </article>

                <article class="grid_6">
                    <div class="triggerAnimation animated" data-animate="fadeInRight">
                        <ul class="services-overview">
                            <li>
                                <h5> iWL255</h5>
                                <p>
                                    Our secure iWL series lets you accept all electronic payments quickly and easily – in the store or on the road, long or short range. The iWL series represents the smallest, lightest and most convenient payment devices on the market. Garden centers, warehouses, showrooms, home deliveries, pop-up stores, curbside checkouts and more…wherever your sale takes place, count on the iWL range of products for unparalleled speed and versatility.							</p>
                                </p>
                            </li>
                        </ul>
                    </div><!-- .triggeranimation.animated end -->
                </article><!-- .grid_12 -->
            </div><!-- .row end -->


            <p>
                <a class='btn-medium empty' href='/business-service-information'>Click here to talk to a representative</a>
            </p>

    </div><!-- .triggerAnimation.animated end -->
    </article><!-- .grid_8 end -->


		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection
