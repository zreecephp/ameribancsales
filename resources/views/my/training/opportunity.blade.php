@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

    <div class="container">
        <div class="page-header">
            <h2>Opportunity</h2>
        </div>

        <section class="wrapper portfolio-page">

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/SXtVs58_leQ?rel=0" frameborder="0" allowfullscreen></iframe>
                    <!--<object
                        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        id="tester"
                        width="350" height="300"
                    >
                    <param name="movie" value="newswf/Opportunity.swf">
                    <param name="bgcolor" value="#FFFFFF">
                    <param name="quality" value="high">
                    <param name="allowscriptaccess" value="samedomain">
                    <embed
                        type="application/x-shockwave-flash"
                        pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
                        name="tester"
                        width="350" height="300"
                        src="newswf/Opportunity.swf"
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

                    <h3>Opportunity Quiz</h3>

                    {!! Form::open(['url' => '/my/training/opportunitySubmit', 'method' => 'post']) !!}

                    @if ($errors->any())
                        <section class="error alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </section>
                    @endif

                    Question 1: What 3 industries are on the convergence of the Electronic Payments Industry?<br>
                    <input type="radio" name="q1" value="Answer1">Automotive, Motion Pictures, Technology<br>
                    <input type="radio" name="q1" value="Answer2">Payment Services, Commerce, Technology<br>
                    <input type="radio" name="q1" value="Answer3">Education, Publishing, Commerce <br>
                    <hr>
                    Question 2: The Durbin Amendment forced credit card companies to _________ their rates.<br>
                    <input type="radio" name="q2" value="Answer1">Lower<br>
                    <input type="radio" name="q2" value="Answer2">Raise<br>
                    <input type="radio" name="q2" value="Answer3">Get Rid Of<br>
                    <hr>
                    Question 3: AmeriBanc is now offering a _____________ service agreement.<br>
                    <input type="radio" name="q3" value="Answer1">Month to Month<br>
                    <input type="radio" name="q3" value="Answer2">Week to Week<br>
                    <input type="radio" name="q3" value="Answer3">Year to Year<br>
                    <hr>
                    Question 4: AmeriBanc offers the ability to earn recurring residuals in our ____________ program.<br>
                    <input type="radio" name="q4" value="Answer1">Direct<br>
                    <input type="radio" name="q4" value="Answer2">Indirect<br>
                    <input type="radio" name="q4" value="Answer3">Partnership<br>
                    &nbsp;<br>
                    <input type="submit" name="submit" value="Submit"><input type="hidden" name="qp" value="meetTrainer.php">

                    {!! Form::close() !!}

                </div>
            </div>


            <br>

        </section>
    </div>


@endsection
