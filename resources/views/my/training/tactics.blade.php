@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Strategy/Tactics</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/9MSEHsMIjY0?rel=0" frameborder="0" allowfullscreen></iframe>
                    <!--<object
                        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        id="tester"
                        width="350" height="300"
                    >
                    <param name="movie" value="newswf/Tactics.swf">
                    <param name="bgcolor" value="#FFFFFF">
                    <param name="quality" value="high">
                    <param name="allowscriptaccess" value="samedomain">
                    <embed
                        type="application/x-shockwave-flash"
                        pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
                        name="tester"
                        width="350" height="300"
                        src="newswf/Tactics.swf"
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

                <h3>Strategy/Tactics Quiz</h3>

                {!! Form::open(['url' => '/my/training/tacticsSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: Tactics are what we need to employ when _________.<br>
                <input type="radio" name="q1" value="Answer1">We walk through the door<br>
                <input type="radio" name="q1" value="Answer2">The presentation is over<br>
                <input type="radio" name="q1" value="Answer3">We wake up<br>
                <hr>
                Question 2: We give you the _______, it's up to you to use them.<br>
                <input type="radio" name="q2" value="Answer1">Words<br>
                <input type="radio" name="q2" value="Answer2">Pictures<br>
                <input type="radio" name="q2" value="Answer3">Tools<br>
                <hr>
                Question 3: What is one of the best weapons in your arsenal?<br>
                <input type="radio" name="q3" value="Answer1">.45 Magnum<br>
                <input type="radio" name="q3" value="Answer2">Presentation Guide<br>
                <input type="radio" name="q3" value="Answer3">Telephone book<br>
                <hr>
                Question 4: Our step-by-step plan includes the following: Approach, _______, Qualify, Set Up, Application, and 3-Phase Close.<br>
                <input type="radio" name="q4" value="Answer1">Pitch<br>
                <input type="radio" name="q4" value="Answer2">Credit Card Rates<br>
                <input type="radio" name="q4" value="Answer3">Warm Up<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="tactics.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
