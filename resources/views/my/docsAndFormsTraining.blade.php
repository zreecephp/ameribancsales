@extends('appAdmin')

@section('page-styles')
    <link rel="stylesheet" href="/assets/plugins/animate.css/animate.min.css">

    <link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    
    <style type="text/css">
            .appdocsformstab{
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
            <h2>Application Documents and Forms</h2>
        </div>
        <section class="wrapper portfolio-page content2-section">
            <div class="container">
					 
                     

                    <table border="0" cellpadding="4" cellspacing="0" width="550" style="margin-top:-400px;"> 

                    <!--Application Docs//--> 
						<tr>
                        	<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Application Documents</h3></span></td>
                        </tr>
					<!--1//--> 
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/abn-direct-custom-packet-prebuilt-NE.pdf') }}" target="_blank"><strong>Pre-Built Application Package (build#- EZ)</strong></a></td>
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">1.02 MB</span></td> 
                        </tr>
                    <!--2//-->  
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/Addendum Addon Package ABN NE 2017-01-25.pdf') }}" target="_blank"><strong>Addendum Addon Package (build# EZ)</strong></a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">1.48 MB</span></td> 
                        </tr>
                        
					<br><br> 
						
                    <!--Terminal Equipment Documents//-->   
							<tr>
                            	<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Terminal Equipment Documents</h3></span></td>
                            </tr>
					<!--1//-->
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/INGENICORENTALFORM3-24-15.pdf') }}" target="_blank">Terminal Rental Agreement</a></td>
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">332 KB</span></td> 
                        </tr>
                        
                    <br><br> 
                        
					<!--Reference Documents//--> 
 							<tr>
								<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Reference Documents</h3></span></td>
							</tr>
					<!--1//-->
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Generic Cancelation form 6-27-2013.pdf') }}" target="_blank">Merchant Account Cancellation Form </a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">20 KB</span></td> 
                        </tr>
                    <!--2//-->
                          <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/Back_Of_Merchant_Application_Agreement_10-14-2015.pdf') }}" target="_blank">Back of Merchant Application Agreement </a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">97 KB</span></td> 
                        </tr>
                    <!--3//-->
						<tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/merchant invoice and receipt form 10-14-2015.pdf') }}" target="_blank">Merchant Invoice and Receipt Form</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">44 KB</span></td> 
                        </tr> 
                    <!--4//--> 
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/Gift_Card_App_10-14-2015ne.pdf') }}" target="_blank">Gift &amp; Loyalty Setup Form</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">1 MB</span></td> 
                        </tr> 
                    <!--5//-->
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Gift_Card_Reorder_Form_10-14-2015.pdf') }}" target="_blank">Gift Card Re-Order Form</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">221 KB</span></td> 
                        </tr>
                    <!--6//-->
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/abn.leave.behind04012010.pdf') }}" target="_blank">Leave Behind Form</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">168 KB</span></td> 
                        </tr>
					<!--7//-->
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/PCI_SAQ_B_ABN_Combined NE.pdf') }}" target="_blank">PCI Paperwork</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">239 KB</span></td> 
                        </tr> 
						
                        <br><br> 
                        
					<!--Cross Check Documents//-->
						<tr>
							<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Cross Check Documents</h3></span></td>
						</tr>
						
                    <!--1//--> 
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Check Application 11-1-2012 NE.pdf') }}" target="_blank">CrossCheck Merchant Application</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">526 KB</span></td> 
                        </tr>
                    <!--2//-->  
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/CCCP Flier (Imaging)cc.pdf') }}" target="_blank">CrossCheck Flyer</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">74 KB</span></td> 
                        </tr>
                    <!--3//-->  
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/CrossCheck Imaging Tip Card.pdf') }}" target="_blank">CrossCheck Tip Card</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">768 KB</span></td> 
                        </tr>
                    <!--4//--> 	
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Cross Check Conversion.pdf') }}" target="_blank">CrossCheck Conversion</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">371 KB</span></td> 
                        </tr> 
                        
                        <br><br>
                         
					<!--Payment Jack//-->
                        <tr>	
							<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Payment Jack</h3></span></td>
						</tr>
                    <!--1//-->
                        <tr> 
                              <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Payment_Jack_Addendum_Form_10-14-2015.pdf') }}" target="_blank">Payment Jack Add On Form</a></td> 
                              <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                              <td class="tdResourceSizeAlt"><span class="txtResource">122 KB</span></td> 
                        </tr> 
					<!--2//-->
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/PaymentJack_ABN NE 9 15 15.pdf') }}" target="_blank">Standalone Payment Jack Application</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">305 KB</span></td> 
                        </tr>
                    <!--3//-->
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Payment_Jack_Marketing_Brochure_10-14-2015.pdf') }}" target="_blank">Payment Jack Marketing Brochure</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">138 KB</span></td> 
                        </tr>
					<!--4//-->
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/Payment_Jack_Easy_User_Guide_10-14-2015.pdf') }}" target="_blank">Payment Jack Easy User Guide</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">967 KB</span></td> 
                        </tr>
					<!--5//-->                    
						<tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Payment_Jack_PRINTABLE_Phone_Compatibility_Chart_10-14-2015.pdf') }}" target="_blank">Payment Jack PRINTABLE Phone Compatibility Chart</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">67 KB</span></td> 
                        </tr>
                            
                        <br><br>
						
					<!--Restaurant.com Documents//-->
                        <tr>  	
							<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Restaurant.com Documents</h3></span></td>
						</tr>
                    <!--1//--> 
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/2013-11-7 Rest-Com App ABN 2 pages.pdf') }}" target="_blank">Restaurant.com Application Documents</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">293 KB</span></td> 
                        </tr>
                    <!--2//-->  
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/10 Dollar Sell Sheet.pdf') }}" target="_blank">$10 Sell Sheet</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">1.7 MB</span></td>  
                        </tr>
					<!--3//-->  
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/FAQs 01 24 13.pdf') }}" target="_blank">FAQs</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">269 KB</span></td> 
                        </tr>
                    <!--4//-->  
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/ATTACHMENT A - 11-29-12.pdf') }}" target="_blank">Restaurant Restrictions</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">131 KB</span></td> 
                        </tr>
                        <!--26//--> 	
                            <tr> 
                              <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Qualifying a Menu V2 0.pdf') }}" target="_blank">Qualifying a Menu</a></td> 
                              <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                              <td class="tdResourceSizeAlt"><span class="txtResource">320 KB</span></td> 
                            </tr>
                        
                        <br><br>
                                                                          
					<!--Approval Guidelines//-->  
                        <tr>	
							<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Approval Guidelines</h3></span></td>
						</tr>
						
                    <!--1//-->  
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="/my/training/formsPages/requirementsL1">Level 1 - Retail</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">HTML</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">4 KB</span></td> 
                        </tr>
                    <!--2//-->  
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="/my/training/formsPages/requirementsL2">Level 2 - Retail/Service/Trade Show</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">HTML</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">5 KB</span></td> 
                        </tr>
                    <!--3//-->  
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="/my/training/formsPages/requirementsL3">Level 3 - MO/TO, Internet-Based</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">HTML</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">4 KB</span></td> 
                        </tr> 
                    <!--4//--> 
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="/my/training/formsPages/restricted">Restricted List</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">HTML</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">2 KB</span></td> 
                        </tr>
                    <!--5//-->  
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="/my/training/formsPages/prohibited">Prohibited List</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">HTML</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">3 KB</span></td> 
                        </tr> 
                        

                        <br><br>
                         
                    <!--Marketing Materials//-->      
						<tr>
                        	<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Marketing Materials</h3></span></td>
						</tr>
                     <!--1//-->     
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/BBB Accreditation Print Out.pdf') }}" target="_blank">BBB Accreditation Print Out</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">151 KB</span></td> 
                        </tr> 

                        <br><br> 
                         
					<!--Gift &amp; Loyalty//--> 
                        <tr>	
							<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Gift &amp; Loyalty</h3></span></td>
						</tr>
                    <!--1//--> 
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Gift_Card_App_10-14-2015ne.pdf') }}" target="_blank">Gift &amp; Loyalty Setup Form</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">5 MB</span></td> 
                        </tr>
                    <!--2//--> 
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/Gift_Card_Reorder_Form_10-14-2015.pdf') }}" target="_blank">Gift Card Re-Order Form</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">221 KB</span></td> 
                        </tr> 
                        
                        <br><br> 
                        
					<!--Credit Card Authorization Forms//-->  
						<tr>
                        	<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Credit Card Authorization Forms</h3></span></td> 
						</tr>
                    <!--1//-->  
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/ABN_Page_CC_Auth.pdf') }}" target="_blank">Merchant Credit Card Authorization Form </a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">47 KB</span></td> 
                        </tr>
                    <!--2//-->  
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/credit_card_auth_equipment_replacement_ABN.pdf') }}" target="_blank">Equipment Replacement Request Form </a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">71 KB</span></td> 
                        </tr> 

                        <br><br> 
                         
					<!--Add/Change Forms//-->  
                        <tr>	
							<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Add/Change Forms</h3></span></td> 
						</tr>
                    <!--1//-->  
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/DDA_Change_Form.pdf') }}" target="_blank">DDA Change Form</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">11 KB</span></td> 
                        </tr>
                    <!--2//-->  
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/Merchant_Account_Information_Change_Form_10-14-2015.pdf') }}" target="_blank">Merchant Account Information Change Form</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">87 KB</span></td> 
                        </tr>
                    <!--3//--> 
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/Generic Cancelation form 6-27-2013.pdf') }}" target="_blank">Merchant Account Cancellation Form</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">20 KB</span></td> 
                        </tr>
                    
                        
                        <br><br> 
                         
                    <!--Merchant Consultant Resources//-->  
						<tr>
                        	<td><span class="txtHeader" style="color:rgb(172,23,28);"><h3>Merchant Consultant Resources</h3></span></td>
						</tr>
					
                    <!--1//-->
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/MRW-2017-01-27.pdf') }}" target="_blank">Merchant Revenue Worksheet</a></td>
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">166 KB</span></td> 
                        </tr> 
					<!--2//-->	
                        <tr> 
                            <td class="tdResourceNameAlt"><a class="linkResource" href="{{ URL::to('documents/MAP_Form.pdf') }}" target="_blank">MAP Form</a></td> 
                            <td class="tdResourceVersionAlt"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSizeAlt"><span class="txtResource">17 KB</span></td> 
                        </tr>
                    <!--3//--> 
                        <tr> 
                            <td class="tdResourceName"><a class="linkResource" href="{{ URL::to('documents/Ingenico_Quick_Reference_10-14-2015.pdf') }}" target="_blank">Ingenico Quick Reference Guide</a></td> 
                            <td class="tdResourceVersion"><span class="txtResource">PDF</span></td> 
                            <td class="tdResourceSize"><span class="txtResource">40 KB</span></td> 
                        </tr>
			
					
                        </table> 
					<!--Footer//--> 
                        <br><br> 
                        <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_new"> 
                        <img src="/assets/img/Adobe-Reader.png" border="0" style="width:50px;"></a><br> 
                        If you do not have the Adobe Acrobat Reader<br>you may download it for <b>FREE</b> from
                        <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_new" class="linKBody"><strong>Adobe's home page</strong></a>.</i> 
                        </div> 

            </div>
        </section>
    </div>

@endsection
