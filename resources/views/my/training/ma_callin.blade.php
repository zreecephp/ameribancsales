@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Call In</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="http://www.youtube.com/embed/mXoycPPUOvo?rel=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>Call In</h3>

                {!! Form::open(['url' => '/my/training/ma_callinSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: During the third close, you call into your Regional Manager __________.<br>
                <input type="radio" name="q1" value="Answer1">Because You Are Lonely<br>
                <input type="radio" name="q1" value="Answer2">Because You Still Don't Have The Decision To Buy.<br>
                <input type="radio" name="q1" value="Answer3">Because You Want To Hear "Good Job" From Your Regional<br>
                <hr>
                Question 2: The Call In goes Hand-In-Hand with the __________ close.<br>
                <input type="radio" name="q2" value="Answer1">First<br>
                <input type="radio" name="q2" value="Answer2">Second<br>
                <input type="radio" name="q2" value="Answer3">Third<br>
                &nbsp;<br>
                Question 3: It is important to identify what the __________ is before calling in.<br>
                <input type="radio" name="q3" value="Answer1">Time<br>
                <input type="radio" name="q3" value="Answer2">Phone Number<br>
                <input type="radio" name="q3" value="Answer3">Objection<br>
                &nbsp;<br>
                Question 4: It is important to call your Regional Manager while you are ________.<br>
                <input type="radio" name="q4" value="Answer1">At The Place of Business<br>
                <input type="radio" name="q4" value="Answer2">In The Washroom<br>
                <input type="radio" name="q4" value="Answer3">In Your Car<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="ma_callin.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
