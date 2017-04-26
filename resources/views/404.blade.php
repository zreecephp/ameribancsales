@extends('app')

@section('page-styles')

@endsection

@section('page-scripts')

<script>
/* <![CDATA[ */
jQuery(document).ready(function($) {
	'use strict';

	//  Responsive layout, resizing the items
	$('#testimonial-carousel').carouFredSel({
		responsive: true,
		width: '100%',
		auto: true,
		scroll: 1,
		swipe: {
			onMouse: true,
			onTouch: true
		},
		items: {
			width: '370',
			height: 'variable',
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
					<h1>About Us</h1>
					<h5>AmeriBanc National, LLC is a Chicago-based Merchant Service Provider in business since 2004, holding offices in both Wheaton, IL and Oklahoma City, OK. Since our inception, we have climbed to the top of the hill and are currently a premier ISO, servicing merchants nationwide.</h5>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInRight">
						<img class="float-right" src="/assets/img/Ameribanc-National.png" alt="about me page title image" />
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
							<span class="active">About</span>
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
			<article class="grid_8">
				<!-- .heading-bordered start -->

				<div class="triggerAnimation animated" data-animate='fadeInLeft'>
					<section class="heading-bordered">
						<h3>Who is Ameribanc?</h3>
					</section><!-- .heading-bordered end -->

					<p>
						AmeriBanc National was formed in 2004 by Chris McIntire and Dan Lewis. Their goal in starting up the business was to bring the payment technologies available to the "Big Box" stores to the small to medium-sized businesses. But in an industry rife with expensive equipment and outrageous lease agreements, this posed a large hurdle for the smaller businesses in the U.S.

						<br /><br />

						So AmeriBanc did something unheard of... they started GIVING AWAY the equipment to merchants.

						<br /><br />

						Taking a hit on their end in order to help out the smaller businesses, AmeriBanc was able to place equipment with a wide variety of merchants that previously would not have had the means to get set up to process.
						
						<br /><br />

						Rapidly, AmeriBanc grew to become one of the nations top merchant service providers.

						<br /><br />

						Today, AmeriBanc runs two offices, one in Wheaton, IL and another in Oklahoma City, OK. They hold an A+ rating with the Better Business Bureau. And in 2012, AmeriBanc was honored with the prestigious Metro 50 award in Oklahoma City.
					</p>

					<ul class="team-social-links">
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
                    </ul><!-- .team-social-links end -->
				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_8 end --> 

			{{--<!-- .grid_3 start -->--}}
                    {{--<article class="grid_3">--}}
                        {{--<div class="triggerAnimation animated" data-animate="fadeInRight">--}}
                            {{--<section class="heading-bordered clearfix">--}}
                                {{--<h3>Our <b>happy</b> Clients</h3>--}}
                            {{--</section><!-- .heading-bordered end -->--}}

                            {{--<article>--}}
                                {{--<ul id="testimonial-carousel" class="carousel-li">--}}
                                    {{--<li class="testimonial">--}}
                                        {{--<div class="testimonial-text">--}}
                                            {{--<p>--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a nisi sed erat finibus feugiat at vel neque. Donec feugiat venenatis orci et fermentum. Integer varius nisl sed molestie tincidunt.--}}
                                            {{--</p>--}}
                                        {{--</div>--}}

                                        {{--<div class="testimonial-author clearfix">--}}

                                            {{--<h6 class="testimonial-author-name">[Name],</h6>--}}
                                            {{--<span class="testimonial-author-company">[Business Name]</span>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}

                                    {{--<li class="testimonial">--}}
                                        {{--<div class="testimonial-text">--}}
                                            {{--<p>--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a nisi sed erat finibus feugiat at vel neque. Donec feugiat venenatis orci et fermentum. Integer varius nisl sed molestie tincidunt.--}}
                                            {{--</p>--}}
                                        {{--</div>--}}

                                        {{--<div class="testimonial-author clearfix">--}}

                                            {{--<h6 class="testimonial-author-name">[Name],</h6>--}}
                                            {{--<span class="testimonial-author-company">[Business Name]</span>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}

                                    {{--<li class="testimonial">--}}
                                        {{--<div class="testimonial-text">--}}
                                            {{--<p>--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a nisi sed erat finibus feugiat at vel neque. Donec feugiat venenatis orci et fermentum. Integer varius nisl sed molestie tincidunt.--}}
                                            {{--</p>--}}
                                        {{--</div>--}}

                                        {{--<div class="testimonial-author clearfix">--}}

                                            {{--<h6 class="testimonial-author-name">[Name],</h6>--}}
                                            {{--<span class="testimonial-author-company">[Business Name]</span>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</article><!-- .testimonial-carousel end -->--}}
                        {{--</div><!-- .triggerAnimation.animated end -->--}}
                    {{--</article><!-- .grid_3 end -->--}}

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

		
@endsection
