@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>AMEX CCDC Presentation</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/V7CHq4opwEo?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>AMEX CCDC Presentation Quiz</h3>

                {!! Form::open(['url' => '/my/training/AmexCcdcSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: What is our base rate for taking credit cards?<br>
                <input type="radio" name="q1" value="Answer1">12.9%<br>
                <input type="radio" name="q1" value="Answer2">1.29%<br>
                <input type="radio" name="q1" value="Answer3">.129%<br>

                <br>

                Question 2: What is our Service agreement with new customers?<br>
                <input type="radio" name="q2" value="Answer1">1 year contract<br>
                <input type="radio" name="q2" value="Answer2">Bi-Monthly Contract<br>
                <input type="radio" name="q2" value="Answer3">Month to Month<br>

                <br>

                Question 3: How do we handle AMEX cards?<br>
                <input type="radio" name="q3" value="Answer1">Combined in our statements<br>
                <input type="radio" name="q3" value="Answer2">Next Day funding<br>
                <input type="radio" name="q3" value="Answer3">All of the above<br>

                <br>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
