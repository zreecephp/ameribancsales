@extends('appempty')

@section('page-styles')
<link rel="stylesheet" href="/assets/css/landingpage.css" />
<style type="text/css">

</style>
@endsection

@section('page-scripts')
<script type="text/javascript">
	    $('#clickme').click(function() {
			$('html,body').animate({
			   scrollTop: $("#applyspot").offset().top + -30
			});
		});
</script>
@endsection

@section('content')

<!-- #page-title start -->
<!--<section id="page-title" class="page-title-1" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="grid_8">
				<div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
					<h1>
                            <span class="strong">New</span> and <span class="strong">Exciting</span> Things Are Happening at <br />
                            <span style="text-decoration:underline;">AmeriBanc National</span>
                            <img src="/assets/img/logo@2x.png"  alt="Ameribanc National" title="Ameribanc National" />
					</h1>
				</div>
			</div>--><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<!--<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" style="position: relative !important; top: -50px;" src="/assets/img/pictures/hiring.png" alt="We are Hiring" title="We are Hiring" />
					</div>
				</div>
			</div>--><!-- .grid_4 end -->
		<!--</div> .row end 

		<div class="row">
			<div class="grid_8">
				
			</div>
		</div>
	</div>--><!-- .container end 
</section>--><!-- #page-title end -->
<div class="tp-wrapper">
		<!-- .tp-banner-container start -->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<!-- slide 1 start -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
						<!-- main image -->
						<img src="/assets/img/slider/slide-1-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

						<!-- layer 1 -->
						<div class="tp-caption regular lft"
							 data-x="0"
							 data-y="80"
							 data-speed="300"
							 data-start="1000"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><h2 style="color: #000">The Premier <b>Merchant Service</b> Provider.</h2>
						</div>

						<!-- layer 2 -->
						<div class="tp-caption regular small sfl"
							 data-x="405"
							 data-y="130"
							 data-speed="300"
							 data-start="1500"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><h3><b>AmeriBanc National</b></h3>
						</div>

						<!-- layer 3 -->
						<div class="tp-caption sfl"
							 data-x="550"
							 data-y="225"
							 data-speed="300"
							 data-start="1500"
							 data-easing="Back.easeOut"
							 data-endspeed="300">
                             <img src="/assets/img/Ameribanc-National.png" />
                        </div>

						<!-- layer 4 -->
						<div class="tp-caption list-left sfl"
							 data-x="0"
							 data-y="170"
							 data-speed="300"
							 data-start="2200"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><p><span style="color: #000">Free Equipment Placement</span></p>
						</div>

						<!-- layer 5 -->
						<div class="tp-caption list-left sfl"
							 data-x="0"
							 data-y="230"
							 data-speed="300"
							 data-start="2800"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><p><span style="color: #000">A+ BBB Rating</span></p>
						</div>
						
						<!-- layer 6 -->
						<div class="tp-caption list-left sfl"
							 data-x="40"
							 data-y="300"
							 data-speed="400"
							 data-start="3400"
							 data-easing="Back.easeOut"
							 data-endspeed="300">
                            <img src="/assets/img/bbb-a-plus-accredited-logo.png" style="width: 198px; height: 75px;">
						</div>
						
						

						<!-- layer 7 -->
						<div class="tp-caption list-left sfl"
							 data-x="0"
							 data-y="400"
							 data-speed="300"
							 data-start="4000"
							 data-easing="Back.easeOut"
							 data-endspeed="300"><p><span style="color: #000">Merchant Services</span></p>
						</div>
					</li>

                    <!-- slide 2 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        <img src="/assets/img/slider/slide-2-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                        <!-- layer box -->
                        <div class="tp-caption list-left sfr"
                             data-easing="easeInCubic"
                             data-x="570"
                             data-y="50"
                             data-speed="100"
                             data-start="800"
                             data-endspeed="300" style="background-color: #014ea3; height: 390px; width: 800px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="70"
                             data-speed="400"
                             data-start="200"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2><b>By 2017 less than 23% of all <br>transactions will be in cash</b></h2>
                        </div>

						<!-- layer 2 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="170"
                             data-speed="400"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4>Business experts project less than 15% of Small Businesses</br>
                                                    will be equipped to accept EMV/Chip cards by end of 2015</br>
                                                    and anticipate credit card fees to be drastically increased</br>
                                                    for merchants who have not met the deadline until such time as</br>
                                                    they do upgrade their equipment at the check-out counter…</h4>
                        </div>

                        <!-- layer 4 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="370"
                             data-speed="400"
                             data-start="800"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4>Most small businesses are unhappy with the cost or service <br>they receive from their current Merchant Service Company</h4>
                        </div>


					</li>
						
                    <!-- slide 3 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        <img src="/assets/img/slider/slide-3-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                        <!-- layer box -->
                        <div class="tp-caption list-left sfl"
                             data-x="500"
                             data-y="0"
                             data-speed="400"
                             data-start="200"
                             data-endspeed="300" style="background-color: #fff; height: 500px; width: 8500px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="70"
                             data-speed="400"
                             data-start="200"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2 style="color: #000">At <strong>AmeriBanc</strong> we are <u>committed</u></h2>
                        </div>
						
						<!-- layer 2 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="110"
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h3 style="color: #000">to helping you enhance the business you're building</h3>
                        </div>

						<!-- layer 3 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="170"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">Let us help you identify the benefits<br> of specific payment services for your unique business</h4>
                        </div>

						<!-- layer 4 -->
						<div class="tp-caption list-left sfl"
                             data-x="1100"
                             data-y="270"
                             data-speed="200"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/mobile.png" class="slider-image" />
                        </div>
						
						<!-- layer 5 -->
						<div class="tp-caption list-left sfl"
                             data-x="500"
                             data-y="350"
                             data-speed="200"
                             data-start="450"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/groovv.png" class="slider-image" />
                        </div>
						
						<!-- layer 6 -->
						<div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="270"
                             data-speed="200"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/apple-pay.png" class="slider-image" />
                        </div>
						
						<!-- layer 7 -->
						<div class="tp-caption list-left sfl"
                             data-x="750"
                             data-y="250"
                             data-speed="200"
                             data-start="550"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/google-wallet.png" class="slider-image" />
                        </div>
						
						<!-- layer 8 -->
						<div class="tp-caption list-left sfl"
                             data-x="900"
                             data-y="270"
                             data-speed="200"
                             data-start="600"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/merc_small.png" class="slider-image" />
                        </div>
						
						<!-- layer 9 -->
						<div class="tp-caption list-left sfl"
                             data-x="1000"
                             data-y="350"
                             data-speed="200"
                             data-start="650"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><img src="/assets/img/pictures/auth_small.png" class="slider-image" />
                        </div>

					</li>
											
                    <!-- slide 4 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        <img src="/assets/img/slider/slide-4-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                        <!-- layer box -->
                        <div class="tp-caption list-left sfl"
                             data-x="550"
                             data-y="50"
                             data-speed="400"
                             data-start="200"
                             data-endspeed="300" style="background-color: #fff; height: 320px; width: 850px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="70"
                             data-speed="400"
                             data-start="200"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2 style="color: #000">At AmeriBanc you can expect:</h2>
                        </div>
						
						<!-- layer 2 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="150"
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">24-7 Support</h4>
                        </div>
						
						<!-- layer 3 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="210"  
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">A team of highly trained sales and support staff</h4>
                        </div>
						
						<!-- layer 4 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="270"
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">The ability to get your money FASTER (Next Day Deposits)</h4>
                        </div>
						
						<!-- layer 5 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="330"
                             data-speed="400"
                             data-start="300"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h4 style="color: #000">Control over your service (Month-to-Month)</h4>
                        </div>						
					</li>
					
											
                    <!-- slide 5 start -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1200">
                        <!-- main image -->
                        <img src="/assets/img/slider/slide-6-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                        <!-- layer box -->
                        <div class="tp-caption list-left sfl"
                             data-x="550"
                             data-y="50"
                             data-speed="400"
                             data-start="200"
                             data-endspeed="300" style="background-color: #fff; height: 350px; width: 550px;opacity: 0.8 !important; filter: alpha(opacity=80);"><span >&nbsp;</span></h2>
                        </div>

                        <!-- layer 1 -->
						<div class="tp-caption list-left sfl"
                             data-x="600"
                             data-y="70"
                             data-speed="400"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2 style="color: #000">Our sales team makes</h2>
                        </div>

                        <!-- layer 2 -->
                        <div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="120"
                             data-speed="400"
                             data-start="400"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h2 style="color: #000">us different</h2>
                        </div>
						
						<!-- layer 3 -->
						<div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="170"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h3 style="color: #000"><br>We look for the <strong>best</strong></h3>
                        </div>

                        <!-- layer 3 -->
                        <div class="tp-caption list-left sfl"
                             data-x="700"
                             data-y="200"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><h3 style="color: #000"><br>and the <strong>brightest</strong></h3>
                        </div>
						
						<!-- layer 2 -->
						<div class="tp-caption list-left sfl"
                             data-x="650"
                             data-y="350"
                             data-speed="400"
                             data-start="500"
                             data-easing="Back.easeOut"
                             data-endspeed="300"><a class='btn-medium empty black' href='/career'>Learn More About Becoming a Representative</a>
                        </div>
						
						
					</li>					
				</ul>
			</div><!-- .tp-banner end -->
		</div><!-- .tp-banner end -->
	</div><!-- .tp-wrapper end -->

<!-- .page-content start -->
<section class="page-content">
	<!-- .container start -->
	<div class="container">
    <img src="/assets/img/slider/slide-6-1.jpg" alt="title banner" title="Title Banner" />
		<!-- .row start -->
		<div class="row">
			<!-- .grid_6 start -->
			<section class='grid_6'>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/xFK0yu4H89E?rel=0" frameborder="0" allowfullscreen></iframe>
			</section><!-- .grid_6 end -->

			<article class='grid_6'>
				<div class="triggerAnimation animated" data-animate='fadeInRight'>
					<section class="heading-bordered clearfix">
						<a href="#" id="clickme">
                        	<h3>Come Begin <b>YOUR</b> <b>CAREER <span style="color:#AC171C">(HERE)</span></b>!</h3>
                        </a>
                        <br/><br/><br/>
                        <h3>Why do we want <b>YOU NOW?</span></b>!</h3>
					</section><!-- .heading-bordered end -->
					
                    
					<p>
						<h5 style="color:black;">AmeriBanc National has been an industry leader since 2004 providing much needed financial services to the small-medium sized business sector, where nearly every owner can benefit significantly with our services.<br/><br/>
                        AmeriBanc National offers our Outside Sales Representatives 3-5 Daily Sales Appointments set with the VERIFIED Business Owner!</h5>

					</p>

				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_6 end -->
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
                            {!! Form::label('Message: ', null, ['class' => 'text-color']) !!}
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
                            {!! Form::hidden('page', 'monsterppc', ['class' => 'wpcf7-text required']) !!}
                        </div>
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
