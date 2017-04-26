@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h2>Appointment Setting</h2>
    </div>

    <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                   <iframe width="420" height="315"  src="http://www.youtube.com/embed/7texgCL9xG0?rel=0" frameborder="0" allowfullscreen></iframe>
                    <!--<object
                        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        id="tester"
                        width="350" height="300"
                    >
                    <param name="movie" value="newswf/AppointmentSetting.swf">
                    <param name="bgcolor" value="#FFFFFF">
                    <param name="quality" value="high">
                    <param name="allowscriptaccess" value="samedomain">
                    <embed
                        type="application/x-shockwave-flash"
                        pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
                        name="tester"
                        width="350" height="300"
                        src="newswf/AppointmentSetting.swf"
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

                {!! Form::open(['url' => 'my/training/appointmentSettingSubmit', 'method' => 'post']) !!}

				@if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                Question 1: The setter in the video asks if the Merchant is taking _________.<br>
                <input type="radio" name="q1" value="Answer1">Gift Cards and Checks<br>
                <input type="radio" name="q1" value="Answer2">Credit and Debit Cards<br>
                <input type="radio" name="q1" value="Answer3">Payment for Services<br>
                &nbsp;<br>
                Question 2: What is the setter asking from the Merchant?<br>
                <input type="radio" name="q2" value="Answer1">A Commitment To Buy<br>
                <input type="radio" name="q2" value="Answer2">An Open Mind<br>
                <input type="radio" name="q2" value="Answer3">A Social Security Number<br>
                &nbsp;<br>
                Question 3: After setting the appointment, the setter hands the call over to a ________.<br>
                <input type="radio" name="q3" value="Answer1">Manager<br>
                <input type="radio" name="q3" value="Answer2">Sales Consultant<br>
                <input type="radio" name="q3" value="Answer3">Confirmer<br>
                &nbsp;<br>
                Question 4: The Confirmer asks the Merchant, "What is your _______ the company".<br>
                <input type="radio" name="q4" value="Answer1">Place In<br>
                <input type="radio" name="q4" value="Answer2">Hold In<br>
                <input type="radio" name="q4" value="Answer3">Title With<br>
                &nbsp;<br>
                <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="appointmentSetting.php">

                {!! Form::close() !!}

            </div>
        </div>


    <br>

</section>
</div>


@endsection
