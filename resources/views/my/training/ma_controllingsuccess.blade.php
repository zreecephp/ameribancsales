@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Controlling Your Success</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="http://www.youtube.com/embed/hjVAcmHESog?rel=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>Controlling Your Success</h3>

                {!! Form::open(['url' => '/my/training/ma_controllingsuccessSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: The 3 things you can control in the Consultation are: How hard you work, how much you study and ___________.<br>
                <input type="radio" name="q1" value="Answer1">The Merchant<br>
                <input type="radio" name="q1" value="Answer2">Your Attitude<br>
                <input type="radio" name="q1" value="Answer3">The Weather<br>
                <hr>
                Question 2: What is the best time to start your day?<br>
                <input type="radio" name="q2" value="Answer1">6:30 am<br>
                <input type="radio" name="q2" value="Answer2">8:00 am<br>
                <input type="radio" name="q2" value="Answer3">The Same Time Every Day<br>
                &nbsp;<br>
                Question 3: In order to be successful, you have to act ____________.<br>
                <input type="radio" name="q3" value="Answer1">Like a Failure<br>
                <input type="radio" name="q3" value="Answer2">Successful<br>
                <input type="radio" name="q3" value="Answer3">Like a Monkey<br>
                &nbsp;<br>
                Question 4: The key to success is not information or data, it is ______________.<br>
                <input type="radio" name="q4" value="Answer1">An Enthusiastic Presentation<br>
                <input type="radio" name="q4" value="Answer2">Rates and Fees<br>
                <input type="radio" name="q4" value="Answer3">Misdirection and Exaggeration<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="ma_controllingsuccess.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
