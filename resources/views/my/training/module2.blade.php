@extends('appAdmin')

@section('page-styles')
<link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <style type="text/css">
		.creditcardtab{
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
        <h2>Module 2 - Credit Cards 101</h2>
    </div>
    <section class="wrapper portfolio-page content2-section">
    <div class="container">

        <!-- GRID -->
        <ul id="Grid" class="list-unstyled">

            <li class="col-md-2 col-xs-12">
                <div class="portfolio-item img-thumbnail">
                    <a class="thumb-info" href="{{ $completedQuiz >= 5 ? '/my/training/creditCard01' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                        <img src="{{ $completedQuiz >= 5 ? '/assets/img/portal/training/CC101-01.png' : '/assets/img/portal/training/CC101-01_lock.png' }}" class="img-responsive img-center" alt="">
                        <span class="thumb-info-title"> <span class="thumb-info-type">CC101 Seg 1</span> </span>
                        <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                    </a>
                    <div class="synopsis bondo">
                        Introduction to Credit
                        Cards 101.
                    </div>
                    <div class="nav bondo">
                    </div>
                    <div class="footer">
                        <b>Duration: 5:54</b><br>
                        <b>Quiz 2.1 {{ $completedQuiz >= 7 ? 'Completed' : 'Incomplete' }}</b>
                    </div>
                </div>
            </li>
            <li class="col-md-2 col-xs-12">
            <div class="portfolio-item img-thumbnail">
                <a class="thumb-info" href="{{ $completedQuiz >= 7 ? '/my/training/creditCard02' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                    <img src="{{ $completedQuiz >= 7 ? '/assets/img/portal/training/CC101-02.png' : '/assets/img/portal/training/CC101-02_lock.png' }}" class="img-responsive img-center" alt="">
                    <span class="thumb-info-title"> <span class="thumb-info-type">CC101 Seg 2</span> </span>
                    <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                </a>
                <div class="synopsis bondo">
                    A more in depth look
                    at types of cards and fees.
                </div>
                <div class="nav bondo">
                </div>
                <div class="footer">
                    <b>Duration: 10:57</b><br>
                    <b>Quiz 2.2 {{ $completedQuiz >= 8 ? 'Completed' : 'Incomplete' }}</b>
                </div>
            </div>
            </li>
            <li class="col-md-2 col-xs-12">
                <div class="portfolio-item img-thumbnail">
                    <a class="thumb-info" href="{{ $completedQuiz >= 8 ? '/my/training/creditCard03' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                        <img src="{{ $completedQuiz >= 8 ? '/assets/img/portal/training/CC101-03.png' : '/assets/img/portal/training/CC101-03_lock.png' }}" class="img-responsive img-center" alt="">
                        <span class="thumb-info-title"> <span class="thumb-info-type">CC101 Seg 3</span> </span>
                        <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                    </a>
                    <div class="synopsis bondo">
                        A wrap up and review of
                        Credit Cards 101.
                    </div>
                    <div class="nav bondo">
                    </div>
                    <div class="footer">
                        <b>Duration: 6:20</b><br>
                        <b>Quiz 2.3 {{ $completedQuiz >= 9 ? 'Completed' : 'Incomplete' }}</b>
                    </div>
                </div>
            </li>

        </ul>

     </div>
</section>
</div>

@endsection
