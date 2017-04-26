@extends('appAdmin')

@section('page-styles')
    <link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

    <link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <style type="text/css">
            .docsformstab{
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
            <h2>Docs and Forms</h2>
        </div>
        <section class="wrapper portfolio-page content2-section">
            <div class="container">

					<div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/documents/EMV-NFC/booklet.html" target="_blank">
                            <img src="/assets/img/training/2017_PresManual_thumb.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title"> <span class="thumb-info-type">Presentation Manual/Preparation Tutorial</span> </span>
                        </a>
                        <div class="synopsis bondo">
                            A visual guide on how to put together your presentation manual.<br>&nbsp;
                        </div>
                        <div class="nav bondo">
                        </div>
                        <div class="footer">
							
                            <b>File Type: PDF</b><br>
                            <b>File Size: -</b>
                        </div>
                    </div>
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/abn-direct-custom-packet-prebuilt-NE.pdf" target="_blank">
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
                     
                     <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/Addendum Addon Package ABN NE 2017-01-25.pdf" target="_blank">
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
                     
                     <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/Groovv POS Addendum.pdf" target="_blank">
                                <img src="/assets/img/training/groovvaddendum.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Groovv Addendum</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Groovv Addendum<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 78.5KB</b>
                            </div>
                     </div>
                     <br />
                    <!---------------------------------------->
                    
                    
                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/documents/30-Day_Warranty_Letter_2014-12-02.pdf" target="_blank">
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

                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/documents/PCI_SAQ_B_ABN_Combined NE.pdf" target="_blank">
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

                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/documents/MRW-2017-01-27.pdf" target="_blank">
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

                    <div class="portfolio-item img-thumbnail" style="width:250px;">
                        <a class="thumb-info" href="/documents/BBB Accreditation Print Out.pdf" target="_blank">
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
					<br />
                    <!---------------------------------------->
                        

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/Addendum Addon Package ABN NE 2017-01-24.pdf" target="_blank">
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

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/MAP_Form.pdf" target="_blank">
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

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/Prohibited_List 2-10-2011.pdf" target="_blank">
                                <img src="/assets/img/training/prohiblist.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Prohibited List</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Prohibited List<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: -</b>
                            </div>
                        </div>

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/Merchant Consultant Agreement Rev1 02 17 1.pdf" target="_blank">
                                <img src="/assets/img/training/consultantagreement.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Merchant Consultant Agreement</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Merchant Consultant Agreement<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>
                        <br />
                        <!---------------------------------------->

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/fw9.pdf" target="_blank">
                                <img src="/assets/img/training/w9form.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">W-9 Form</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                W-9 Form<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/Risk_Management_Top_10_List.pdf" target="_blank">
                                <img src="/assets/img/training/riskmanagement.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Risk Management Top 10 List</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Risk Management Top 10 List<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/NEW_ABN_Bus_Card_Template_12-06-2013.docm" target="_blank">
                                <img src="/assets/img/training/buscardtemp.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Bus Card Template</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Bus Card Template<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>

                        <!--<div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/Comp_Plan_Ltr_12-1-13_2-0_NE.pdf" target="_blank">
                                <img src="/assets/img/training/compplan.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Comp Plan Ltr</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Comp Plan Ltr<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>-->

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/INGENICORENTALFORM3-24-15.pdf" target="_blank">
                                <img src="/assets/img/training/iTC220_Thumb.png" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Ingenico Rental Program</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Ingenico Rental Program<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>
                        <br />
                        <!---------------------------------------->

                        

                        <div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/Rest-Com_Pres_Pages_C_2013-11-7.pdf" target="_blank">
                                <img src="/assets/img/training/restaurant_com.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Restaurant Press Pages</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Restaurant Press Pages<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>

                        <!--<div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/PJ_CompatibilityList_6-15-2012.pdf" target="_blank">
                                <img src="/assets/img/training/paymentJackComp.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Payment Jack List</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Payment Jack List<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>-->

                        <!--<div class="portfolio-item img-thumbnail" style="width:250px;">
                            <a class="thumb-info" href="/documents/sample_statement.pdf" target="_blank">
                                <img src="/assets/img/training/samplestatement.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-type">Sample Statement</span> </span>
                            </a>
                            <div class="synopsis bondo">
                                Sample Statement<br>&nbsp;<br>&nbsp;<br>&nbsp;
                            </div>
                            <div class="nav bondo">
                            </div>
                            <div class="footer">
                                <b>File Type: PDF</b><br>
                                <b>File Size: 17 KB</b>
                            </div>
                        </div>-->
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    
                <!--</ul>-->

            </div>
        </section>
    </div>

@endsection
