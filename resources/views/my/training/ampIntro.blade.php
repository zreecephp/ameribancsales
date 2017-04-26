@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>AMP Intro</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/SQ_-3AmCjIE?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>AMP Intro Quiz</h3>

                {!! Form::open(['url' => '/my/training/ampIntroSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: What does AMP stand for?<br>
                <input type="radio" name="q1" value="Answer1">Amateur Marketing Program<br>
                <input type="radio" name="q1" value="Answer2">AmeriBanc Marketing Program<br>
                <input type="radio" name="q1" value="Answer3">Allowed Morale Projection<br>

                <br>

                Question 2: What is "Groovv Offers"?<br>
                <input type="radio" name="q2" value="Answer1">Text based Marketing<br>
                <input type="radio" name="q2" value="Answer2">Loyalty Program<br>
                <input type="radio" name="q2" value="Answer3">All of the above<br>

                <br>

                Question 3: What is the monthly cost for the Private label merchant cards?<br>
                <input type="radio" name="q3" value="Answer1">$19.95<br>
                <input type="radio" name="q3" value="Answer2">$29.95<br>
                <input type="radio" name="q3" value="Answer3">$199.99<br>

                <br>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
