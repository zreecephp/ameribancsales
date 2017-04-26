@extends('app')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<!-- #page-title start -->
<section id="page-title" class="page-title-1" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="grid_8">
				<div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
					<h1>On Deck Business Loans</h1>
					<h5>On Deck is a True business loan that makes the lending application process simple, allowing business owners fast access to much needed funds.</h5>
					<a class='btn-medium empty' href='/contact'>Schedule a call back</a>
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
							<span class="active">On Deck</span>
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
						<h3>On Deck Business Loans</h3>
					</section><!-- .heading-bordered end -->

					<p>
					Fast access to Cash for your business.
					</p>
					
					<br>
					
					<p>
					On Deck and AmeriBanc National offer a true business loan that will help build your business credit. On Deck employs a technology that focuses on the true health of your business and not just your credit score.
					</p>
					
					<br>
					
					<p>
					Unlike "Cash Advance"-type loans, On Deck is an actual "Loan Device" which allows for a lower interest rate. This makes an On Deck loan about HALF of the cost of a "Cash Advance".
					</p>
					
					<br>
					
					<p>
					The Check Imager also eliminates the need for you to go and physically deposit your checks into the bank. So, not only does it guarantee the funds, but it also directly deposits those funds into your business account. 						
					</p>
					
					<br>
					
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
