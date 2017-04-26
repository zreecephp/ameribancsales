@extends('app')

@section('page-styles')

@endsection

@section('page-scripts')

	<script  src="http://maps.google.com/maps/api/js?sensor=true"></script> <!-- google maps -->
	<script  src="/assets/js/jquery.ui.map.full.min.js"></script> <!-- jquery plugin for google maps -->

	<script>
		/* <![CDATA[ */
		jQuery(document).ready(function($) {
			'use strict';

			// GOOGLE MAPS START
			$(function() {
				//google maps

				var yourStartLatLng = new google.maps.LatLng(41.864425, -88.139559);
				$('.map_canvas').gmap(
										{
											'center': yourStartLatLng, 
											'zoom': 15,
											'styles': [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}],
											'disableDefaultUI': true, 
											'callback': function() {
						var self = this;
						self.addMarker(
							{
								'position': this.get('map').getCenter(),
								'icon': '/assets/img/Ameribanc-National-Marker.png'
							});
					}});
			}); // GOOGLE MAPS END

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
					<h1>Our <span class="strong">Professional</span> team is here for you<br />
						Don't hesitate to contact us.</h1>
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
							<a href="#">Contact </a>
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
			<article class="grid_6">
				<div class="triggerAnimation animated" data-animate="fadeInLeft">
					<section class="heading-bordered">
						<h3>AmeriBanc National</h3>
					</section><!-- .heading-bordered end -->

					<p>
						Our professional team is here for you, so 
						please don't hesitate to contact us if you have any
						questions, problems or maybe suggestion. We would 
						love to hear from you.

						<br /><br />

						You can reach us on email address by filling out 
						the form on the right, or meet with us in person on 
						some of the addresses below. Just make shore you
						make an appointment first. Contact information is shown below.
					</p>

					<br /><br />

					<ul class="contact-info-list">
						<li>
							<p>
								<i class="icon-home"></i>
								<span class="strong">Address: </span>
								2150 Manchester Rd #100 <br>
								Wheaton, IL 60187
							</p>
						</li>

						<li>
							<p>
								<i class="icon-phone"></i>
								<span class="strong">Telephone: </span>
								866-569-3505
							</p>
						</li>

					</ul>
				</div><!-- .animated .fadeInRight -->
			</article><!-- .grid_6 end -->

			<!-- .grid_6 start -->
			<article class="grid_6">
				<div class="triggerAnimation animated" data-animate="fadeInRight">
					<section class="heading-bordered">
						<h3>Send us a message</h3>
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
                    {!! Form::open(['url' => 'contactSubmit', 'method' => 'post']) !!}

						<fieldset>
                            <div class="form-group">
                                {!! Form::label('First Name: ', null, ['class' => 'grid_1 control-label']) !!}
                                {!! Form::text('firstname', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
						</fieldset>
                        
                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Last Name: ', null, ['class' => 'grid_1 control-label']) !!}
                                {!! Form::text('lastname', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
						</fieldset>

						<fieldset>
                            <div class="form-group">
                                {!! Form::label('Email: ', null, ['class' => 'grid_1 control-label']) !!}
                                {!! Form::text('email', null, ['class' => 'grid_4 wpcf7-text required']) !!}
                            </div>
                        </fieldset>

						<fieldset>
                            <div class="form-group">
                                {!! Form::label('Message: ', null, ['class' => 'text-color']) !!}
                                {!! Form::textArea('msg', null, ['class' => 'wpcf7-textarea required', 'rows' => '5']) !!}
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

        <!-- .row start -->
        <div class="row">

            <!-- .grid_12 start -->
            <div class="grid_12">
                <div class="map_canvas triggerAnimation animated" data-animate="fadeInDown"></div>
            </div><!-- .grid_12 end -->
        </div><!-- .row end -->

	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection
