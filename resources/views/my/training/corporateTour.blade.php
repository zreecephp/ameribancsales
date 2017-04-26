@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Corporate Tour</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/xm8CGk0_1NY?rel=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>Corporate Tour Quiz</h3>

                {!! Form::open(['url' => '/my/training/corporateTourSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: AmeriBanc has offices located in Chicago, IL and _________.<br>
                <input type="radio" name="q1" value="Answer1">New York, NY<br>
                <input type="radio" name="q1" value="Answer2">Los Angeles, CA<br>
                <input type="radio" name="q1" value="Answer3">Oklahoma City, OK<br>
                <hr>
                Question 2: The Call Center is known to make _________ of dials each day.<br>
                <input type="radio" name="q2" value="Answer1">Hundreds<br>
                <input type="radio" name="q2" value="Answer2">Thousands<br>
                <input type="radio" name="q2" value="Answer3">Millions<br>
                &nbsp;<br>
                Question 3: We ensure the quality of our appointments by having them checked by our _________.<br>
                <input type="radio" name="q3" value="Answer1">Managers<br>
                <input type="radio" name="q3" value="Answer2">Payroll Department<br>
                <input type="radio" name="q3" value="Answer3">Confirmers<br>
                &nbsp;<br>
                Question 4: Your appointments will be received via ________ every day.<br>
                <input type="radio" name="q4" value="Answer1">Snail Mail<br>
                <input type="radio" name="q4" value="Answer2">E-mail<br>
                <input type="radio" name="q4" value="Answer3">FedEx<br>
                &nbsp;<br>
                Question 5: The average Merchant Application is approved within _________.<br>
                <input type="radio" name="q5" value="Answer1">4-6 Business Hours<br>
                <input type="radio" name="q5" value="Answer2">2-3 Business Days<br>
                <input type="radio" name="q5" value="Answer3">1 Month<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="corporateTour.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
