@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Opportunity Job and Career</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="http://www.youtube.com/embed/yt4d7_3ncCI?rel=0" frameborder="0" allowfullscreen></iframe>

                <!--					<object-->
                <!--						classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"-->
                <!--						codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"-->
                <!--						id="tester"-->
                <!--						width="350" height="300"-->
                <!--					>-->
                <!--					<param name="movie" value="newswf/CorporateTour.swf">-->
                <!--					<param name="bgcolor" value="#FFFFFF">-->
                <!--					<param name="quality" value="high">-->
                <!--					<param name="allowscriptaccess" value="samedomain">-->
                <!--					<embed-->
                <!--						type="application/x-shockwave-flash"-->
                <!--						pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"-->
                <!--						name="tester"-->
                <!--						width="350" height="300"-->
                <!--						src="newswf/CorporateTour.swf"-->
                <!--						bgcolor="#FFFFFF"-->
                <!--						quality="high"-->
                <!--						allowscriptaccess="samedomain"-->
                <!--					>-->
                <!--					<noembed>-->
                <!--					</noembed>-->
                <!--					</embed>-->
                <!--					</object>-->
            </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>Opportunity Job and Career</h3>

                {!! Form::open(['url' => '/my/training/ma_opportunitySubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: AmeriBanc's career path opens up the doors for Consultants to do more and _________.<br>
                <input type="radio" name="q1" value="Answer1">Make Less<br>
                <input type="radio" name="q1" value="Answer2">Earn More<br>
                <input type="radio" name="q1" value="Answer3">Start Issuing Credit Cards<br>
                <hr>
                Question 2: What is our approach to the marketplace?<br>
                <input type="radio" name="q2" value="Answer1">Price Comparison<br>
                <input type="radio" name="q2" value="Answer2">Value Based<br>
                <input type="radio" name="q2" value="Answer3">Hardware Based<br>
                &nbsp;<br>
                Question 3: We are trying to help merchants achieve ___________.<br>
                <input type="radio" name="q3" value="Answer1">World Domination<br>
                <input type="radio" name="q3" value="Answer2">Higher Self Esteem<br>
                <input type="radio" name="q3" value="Answer3">Their Goals and Plans<br>
                &nbsp;<br>
                Question 4: Your ability to make a good income is due to ___________.<br>
                <input type="radio" name="q4" value="Answer1">Velocity<br>
                <input type="radio" name="q4" value="Answer2">Your Gift of Gab<br>
                <input type="radio" name="q4" value="Answer3">Your Charm<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="ma_opportunity.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
