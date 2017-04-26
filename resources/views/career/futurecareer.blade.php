@extends('appempty')


@section('page-styles')
	<!-- Revolution slider -->
	<link rel="stylesheet" href="/assets/plugins/rs-plugin/css/settings.css"/>
	<link rel="stylesheet" href="/assets/plugins/rs-plugin/css/theme-settings.css"/>
	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <link rel="stylesheet" href="/assets/css/counter/jquery.counter-analog4.css">
@endsection

@section('page-scripts')
<script>

</script>
<script>
/* <![CDATA[ */

jQuery(document).ready(function($) {
	'use strict';

	//REVOLUTION SLIDE
	var revapi;
	revapi = jQuery('.tp-banner').revolution(
			{
				delay: 5000,
				startwidth: 1170,
				startheight: 500,
				hideThumbs: 10,
				fullWidth: "on",
				forceFullWidth: "on",
                controlNav: true,
                navigationType: "bullet" // bullet, thumb, none
			});


	// PRETTYPHOTO LIGHTBOX START
	if (jQuery().prettyPhoto) {
		piPrettyphoto();
	}
	function piPrettyphoto() {
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools: false});
	}// PRETTYPHOTO LIGHTBOX END
	
	$('#clickme').click(function() {
		$('html,body').animate({
			  scrollTop: $("#applyspot").offset().top + -30
		});
	});


});

/* ]]> */
</script>

<script type="text/javascript" src="/assets/js/countdown.js"></script>
<script type="text/javascript" src="/assets/js/jquery.counter.js"></script>
<script src="{{asset('assets/js/jquery.cookie.js')}}"></script>
<!-- countdown -->
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function(){

                    $('.counter').counter({});
					$.cookie('landingpage', 1, {expires:365});
			 
    });
    //]]>
</script>
<!-- scripts end -->


<script src="/assets/plugins/flex-slider/jquery.flexslider.js"></script>

<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 500,
    itemMargin: 10
  });
});
</script>






@endsection

@section('content')

<span id="countdown2"></span>



<!-- .page-content start -->
<section class="page-content background-black add-margin">
<!-- .tp-wrapper start -->
	<div class="tp-wrapper">
		<!-- .tp-banner-container start -->
		<div class="tp-banner-container" style="margin-bottom:-50px;">
			<div class="tp-banner">
				<ul>						
                    <!-- slide 5 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        
                        <img src="/assets/img/slider/slide-6-2.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
						
                        
                        <!-- layer box -->
                        <div class="tp-caption list-left sfl"
                             data-x="550"
                             data-y="50"
                             data-speed="400"
                             data-start="200"
                             data-endspeed="300" style="background-color: ; height: 350px; width: 550px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="20"
                             data-speed="400"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h1 style="color: #0052A4">Our sales team makes</h1>
                        </div>

                        <!-- layer 2 -->
                        <div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="60"
                             data-speed="400"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h1 style="color: #0052A4">us different</h1>
                        </div>
						
						<!-- layer 3 -->
						<div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="85"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h1 style="color: #0052A4"><br>We look for the <strong>best</strong></h1>
                        </div>

                        <!-- layer 3 -->
                        <div class="tp-caption list-left sfl"
                             data-x="700"
                             data-y="125"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h1 style="color: #0052A4"><br>and the <strong>brightest</strong></h1>
                        </div>
						
						
					</li>					
				</ul>
			</div><!-- .tp-banner end -->
		</div><!-- .tp-banner end -->
	</div><!-- .tp-wrapper end -->
</section><!-- .page-content end -->

<!-- .page-content start -->
<section class="page-content">
	<!-- .container start -->
	<div class="container">
		<!-- .row start -->
		<div class="row">
			
			<article class='grid_12'>
				<div class="triggerAnimation animated" data-animate='fadeInRight'>
					<section class="heading-bordered clearfix">
						<a href="#" id="clickme">
                        	<h3>Come Begin <b>YOUR</b> <b>CAREER <span style="color:#AC171C">(Click Here To Apply) {{ $seoValues['pageTitle'] }}</span></b>!</h3>
                        </a>
                        <br/><br/><br/>
                        <h4>Why do we want <b>YOU NOW?</span></b>!</h4>
					</section><!-- .heading-bordered end -->
					
                    
					<p>
						<h5 style="color:black;">Because we are expanding our sales force. AmeriBanc National has been an industry leader since 2004 providing much needed financial services to the small-medium sized business sector, where nearly every owner can benefit significantly with our services. NOW those same businesses need us to provide them with our FREE EMV placement terminal. In October of 2015 VISA/MasterCard did a LIABILITY SHIFT that could make all merchants liable for any fraudulent transactions if they don’t have one of the new EMV CAPABLE terminals. That is why all of the large volume merchants are installing them NOW and why our merchants should as well!
                        </h5>
					</p>
                    <p>
                    	<h5 style="color:black;">We offer our Merchant Consultants 3-5 Daily Sales Appointments set with the VERIFIED Business Owner!</h5>
                    </p>

				</div><!-- .triggerAnimation.animated end -->
                
			</article><!-- .grid_6 end -->
            <!-- .grid_12 start -->
            <div class="grid_12">
				<iframe width="300" height="250" src="https://www.youtube.com/embed/nl9blgLTdco?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <iframe width="300" height="250" src="https://www.youtube.com/embed/eaT0fIjqdBw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <iframe width="400" height="250" src="https://www.youtube.com/embed/xFK0yu4H89E?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
		</div><!-- .row end -->

		<!-- .row start -->
		<div class="row" id="applyspot">
			<!-- .grid_8 start -->
			<article class="grid_8">
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="heading-bordered clearfix">
						<h3><b>Sales Professional</b></h3>
					</section><!-- .heading-bordered end -->

						<div class="content" style="font-size:24px;">
							<p style="font-size:18px;">
								You don't have to have an extensive sales background to be successful in this role! In fact, several successful AmeriBanc National Sales Consultants have come from various different backgrounds. Consider a career change from the Military, Customer Service, Real Estate or Insurance, to name a few!
								<br><br>
								"Earn large weekly commissions for yourself and learn how to create recurring, Monthly Residual Income for the rest of your life with AmeriBanc, just like I did."
								<br>
								David P., IL <!---($20K+/monthly Residual earner)-->
								<br>
							</p>
							<br />
							<strong>Candidate Requirements</strong>
							<ul class="icons-list icon-checkmark-circle-list colored" >
								<li><p style="font-size:18px;">Relevant outside sales experience (2-5 years is preferred, but not necessary.)</p></li>
								<li><p style="font-size:18px;">Strong communication skills and the ability to give compelling presentations</p></li>
								<li><p style="font-size:18px;">Demonstrated closing skills (Trial Closing, Asking for Sale, Needs Analysis, etc)</p></li>
								<li><p style="font-size:18px;">Coachable and Teachable approach to Systematic Sales Success</p></li>
							</ul> 
							<br />
							<strong>Our Consultants benefit from the following:</strong>
							<ul class="icons-list icon-checkmark-circle-list colored">
								<li><p style="font-size:18px;">Preset Appointments</p></li>
								<li><p style="font-size:18px;">Fast Start Bonus</p></li>
								<li><p style="font-size:18px;">Ability to earn DAILY, Weekly & Monthly Bonuses</p></li>
								<li><p style="font-size:18px;">Powerful Industry Sales Training</p></li>
							</ul>
							<br />
							<strong>AmeriBanc National is different from the competition.</strong>
							<ul class="icons-list icon-checkmark-circle-list colored">
								<li><p style="font-size:18px;">We have an A+ Rating with the Better Business Bureau - Look us up</p></li>
								<li><p style="font-size:18px;">We train our people to become CONSULTANTS and truly learn the industry</p></li>
								<li><p style="font-size:18px;">AmeriBanc has a "Graduate" program for you to become an Independent Agent</p></li>
								<li><p style="font-size:18px;">We sell our Customers on VALUE vs. PRICE</p></li>
                                <li><p style="font-size:18px;">We show our customers how to BUILD their BUSINESS REVENUES</p></li>
                                <li><p style="font-size:18px;">We express the efficiency in lowering their processing costs</p></li>
							</ul>
							<br />
							{{--<a class='btn-medium empty' href='/career/introduction'>I want to know more</a>--}}
						</div>
				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_8 end -->

            <!-- .grid_4 start -->
            <article class="grid_4">
                <div class="triggerAnimation animated" data-animate="fadeInRight">
                    <section class="heading-bordered">
                        <h3>Apply for <b>Position</b></h3>
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

                    {!! Form::open(['url' => 'career/careerSubmit', 'method' => 'post', 'files' => true]) !!}
                    		{!! Form::hidden('page', 'futurecareer', ['class' => 'wpcf7-text required']) !!}
							{!! Form::hidden('fromsite', $thesrc, ['class' => 'wpcf7-text required']) !!}
                    </br><br/><br/><br/><br/>
                    <fieldset>
                        <div class="form-group">
                            <label><span class="text-red">*</span> First Name:</label><br/>
                            {!! Form::text('firstname', null, ['class' => 'wpcf7-text required']) !!}
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <div class="form-group">
                            <label><span class="text-red">*</span> Last Name:</label><br/>
                            {!! Form::text('lastname', null, ['class' => 'wpcf7-text required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            <label><span class="text-red">*</span> Phone Number:</label><br/>
                            {!! Form::text('phone', null, ['class' => 'wpcf7-text required']) !!}
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <div class="form-group">
                            <label><span class="text-red">*</span> Zip Code:</label><br/>
                            {!! Form::text('zipcode', null, ['class' => 'wpcf7-text required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            <label><span class="text-red">*</span> Email:</label><br/>
                            {!! Form::text('email', null, ['class' => 'wpcf7-text required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Message:', null, ['class' => 'text-color']) !!}
                            {!! Form::textArea('msg', null, ['class' => 'wpcf7-textarea required', 'rows' => '5']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::hidden('position', 'Sales Professional', ['class' => 'wpcf7-text required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <label><span class="text-red">*</span> Upload your Resume:</label>
                        {!! Form::file('resume') !!}
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'wpcf7-submit']) !!}
                        </div>
                    </fieldset>

                    {!! Form::close() !!}
                </div><!-- .animated.fadeInRight end -->
            </article><!-- .grid_4 end -->


		</div><!-- .row end -->
	</div><!-- .container end -->
    
    
</section><!-- .page-content end -->


@endsection
