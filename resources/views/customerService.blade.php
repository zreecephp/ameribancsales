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
					<h1>Our <span class="strong">Professional</span> team is here for you<br />
						Don't hesitate to contact us.</h1>
				</div>
			</div><!-- .grid_6 end -->

			<!-- .grid_6 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInRight">
						<img src="/assets/img/page-titles/customer-service.png" alt="contact us" />
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
							<a href="#">Customer Service </a>
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
			<article class="grid_4">
				<div class="triggerAnimation animated" data-animate="fadeInLeft">
					<section class="heading-bordered">
						<h3>Ameribanc National</h3>
					</section><!-- .heading-bordered end -->

					<p>
                        If you need immediate help or customer service please call our 24 hour hotline at 888-514-0048.
                        If you don’t need immediate help then please feel free to fill out our "Report A Service/Support Issue" and we will get back in touch with you.
					</p>

					<br /><br />
                </div>
            </article><!-- .grid_6 end -->

			<!-- .grid_6 start -->
			<article class="grid_8">
				<div class="triggerAnimation animated" data-animate="fadeInRight">
					<section class="heading-bordered">
						<h4>Report A Service / Support Issue</h4>
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
                    {!! Form::open(['url' => 'customerServiceSubmit', 'method' => 'post']) !!}

						@if ($service['isTechSupport'] == '1')
						
						<fieldset>
                            <div class="form-group">
                                {!! Form::label('Business Name: ', null, ['class' => 'grid_2 control-label']) !!}
                                {!! Form::text('businessName', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
						</fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Merchant ID #: ', null, ['class' => 'grid_2 control-label']) !!}
                                {!! Form::text('merchantId', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
                        </fieldset>
						
						@endif

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Name: ', null, ['class' => 'grid_2 control-label']) !!}
                                {!! Form::text('name', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Phone: ', null, ['class' => 'grid_2 control-label']) !!}
                                {!! Form::text('phone', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

						@if ($service['isTechSupport'] == '1')
						
                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Email: ', null, ['class' => 'grid_2 control-label']) !!}
                                {!! Form::text('email', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Service/Support Issue:', null, ['class' => 'grid_2 control-label']) !!}
								@if ($service['serviceType'] == '')
								<br>
                                {!! Form::select('serviceIssue', array(
                                    'Need Supplies for my Terminal' => '1 – Need Supplies for my Terminal',
                                    'Need Terminal Swap/Upgrade' => '2 – Need Terminal Swap/Upgrade',
                                    'Need Customer Service Call' => '3 – Need Customer Service Call',
                                    'Need Technical Support/Installation Help' => '4 – Need Technical Support/Installation Help',
                                    'Need a new Merchant Account - Sales' => '5 – Need a new Merchant Account - Sales',
                                    'Need to have my number removed from Call List' => '6 – Need to have my number removed from Call List',
                                    'Need to report a problem – I’m not happy' => '7 – Need to report a problem – I’m not happy'), null, ['class' => 'wpcf7-select', 'style' => 'inline !important']) !!}
								@else
									{!! Form::label('serviceType', $service['supportMessage'], ['class' => 'grid_4 control-label']) !!}
									{!! Form::hidden('serviceIssue:', $service['supportMessage']) !!}
									<br>
								@endif
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Best Time to Call: ', null, ['class' => 'grid_2 control-label']) !!}
                                {!! Form::text('callTime', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
                        </fieldset>
						
						@else
							{!! Form::hidden('serviceIssue:', $service['supportMessage']) !!}
						@endif

						<fieldset>
                            <div class="form-group">
                                {!! Form::label('Notes: (tell us what you need so we can be ready with a solution): ', null, ['class' => 'text-color']) !!}
                                {!! Form::textArea('notes', null, ['class' => 'wpcf7-textarea required', 'rows' => '5']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::submit('Submit', ['class' => 'wpcf7-submit']) !!}
                            </div>
                        </fieldset>

                    {!! Form::close() !!}
				</div><!-- .animated.fadeInRight end -->
			</article><!-- .grid_6 end -->
		</div><!-- .row end -->


	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection
