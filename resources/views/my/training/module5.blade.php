@extends('appAdmin')

@section('page-styles')
<link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <style type="text/css">
		.closingtab{
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
@endsection

@section('content')
<br>

<div class="container">
    <div class="page-header">
        <h2>Module 5 - Closing</h2>
    </div>
    <section class="wrapper portfolio-page content2-section">

        <div class="container">

            <!-- GRID -->
            <ul id="Grid" class="list-unstyled">

                <li class="col-md-2 col-xs-12 portfolio-tile">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="{{ $completedQuiz >= 18 ? '/my/training/closingOverview' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                            <img src="{{ $completedQuiz >= 18 ? '/assets/img/portal/training/Closing_Overview.png' : '/assets/img/portal/training/Closing_Overview_lock.png' }}" class="img-responsive img-center" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Closing Overview</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            Overview of Closing
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 16:08 min</b><br>
                            <b>Quiz 5.1 - {{ $completedQuiz >= 19 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>
                </li>

                <li class="col-md-2 col-xs-12 portfolio-tile">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="{{ $completedQuiz >= 19 ? '/my/training/firstClose' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                            <img src="{{ $completedQuiz >= 19 ? '/assets/img/portal/training/First_Close.png' : '/assets/img/portal/training/First_Close_lock.png' }}" class="img-responsive img-center" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">First Close</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            Presentation of First Class
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 8:07 min</b><br>
                            <b>Quiz 5.2 - {{ $completedQuiz >= 20 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>
                </li>

                <li class="col-md-2 col-xs-12 portfolio-tile">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="{{ $completedQuiz >= 20 ? '/my/training/secondClose' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                            <img src="{{ $completedQuiz >= 20 ? '/assets/img/portal/training/Second_Close.png' : '/assets/img/portal/training/Second_Close_lock.png' }}" class="img-responsive img-center" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Second Close</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            Presentation of Second
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 7:24 min</b><br>
                            <b>Quiz 5.3 - {{ $completedQuiz >= 21 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>
                </li>

                <li class="col-md-2 col-xs-12 portfolio-tile">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="{{ $completedQuiz >= 21 ? '/my/training/thirdClose' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                            <img src="{{ $completedQuiz >= 21 ? '/assets/img/portal/training/Third_Close.png' : '/assets/img/portal/training/Third_Close_lock.png' }}" class="img-responsive img-center" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Third Close</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            Presentation of Third
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 12:47 min</b><br>
                            <b>Quiz 5.4 - {{ $completedQuiz >= 22 ? 'Completed' : 'Incomplete' }}</b>
                        </div>
                    </div>
                </li>

            </ul>

     </div>
</section>
</div>

@endsection
