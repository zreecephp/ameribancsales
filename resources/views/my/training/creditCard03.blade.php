@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Credit Card 101 - Section 3</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/_c6txAibKm0?rel=0" frameborder="0" allowfullscreen></iframe>
                    <!--<object
                        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        id="tester"
                        width="350" height="300"
                    >
                    <param name="movie" value="cc101-02-nb.swf">
                    <param name="bgcolor" value="#FFFFFF">
                    <param name="quality" value="high">
                    <param name="allowscriptaccess" value="samedomain">
                    <embed
                        type="application/x-shockwave-flash"
                        pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
                        name="tester"
                        width="350" height="300"
                        src="cc101-02-nb.swf"
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

                {!! Form::open(['url' => '/my/training/creditCard03Submit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif


                Question 1: It is better to present a quality offering instead of just ________.<br>
                <input type="radio" name="q1" value="Answer1">Trying To Leave.<br>
                <input type="radio" name="q1" value="Answer2">Trying To Convince The Merchant To Accept Cash.<br>
                <input type="radio" name="q1" value="Answer3">Trying To Sell Processing Alone.<br>
                <hr>
                Question 2: The average cost of leasing equipment is _______.<br>
                <input type="radio" name="q2" value="Answer1">$20 a month<br>
                <input type="radio" name="q2" value="Answer2">$30 a month<br>
                <input type="radio" name="q2" value="Answer3">$40 a month<br>
                <hr>
                Question 3: It is very helpful to start talking about ___________ with the Merchant.<br>
                <input type="radio" name="q3" value="Answer1">Price Comparison<br>
                <input type="radio" name="q3" value="Answer2">The Merchant's Goals<br>
                <input type="radio" name="q3" value="Answer3">Discussing The Weather<br>
                <hr>
                Question 4: We focus on the ____________ businesses.<br>
                <input type="radio" name="q4" value="Answer1">Small<br>
                <input type="radio" name="q4" value="Answer2">Small-medium<br>
                <input type="radio" name="q4" value="Answer3">Large<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="cc101-02.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
