@extends('app')

@section('page-styles')

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">

@endsection

@section('page-scripts')

	<script src="/assets/plugins/flex-slider/jquery.flexslider.js"></script>

	<script>
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 210,
		itemMargin: 10
	  });
	});
	</script>
	
@endsection

@section('content')

<!-- #page-title start -->
<section id="page-title" class="page-title-1" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="grid_8">
				<div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
					<h1>Merchant Loans</h1>
					<h5>On Deck is a True business loan that makes the lending application process simple, allowing business owners fast access to much needed funds.</h5>
                    <a class='btn-medium empty' href='/business-service-information'>Schedule a call back</a>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" src="/assets/img/pictures/on-deck.png" alt="services page title image" />
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
							<span class="active">Merchant Loans</span>
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
						<h3>Merchant Loans</h3>
					</section><!-- .heading-bordered end -->

					<p>
					<strong>Fast access to Cash for your business.</strong>
					</p>
					
					<br>
					
					<h5>Easy to PreQualify</h5>

					<img src="/assets/img/pictures/ondeck-loan-grid.png" style="float: right; padding-right: 100px;" />
					<ul class="icons-list icon-checkmark-list colored">
						<li> 2 Years in Business </li>
						<li> $2000 Avg Bank Balance </li>
						<li> 500 FICO Score Minimum </li>
						<li> $8500 Total Monthly Revenue </li>
						<li> Bankruptcies over 4 years closed </li>
					</ul>
					
					<br><br>
					
					<p>
					On Deck and AmeriBanc National offer a true business loan that will help build your business credit. On Deck employs a technology that focuses on the true health of your business and not just your credit score.
					</p>
					
					<br>
					
					<p>
					Unlike "Cash Advance"-type loans, On Deck is an actual "Loan Device" which allows for a lower interest rate. This makes an On Deck loan about HALF of the cost of a "Cash Advance".
					</p>
				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_8 end --> 

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->
					
<section class="page-content parallax parallax-1">
	<!-- .container start -->
	<div class="container">
		<!-- .row start -->
		<div class="row">
			<!-- .grid_8 start -->
			<article class="grid_12">
				<!-- .heading-bordered start -->
				
					<h4>On Deck Typical Uses:</h4>
					
					<img src="/assets/img/pictures/ondeck-options.png" />
					
					<br><br>
					
					<img src="/assets/img/bbb-a-plus-accredited-logo.png" style="float: left;" />
					<ul class="icons-list icon-checkmark-list colored">
						<li> $5000 to $150,000 Loan Programs </li>
						<li> Approval decisions as fast as 1 day </li>
						<li> Funding as fast as 2 days </li>
						<li> Half the cost of "Cash Advances" </li>
					</ul>
    			</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_8 end --> 

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

<section class="page-content">
	<!-- .container start -->
	<div class="container">
		<!-- .row start -->
		<div class="row">
			<!-- .grid_8 start -->
			<article class="grid_12">
				<!-- .heading-bordered start -->
					
					<h4>On Deck featured nationally on <strong>MSNBC</strong> and:</h4>
					
					<div class="flexslider col-md-12">
							<ul class="slides">
								<li>
									<img src="/assets/img/pictures/businessweek.png" class="pad-right" />
								</li>
								<li>
									<img src="/assets/img/pictures/new-york-times.png" class="pad-right" />
								</li>
								<li>
									<img src="/assets/img/pictures/inc.png" class="pad-right" />
								</li>
								<li>
									<img src="/assets/img/pictures/wsj.png" class="pad-right" />
								</li>
								<li>
									<img src="/assets/img/pictures/usa-today.png" class="pad-right" />
								</li>
								<li>
									<img src="/assets/img/pictures/tech-crunch.png" class="pad-right" />
								</li>
						  </ul>
					</div>
					
					<p>
                        <a class='btn-medium empty' href='/business-service-information'>Click here to talk to a representative</a>
					</p>
					
					</ul><!-- .team-social-links end -->
				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_8 end --> 

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->


@endsection
