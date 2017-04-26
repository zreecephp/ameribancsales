@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>AMP Presentation</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/Kik30C9gkR8?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">
            
            	<h3>AMP Presentation Quiz</h3>

                {!! Form::open(['url' => '/my/training/ampPresentationSubmit', 'method' => 'post']) !!}

				 @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: Our Marketing services.<br>
                <input type="radio" name="q1" value="Answer1">Cost about the same if you were to go out and get them separately.<br>
                <input type="radio" name="q1" value="Answer2">Are a fraction of the cost if you were to go out and get them separately.<br>
                <input type="radio" name="q1" value="Answer3">Cost more than if you were to go out and get them separately.<br>

                <br>

                Question 2: How much would a comparable texting service cost from a competitor?<br>
                <input type="radio" name="q2" value="Answer1">$20-$75<br>
                <input type="radio" name="q2" value="Answer2">$75-$120<br>
                <input type="radio" name="q2" value="Answer3">$120-$200<br>

                <br>

                Question 3: Private label merchant cards can be used as?<br>
                <input type="radio" name="q3" value="Answer1">Marketing Cards/Gift Cards<br>
                <input type="radio" name="q3" value="Answer2">Refund Cards<br>
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
