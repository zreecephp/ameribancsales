@extends('appAdmin')

@section('page-styles')
<link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <style type="text/css">
		.firstfivetab{
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
        <h2>Module 3 - First Five Minutes</h2>
    </div>
    <section class="wrapper portfolio-page content2-section">
    <div class="container">

        <!-- GRID -->
        <ul id="Grid" class="list-unstyled">

            <li class="col-md-2 col-xs-12">
                <div class="portfolio-item img-thumbnail">
                    <a class="thumb-info" href="{{ $completedQuiz >= 9 ? '/my/training/firstFiveMin' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                        <img src="{{ $completedQuiz >= 9 ? '/assets/img/portal/training/First_Five_Minutes.png' : '/assets/img/portal/training/First_Five_Minutes_lock.png' }}" class="img-responsive img-center" alt="">
                        <span class="thumb-info-title"> <span class="thumb-info-type">First Five Minutes</span> </span>
                        <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                    </a>
                    <div class="synopsis bondo">
                        The explanation of the First Five Minutes spent with a Merchant.
                    </div>
                    <div class="nav bondo">
                    </div>
                    <div class="footer">
                        <b>Duration: 16:00</b><br>
                        <b>Quiz 1.1</b> - <b>{{ $completedQuiz >= 10 ? 'Completed' : 'Incomplete' }}</b>
                    </div>
                </div>
            </li>

        </ul>

     </div>
</section>
</div>
@endsection
