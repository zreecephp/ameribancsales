@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>EMV NFC Service Segment</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/Nk9GK-mEBt8?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                <h3>EMV NFC Service Segment Quiz</h3>

                {!! Form::open(['url' => '/my/training/EmvNfcServiceSegmentSubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: What credit card companies have agreed on the new rules?<br>
                <input type="radio" name="q1" value="Answer1">Visa/MasterCard<br>
                <input type="radio" name="q1" value="Answer2">Amex/Discover<br>
                <input type="radio" name="q1" value="Answer3">All of the above<br>

                <hr>

                Question 2: How much do we charge for the EMV terminal?<br>
                <input type="radio" name="q2" value="Answer1">No cost<br>
                <input type="radio" name="q2" value="Answer2">$500<br>
                <input type="radio" name="q2" value="Answer3">$29.95 Lease<br>

                <hr>

                Question 3: What type of cards can our EMV terminals take?<br>
                <input type="radio" name="q3" value="Answer1">EMV cards<br>
                <input type="radio" name="q3" value="Answer2">Google Wallet/Apple Pay<br>
                <input type="radio" name="q3" value="Answer3">All of the above<br>&nbsp;<br>

                <br>

                <input type="submit" value="Submit">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
