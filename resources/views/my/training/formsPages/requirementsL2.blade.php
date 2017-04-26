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
    
	<table border="0" cellpadding="0" cellspacing="0" width="770">
        <tr>
            <td width="100%" align="left" valign="top">
            <div class="txtBody">
            <br>
            <span class="txtHeader" style="color:rgb(172,23,28);"><h3>Approval Guidelines - Level 2 (Retail/Service/Trade Show)</h3></span><br>
            
            <ul>
                <li>Greater Than 50% BUT Less Than 75%+ Card Swiped</li>		
                <li>Acceptable Type of Business</li>		
            </ul>
            <br>
            <span class="txtHeader" style="color:rgb(172,23,28);"><b>LEVEL 2 - DOCUMENTATION REQUIREMENTS</b></span><br>
            <ol>
            <li><strong>Completed Merchant Application</strong></li>
                <ol type="a">
                  <li>Fully completed &#34;coversheet&#34; listing sales partners name/office # and equipment setup instructions</li>
                  <li>Physical address of business location (P.O. Box is not sufficient)</li>
                  <li>Federal Tax I.D (social security number is OK  for sole proprietorship only)</li>
                  <li>Principal/Owner information and signature</li>
                  <li>Complete and accurate description of the products/services sold</li>
                  <li>Complete and accurate description of method of sales</li>
                  <li>Annual volume and average sale amount</li>
                  <li>Voided check from a checking account that is able to received ACH credits and debit in the business name as listed on the merchant agreement. Voided check must show either the DBA name or legal name listed on application documents. Starter checks will be accepted but may require verbal verification from bank representative.</li>
                  <li>Fully completed and properly signed Schedule of Fees</li>
                </ol>
                <br><br>
            <li><strong>Site Survey</strong> - You may complete the site survey located on page 2 of 12 of the application documents,  OR, in lieu of conducting a site survey, please provide a minimum of ANY ONE of the following items:</li>
                <ol type="a">
                    <li>Credit Card Processing Statements (if applicable)</li>
                    <li>Business License/Fictitious DBA Name Filing/Sales Tax License (showing the business physical address)</li>
                    <li>Utility Bill (showing the business physical address)</li>
                    <li>Yellow Page Advertisement</li>
                </ol>
                <br>
                <br>
                <li><strong>Financial Information</strong> - We require financial information only when the Level 2 merchant is processing over $900,000 annually ($75K+/month). The following is the financial requirements:</li>
                <ol type="a">
                  <li>Business Balance Sheet & Income Statement (last 2 fiscal years)</li>
                  <li>Business Tax Return (last 2 fiscal years)<br>
                  </li>
                  </ol>
                <br>
                 <li><strong>Exceptions</strong> - Merchants in current bankruptcy which has not yet been discharged for at least six months will require a co-signer.<br>
                  <br>If the type of business is unclear, you may be asked to supply a Business Description Profile and/or marketing material/invoices that explain what is being sold and how.<br><br></li>
                <li><strong>Funds Availability</strong> - Merchants receive their funds in 2 business days.<br>
                  <br></li>
                </ol>
            </div>
            </td>
        </tr>
        <tr><td align="center" colspan="2"><p class="txtFooter">AmeriBanc National (ABN) is a Member Service Provider for HSBC Bank USA, National Association, Buffalo, NY</p></td></tr>
        </table>
    

@endsection

