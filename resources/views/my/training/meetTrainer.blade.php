@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

    <div class="container">
        <div class="page-header">
            <h2>Meet the Trainer</h2>
        </div>

        <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/daxDu-mtOGc?rel=0" frameborder="0" allowfullscreen></iframe>
                    <!--<object
                        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        id="tester"
                        width="350" height="300"
                    >
                    <param name="movie" value="newswf/MeetTheTrainer.swf">
                    <param name="bgcolor" value="#FFFFFF">
                    <param name="quality" value="high">
                    <param name="allowscriptaccess" value="samedomain">
                    <embed
                        type="application/x-shockwave-flash"
                        pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
                        name="tester"
                        width="350" height="300"
                        src="newswf/MeetTheTrainer.swf"
                        bgcolor="#FFFFFF"
                        quality="high"
                        allowscriptaccess="samedomain"
                    >
                    <noembed>
                    </noembed>
                    </embed>`
                    </object>//-->
                </div>
                <div class="col-md-6 col-xs-12" style="clear:both;">

                    <h3>Meet the Trainer Quiz</h3>

                    {!! Form::open(['url' => '/my/training/meetTrainerSubmit', 'method' => 'post']) !!}

                    @if ($errors->any())
                        <section class="error alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </section>
                    @endif

                    Question 1: We use a _______-based approach rather than a lecture-based approach.<br>
                    <input type="radio" name="q1" value="Answer1">Demand<br>
                    <input type="radio" name="q1" value="Answer2">Question<br>
                    <input type="radio" name="q1" value="Answer3">Statement<br>
                    <hr>
                    Question 2: Who is the only one that can control how much you take in from this training?<br>
                    <input type="radio" name="q2" value="Answer1">The Trainer<br>
                    <input type="radio" name="q2" value="Answer2">The Manager<br>
                    <input type="radio" name="q2" value="Answer3">You<br>
                    <hr>
                    Question 3: How much do you pay for appointments?<br>
                    <input type="radio" name="q3" value="Answer1">$100 each<br>
                    <input type="radio" name="q3" value="Answer2">$25 each<br>
                    <input type="radio" name="q3" value="Answer3">Nothing<br>
                    <hr>
                    Question 4: What is the only way AmeriBanc stands to profit off the investment made in you?<br>
                    <input type="radio" name="q4" value="Answer1">By helping you to become successful<br>
                    <input type="radio" name="q4" value="Answer2">By not teaching you how to become successful<br>
                    <input type="radio" name="q4" value="Answer3">By telling you that this is an easy job<br>
                    <hr>
                    Question 5: We have to give you: Realistic Expectations, Realistic Preparation and _________.<br>
                    <input type="radio" name="q5" value="Answer1">Nothing more<br>
                    <input type="radio" name="q5" value="Answer2">Good, Solid Techniques<br>
                    <input type="radio" name="q5" value="Answer3">All The Answers<br>
                    &nbsp;<br>
                    <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="meetTrainer.php">

                    {!! Form::close() !!}

                </div>
            </div>


            <br>

        </section>
    </div>


@endsection
