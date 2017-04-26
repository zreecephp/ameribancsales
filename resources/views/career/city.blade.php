@extends('app')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

    <!-- #page-title start -->
    <section id="page-title" class="page-title-1" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="grid_8">
                    <div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
                        <h1>
                            We are always searching for <br />
                            <span class="strong">Talented</span> individuals <br>
                            for sales careers in <strong>{{ $areaList['city'] }}, {{ $areaList['state'] }}</strong>
                        </h1>
                    </div>
                </div><!-- .grid_8 end -->

                <!-- .grid_4 start -->
                <div class="grid_4">
                    <div class="pt-image-container">
                        <div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
                            <img class="float-right" style="position: relative !important; top: -50px;" src="/assets/img/pictures/hiring.png" alt="We are Hiring" title="We are Hiring" />
                        </div>
                    </div>
                </div><!-- .grid_4 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="grid_8">
                    <div class="breadcrumbs triggerAnimation animated" data-animate="fadeInUp">
                        <ul>
                            <li>
                                <span>You are here:</span>
                            </li>

                            <li>
                                <a href="/career">Career / </a>
                            </li>

                            <li>
                                <span class="active">{{ $areaList['city'] }}, {{ $areaList['state'] }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </section><!-- #page-title end -->

    <!-- .page-content start -->
    <section class="page-content">
        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .grid_6 start -->
                <section class='grid_6'>
                    <img src='/assets/img/pictures/ImageConsultant.jpg' class='triggerAnimation animated' data-animate='fadeInLeft' alt='we are hiring'/>
                </section><!-- .grid_6 end -->

                <article class='grid_6'>
                    <div class="triggerAnimation animated" data-animate='fadeInRight'>
                        <section class="heading-bordered clearfix">
                            <h3>What we look for in a <b>Candidate</b></h3>
                        </section><!-- .heading-bordered end -->

                        <p>
                            AmeriBanc is looking for the same thing you are and that is a good match.
                            A good match (or a great sales job) is when your sales abilities are merged with our sales program and exceptional sales compensation plan.
                            We're looking individuals in {{ $areaList['city'] }}, {{ $areaList['state'] }} who understand the basic fundamentals of a strong work ethic,
                            importance of product knowledge and the ability to manage their own time and attitude effectively!
                        </p>

                        <br />

                        <ul class="icons-list icon-checkmark-circle-list colored">
                            <li><p>Ability to Establish Rapport with Business Owners</p></li>
                            <li><p>Ability to Establish and Recognize Customer Needs</p></li>
                            <li><p>Ability to Motivate Self</p></li>
                            <li><p>Ability to Maintain Success</p></li>
                        </ul>

                    </div><!-- .triggerAnimation.animated end -->
                </article><!-- .grid_6 end -->
            </div><!-- .row end -->

            <!-- .row start -->
            <div class="row">
                <!-- .grid_8 start -->
                <article class="grid_8">
                    <div class="triggerAnimation animated" data-animate='fadeInUp'>
                        <section class="heading-bordered clearfix">
                            <h3>Sales Professional in {{ $areaList['city'] }}</h3>
                        </section><!-- .heading-bordered end -->

                        <section>

                            <div class="content">
                                <p>
                                    Not all sales jobs are create equal, we believe we have great sales program for our sales professionals.  You don't have to have a sales background to be successful in this role! In fact, several successful AmeriBanc National Sales Professionals have come from various different backgrounds. Consider a career change from the Military, Customer Service, Real Estate or Insurance, to name a few!
                                    <br><br>
                                    "Earn large weekly commissions for yourself and learn how to create recurring, Monthly Residual Income for the rest of your life with AmeriBanc, just like I did."
                                    <br>
                                    <!---David P., IL ($20K+/monthly Residual earner)-->
                                    <br><br>
                                    AmeriBanc National has been an industry leader since 2004 providing much needed financial services to the small-medium sized business sector both nationally and in {{ $areaList['city'] }}, {{ $areaList['state'] }},
                                    where nearly every owner can benefit significantly with our services.
                                </p>

                                <br />

                                <strong>Candidate Requirements</strong>
                                <ul class="icons-list icon-checkmark-circle-list colored">
                                    <li><p>Relevant outside sales experience (2-5 years preferred)</p></li>
                                    <li><p>Strong communication skills and the ability to give compelling presentations</p></li>
                                    <li><p>Demonstrated closing skills (Trial Closing, Asking for Sale, Needs Analysis, etc)</p></li>
                                    <li><p>Coachable and Teachable approach to Systematic Sales Success</p></li>
                                    <li><p>Relevant outside sales experience</p></li>
                                </ul>

                                <br />

                                <strong>Our Consultants benefit from the following:</strong>
                                <ul class="icons-list icon-checkmark-circle-list colored">
                                    <li><p>Preset Appointments</p></li>
                                    <li><p>Fast Start Bonus</p></li>
                                    <li><p>Ability to earn DAILY, Weekly & Monthly Bonuses</p></li>
                                    <li><p>Powerful Industry Sales Training</p></li>
                                </ul>

                                <br />

                                <strong>AmeriBanc National is different from the competition.</strong>
                                <ul class="icons-list icon-checkmark-circle-list colored">
                                    <li><p>We have an A+ Rating with the Better Business Bureau - Look us up AND our competitors to judge for yourself.</p></li>
                                    <li><p>We train our people to become CONSULTANTS and truly learn the industry and become the go to business resource in {{ $areaList['city'] }}, {{ $areaList['state'] }}</p></li>
                                    <li><p>AmeriBanc has a "Graduate" program for you to become an Independent Agent - learn how to build Residual Wealth Income</p></li>
                                    <li><p>We sell our Customers on VALUE vs. PRICE - We show our customers how to BUILD their BUSINESS REVENUES in ADDITION to lowering their processing costs</p></li>
                                </ul>

                                <br />

                                {{--<a class='btn-medium empty' href='/career/introduction'>I want to know more</a>--}}
                            </div>

                        </section><!-- .accordion end -->
                    </div><!-- .triggerAnimation.animated end -->
                </article><!-- .grid_8 end -->

                <!-- .grid_4 start -->
                <article class="grid_4">
                    <div class="triggerAnimation animated" data-animate="fadeInRight">
                        <section class="heading-bordered">
                            <h3>Apply for <b>Position</b></h3>
                        </section><!-- .heading-bordered end -->

                        @if ($errors->any())
                            <section class="error-box">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </section>
                        @endif

                        {!! Form::open(['url' => 'career/careerSubmit', 'method' => 'post', 'files' => true]) !!}

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Full Name: ', null, ['class' => 'text-color']) !!}
                                {!! Form::text('name', null, ['class' => 'wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Phone Number: ', null, ['class' => 'text-color']) !!}
                                {!! Form::text('phone', null, ['class' => 'wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Email: ', null, ['class' => 'text-color']) !!}
                                {!! Form::text('email', null, ['class' => 'wpcf7-text required']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Message: ', null, ['class' => 'text-color']) !!}
                                {!! Form::textArea('msg', null, ['class' => 'wpcf7-textarea required', 'rows' => '5']) !!}
                            </div>
                        </fieldset>

                        <fieldset>
                            <label><span class="text-red">*</span> Upload your Resume:</label>
                            {!! Form::file('resume') !!}
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                {!! Form::submit('Submit', ['class' => 'wpcf7-submit']) !!}
                            </div>
                        </fieldset>

                        {!! Form::close() !!}
                    </div><!-- .animated.fadeInRight end -->
                </article><!-- .grid_4 end -->


            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- .page-content end -->

@endsection
