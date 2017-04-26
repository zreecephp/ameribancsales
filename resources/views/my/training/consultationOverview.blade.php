@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Consultation Overview</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/auJ1OADudLI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

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

                <h3>Consultation Overview Quiz</h3>

                {!! Form::open(['url' => '/my/training/consultationOverviewSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: The Presentation Guide is a useful tool that helps __________.<br>
                <input type="radio" name="q1" value="Answer1">Mystify the Merchant<br>
                <input type="radio" name="q1" value="Answer2">Prompt You Along<br>
                <input type="radio" name="q1" value="Answer3">To Confuse You<br>
                <hr>
                Question 2: We usually do not open up the Presentation Guide until after ____________.<br>
                <input type="radio" name="q2" value="Answer1">The Presentation<br>
                <input type="radio" name="q2" value="Answer2">The Warm Up<br>
                <input type="radio" name="q2" value="Answer3">The First Close<br>
                <hr>
                Question 3: What is at the end of each Service Segment?<br>
                <input type="radio" name="q3" value="Answer1">Trial Close<br>
                <input type="radio" name="q3" value="Answer2">Dramatic Pause<br>
                <input type="radio" name="q3" value="Answer3">Warm Up<br>
                <hr>
                Question 4: We employ a ___________ closing process.<br>
                <input type="radio" name="q4" value="Answer1">Forceful<br>
                <input type="radio" name="q4" value="Answer2">3-Phase<br>
                <input type="radio" name="q4" value="Answer3">Long<br>
                <hr>
                Question 5: In the final phase of the Three-Phase Close, you bring in your ________ to help in closing the sale.<br>
                <input type="radio" name="q5" value="Answer1">Best Friend<br>
                <input type="radio" name="q5" value="Answer2">Lawyer<br>
                <input type="radio" name="q5" value="Answer3">Regional Manager<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
