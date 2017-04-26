@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')
<script src="standard.js" type="text/javascript"></script>
@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Paperwork Training</h2>
    </div>

    <section class="wrapper portfolio-page">


				<div class="row">
                    <div class="col-md-4 col-xs-12" style="margin-bottom:-200px;">
                    	<iframe width="1024" height="1025" frameborder="0" src="{{ URL::asset('appvids/ApplicationTraining.htm') }}"></iframe>
                    </div>
                

            		<div class="col-md-6 col-xs-12" style="clear:both; margin-left:200px;">
    
    
                        {!! Form::open(['url' => '/my/training/merchantAppSubmit', 'method' => 'post']) !!}
        
                        @if ($errors->any())
                            <section class="error alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </section>
                        @endif
        
                        Question 1: What percentage of ownership must a person have to sign for a corporation?<br>
                        <input type="radio" name="q1" value="Answer1">100%<br>
                        <input type="radio" name="q1" value="Answer2">51%<br>
                        <input type="radio" name="q1" value="Answer3">1%<br>
                        <hr>
                        Question 2: Under the average ticket section of the merchant profile, if a merchant is not currently processing, it is best to ___________.<br>
                        <input type="radio" name="q2" value="Answer1">Estimate a little High<br>
                        <input type="radio" name="q2" value="Answer2">Leave Blank<br>
                        <input type="radio" name="q2" value="Answer3">Estimate a Low<br>
                        <hr>
                        Question 3: For a voided check, ______________.<br>
                        <input type="radio" name="q3" value="Answer1">the voided check must have the DBA name or legal name of the business<br>
                        <input type="radio" name="q3" value="Answer2">If there is no check available, a signed bank letterhead can be provided with the merchants info<br>
                        <input type="radio" name="q3" value="Answer3">All of the above<br>
                        <hr>
                        Question 4: If the merchant decides to go with the Payment Jack service, you must include __________ with the application.<br>
                        <input type="radio" name="q4" value="Answer1">Gift Card Addendum<br>
                        <input type="radio" name="q4" value="Answer2">Check Reader Addendum<br>
                        <input type="radio" name="q4" value="Answer3">Payment Jack Addendum<br>
                        <hr>
                        Question 5: Where signatures are required, the owner must ___________.<br>
                        <input type="radio" name="q5" value="Answer1">Sign and Initial in every place required<br>
                        <input type="radio" name="q5" value="Answer2">Use a stamped signature<br>
                        <input type="radio" name="q5" value="Answer3">Scribble in crayon on the application<br>
                        <hr>
                        Question 6: If an application is submitted missing any important information, the application ______.<br>
                        <input type="radio" name="q6" value="Answer1">Will be fixed by someone else<br>
                        <input type="radio" name="q6" value="Answer2">Will go into the incomplete category and you may need to revisit the merchant to get the info<br>
                        <input type="radio" name="q6" value="Answer3">Will go through just fine<br><br><br>
                        <input type="submit" value="Submit">
        
                        {!! Form::close() !!}

            		</div>
                </div>

    <br>

</section>
</div>


@endsection
