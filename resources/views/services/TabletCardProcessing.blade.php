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
			
			//  Responsive layout, resizing the items
            $('#client-carousel-3').carouFredSel({
                responsive: true,
                width: '100%',
                auto: false,
                scroll: 1,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                prev: '.c_prev3',
                next: '.c_next3',
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
            $('#client-carousel-4').carouFredSel({
                responsive: true,
                width: '100%',
                auto: false,
                scroll: 1,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                prev: '.c_prev4',
                next: '.c_next4',
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
            $('#client-carousel-5').carouFredSel({
                responsive: true,
                width: '100%',
                auto: false,
                scroll: 1,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                prev: '.c_prev5',
                next: '.c_next5',
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
					<h1>Credit Card Processing and business solutions</h1>
                    <a class='btn-medium empty' href='/business-service-information'>Schedule a call back</a>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" src="/assets/img/pictures/card-machines.png" alt="services page title image" />
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
							<span class="active">Credit Card Processing</span>
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

                <div class="row">
                    <!-- .grid_8 start -->
                    <article class="grid_12">
                        <!-- .heading-bordered start -->
                        <div class="triggerAnimation animated" data-animate='fadeInLeft'>

                            <section class="heading-bordered">
                                <h3>Merchant Services For The Small Business Owner</h3>
                            </section><!-- .heading-bordered end -->

                            <p>
                                Why have we become the choice of so many small business owners in a wide variety of specialties? The answer is simple: we are committed to you and your unique company and will make it our mission to help you prosper. AmeriBanc can enhance all of your hard work by providing a seamless credit card processing system that will allow you to take payments quickly, securely and efficiently. Some of our services even give you the ability to accept payments off site, making things even more convenient for your customers.
                            </p>

                            <br>

                            <h4>Credit Card Processing Solutions</h4>

                            <p>
                                Along with happy buyers must come products and services that make your life easier and as cost-effective as possible. The last thing you need are hidden or confusing fees and high prices.  Our promise is to be fully transparent with all fees and keep processing charges to a minimum. What’s more, it’s our privilege to offer credit processing equipment to you at absolutely no charge. That means free credit card machines for your small business.
                            </p>

                        </div>

                    </article><!-- .grid_8 end -->
                </div><!-- .row end -->
		
		</div>
        
        <div class='row'>
           <article class="grid_3">
                <div class="triggerAnimation animated" data-animate="fadeInDown">

                    <ul id="client-carousel-1" class="carousel-li">
                        <li><img src="/assets/img/pictures/iWL250-1.jpg" alt="groovv-pos-flex-1"/></li>
                        <li><img src="/assets/img/pictures/iWL250-2.jpg" alt="groovv-pos-flex-2"/></li>
                        <li><img src="/assets/img/pictures/iWL250-3.jpg" alt="groovv-pos-flex-3"/></li>
                    </ul>

                    <div class="carousel-nav-container">
                        <ul class="carousel-nav">
                            <li>
                                <a class="c_prev1" href="#"></a>
                            </li>
                            <li>
                                <a class="c_next1" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- .triggerAnimation.animated end -->
            </article>

			<article class="grid_9">
				<div class="triggerAnimation animated" data-animate="fadeInRight">
					<ul class="services-overview">
						<li>
							<h5>Groovv POS Flex</h5>
							<p>
                                Our secure iWL series lets you accept all electronic payments quickly and easily – in the store or on the road, long or short range. The iWL series represents the smallest, lightest and most convenient payment devices on the market. Garden centers, warehouses, showrooms, home deliveries, pop-up stores, curbside checkouts and more…wherever your sale takes place, count on the iWL range of products for unparalleled speed and versatility.							</p>
                            </p>
						</li>
					</ul>
				</div><!-- .triggeranimation.animated end -->
			</article><!-- .grid_12 -->
		</div>
         	
        <div class='row'>
          	<article class="grid_3">
                <div class="triggerAnimation animated" data-animate="fadeInDown">

                    <ul id="client-carousel-2" class="carousel-li">
                        <li><img src="/assets/img/pictures/iWL250-1.jpg" alt="groovv-pos-allinone-1"/></li>
                        <li><img src="/assets/img/pictures/iWL250-2.jpg" alt="groovv-pos-allinone-2"/></li>
                        <li><img src="/assets/img/pictures/iWL250-3.jpg" alt="groovv-pos-allinone-3"/></li>
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

			<article class="grid_9">
				<div class="triggerAnimation animated" data-animate="fadeInRight">
					<ul class="services-overview">
						<li>
							<h5>Groovv POS All-In-One</h5>
							<p>
                                Our secure iWL series lets you accept all electronic payments quickly and easily – in the store or on the road, long or short range. The iWL series represents the smallest, lightest and most convenient payment devices on the market. Garden centers, warehouses, showrooms, home deliveries, pop-up stores, curbside checkouts and more…wherever your sale takes place, count on the iWL range of products for unparalleled speed and versatility.							</p>
                            </p>
						</li>
					</ul>
				</div><!-- .triggeranimation.animated end -->
			</article><!-- .grid_12 -->
		</div>
          
        
          
        
			
	</div>

    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <article class="grid_12">
                <div class="centerText" data-animate='fadeInUp'>
                    <p>
                        <a class='btn-medium empty' href='/business-service-information'>Click here to talk to a representative</a>
                    </p>
                </div><!-- .triggerAnimation.animated end -->
            </article><!-- .grid_12 end -->
        </div><!-- .row end -->
    </div>

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
</section>		

@endsection
