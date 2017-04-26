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
						<img class="float-right" src="/assets/img/pictures/metro-50.jpg" alt="about me page title image" />
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
						<h3>Who is AmeriBanc?</h3>
					</section><!-- .heading-bordered end -->

                    <p>
                        AmeriBanc National was founded in 2004 by industry veterans striving to create a better choice, the Right Choice for small to medium-sized businesses across the nation. AmeriBanc quickly become a leader in the merchant bankcard business by focusing on the real needs of the small business owner.
                    </p>

                    <br><br>

                    <p>
                        AmeriBanc believes strongly that credit card processing, while essential, is not the most important benefit it can provide to a business owner. By offering a true consulting perspective on how to use current tools to market, retain and BUILD a customer base is MUCH more useful by merchants. Providing this while also keeping management and payment tools easy, simple and reliable helps business owner actually succeed at their business. Simply put, by focusing on our business customers’ success, we become successful as a byproduct.
                    </p>

                    <br><br>

                    <p>
                        <img src="/assets/img/pictures/metro-50-plaque.png"  style="float:left; padding: 10px;" />

                        Today, AmeriBanc runs two offices, one in Wheaton, IL and another in Oklahoma City, OK. They hold an A+ rating with the Better Business Bureau. And in 2012, AmeriBanc was honored with the prestigious Metro 50 award in Oklahoma City. The Vendor groups that AmeriBanc integrates with are believed to be true “best of breed” providers and among this group are many recipients of prestigious business awards such as
                    </p>

                    </div>
            </article>
        </div>

        <div class="row">
            <!-- .grid_8 start -->
            <article class="grid_8">
                <!-- .heading-bordered start -->

                <div class="triggerAnimation animated" data-animate='fadeInLeft'>
                    <img src="/assets/img/pictures/inc_500.jpg"/><br><br>
                    <h5>BBB A+ (numerous vendors)</h5>
                    <h5>#11 on the Forbes 100 Most Promising Companies List</h5>


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
