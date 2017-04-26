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
	<span class="txtHeader" style="color:rgb(172,23,28);"><h3>Approval Guidelines - Restricted List</h3></span>
	<ul>
		<li>Computer Hardware - good credit only, been in business for 2 years, currently processing, retail store</li>
		<li>Consumer Electronic Products - good credit only, been in business for 2 years, currently processing</li>
		<li>Internet Auctions - advertising fees only</li>
		<li>Massage Therapist - require therapist license </li>
		<li>Mortgage services - application and processing fees only</li>
		<li>Online Malls - hosting&#47;advertising fees only (max ticket is $150)</li>
		<li>Self Help, Self - Published Books&#47;Publications&#47;Tapes  (max ticket is $50, required initial reserve with approval)</li>
		<li>Travel Agencies - service fees only  (max ticket is $50)</li>
		<li>Web Advertising</li>
		<li>Gun Shop - 100% swiped&#47;good credit only</li>
	</ul>
	</div>
	</td>
</tr>
</table>
@endsection