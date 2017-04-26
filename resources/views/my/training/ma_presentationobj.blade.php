@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Presentation Objections</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="http://www.youtube.com/embed/0X4laIM4hwE?rel=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>Presentation Objections</h3>

                {!! Form::open(['url' => '/my/training/ma_presentationobjSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: These are objections you will encounter _____________.<br>
                <input type="radio" name="q1" value="Answer1">At The Beginning of the Consultation<br>
                <input type="radio" name="q1" value="Answer2">In The Middle of the Consultation<br>
                <input type="radio" name="q1" value="Answer3">At The End of the Consultation<br>
                <hr>
                Question 2: You are going to have to work hard to overcome a merchant's preconceived ____________.<br>
                <input type="radio" name="q2" value="Answer1">Notions<br>
                <input type="radio" name="q2" value="Answer2">Plans<br>
                <input type="radio" name="q2" value="Answer3">Stereotypes<br>
                &nbsp;<br>
                Question 3: You are going to be dealing with objections on a ___________ basis.<br>
                <input type="radio" name="q3" value="Answer1">Daily<br>
                <input type="radio" name="q3" value="Answer2">Weekly<br>
                <input type="radio" name="q3" value="Answer3">Monthly<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="ma_presentationobj.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
