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
					<h1>Check Imaging</h1>
					<h5>Check Imaging is the latest solution offered to merchants to allow them to accept personal checks from any and everyone of their customers from anywhere in the US. No longer are regular, time-wasting trips to the bank necessary!</h5>
                    <a class='btn-medium empty' href='/business-service-information'>Schedule a call back</a>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" src="/assets/img/pictures/check.png" alt="services page title image" />
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
							<span class="active">Check Imaging</span>
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
						<h3>Check Imaging</h3>
					</section><!-- .heading-bordered end -->

                    <h5>Simplify Check Processing and Deposits with Conversion Plus</h5>

                    <p>Streamline payment processing when your customers pay by check. Convert checks at the point-of-sale using your terminal or PC and an imager. Checks are imaged, uploaded and funded to your account.

                    <br><br>

                    <p>Our guarantee service means transactions that are returned from the bank are not debited from your account, eliminating claims submittal and reimbursement period. Fewer trips to the bank, reduced bank fees, and less time spent on paperwork are just a few of the benefits you’ll see with this service.

                    <br><br>

                    <ul class="icons-list icon-checkmark-list colored">
                        <li> Program compatibility with most imagers and terminals</li>
                        <li> Online reporting provides transaction information 24/7</li>
                        <li> Deposit without leaving your office</li>
                        <li> Stop Payment protection available</li>
                     </ul>

                    <br>

                    <h4>Business Office Conversion Plus Enhancement</h4>

                    <p>Process checks mailed in for payment, including business checks, right from your desktop with this service enhancement.</p>

                    <br><br>

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
