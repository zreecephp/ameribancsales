@extends('appAdmin')

@section('page-styles')
	<link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <style type="text/css">
		.masterstab{
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
        <h2>Masters Module</h2>
    </div>
    <section class="wrapper portfolio-page">

        			<div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/mastersVideo/paymentJack" >
                        <img src="/assets/img/training/iphone_small.jpg" class="img-responsive" alt="">
                        <span class="thumb-info-title"> <span class="thumb-info-type">Payment Jack with an iPhone</span> </span>
                        <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                    	</a>
                        <div class="synopsis bondo">
                            Payment Jack Video #1
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 11:08</b><br>
                        </div>
                    </div>
                    
                    <?php /*?><div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/mastersVideo/paymentBlackJack" >
                            <img src="/assets/img/training/blackberry_small.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Payment Jack with a Blackberry</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Payment Jack Video #2
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 6:01</b><br>
                        </div>
                    </div><?php */?>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/mastersVideo/paymentJackApp">
                            <img src="/assets/img/training/download_small.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Download the Payment Jack App</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Payment Jack Video #3
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 8:18</b><br>
                        </div>
                    </div>

                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/mastersVideo/presentation1">
                            <img src="/assets/img/training/fullpresentationpart1.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Full Presentation Part 1</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            First Five Minutes Segment
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 6:51</b><br>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/mastersVideo/presentation2" >
                            <img src="/assets/img/training/fullpresentationpart2.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Full Presentation Part 2</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Services Segment
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    </br>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/mastersVideo/presentation3" >
                            <img src="/assets/img/training/fullpresentationpart3.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Full Presentation Part 3</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Closing Segment
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/training/ma_opportunity" >
                            <img src="/assets/img/training/opportunityjobandcareer.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Opportunity - Job and Career</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Career opportunities
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/training/ma_controllingsuccess" >
                            <img src="/assets/img/training/controllingyoursuccess.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Controlling Your Success</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            The 3 things that you can control.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/training/ma_barn" >
                            <img src="/assets/img/training/barn.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">B.A.R.N.</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Simple ways for you to begin Building A Referral Network.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    </br>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/training/ma_presentationobj" >
                            <img src="/assets/img/training/presentationobjections.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Presentation Objections</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            The Objections you will face when walking into an appointment.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/training/ma_partnerobj" >
                            <img src="/assets/img/training/thepartnerobjection.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">The Partner Objection</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            One of the most used Objections and how to deal with it.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/training/ma_unsureobj" >
                            <img src="/assets/img/training/unsureobjection.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">"Unsure" Objection</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Dealing with the "Not sure if this will work" Objection.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/training/ma_callin" >
                            <img src="/assets/img/training/callin.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Call In</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            How to Call In To Your Regional Manager.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    </br>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/training/ma_eqvsiq" >
                            <img src="/assets/img/training/eqvsiq.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">EQ vs. IQ</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            Explanation of EQ and IQ And how it applies to you.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/my/mastersVideo/terminalInstall" >
                            <img src="/assets/img/training/terminalinstalltutorial.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Terminal Install Tutorial</span> </span>
                            <!--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>-->
                        </a>
                        <div class="synopsis bondo">
                            An brief installation walkthrough of current terminals.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 5:06</b><br>
                        </div>
                    </div>
    
     </section>
</div>
@endsection
