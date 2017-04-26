@extends('appAdmin')

@section('page-styles')
<link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <style type="text/css">
		.paperworktab{
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
        <h2>Module 7 - Paperwork Training</h2>
    </div>
    <section class="wrapper portfolio-page content2-section">

        <div class="container">

            <!-- GRID -->
            <ul id="Grid" class="list-unstyled">

            <li class="col-md-2 col-xs-12">
                <div class="portfolio-item img-thumbnail">
                    <a class="thumb-info" href="{{ $completedQuiz >= 24 ? '/my/training/merchantApp' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                        <img src="{{ $completedQuiz >= 24 ? '/assets/img/portal/training/Application_Training.png' : '/assets/img/portal/training/Application_Training_lock.png' }}" class="img-responsive img-center" alt="">
                        <span class="thumb-info-title"> <span class="thumb-info-type">Merchant Application</span> </span>
                        <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                    </a>
                    <div class="synopsis bondo">
                        The Merchant Application
                    </div>
                    <div class="nav bondo">
                    </div>
                    <div class="footer">
                        <b>Duration: 27:06 </b><br>
                        <b>Quiz 7.1 - {{ $completedQuiz >= 24 ? 'Completed' : 'Incomplete' }}</b>
                    </div>
                </div>
            </li>

        </ul>

     </div>
</section>
</div>

@endsection
