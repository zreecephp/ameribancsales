@extends('appAdmin')

@section('page-styles')
	<link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">
	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    <link href="/assets/css/bootstro/bootstro.min.css" rel="stylesheet">
    <style type="text/css">
		.orientationtab{
			text-decoration:underline;
			font-weight:bold;	
		}
	</style>
    
@endsection

@section('page-scripts')
		<script src="/assets/plugins/jquery.transit/jquery.transit.js"></script>
		<script src="/assets/plugins/hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
		<script src="/assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="/assets/plugins/flex-slider/jquery.flexslider.js"></script>
        <script src="/assets/js/bootstro/bootstro.min.js"></script>
        <script type="text/javascript">
	  	$(document).ready(function(){
		    $("#demo").click(function(){
		        bootstro.start(".bootstro", {
		            onComplete : function(params)
		            {
		                //alert("Reached end of introduction with total " + (params.idx + 1)+ " slides");
		            },
		            onExit : function(params)
		            {
		                //alert("Introduction stopped at slide #" + (params.idx + 1));
		            },
		        });    
		    });
		    $(".demo_stopOn").click(function(){
		        alert('Clicking on the backdrop or Esc will NOT stop the show')
		        bootstro.start('.bootstro', {stopOnBackdropClick : false, stopOnEsc:false});    
		    });
		    $(".demo_size1").click(function(){
		        bootstro.start('.bootstro_size1');    
		    });
		    $(".demo_nonav").click(function(){
		        bootstro.start('.bootstro', {
		            nextButton : '',
		            prevButton : '',
		            finishButton : ''
		        });    
		    });
		    $(".demo_ajax").click(function(){
		        bootstro.start('', {
		            url : './bootstro.json',
		        });    
		    });
		});
	  </script>
@endsection

@section('content')
<br>

<div class="container">
    <div class="page-header">
        <h2>Module 1 - Orientation <a class="btn btn-xs btn-success" style="" href="#" id='demo'>Help Tutorial</a></h2>
    </div>
    
    <section class="wrapper portfolio-page">
					
        			<div class="portfolio-item img-thumbnail bootstro" style="width:250px;"
                            data-bootstro-title="" 
                            data-bootstro-content="Click on the video to access the video and quiz. Each quiz must be completed correct before you can move onto the next video quiz."
                            data-bootstro-placement='bottom'
                            data-bootstro-width='400px'
                            data-bootstro-step='0'>
                        <a class="thumb-info" href="/my/training/corporateTour"  title="You must complete each quiz in order to continue to the next quiz in this module.">
                        <img src="/assets/img/training/2015_ABNBackingcropt.png" class="img-responsive" alt="" />
                        <span class="thumb-info-title"> <span class="thumb-info-type">Corporate Tour</span> </span>
                        <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                    	</a>
                        <div class="synopsis bondo">
                            Introductory video and tour of our facilities.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 11:08</b><br>
                        	<b>Quiz 1.1</b> - <b>{{ $completedQuiz >= 1 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail bootstro" style="width:250px;"
                            data-bootstro-title="" 
                            data-bootstro-content="The videos will stay locked tell quiz before it is complete."
                            data-bootstro-placement='bottom'
                            data-bootstro-width='400px'
                            data-bootstro-step='1'>
                        <a class="thumb-info" href="{{ $completedQuiz >= 1 ? '/my/training/meetTrainer' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                            <img src="{{ $completedQuiz >= 1 ? '/assets/img/portal/training/Meet_The_Trainer.png' : '/assets/img/portal/training/Meet_The_Trainer_lock.png' }}" class="img-responsive img-center" alt="" />
                            <span class="thumb-info-title"> <span class="thumb-info-type">Meet the trainer</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Greeting and brief orientation of AmeriBanc's training program.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 6:01</b><br>
                    		<b>Quiz 1.2</b> - <b>{{ $completedQuiz >= 2 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="{{ $completedQuiz >= 2 ? '/my/training/opportunity' : '#' }}"  title="You must complete each quiz in order to continue to the next quiz in this module.">
                            <img src="{{ $completedQuiz >= 2 ? '/assets/img/portal/training/Opportunity.png' : '/assets/img/portal/training/Opportunity_lock.png' }}" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Opportunity</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            A brief runthrough of the AmeriBanc Opportunity.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 8:18</b><br>
                        	<b>Quiz 1.3</b> - <b>{{ $completedQuiz >= 3 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>

                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="{{ $completedQuiz >=3 ? '/my/training/tactics' : '#' }}"  title="You must complete each quiz in order to continue to the next quiz in this module.">
                            <img src="{{ $completedQuiz >=3 ? '/assets/img/portal/training/Strategy.png' : '/assets/img/portal/training/Strategy_lock.png' }}" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Strategy/Tactics</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            An explanation of AmeriBanc's Sales Strategy and Tactics.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 6:51</b><br>
                    		<b>Quiz 1.4</b> - <b>{{ $completedQuiz >= 4 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>
                    </br>
                    
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="{{ $completedQuiz >= 4 ? '/my/training/consultationOverview': '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                            <img src="{{ $completedQuiz >= 4 ? '/assets/img/portal/training/Consultation_Overview.png' : '/assets/img/portal/training/Consultation_Overview_lock.png' }}" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Consultation Overview</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            A discussion and overview of the entire consultation process
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                    		<b>Quiz 1.6</b> - <b>{{ $completedQuiz >= 5 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>

                    
                    
     </section>
</div>
@endsection
