@extends('app')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<!-- #page-title start -->
<section id="page-title" class="page-title-1">
	<div class="container">
		<div class="row">
			<div class="grid_6">
				<div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
					<h1>Apple Pay &amp; Google Wallet</h1>
					<h2>The new wave of payments is HERE</h2>
					<h3>More Secure Payments</h3>
					<h3>Faster Checkout Time</h3>
                    <a class='btn-medium empty' href='/business-service-information'>Schedule a call back</a>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_6">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" style="max-width: 200px;" src="/assets/img/pictures/google-wallet.png" alt="services page title image" />
						<img class="float-right" style="max-width: 200px;"  src="/assets/img/pictures/apple-pay.png" alt="services page title image" />
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
							<span class="active">Apple Pay</span>
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
                        <h3>Near Field Communication (NFC)</h3>
                    </section><!-- .heading-bordered end -->

                    <p>
                        While the U.S. payment market is now moving to EMV, Near Field Communication (NFC) technology is emerging as a useful vehicle for consumer transactions. NFC is a communications technology that enables communication between EMV credit card terminals and  applications on mobile tablets and phones. This supports an extremely simple use of NFC for a number of functions.
                    </p>

                    <br>

                    <p>
                        Examples of new services that are possible with this EMV/NFC combination include: identity validation, mobile coupons, mobile advertising, ticketing, mobile payments, access control, information exchange, person-to-person payment, and social networking.
                    </p>

                </div>

            </article><!-- .grid_8 end -->
        </div><!-- .row end -->

		<!-- .row start -->
		<div class="row">
			<!-- .grid_8 start -->
			<article class="grid_12">
				<!-- .heading-bordered start -->
				<div class="triggerAnimation animated" data-animate='fadeInLeft'>
				
					<section class="heading-bordered">
						<h3>Apple Pay</h3>
					</section><!-- .heading-bordered end -->

                    <img src="/assets/img/pictures/passbook-large.png" class="picture-left" />
                    <p>
                        Paying in stores or within apps has never been easier. Gone are the days of searching for your wallet. The wasted moments finding the right card. Now payments happen with a single touch.
                    </p>

                    <br>

                    <p>
                        Apple Pay will change how you make purchases with breakthrough contactless payment technology and unique security features built right into the devices you have with you every day. So you can use your iPhone to pay in a simple, secure, and private way.
                    </p>

                    <br>

                    <p>
                        Make sure you have a terminal that accepts Apple Pay.
                    </p>

                </div>

            </article><!-- .grid_8 end -->
        </div><!-- .row end -->

        <!-- .row start -->
        <div class="row">
            <!-- .grid_8 start -->
            <article class="grid_12">

                <div class="triggerAnimation animated" data-animate='fadeInLeft'>

					<section class="heading-bordered">
						<h3>Google Wallet</h3>
					</section><!-- .heading-bordered end -->

                        <img src="/assets/img/pictures/google-spend-anywhere.png" class="picture-right" />

                        <br>

                        <p>
                            Tap and pay with your phone.
                            Just Tap and Pay with your Android phone everywhere you see this symbol:
                        </p>

                        <br>

                        <p>
                            Spend anywhere with the Google Wallet Card.
                            Use your Google Wallet Card to pay with your Google Wallet Balance in-store at millions of Debit MasterCard® locations. You can also use it to withdraw cash at an ATM, and you'll get instant notifications for every transaction, right on your phone.
                        </p>

                        <br>

                        <p>
                            Stay safe when you shop.
                            Google Wallet comes with 24/7 fraud monitoring as part of Google Wallet Fraud Protection in the US. You can easily disable your Wallet app or card from your Google Wallet account if they’re ever lost or stolen.
                        </p>

                        <br><br>

                        <p>
                        <a class='btn-medium empty' href='/contact'>Click here to talk to a representative</a>
                        </p>

                </div>
					
			</article><!-- .grid_8 end -->

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->


@endsection
