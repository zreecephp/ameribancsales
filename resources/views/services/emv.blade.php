@extends('app')

@section('page-styles')
    <link rel="stylesheet" href="/assets/css/counter/jquery.counter-analog4.css">
@endsection

@section('page-scripts')

    <script type="text/javascript" src="/assets/js/countdown.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.counter.js"></script>
    <!-- countdown -->
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function(){

            $('.counter').counter({});
			
			/*$("#countdown").countdown({
                        date: "1 October 2015 12:00:00",
                        format: "on"
                    },

                    function() {
                        // callback function
                    });*/
        });
        //]]>
    </script>
    <!-- scripts end -->

@endsection

@section('content')

<!-- #page-title start -->
<section id="page-title" class="page-title-1">
	<div class="container">
		<div class="row">
			<div class="grid_8">
				<div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
					<h2>Why <strong>EMV</strong> Is a Good Idea for you?</h2>
					<h3>1. Virtually Fraud Proof <br>
					2. V/MC/Disc/AMex are all changing in 2015 <br>
					3. Avoid Liability of Data Breaches</h3>
                    <a class='btn-medium empty' href='/business-service-information'>Schedule a call back</a>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" src="/assets/img/pictures/Gold-card.png" alt="services page title image" />
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
							<span class="active">EMV</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- .container end -->
</section><!-- #page-title end -->

<!-- .page-content start -->
<section class="page-content background-black add-margin">
<!-- .container start -->
<div class="container" style="height:30px !important;">
<?php
                            date_default_timezone_set('America/Chicago');
	
							$target_sec = new DateTime("2015-10-01");
							$current_sec = new DateTime();
							$sec = $current_sec->diff($target_sec)->format("%s");
							$seconds = $sec;
							
							$target_min = new DateTime("2015-10-01");
							$current_min = new DateTime();
							$min = $current_min->diff($target_min)->format("%i");
							$minutes = $min;
							
							$target_hour = new DateTime("2015-10-01");
							$current_hour = new DateTime();
							$hour = $current_hour->diff($target_hour)->format("%h");
							$hours = $hour;
							
							$target_date = new DateTime("2015-10-01");
							$current_date = new DateTime();
							$day = $current_date->diff($target_date)->format("%a");
							$days = $day;
							
							$stamp = time();
							$cur_date = date('m/d/Y H:i:s',$stamp);
							
							/*echo 'The current date/time is '.$cur_date.'<br />';
							echo $seconds.' Seconds<br />';
							echo $minutes.' Minutes<br />';
							echo $hours.' Hours<br />';
							echo $days.' Days<br />';*/
						
?>
    <!-- .row start -->
    <div class="row">
        <article class="grid_6">
            <div class="triggerAnimation animated" data-animate="fadeInUp">
                <!-- countdown -->
                <div id="countdown-wrapper">
                    <div id="countdown-wrap">
                       
							<?php /*?><div class="livediv" style="width:400px; background-color:; text-align:center;">
                            	<a href="/services/emv"><h4 class="emvCountdown" style="position: relative; top:10px; padding-top:25px;">EMV Countdown</h4></a>
                                <span class="counter counter-analog4" data-direction="down" data-format="20.23:59:59"><?php //echo $daysleft.' : '.$show_h.' : '.$show_i.' : '.$show_s;  ?></span>
                                <br />
                                <span style="font-size:18px; margin-left:18px; padding-right:3px;">Days&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:18px;">Hours&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:18px; margin-left:;">Minutes&nbsp;&nbsp;</span><span style="font-size:18px;  margin-left:;">Seconds</span>
                                <h5>Are You Ready?</h5>
                            </div><?php */?>
                            
                            
                            <div style="width:600px; background-color:; text-align:center;">
                                <a href="/services/emv"><img src='/assets/css/counter/EMV_header.png' alt='web agency' style="width:400px; padding:25px;"/><br />
                            </div>
                        
						
                    </div>
                </div>
                <!-- countdown end -->
                
            </div><!-- .triggerAnimation.animated end -->
        </article>
        <article class="grid_6">
            <div class="triggerAnimation animated" data-animate="fadeInUp">
                <div class="note no-bottom-margin" style="margin-top:25px">
						<h4>For more information, Contact us at <b>866-569-3505</b></h4><br />
						<a class='btn-medium empty white' href='/business-service-information'>Schedule a Free Consultation</a>
				</div>
            </div><!-- .triggerAnimation.animated end -->
        </article><!-- .grid_12 end -->
    </div><!-- .row end -->
</div><!-- .container end -->
</section><!-- .page-content end -->


<!-- .container start -->
<div class="container">
    <!-- .row start -->
    <div class="row">
        <article class="grid_12">
            <div class="centerText" data-animate='fadeInUp'>
                AmeriBanc National (ABN) is a registered ISO/MSP of Wells Fargo Bank, N.A., Walnut Creek, CA
            </div><!-- .triggerAnimation.animated end -->
        </article><!-- .grid_12 end -->
    </div><!-- .row end -->
</div>

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
                                                <br />
                                                                                                <h3>Fraud Liability Shift</h3>
                                                <br /><br />
                                                
                                                                <p>As of <strong>October 1, 2015</strong> Visa, MasterCard, Discover and American Express have assigned 100% of fraud losses to all merchants that have not added an EMV chip reader to help them combat or avoid fraudulent sales.</p>
                                                
                                                <br />
                                                
                                                                <p>This can mean all sorts of things to a typical merchant such as <strong>downgraded transactions (higher fees)</strong> on some or all of your sales items, <strong>additional monthly compliance fees, higher or additional periodic annual or semi-annual fees</strong> and <strong>complete liability</strong> when the fraudsters look for an unsuspecting business to swipe their stolen or cloned card through.</p>
                                                
                                                <br />
                                                
                                                                <p>All of these things distract your attention and steal your hard-earned profits. Let us upgrade your counter top so you have the safest, easiest, fastest transactions possible and let your customers know their information is safe in your store and tell the fraudsters they are not welcome in your establishment.</p>
                                                
                                                <br />
                                                
                                                                <p><span style="color:red"><strong>ACT NOW!</strong></span><span> You are Past Due if you are not using a new EMV compliant terminal. Schedule a free consultation today to avoid the liability shift.</span></p>
                                                
                                                <br />
                                                                
                                                                <p>
                    <a class='btn-medium empty' href='/business-service-information'>Schedule a Consultation</a>
                                                                </p>
                                                                                                
                                                <br /><br />       
                                                <br /><br /><br />
                                                
                                                                                
                                                                                                
                                                                                                <h3>EMV</h3>
                                                                                </section><!-- .heading-bordered end -->

                    <h4>Are you <strong>SWIPING</strong> or <strong>INSERTING</strong> your cards?</h4>

                                                                                <p>
                                                                                Visa and MasterCard both assign a <strong>"Liability Shift"</strong> to merchants that accept fraudulent transactions if they do not have an EMV Terminal*
                                                                                </p>
                                                                                
                                                                                <br>
                                                                                
                                                                                <div>
                                                                                
                                                                                                <img src="/assets/img/pictures/terminal-keypad.png" class="picture-left"  />
                                                                                
                                                                                                <p>
                                                                                                                1 - Over 100 million issued already <br>
                                                                                                                2 - Expect Fees on Non-EMV to go UP <br>
                                                                                                                3 - Your Data is Protected TOO! <br>
                                                                                                                4 - it's not an IF, It's a WHEN....
                                                                                                </p>
                                                                                </div>

                    <br>
                                                                                
                                                                                <h4>AmeriBanc National is offering new EMV</h4>

                                                                                <p>
                                                                                Compliant Terminal Placement at No Cost to Earn Your Business TODAY and we will WORK to KEEP you Happy
                                                                                </p>
                                                                                
                                                                                <br>

                    <p>
                        70% of Credit Cards and 40% of Debit Cards will be EMV/Chip Cards by 2015
                    </p>

                    <br>

                    <p>
                        *Estimated Cost of EMV-terminal between $500 and $2500 depending on terminal type and whether you buy or lease...
                    </p>

                    <br>

                    <p>
                        Ameribanc is offering EMV /NFC Terminal <strong>FREE</strong> to use with a Month-to-Month Agreement and <strong>NO Cancellation Fee</strong>
                    </p>

                                                                                <p>
                        <a class='btn-medium empty' href='/business-service-information'>Click here to talk to a representative</a>
                                                                                </p>
                                                                                
                                                                                </ul><!-- .team-social-links end -->
                                                                </div><!-- .triggerAnimation.animated end -->
                                                </article>



		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->


@endsection
