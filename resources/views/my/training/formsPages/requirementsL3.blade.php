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
	<span class="txtHeader" style="color:rgb(172,23,28);"><h3>Auto Approval Guidelines - Level 3 (MO&#47;TO, Internet-Based)</h3></span><br><br>
	<ul>
		<li>Less than 50% swiped, majority of sales are keyed</li>				
		<li>Acceptable Type of Business</li>		
	</ul>
	<br>
	<span class="txtHeader" style="color:rgb(172,23,28);"><b>LEVEL 3 - DOCUMENTATION REQUIREMENTS</b></span><br>
	<br>
	<ol>
	<li><strong>Completed Merchant Application</strong></li>
	<ol type="a">
			<li>Physical address of business location (PO Box is not sufficient)</li>
			<li>Federal Tax I.D (social security number is OK for sole proprietorship only)</li>
			<li>Principal&#47;Owner information and signature</li>
			<li>Complete and accurate description of the products&#47;services sold</li>
			<li>Complete and accurate description of method of sales</li>
			<li>Annual volume and average sale amount (listed on schedule of fees)</li>
			<li>Voided check from a checking account that is able to received ACH credits and debit in the business name as listed on the merchant agreement. Voided check must show either the DBA name or legal name listed on application documents. Start check will be accepted but may require verbal verification from bank representative.</li>
			<li>Fully completed and properly signed Schedule of Fees</li>
			<li>Fully completed &#34;coversheet&#34; listing sales partners name&#47;office # and equipment setup instructions</li>
		</ol>
	<br><br>
	<li><strong>Site Survey</strong> - A site survey and photos are NOT REQUIRED for Level 3 Merchants. </li>
	<br><br>
	<li><strong>Marketing Materials</strong> - Internet-Based merchants need to provide a website disclosing the merchant DBA Name, address, telephone number, return policy, delivery method, and email address. Non internet-based merchants need to provide a copy of brochures, marketing materials, Invoices, or advertisements showing the merchant DBA Name, address, and telephone number. </li>
	<br><br>
	<li><strong>Processing Statements</strong> - If the merchant is currently processing Visa&#47;MC&#47;Discover, we need the most recent month credit card processing statements.</li>
	<br><br>
	<li><strong>Financial Information</strong> - We require financial information only when the Level 3 merchant is processing over $900,000 annually ($75K+&#47;month). The following is the financial requirements:</li>
	<ol type="a">
			<li>Business Balance Sheet & Income Statement (most recent fiscal year)</li>
			<li>Business Tax Return (most recent fiscal year)</li>
	      </ol>
		<br>
        <li><strong>Exceptions</strong> - Merchants in current bankruptcy which has not yet been discharged for at least six month will require a co-signer<br>
	    <br></li>
        <li><strong>Funds Availability</strong> - MOTO&#47; Internet-based merchants receive their funds in 5 business days unless they are currently processing in which they can qualify for 2 day funding. All other merchants receive their funds in 2 business days.</li>
	</ol>
	</div>
	</td>
</tr>
<tr><td align="center" colspan="2"><p class="txtFooter">AmeriBanc National (ABN) is a Member Service Provider for HSBC Bank USA, National Association, Buffalo, NY</p></td></tr>
</table>
@endsection