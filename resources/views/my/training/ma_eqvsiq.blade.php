@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>EQ vs IQ</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="http://www.youtube.com/embed/3MWoJZEaiCQ?rel=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>EQ vs IQ</h3>

                {!! Form::open(['url' => '/my/training/ma_eqvsiqSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: EQ stands for __________.<br>
                <input type="radio" name="q1" value="Answer1">Electrical Queen<br>
                <input type="radio" name="q1" value="Answer2">Ever Quest<br>
                <input type="radio" name="q1" value="Answer3">Emotional Quotient<br>
                <hr>
                Question 2: IQ stands for __________.<br>
                <input type="radio" name="q2" value="Answer1">Interest Question<br>
                <input type="radio" name="q2" value="Answer2">Intelligence Quotient<br>
                <input type="radio" name="q2" value="Answer3">Intergalactic Quest<br>
                &nbsp;<br>
                Question 3: Merchants need to be well informed about our services, but to get them to buy, they need to be __________.<br>
                <input type="radio" name="q3" value="Answer1">Aggravated<br>
                <input type="radio" name="q3" value="Answer2">Confused<br>
                <input type="radio" name="q3" value="Answer3">Excited<br>
                &nbsp;<br>
                Question 4: During the ________ you have the perfect chance to tackle a number of Emotional Concerns.<br>
                <input type="radio" name="q4" value="Answer1">Warm Up<br>
                <input type="radio" name="q4" value="Answer2">First Close<br>
                <input type="radio" name="q4" value="Answer3">Shaggy Moment<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="ma_eqvsiq.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
