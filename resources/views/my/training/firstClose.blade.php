@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>First Close</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/3-Y_49lk7R8?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>First Close Quiz</h3>

                {!! Form::open(['url' => '/my/training/firstCloseSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: What is the owners default condition?<br>
                <input type="radio" name="q1" value="Answer1">Procrastination<br>
                <input type="radio" name="q1" value="Answer2">Hungry<br>
                <input type="radio" name="q1" value="Answer3">Not paying attention<br>

                <hr>

                Question 2: When can you log in and get a snapshot of your statement if you are using the Green option<br>
                <input type="radio" name="q2" value="Answer1">Weekly<br>
                <input type="radio" name="q2" value="Answer2">Any time<br>
                <input type="radio" name="q2" value="Answer3">Monthly<br>

                <hr>

                Question 3: The Merchant revenue worksheet is an important<br>
                <input type="radio" name="q3" value="Answer1">Piece of paperwork<br>
                <input type="radio" name="q3" value="Answer2">Tool<br>
                <input type="radio" name="q3" value="Answer3">Contract<br>

                <br>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
