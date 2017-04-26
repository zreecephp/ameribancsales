@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Appointment</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="http://www.youtube.com/embed/N5ahqcllNK8?rel=0" frameborder="0" allowfullscreen></iframe>
                    <!--<object
                        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        id="tester"
                        width="350" height="300"
                    >
                    <param name="movie" value="newswf/AppointmentIntro.swf">
                    <param name="bgcolor" value="#FFFFFF">
                    <param name="quality" value="high">
                    <param name="allowscriptaccess" value="samedomain">
                    <embed
                        type="application/x-shockwave-flash"
                        pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
                        name="tester"
                        width="350" height="300"
                        src="newswf/AppointmentIntro.swf"
                        bgcolor="#FFFFFF"
                        quality="high"
                        allowscriptaccess="samedomain"
                    >
                    <noembed>
                    </noembed>
                    </embed>`
                    </object>//-->
            </div>
            <div class="col-md-6 col-xs-12" style="clear:both;">

                {!! Form::open(['url' => 'my/training/appointmentsSubmit', 'method' => 'post']) !!}

				@if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: How sold are the Merchants before you get to the appointment.<br>
                <input type="radio" name="q1" value="Answer1">Completely<br>
                <input type="radio" name="q1" value="Answer2">Halfway<br>
                <input type="radio" name="q1" value="Answer3">Not At All<br>
                &nbsp;<br>
                Question 2: We train our Call Center Employees to _______.<br>
                <input type="radio" name="q2" value="Answer1">Sell Over The Phone<br>
                <input type="radio" name="q2" value="Answer2">Handle Objections<br>
                <input type="radio" name="q2" value="Answer3">Upset Merchants<br>
                &nbsp;<br>
                Question 3: An appointment has to have 3 Key Points: Owner, ________ and Time.<br>
                <input type="radio" name="q3" value="Answer1">Qualification<br>
                <input type="radio" name="q3" value="Answer2">Distractions<br>
                <input type="radio" name="q3" value="Answer3">Interest<br>
                &nbsp;<br>
                Question 4: It is important to call in from every appointment _________.<br>
                <input type="radio" name="q4" value="Answer1">Once In Awhile<br>
                <input type="radio" name="q4" value="Answer2">Once A Month<br>
                <input type="radio" name="q4" value="Answer3">Every Time<br>
                &nbsp;<br>
                Question 5: Merchants tend to hear _______.<br>
                <input type="radio" name="q5" value="Answer1">Everything<br>
                <input type="radio" name="q5" value="Answer2">Nothing<br>
                <input type="radio" name="q5" value="Answer3">What They Want To<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="appointmentIntro.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
