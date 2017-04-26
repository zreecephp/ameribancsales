@extends('appAdmin')

@section('page-styles')
<link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <style type="text/css">
		.valuepresentationtab{
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
        <h2>Module 4 - Value Presentation</h2>
    </div>
    <section class="wrapper portfolio-page content2-section">

    <div class="container">

        <!-- GRID -->
				<div class="portfolio-item img-thumbnail">
					<a class="thumb-info" href="{{ $completedQuiz >= 10 ? '/my/training/emvNfcOverview' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                    <img src="{{ $completedQuiz >= 10 ? '/assets/img/portal/training/EMV_NFC_Overview.png' : '/assets/img/portal/training/EMV_NFC_Overview_lock.png' }}" class="img-responsive img-center" alt="">
                    <span class="thumb-info-title"> <span class="thumb-info-type">EMV-NFC Overview</span> </span>
                    <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                    </a>
                   <div class="synopsis bondo">
                        Overview of EMV-NFC
                </div>
                    <div class="nav bondo">
                </div>
                <div class="footer">
                        <b>Duration: 7:19 min</b><br>
                        <b>Quiz 4.1 - {{ $completedQuiz >= 11 ? 'Completed' : 'Incomplete' }}</b>
                </div>
                </div>


			<div class="portfolio-item img-thumbnail">
					<a class="thumb-info" href="{{ $completedQuiz >= 11 ? '/my/training/emvNfcServiceSegment' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
					<img src="{{ $completedQuiz >= 11 ? '/assets/img/portal/training/EMV_NFC_Presentation.png' : '/assets/img/portal/training/EMV_NFC_Presentation_lock.png' }}" class="img-responsive img-center" alt="">
					<span class="thumb-info-title"> <span class="thumb-info-type">EMV-NFC Service Segment</span> </span>
					<!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
					</a>
				<div class="synopsis bondo">
						Presentation of EMV-NFC
				</div>
				<div class="nav bondo">
				</div>
				<div class="footer">
						<b>Duration: 6:48 min</b><br>
						<b>Quiz 4.2 - {{ $completedQuiz >= 12 ? 'Completed' : 'Incomplete' }}</b>
                </div>
            </div>
            

			<div class="portfolio-item img-thumbnail">
					<a class="thumb-info" href="{{ $completedQuiz >= 12 ? '/my/training/emvNfcRecap' : '#' }}"  title="You must complete each quiz in order to continue to the next quiz in this module." >
                    <img src="{{ $completedQuiz >= 12 ? '/assets/img/portal/training/EMV_NFC_Recap.png' : '/assets/img/portal/training/EMV_NFC_Recap_lock.png' }}" class="img-responsive img-center" alt="">
                    <span class="thumb-info-title"> <span class="thumb-info-type">EMV-NFC Recap</span> </span>
                    <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
					</a>
				<div class="synopsis bondo">
						A Recap of EMV-NFC
				</div>
				<div class="nav bondo">
				</div>
				<div class="footer">
						<b>Duration: 4:33 min</b><br>
						<b>Quiz 4.3 - {{ $completedQuiz >= 13 ? 'Completed' : 'Incomplete' }}</b>
				</div>
			</div>


			<div class="portfolio-item img-thumbnail">
					<a class="thumb-info" href="{{ $completedQuiz >= 13 ? '/my/training/amexCcdc' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
					<img src="{{ $completedQuiz >= 13 ? '/assets/img/portal/training/AMEX_Presentation.png' : '/assets/img/portal/training/AMEX_Presentation_lock.png' }}" class="img-responsive img-center" alt="">
                    <span class="thumb-info-title"> <span class="thumb-info-type">Amex CCDC Presentation</span> </span>
                    <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
					</a>
                <div class="synopsis bondo">
                    Presentation of AMEX
                </div>
                <div class="nav bondo">
                </div>
                <div class="footer">
                    <b>Duration: 5:28 min</b><br>
                    <b>Quiz 4.4 - {{ $completedQuiz >= 14 ? 'Completed' : 'Incomplete' }}</b>
                </div>
            </div>
			<br />

            <div class="portfolio-item img-thumbnail">
                <a class="thumb-info" href="{{ $completedQuiz >= 14 ? '/my/training/amexCcdcRecap' : '#' }}"  title="You must complete each quiz in order to continue to the next quiz in this module." >
                    <img src="{{ $completedQuiz >= 14 ? '/assets/img/portal/training/AMEX_Recap.png' : '/assets/img/portal/training/AMEX_Recap_lock.png' }}" class="img-responsive img-center" alt="">
                    <span class="thumb-info-title"> <span class="thumb-info-type">Amex CCDC Recap</span> </span>
                    <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                </a>
                <div class="synopsis bondo">
                    A Recap of AMEX CCDC
                </div>
                <div class="nav bondo">
                </div>
                <div class="footer">
                    <b>Duration: 5:41 min</b><br>
                    <b>Quiz 4.5 - {{ $completedQuiz >= 15 ? 'Completed' : 'Incomplete' }}</b>
                </div>
            </div>


            <div class="portfolio-item img-thumbnail">
                <a class="thumb-info" href="{{ $completedQuiz >= 15 ? '/my/training/ampIntro' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                    <img src="{{ $completedQuiz >= 15 ? '/assets/img/portal/training/AMP_Intro.png' : '/assets/img/portal/training/AMP_Intro_lock.png' }}" class="img-responsive img-center" alt="">
                    <span class="thumb-info-title"> <span class="thumb-info-type">AMP Intro</span> </span>
                    <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                </a>
                <div class="synopsis bondo">
                    Intro to AMP
                </div>
                <div class="nav bondo">
                </div>
                <div class="footer">
                    <b>Duration: 5:41 min</b><br>
                    <b>Quiz 4.6 - {{ $completedQuiz >= 16 ? 'Completed' : 'Incomplete' }}</b>
                </div>
            </div>


        <div class="portfolio-item img-thumbnail">
            <a class="thumb-info" href="{{ $completedQuiz >= 16 ? '/my/training/ampPresentation' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                <img src="{{ $completedQuiz >= 16 ? '/assets/img/portal/training/AMP_Presentation.png' : '/assets/img/portal/training/AMP_Presentation_lock.png' }}" class="img-responsive img-center" alt="">
                <span class="thumb-info-title"> <span class="thumb-info-type">AMP Presentation</span> </span>
                <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
            </a>
            <div class="synopsis bondo">
                The AMP Presentation
            </div>
            <div class="nav bondo">
            </div>
            <div class="footer">
                <b>Duration: 12:42 min</b><br>
                <b>Quiz 4.7 - {{ $completedQuiz >= 17 ? 'Completed' : 'Incomplete' }}</b>
            </div>
        </div>


        <div class="portfolio-item img-thumbnail">
            <a class="thumb-info" href="{{ $completedQuiz >= 17 ? '/my/training/ampRecap' : '#' }}"   title="You must complete each quiz in order to continue to the next quiz in this module.">
                <img src="{{ $completedQuiz >= 17 ? '/assets/img/portal/training/AMP_Recap.png' : '/assets/img/portal/training/AMP_Recap_lock.png' }}" class="img-responsive img-center" alt="">
                <span class="thumb-info-title"> <span class="thumb-info-type">AMP Recap</span> </span>
                <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
            </a>
            <div class="synopsis bondo">
                Recap of AMP
            </div>
            <div class="nav bondo">
            </div>
            <div class="footer">
                <b>Duration: 9:40 min</b><br>
                <b>Quiz 4.8 - {{ $completedQuiz >= 18 ? 'Completed' : 'Incomplete' }}</b>
            </div>
        </div>
		<br />

     </div>
</section>
</div>

@endsection
