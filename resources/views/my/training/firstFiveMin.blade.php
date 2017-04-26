@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>First Five Minutes</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
              <div class="col-md-4 col-xs-12">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/1M9blU4bpac?rel=0" frameborder="0" allowfullscreen></iframe>
              </div>

            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>First Five Minutes Quiz</h3>

                {!! Form::open(['url' => '/my/training/firstFiveMinSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: The First Five Minutes is so important because it is your chance to make a good<br>
                <input type="radio" name="q1" value="Answer1">close<br>
                <input type="radio" name="q1" value="Answer2">impression<br>
                <input type="radio" name="q1" value="Answer3">getaway<br>
                <hr>
                Question 2: This section includes: The Approach, _______, Qualifying and the Set Up.<br>
                <input type="radio" name="q2" value="Answer1">Warm Up<br>
                <input type="radio" name="q2" value="Answer2">Credit/Debit Services<br>
                <input type="radio" name="q2" value="Answer3">Rate Compression<br>
                <hr>
                Question 3: This section is where we______ to build our close upon.<br>
                <input type="radio" name="q3" value="Answer1">Pretend<br>
                <input type="radio" name="q3" value="Answer2">Lay the foundation<br>
                <input type="radio" name="q3" value="Answer3">Discuss rates<br>&nbsp;<br>
                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
