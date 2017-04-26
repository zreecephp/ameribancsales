@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Closing Overview</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/0cmTuEK52IA?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                {!! Form::open(['url' => 'my/training/closingOverviewSubmit', 'method' => 'post']) !!}

				@if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: What is the pre-close question?<br>
                <input type="radio" name="q1" value="Answer1">Ask for the 2 favors.<br>
                <input type="radio" name="q1" value="Answer2">Ask to use the restroom.<br>
                <input type="radio" name="q1" value="Answer3">Ask for a pen to fill out the application.<br>

                <hr>

                Question 2: We use an______close.<br>
                <input type="radio" name="q2" value="Answer1">Uncommon<br>
                <input type="radio" name="q2" value="Answer2">Assumptive<br>
                <input type="radio" name="q2" value="Answer3">Uncouth<br>

                <hr>

                Question 3: How much of your conversation do people retain after 24 hours.<br>
                <input type="radio" name="q3" value="Answer1">100%<br>
                <input type="radio" name="q3" value="Answer2">75%<br>
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
