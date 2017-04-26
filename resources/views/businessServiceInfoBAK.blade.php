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
					<h1><span class="strong">How can we help?</span><br />
						Fill out the Information Request Form</h1>
				</div>
			</div><!-- .grid_6 end -->

			<!-- .grid_6 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInRight">
						<img src="/assets/img/page-titles/contact-page-title.png" alt="contact us" />
					</div>
				</div>
			</div>
		</div><!-- .row end -->

		<div class="row">
			<div class="grid_8">
				<div class="breadcrumbs triggerAnimation animated" data-animate="fadeInUp">
					<ul>
						<li>
							<span>You are here:</span>
						</li>

						<li>
							<a href="#">Business Service Information Request </a>
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
            {!! Form::open(['url' => 'businessServiceSubmit', 'method' => 'post']) !!}
			<!-- .grid_6 start -->
			<article class="grid_6">
				<div class="triggerAnimation animated" data-animate="fadeInRight">
					<section class="heading-bordered">
						<h3>Information Request</h3>
					</section><!-- .heading-bordered end -->

                    @if ($errors->any())
                    <section class="error-box">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                    </section>
                    @endif
                    <br><br><br><br>
						<fieldset>
                            <div class="form-group">
                                {!! Form::label('Name: ', null, ['class' => 'grid_2 text-color']) !!}
                                {!! Form::text('name', null, ['class' => 'grid_3 wpcf7-text required']) !!}
                            </div>
						</fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Business Address: ', null, ['class' => 'grid_2 text-color']) !!}
                                {!! Form::text('address', null, ['class' => 'grid_3 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('City: ', null, ['class' => 'grid_2 text-color']) !!}
                                {!! Form::text('city', null, ['class' => 'grid_3 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('State: ', null, ['class' => 'grid_2 text-color']) !!}
                                {!! Form::text('state', null, ['class' => 'grid_3 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Zip: ', null, ['class' => 'grid_2 text-color']) !!}
                                {!! Form::text('zip', null, ['class' => 'grid_3 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

						<fieldset>
                            <div class="form-group">
                                {!! Form::label('Email: ', null, ['class' => 'grid_2 text-color']) !!}
                                {!! Form::text('email', null, ['class' => 'grid_3 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Phone Number: ', null, ['class' => 'grid_2 text-color']) !!}
                                {!! Form::text('phone', null, ['class' => 'grid_3 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Additional Information: ', null, ['class' => 'text-color']) !!}
                                {!! Form::textArea('msg', null, ['class' => 'wpcf7-textarea required', 'rows' => '5']) !!}
                            </div>
                        </fieldset>
                </div><!-- .animated.fadeInRight end -->
            </article><!-- .grid_6 end -->

            <!-- .grid_6 start -->
            <article class="grid_6">
                <div class="triggerAnimation animated" data-animate="fadeInRight">
                        <fieldset>
                            <br>
                            <h5>I am interested in the following information:</h5>
                            <div class="form-group">
                                {!! Form::checkbox('emv', 'Free EMV Terminal', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/icT220-2-thumb.jpg"  />
                                {!! Form::label('Free EMV Terminal Placement: ', null, ['class' => 'text-color']) !!}

                            </div>
                            <div class="form-group">
                                {!! Form::checkbox('rateReview', 'Rate Review', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/review-thumb.png"  />
                                {!! Form::label('Rate Review: ', null, ['class' => 'text-color']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::checkbox('applePay', 'Apple Pay / Google Wallet', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/apple-pay-google-thumb.png" />
                                {!! Form::label('Apple Pay & Google Wallet Service: ', null, ['class' => 'text-color']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::checkbox('groovv', 'Groovv Offers', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/groovv-thumb.png" />
                                {!! Form::label('Groovv Offers: ', null, ['class' => 'text-color']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::checkbox('giftCard', 'Merchant/Gift Cards', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/slide-cards-thumb.png" />
                                {!! Form::label('Merchant/Gift Cards: ', null, ['class' => 'text-color']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::checkbox('mobile', 'Mobile Payments', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/payment-jack-thumb.jpg" />
                                {!! Form::label('Mobile Payment Solutions: ', null, ['class' => 'text-color']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::checkbox('loans', 'Merchant Loans', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/ondeck_thumb.png" />
                                {!! Form::label('Merchant Loans: ', null, ['class' => 'text-color']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::checkbox('internet', 'Internet Payment Solutions', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/auth_thumb.png" />
                                {!! Form::label('Internet Payment Solutions: ', null, ['class' => 'text-color']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::checkbox('check', 'Check Imaging Solutions', null, ['class' => 'wpcf7-text required']) !!}
                                <img src="/assets/img/pictures/check_thumb.png" />
                                {!! Form::label('Check Imaging Services: ', null, ['class' => 'text-color']) !!}
                            </div>
                        </fieldset>

                        <br>

				</div><!-- .animated.fadeInRight end -->
			</article><!-- .grid_6 end -->

            <!-- .grid_6 start -->
            <article class="grid_8">
                <div>
                    <fieldset>
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'wpcf7-submit']) !!}
                        </div>
                    </fieldset>
                </div><!-- .animated.fadeInRight end -->
            </article><!-- .grid_6 end -->
            {!! Form::close() !!}
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection
