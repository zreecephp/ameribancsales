@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Third Close</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/OwllfkiucxU?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>Third Close Quiz</h3>

                {!! Form::open(['url' => '/my/training/thirdCloseSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: What consists of the third close?<br>
                <input type="radio" name="q1" value="Answer1">Find out what is holding them up.<br>
                <input type="radio" name="q1" value="Answer2">Fill out the paperwork anyway<br>
                <input type="radio" name="q1" value="Answer3">Get up and leave<br>

                <hr>

                Question 2: Your first job for the third close is to<br>
                <input type="radio" name="q2" value="Answer1">Conditionally close<br>
                <input type="radio" name="q2" value="Answer2">Identify the objections<br>
                <input type="radio" name="q2" value="Answer3">Isolate the Obstacles<br>

                <hr>

                Question 3: When you call in you use the title.<br>
                <input type="radio" name="q3" value="Answer1">Regional Manager<br>
                <input type="radio" name="q3" value="Answer2">Service Support<br>
                <input type="radio" name="q3" value="Answer3">Manager<br>

                <br>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
