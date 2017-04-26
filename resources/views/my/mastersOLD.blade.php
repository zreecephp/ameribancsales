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
            <h2>Masters Level</h2>
        </div>
        <section class="wrapper portfolio-page content2-section">
            <div class="container">

                <!-- GRID -->
                <ul id="Grid" class="list-unstyled">

                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/my/mastersVideo/paymentJack" >
                            <img src="/assets/img/training/iphone_small.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Payment Jack with an iPhone</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            testPayment Jack Video #1
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 1:00</b><br>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/my/mastersVideo/paymentBlackJack" target="_top" onClick="return popup(this, 'thoughts');">
                            <img src="/assets/img/training/blackberry_small.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Payment Jack with a Blackberry</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            Payment Jack Video #2
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 1:00</b><br>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/my/mastersVideo/paymentJackApp" target="_top" onClick="return popup(this, 'thoughts');">
                            <img src="/assets/img/training/download_small.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Download the Payment Jack App</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            Payment Jack Video #3
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 0:48</b><br>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/my/mastersVideo/presentation1" target="_top" onClick="return popup(this, 'thoughts');">
                            <img src="/assets/img/training/tnFullPresFive_small.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Full Presentation Part 1</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            First Five Minutes Segment
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 8:11</b><br>
                        </div>
                    </div>
                    </li>
                 
                    <li class="col-md-2 col-xs-12" style="clear:both;">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/my/mastersVideo/presentation2" target="_top" onClick="return popup(this, 'thoughts');">
                            <img src="/assets/img/training/tnControlling_small.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Full Presentation Part 2</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            Services Segment
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 20:26</b><br>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/my/mastersVideo/presentation3" target="_top" onClick="return popup(this, 'thoughts');">
                            <img src="/assets/img/training/tnBarn_small.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Full Presentation Part 3</span> </span>
                            <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                        </a>
                        <div class="synopsis bondo">
                            Closing Segment
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>Duration: 10:38</b><br>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/opportunity" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnOpportunityJnC_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Opportunity - Job and Career</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                Information about Career opportunities
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 8:58</b><br>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/success" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnControlling_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Controlling Your Success</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                The 3 things that you can control throughout the presentation
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 7:17</b><br>
                            </div>
                        </div>
                    </li>
                    
                    <li class="col-md-2 col-xs-12" style="clear:both;">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/barn" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnBarn_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">B.A.R.N.</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                Simple ways for you to begin Building A Referral Network
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 8:41</b><br>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/presentationObjections" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnPresObjections_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Presentation Objections</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                The Objections you will face when walking into an appointment
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 7:04</b><br>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/partnerObjection" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnPartnerObjection_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">The Partner Objection</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                One of the most used Objections and how to deal with it
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 6:33</b><br>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/unsurerObjection" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnUnsureObjection_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">"Unsure" Objection</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                Dealing with the "Not sure if this will work" Objection
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 4:20</b><br>
                            </div>
                        </div>
                    </li>
                    
                    <li class="col-md-2 col-xs-12" style="clear:both;">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/callIn" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnCallInNew_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Call In</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                How to Call In To Your Regional Manager
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 6:16</b><br>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/eqiq" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnEQvsIQ_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">EQ vs. IQ</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                Explanation of EQ and IQ And how it applies to you
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 11:09</b><br>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/my/mastersVideo/terminalInstall" target="_top" onClick="return popup(this, 'thoughts');">
                                <img src="/assets/img/training/tnTerminalInstall_small.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Terminal Install Tutorial</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                            <div class="synopsis bondo">
                                An brief installation walkthrough
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>Duration: 2:14</b><br>
                            </div>
                        </div>
                    </li>

                    {{--<li class="col-md-2 col-xs-12"">--}}
                    {{--<div class="portfolio-item img-thumbnail">--}}
                        {{--<a class="thumb-info" href="/my/training/creditCard02" target="_top" onClick="return popup(this, 'thoughts');">--}}
                            {{--<img src="/assets/img/portal/training/tnCC101-2_small.jpg" class="img-responsive" alt="">--}}
                            {{--<span class="thumb-info-title"> <span class="thumb-info-type">CC101 Seg 2</span> </span>--}}
                            {{--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>--}}
                        {{--</a>--}}
                        {{--<div class="synopsis bondo">--}}
                            {{--A more in depth look--}}
                            {{--at types of cards and fees.--}}
                        {{--</div>--}}
                        {{--<div class="nav bondo">--}}
                        {{--</div>--}}
                        {{--<div class="footer">--}}
                            {{--<b>Duration: 10:57</b><br>--}}
                            {{--<b>Quiz 2.2 {{ $completedQuiz >= 2 ? 'Completed' : 'Incomplete' }}</b>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="col-md-2 col-xs-12"">--}}
                    {{--<div class="portfolio-item img-thumbnail">--}}
                        {{--<a class="thumb-info" href="/my/training/creditCard03" target="_top" onClick="return popup(this, 'thoughts');">--}}
                            {{--<img src="/assets/img/portal/training/tnCC101-3_small.jpg" class="img-responsive" alt="">--}}
                            {{--<span class="thumb-info-title"> <span class="thumb-info-type">CC101 Seg 3</span> </span>--}}
                            {{--<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>--}}
                        {{--</a>--}}
                        {{--<div class="synopsis bondo">--}}
                            {{--A wrap up and review of--}}
                            {{--Credit Cards 101.--}}
                        {{--</div>--}}
                        {{--<div class="nav bondo">--}}
                        {{--</div>--}}
                        {{--<div class="footer">--}}
                            {{--<b>Duration: 6:20</b><br>--}}
                            {{--<b>Quiz 2.3 {{ $completedQuiz >= 2 ? 'Completed' : 'Incomplete' }}</b>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</li>--}}

                </ul>

            </div>
        </section>
    </div>

@endsection
