@extends('appempty')

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
					<h1>Next Step</h1>
				</div>
			</div><!-- .grid_8 end -->
		</div><!-- .row end -->

		<div class="row">
			<div class="grid_8">
				<div class="breadcrumbs triggerAnimation animated" data-animate="fadeInUp">
					<ul>
						<li>
							<span>You are here:</span>
						</li>

						<li>
							<a href="/career_main">Career / </a>
						</li>
						
						<li>
							<span class="active">Next Step</span>
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
			<!-- .grid_3 start -->
			<article class="grid_3">
				<div class="triggerAnimation animated" data-animate="fadeInRight">
					<section class="heading-bordered clearfix">
						<h3>Countdown Our Plan</h3>
					</section><!-- .heading-bordered end -->

					<article>
						<div class="row portfolio-filters triggerAnimation animated" data-animate="fadeInDown">
							<section class="grid_12">
								<ul id="filters">
									<li><a href="/career/introduction">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>10 Introduction</a></li><br><br>
									<li><a href="/career/selection">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>9 Selection Process</a></li><br><br>
									<li><a href="/career/training">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>8 Training Process</a></li><br><br>
									<li><a href="/career/lead-support-program">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>7 Lead Support Program</a></li><br><br>
									<li><a href="/career/sales">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>6 Sales &amp; Operations</a></li><br><br>
									<li><a href="/career/equipment">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>5 Equipment &amp; Software</a></li><br><br>
									<li><a href="/career/compensation">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>4 Compensation Packages</a></li><br><br>
									<li><a href="/career/benefits">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>3 Benefits &amp; Bonuses</a></li><br><br>
									<li><a href="/career/advancement">&nbsp;&nbsp;&nbsp;<span class="fa fa-check-circle fa-2x" style="color:#AC171C;">&nbsp;</span>2 Advancement</a></li><br><br>
									<li class="active"><a href="/career/next-step"><span class="item-number">1</span> Next Step</a></li>
								</ul>
							</section><!-- .grid_12 end -->                    
						</div><!-- .row.portfolio-filters end  end -->

					</article><!-- .testimonial-carousel end -->
                    <section class="heading-bordered clearfix">
						<h3>Wealth Plan</h3>
					</section>
					<article>
						<div class="row portfolio-filters triggerAnimation animated" data-animate="fadeInDown">
							<section class="grid_12">
								<ul id="filters">
									<li><a href="/wealthpage/introduction"><span class="item-number">6</span>ABN Introduction</a></li><br><br>
									<li><a href="/wealthpage/opportunity"><span class="item-number">5</span></a>What's The Opportunity</li><br><br>
									<li><a href="/wealthpage/testimonials"><span class="item-number">4</span></a> Testimonials</li><br><br>
									<li><a href="/wealthpage/research"><span class="item-number">3</span></a> Research ABN</li><br><br>
									<li><a href="/wealthpage/faqs"><span class="item-number">2</span></a> FAQs</li><br><br>
									<li><a href="/wealthpage/next-step"><span class="item-number">1</span></a> Next Step</li><br><br>
								</ul>
							</section><!-- .grid_12 end -->                    
						</div><!-- .row.portfolio-filters end  end -->

					</article>
				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_3 end -->
				
			<!-- .grid_8 start -->
			<article class="grid_8">
				<!-- .heading-bordered start -->

				<div class="triggerAnimation animated" data-animate='fadeInLeft'>
					<section class="heading-bordered">
						<h2>Next Step</h2>
					</section><!-- .heading-bordered end -->

					<p>Thank you for taking the time to review our plan. We will now review the various opportunities you have with us here at AmeriBanc National. </p>
                    <br><br>

					<div class="nextstep" style="position:absolute; right:50%;">
                    {!! Form::open(['url' => '/career/stepcountdown', 'method' => 'post']) !!}
                            {!! Form::submit('Next Step', ['class' => 'wpcf7-submit']) !!}
                    {!! Form::close() !!}
                    </div>
                    <?php //echo Auth::user()->id; ?>
					
					
				</div><!-- .triggerAnimation.animated end -->
			</article><!-- .grid_8 end --> 
            
            

			

		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

		
@endsection
