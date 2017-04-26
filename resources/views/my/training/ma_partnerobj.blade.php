@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Partner Objection</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="http://www.youtube.com/embed/0RMXnIFdA_0?rel=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>Partner Objection</h3>

                {!! Form::open(['url' => '/my/training/ma_partnerobjSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: This objection is usually a way for the merchant to ___________.<br>
                <input type="radio" name="q1" value="Answer1">Tell You That They Are Interested<br>
                <input type="radio" name="q1" value="Answer2">Put Off Making a Decision<br>
                <input type="radio" name="q1" value="Answer3">Get You To Stay For A Couple Hours<br>
                <hr>
                Question 2: Merchants are never going to be as excited or interested as they are __________.<br>
                <input type="radio" name="q2" value="Answer1">Today<br>
                <input type="radio" name="q2" value="Answer2">Tomorrow<br>
                <input type="radio" name="q2" value="Answer3">Next Week<br>
                &nbsp;<br>
                Question 3: People lose about ____% of the information they heard within 48 hours.<br>
                <input type="radio" name="q3" value="Answer1">25%<br>
                <input type="radio" name="q3" value="Answer2">50%<br>
                <input type="radio" name="q3" value="Answer3">80%<br>
                &nbsp;<br>
                Question 4: Your ________ can really help you with this objection if all else fails.<br>
                <input type="radio" name="q4" value="Answer1">Brother<br>
                <input type="radio" name="q4" value="Answer2">Friend<br>
                <input type="radio" name="q4" value="Answer3">Regional Manager<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="ma_partnerobj.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
