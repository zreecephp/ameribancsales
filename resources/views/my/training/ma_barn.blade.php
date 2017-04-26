@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>B.A.R.N</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="http://www.youtube.com/embed/lDcIDctm5tg?rel=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>B.A.R.N</h3>

                {!! Form::open(['url' => '/my/training/ma_barnSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: B.A.R.N. stands for: Building a ________ Network.<br>
                <input type="radio" name="q1" value="Answer1">Robot<br>
                <input type="radio" name="q1" value="Answer2">Real<br>
                <input type="radio" name="q1" value="Answer3">Referral<br>
                <hr>
                Question 2: If you did not start B.A.R.N. on your first day in the field, when is a good time to start?<br>
                <input type="radio" name="q2" value="Answer1">Next Monday<br>
                <input type="radio" name="q2" value="Answer2">Today<br>
                <input type="radio" name="q2" value="Answer3">Next Month<br>
                &nbsp;<br>
                Question 3: Which one of our services is best suited to help aid you in building your network?<br>
                <input type="radio" name="q3" value="Answer1">Debit Cards<br>
                <input type="radio" name="q3" value="Answer2">Check Imaging<br>
                <input type="radio" name="q3" value="Answer3">Merchant Cards<br>
                &nbsp;<br>
                Question 4: After you have really started getting your network going, there will come a point in time where you will no longer want _______.<br>
                <input type="radio" name="q4" value="Answer1">Customers<br>
                <input type="radio" name="q4" value="Answer2">Money<br>
                <input type="radio" name="q4" value="Answer3">Appointments From Us<br>
                &nbsp;<br>
                Question 5: Your closing rate on referrals is going to be a lot __________ than on appointments.<br>
                <input type="radio" name="q5" value="Answer1">Lower<br>
                <input type="radio" name="q5" value="Answer2">Higher<br>
                <input type="radio" name="q5" value="Answer3">More Confusing<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="ma_barn.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
