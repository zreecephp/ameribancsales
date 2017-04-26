@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>AMEX CCDC Recap</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/nv2TuQrfVYU?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">
            
            	<h3>AMEX CCDC Recap Quiz</h3>

                {!! Form::open(['url' => '/my/training/AmexCcdcRecapSubmit', 'method' => 'post']) !!}

				@if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: The merchant will_______.<br>
                <input type="radio" name="q1" value="Answer1">Tend to Mirror your enthusiasm<br>
                <input type="radio" name="q1" value="Answer2">Be bored with you before you even start.<br>
                <input type="radio" name="q1" value="Answer3">Listen diligently hanging on every word you have to say.<br>

                <br>

                Question 2: At the bottom of the page we want you to ask.<br>
                <input type="radio" name="q2" value="Answer1">Are you confused yet?<br>
                <input type="radio" name="q2" value="Answer2">Do you understand?<br>
                <input type="radio" name="q2" value="Answer3">What is good for lunch around here?<br>

                <br>

                Question 3: What are great points to point out to the prospect customer?<br>
                <input type="radio" name="q3" value="Answer1">Free equipment<br>
                <input type="radio" name="q3" value="Answer2">Next day funding<br>
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
