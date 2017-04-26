@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Credit Card 101 - Section 2</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/OoBMNi9jDWA?rel=0" frameborder="0" allowfullscreen></iframe>
                    <!--<object
                        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        id="tester"
                        width="350" height="300"
                    >
                    <param name="movie" value="cc101-01-nb.swf">
                    <param name="bgcolor" value="#FFFFFF">
                    <param name="quality" value="high">
                    <param name="allowscriptaccess" value="samedomain">
                    <embed
                        type="application/x-shockwave-flash"
                        pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
                        name="tester"
                        width="350" height="300"
                        src="cc101-01-nb.swf"
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

                {!! Form::open(['url' => '/my/training/creditCard02Submit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: How many types of Credit Cards are there?<br>
                <input type="radio" name="q1" value="Answer1">2<br>
                <input type="radio" name="q1" value="Answer2">3<br>
                <input type="radio" name="q1" value="Answer3">9<br>
                <hr>
                Question 2: Debit cards are ___% of the transaction count.<br>
                <input type="radio" name="q2" value="Answer1">25%<br>
                <input type="radio" name="q2" value="Answer2">50%<br>
                <input type="radio" name="q2" value="Answer3">75%<br>
                <hr>
                Question 3: What does T & E stand for?<br>
                <input type="radio" name="q3" value="Answer1">Tails and Escargo<br>
                <input type="radio" name="q3" value="Answer2">Trips and Expenses<br>
                <input type="radio" name="q3" value="Answer3">Travel and Entertainment<br>
                <hr>
                Question 4: The three areas of fees include __________ fees, monthly fees and miscellaneous fees.<br>
                <input type="radio" name="q4" value="Answer1">weekly<br>
                <input type="radio" name="q4" value="Answer2">transactional<br>
                <input type="radio" name="q4" value="Answer3">yearly<br>
                <hr>
                Question 5: How many levels of qualification are there?<br>
                <input type="radio" name="q5" value="Answer1">3<br>
                <input type="radio" name="q5" value="Answer2">4<br>
                <input type="radio" name="q5" value="Answer3">1<br>
                <hr>
                Question 6: With a 1.29% rate, we take a _______ on the credit side, but we make a profit on the debit side.<br>
                <input type="radio" name="q6" value="Answer1">Gain<br>
                <input type="radio" name="q6" value="Answer2">Loss<br>
                <input type="radio" name="q6" value="Answer3">Percentage<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="cc101-01.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
