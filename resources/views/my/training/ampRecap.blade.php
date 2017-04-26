@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>AMP Recap</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/CJExjXIyK4I?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">
            
            	<h3>AMP Recap Quiz</h3>

                {!! Form::open(['url' => '/my/training/ampRecapSubmit', 'method' => 'post']) !!}

				@if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: Most Business owners are.<br>
                <input type="radio" name="q1" value="Answer1">Busy running day to day operations, They have a hard time seeing the overall needs<br>
                <input type="radio" name="q1" value="Answer2">Are masters at everything their business needs.<br>
                <input type="radio" name="q1" value="Answer3">Know everything about marketing and don't need outside help<br>

                <hr>

                Question 2: Owners can ______ when utilized.<br>
                <input type="radio" name="q2" value="Answer1">Increase customer counts using the AMP tools<br>
                <input type="radio" name="q2" value="Answer2">Decrease customer counts using the AMP tools<br>
                <input type="radio" name="q2" value="Answer3">Keep the same customer counts using the AMP tools<br>

                <hr>

                Question 3: Owners like this AMP because<br>
                <input type="radio" name="q3" value="Answer1">They can see the marketing working first hand<br>
                <input type="radio" name="q3" value="Answer2">Its hard to use<br>
                <input type="radio" name="q3" value="Answer3">Its just like putting an ad in the paper<br>

                <br>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
