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
    <section class="wrapper portfolio-page">

    <div style="width:800px; height:650px; padding:10px; text-align:center; border: 10px solid #005aaa; background-image: url('/assets/img/training/flagback.jpg');">
        <div style="width:750px; height:610px; padding:20px; text-align:center; border: 5px solid #ac171c">
               <span style="font-size:50px; font-weight:bold">Congratulations</span>
               <br><br>
               <span style="font-size:25px"><i>YOU PASSED THIS SECTION!</i></span>
               <br><br>
               <span style="font-size:30px"><b>{{ $adminModel['name'] }}</b></span><br/><br/>
               <p><img src="/assets/img/training/completed02.png" style="float: left;" /><p>
               <span style="font-size:25px"><i>has completed the section</i></span> <br/><br/>
               <span style="font-size:30px">{{ $compValues['quizName'] }}</span> <br/><br/>

               <span style="font-size:25px"><i>dated</i></span><br>
               <span style="font-size:30px">{{ $compValues['completionDate'] }}</span>
        </div>
    </div>

        <br>

        <div>
            <a class="btn btn-bricky" href="{{ $compValues['nextUrl'] }}">Start Next Section</a>
        </div>

		<br>

     </section>
</div>
@endsection
