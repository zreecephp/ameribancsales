@extends('app')

@section('page-scripts')
   <script>
		/* <![CDATA[ */
		jQuery(document).ready(function($) {
			'use strict';

			//  Responsive layout, resizing the items
			$('#client-carousel').carouFredSel({
				responsive: true,
				width: '100%',
				height: '100%',
				auto: false,
				scroll: 1,
				swipe: {
					onMouse: true,
					onTouch: true
				},
				prev: '.c_prev',
				next: '.c_next',
				items: {
					width: 170,
					height: '100%',
					visible: {
						min: 1,
						max: 6
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
					<h1>Adding Secure Payments	
					<br> 
					that <strong>Increase Revenue</strong></h1>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" src="/assets/img/pictures/Collage2017-01-16.png" alt="services page title image" />
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
							<span class="active">Services</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- .container end -->
</section><!-- #page-title end -->

<!-- .page-content start -->
<section class="page-content parallax pattern" data-stellar-background-ratio="0.5">
	<!-- .container start -->
	<div class="container">
		<!-- .row start -->
		<div class="row">
			<!-- .grid_6 start -->
			<article class="grid_12">
				<section class="heading-centered triggerAnimation animated" data-animate="bounceIn">
					<h2>Our Professonal Services</b></h2>
				</section>
			</article><!-- .grid_6 end -->
		</div><!-- .row end -->

		<div class="row">
			<article class="grid_12">
				<ul class="tabs services-tabs vertical triggerAnimation animated" data-animate='fadeInUp'>
					<li class="active">
						<a href="/services/credit-card-processing">
							<img src="/assets/img/pictures/Gold-card-small.png" style="float: left;" alt='retina ready'/>

							<h5>EMV Upgrade Service</h5>

							<p>
								AmeriBanc National offers Free Processing Equipment Placement along with our World Class processing service. We cater to the small-medium size businesses, allowing them to utilize the payment technologies that are usually only afforded by the larger stores.
							</p>
						</a>
					</li>
					
					<li class="active">
						<a href="/services/credit-card-processing">
							<img src="/assets/img/pictures/apple-pay-google-small.png" style="float: left;" alt='retina ready'/>

							<h5>Apple Pay &amp Google Wallet</h5>

							<p>
								AmeriBanc National offers Free Processing Equipment Placement along with our World Class processing service. We cater to the small-medium size businesses, allowing them to utilize the payment technologies that are usually only afforded by the larger stores.
							</p>
						</a>
					</li>
					
					<li class="active">
						<a href="#">
							<img src="/assets/img/pictures/new-flex-image-with-printer.png" style="float: left;" alt='retina ready'/>

							<h5>Tablet Based Cash Register</h5>

							<p>
								AmeriBanc National offers the most versatile and mobile POS system designed for today’s merchants, Tablet based Cash registers provide the versatility and tools you need to maximize revenue and run your business – all in an affordable solution that’s easy to use.
							</p>
						</a>
					</li>
					
					<li class="active">
						<a href="/services/credit-card-processing">
							<img src="/assets/img/pictures/Vx520_VX805_large.png" style="float: left;" alt='retina ready'/>

							<h5>Credit/Debit Card Processing</h5>

							<p>
								AmeriBanc National offers Free Processing Equipment Placement along with our World Class processing service. We cater to the small-medium size businesses, allowing them to utilize the payment technologies that are usually only afforded by the larger stores.
							</p>
						</a>
					</li>
					
					<li class="active">
						<a href="/services/groovv">
							<img src="/assets/img/pictures/groovv-small.png" style="float: left;" alt='retina ready'/>

							<h5>Groovv</h5>

							<p>
								Create and publish exciting text-based offers in under 2 minutes that reach your customers instantly.
							</p>
						</a>
					</li>
					
					<li class="active">
						<a href="/services/merchant-cards">
							<img src="/assets/img/pictures/merc_small.png" style="float: left;" alt='retina ready'/>

							<h5>Merchant Cards</h5>

							<p>
								Whether you use them as traditional gift cards or in one of the various other highly effective ways we can show you, we have a Merchant Card Solution for your business.
							</p>
						</a>
					</li>
					
					<li class="active">
						<a href="/services/mobile-solutions">
							<img src="/assets/img/pictures/payjack_small.png" style="float: left;" alt='retina ready'/>

							<h5>Mobile Solutions</h5>

							<p>
								Coming to the aid of mobile merchants everywhere, AmeriBanc offers the latest and greatest in mobile processing technology.
							</p>
						</a>
					</li>

					<li class="active">
						<a href="/services/merchant-loans">
							<img src="/assets/img/pictures/ondeck_small.png" style="float: left;" alt='retina ready'/>

							<h5>Merchant Loans</h5>

							<p>
								From time to time, businesses may run into situations that warrant the need for a little extra help or a little push. Let us help you out.
							</p>
						</a>
					</li>

					<li class="active">
						<a href="/services/authorize-net">
							<img src="/assets/img/pictures/auth_small.png" style="float: left;" alt='retina ready'/>

							<h5>Internet / Authorize.net</h5>

							<p>
								These days, anything and everything can be found on the World Wide Web. If you operate an online storefront, you can now be able to accept payments online using our Processing Gateway.
							</p>
						</a>
					</li>	
					
					<li class="active">
						<a href="/services/check-imaging">
							<img src="/assets/img/pictures/check_small.png" style="float: left;" alt='retina ready'/>

							<h5>Check Services / Imaging</h5>

							<p>
								Save valuable time and reduce your risk by using our Check Imaging System. Now you can take checks from anyone in the US with no worries. Trust everyone like they are your next door neighbor.
							</p>
						</a>
					</li>

				
				</ul>
				</section>
			</article>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->


@endsection
