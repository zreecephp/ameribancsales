@extends('appAdmin')

@section('page-styles')
    <link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

    <link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
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
            <h2>EMV / NFC Presentation</h2>
        </div>
        <section class="wrapper portfolio-page content2-section">
            <div class="container">

                <!-- GRID -->
                <ul id="Grid" class="list-unstyled">

                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/documents/30-Day_Warranty_Letter_2014-12-02.pdf">
                            <img src="/assets/img/training/30-day_Warranty_letter_thumb.png" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">30 Day Warranty Letter</span> </span>
                        </a>
                        <div class="synopsis bondo">
                            Low Rate and Fee Warranty<br>&nbsp;<br>&nbsp;<br>&nbsp;
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>File Type: PDF</b><br>
                            <b>File Size: 530KB</b>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/documents/EMV-NFC/booklet.html">
                            <img src="/assets/img/training/2014_PresManual_thumb.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Presentation Manual/Preparation Tutorial</span> </span>
                        </a>
                        <div class="synopsis bondo">
                            A visual guide on how to put together your presentation manual.
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>File Type: PDF</b><br>
                            <b>File Size: -</b>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/documents/PCI_SAQ_B_ABN_Combined NE.pdf">
                            <img src="/assets/img/training/pci.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">PCI Addendums</span> </span>
                        </a>
                        <div class="synopsis bondo">
                            PCI Related Paperwork<br>&nbsp;<br>&nbsp;<br>&nbsp;
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>File Type: PDF</b><br>
                            <b>File Size: 239 KB</b>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/documents/MRW-2015-01-07.pdf">
                            <img src="/assets/img/training/valueworksheet.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Merchant Value Worksheet</span> </span>
                        </a>
                        <div class="synopsis bondo">
                            A Useful Presentation Tool<br>&nbsp;<br>&nbsp;<br>&nbsp;
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>File Type: PDF</b><br>
                            <b>File Size: 111 KB</b>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                    <div class="portfolio-item img-thumbnail">
                        <a class="thumb-info" href="/documents/BBB Accreditation Print Out.pdf">
                            <img src="/assets/img/training/bbbaccreditation.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">BBB Accreditation Print Out</span> </span>
                        </a>
                        <div class="synopsis bondo">
                            A handout displaying our current rating with the BBB<br>&nbsp;<br>&nbsp;
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
                            <b>File Type: PDF</b><br>
                            <b>File Size: 148 KB</b>
                        </div>
                    </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/documents/abn-direct-custom-packet-prebuilt-NE-15-05-20.pdf">
                                <img src="/assets/img/training/merchantappEZ.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Merchant Application</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                The Merchant Application<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 1.34 MB</b>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/documents/Addendum Addon Package NE 1-15-2014 v2.pdf">
                                <img src="/assets/img/training/addendum.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Addendum Add On Package</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Additional Application Pages<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 154 KB</b>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-2 col-xs-12">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="/documents/MAP_Form.pdf">
                                <img src="/assets/img/training/MAPform.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">MAP Form</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                AmeriBanc National Daily Planner<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
        </section>
    </div>

@endsection
