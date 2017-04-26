@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Credit Card 101 - Section 1</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="http://www.youtube.com/embed/ECA9Si07wIY?rel=0" frameborder="0" allowfullscreen></iframe>
                    <!--<object
                        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        id="tester"
                        width="350" height="300"
                    >
                    <param name="movie" value="cc101-00-nb.swf">
                    <param name="bgcolor" value="#FFFFFF">
                    <param name="quality" value="high">
                    <param name="allowscriptaccess" value="samedomain">
                    <embed
                        type="application/x-shockwave-flash"
                        pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
                        name="tester"
                        width="350" height="300"
                        src="cc101-00-nb.swf"
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

                <h3>Credit Card 101 Quiz</h3>

                {!! Form::open(['url' => '/my/training/creditCard01Submit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: AmeriBanc is in the ___________ industry.<br>
                <input type="radio" name="q1" value="Answer1">Automotive<br>
                <input type="radio" name="q1" value="Answer2">Movie Production<br>
                <input type="radio" name="q1" value="Answer3">Electronic Payments<br>
                <hr>
                Question 2: Our target market is comprised of ___% of all businesses in the U.S.<br>
                <input type="radio" name="q2" value="Answer1">10%<br>
                <input type="radio" name="q2" value="Answer2">25%<br>
                <input type="radio" name="q2" value="Answer3">92%<br>
                <hr>
                Question 3: What is our first service segment?<br>
                <input type="radio" name="q3" value="Answer1">Debit and Credit<br>
                <input type="radio" name="q3" value="Answer2">Check Imaging<br>
                <input type="radio" name="q3" value="Answer3">Credit Card Rates<br>
                <hr>
                Question 4: ____ out of 10 merchants already accept Credit Cards.<br>
                <input type="radio" name="q4" value="Answer1">9<br>
                <input type="radio" name="q4" value="Answer2">8<br>
                <input type="radio" name="q4" value="Answer3">5<br>
                <hr>
                Question 5: AmeriBanc uses a ______________ billing cycle.<br>
                <input type="radio" name="q5" value="Answer1">Weekly<br>
                <input type="radio" name="q5" value="Answer2">Monthly<br>
                <input type="radio" name="q5" value="Answer3">Yearly<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="cc101-00.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
