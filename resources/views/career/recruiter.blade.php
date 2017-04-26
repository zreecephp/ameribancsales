@extends('appredbar')

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
					<h1>
						We are always searching for <br />
						<span class="strong">Talented</span> individuals 
					</h1>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" style="position: relative !important; top: -50px;" src="/assets/img/pictures/hiring.png" alt="We are Hiring" title="We are Hiring" /> 
					</div>
				</div>
			</div><!-- .grid_4 end -->
		</div><!-- .row end -->

		<div class="row">
			<div class="grid_8">
				<div class="breadcrumbs triggerAnimation animated" data-animate="fadeInUp">
					<ul>
						<li>
							<span>Start Your</span>
						</li>

						<li>
							<span class="active">Career</span>
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
			<!-- .grid_6 start -->
			<section class='grid_5'>
				<img src='/assets/img/pictures/ImageConsultant.jpg' style="" class='triggerAnimation animated' data-animate='fadeInLeft' alt='we are hiring'/>
			</section><!-- .grid_6 end -->

			<article class='grid_7'>
				<div class="triggerAnimation animated" data-animate='fadeInRight'>
					<section class="heading-bordered clearfix">
						<h3><b>Your Career With AmeriBanc National</b></h3>
					</section><!-- .heading-bordered end -->

					<p>Please take a moment to review the content on our website. We would like you to take the time to review each section while you move through this interview process. Your login information is on the EMAIL you received. </p><br />
                    <p>Some of this content is only for our select candidates and it is not accessible to the general public. You can access it by using the login that was sent to you.</p>

					<br />

					<ul class="">
						<li><span style="color:red; font-size:large;"><b>START HERE: </b></span>&nbsp;<a href="introduction"  target="_blank" style="font-size:medium;text-decoration:underline; color:blue;">Countdown Plan: 10 Steps in joining the Ameribanc Team</a></li><br />
						<li><span style="color:red; font-size:large;"><b>CONTINUE HERE: </b></span>&nbsp;<a href="../wealthpage/introduction"  target="_blank" style="font-size:medium;text-decoration:underline; color:blue;">Wealth Plan: The Opportunity</a><br />"Many have the will to win, but few have the will to prepare to win" - Vince Lombardi</li><br />
						<li><span style="color:red; font-size:large;"><b>FINISH HERE: </b></span>&nbsp;<a href="../services"  target="_blank" style="font-size:medium;text-decoration:underline; color:blue;">Products and Services: Here you can review more about Ameribanc and what we offer our customers.</a><br />Please be sure to review each of the above sections before your next interview.</li><br />
					</ul>

				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_6 end -->
		</div><!-- .row end -->

		
	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection
