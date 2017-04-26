@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>EMV NFC Recap</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/Vacfm3JCafc?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>EMV NFC Recap Quiz</h3>

                {!! Form::open(['url' => '/my/training/EmvNfcRecapSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: What does NFC stand for?<br>
                <input type="radio" name="q1" value="Answer1">Near Field Communication<br>
                <input type="radio" name="q1" value="Answer2">North Field Connection<br>
                <input type="radio" name="q1" value="Answer3">Not Fried Chicken<br>

                <hr>

                Question 2: Apple pay or Google wallet are not safe transactions Because they are electronic<br>
                <input type="radio" name="q2" value="Answer1">True<br>
                <input type="radio" name="q2" value="Answer2">False<br>
                <input type="radio" name="q2" value="Answer3">I am not paying attention<br>

                <hr>

                Question 3: How many terminals need to be replaced by October 2015<br>
                <input type="radio" name="q3" value="Answer1">1.3 million<br>
                <input type="radio" name="q3" value="Answer2">13 million<br>
                <input type="radio" name="q3" value="Answer3">none<br>

                <hr>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
