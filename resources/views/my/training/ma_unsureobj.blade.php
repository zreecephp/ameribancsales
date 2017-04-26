@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Unsure Objection</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="http://www.youtube.com/embed/HF26EZvxid0?rel=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>Unsure Objection</h3>

                {!! Form::open(['url' => '/my/training/ma_unsureobjSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: We are offering these merchants different services that they have ___________ success with.<br>
                <input type="radio" name="q1" value="Answer1">No Chance At<br>
                <input type="radio" name="q1" value="Answer2">A Better Chance At<br>
                <input type="radio" name="q1" value="Answer3">A Guarantee Of<br>
                <hr>
                Question 2: All of our services have already been proven as effective by __________.<br>
                <input type="radio" name="q2" value="Answer1">Small Businesses<br>
                <input type="radio" name="q2" value="Answer2">The Chamber of Commerce<br>
                <input type="radio" name="q2" value="Answer3">Regional and National Chains<br>
                &nbsp;<br>
                Question 3: What was the most requested, desired and delivered gift over the last two holiday seasons?<br>
                <input type="radio" name="q3" value="Answer1">Tickle Me Elmo<br>
                <input type="radio" name="q3" value="Answer2">Sparkling Princess Barbie<br>
                <input type="radio" name="q3" value="Answer3">Gift Cards<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="ma_unsureobj.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
