@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>EMV NFC Overview</h2>
    </div>

    <section class="wrapper portfolio-page">

        <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/OBliRZUsHS0?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>EMV NFC Overview Quiz</h3>

                {!! Form::open(['url' => '/my/training/EmvNfcOverviewSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: When is the deadline for businesses to be EMV compliant?<br>
                <input type="radio" name="q1" value="Answer1">Jan 2016<br>
                <input type="radio" name="q1" value="Answer2">Oct 2015<br>
                <input type="radio" name="q1" value="Answer3">Last year<br>

                <br>

                Question 2: Who is liable for a fraudulent transaction if a merchant is not compliant?<br>
                <input type="radio" name="q2" value="Answer1">Credit card company<br>
                <input type="radio" name="q2" value="Answer2">The card company<br>
                <input type="radio" name="q2" value="Answer3">The business owner<br>

                <br>

                Question 3: What percent of cards issued are expected to be on the smartcard format by October 2015?<br>
                <input type="radio" name="q3" value="Answer1">100%<br>
                <input type="radio" name="q3" value="Answer2">80%<br>
                <input type="radio" name="q3" value="Answer3">50%<br>

                <br>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
