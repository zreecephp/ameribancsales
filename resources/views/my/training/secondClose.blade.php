@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Second Close</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/m-42a2DXJMU?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>Second Close Quiz</h3>

                {!! Form::open(['url' => '/my/training/secondCloseSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: You want to treat any obstacle as a, _______ obstacle.<br>
                <input type="radio" name="q1" value="Answer1">Major<br>
                <input type="radio" name="q1" value="Answer2">Huge<br>
                <input type="radio" name="q1" value="Answer3">Minor<br>

                <hr>

                Question 2: When the first close does not work you<br>
                <input type="radio" name="q2" value="Answer1">Say goodbye and leave<br>
                <input type="radio" name="q2" value="Answer2">Show them the snowball effect<br>
                <input type="radio" name="q2" value="Answer3">Call in to your Manager<br>

                <hr>

                Question 3: When using the assumptive close you.<br>
                <input type="radio" name="q3" value="Answer1">Break eye contact and start writing!<br>
                <input type="radio" name="q3" value="Answer2">Send the application without the owner knowing<br>
                <input type="radio" name="q3" value="Answer3">Come back at a later time.<br>

                <br>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
