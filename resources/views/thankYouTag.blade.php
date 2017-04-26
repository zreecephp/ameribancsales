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
                        <h1>Thank You</h1>
                    </div>
                </div><!-- .grid_8 end -->

                <!-- .grid_4 start -->
                <div class="grid_4">
                    <div class="pt-image-container">
                        <div class="pt-image triggerAnimation animated" data-animate="fadeInRight">
                            <img class="float-right" src="/assets/img/Ameribanc-National.png" alt="about me page title image" />
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
                                <span class="active">Thank You</span>
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
                <!-- .grid_8 start -->
                <article class="grid_8">
                    <!-- .heading-bordered start -->

                    <div class="triggerAnimation animated" data-animate='fadeInLeft'>
                        <section class="heading-bordered">
                            <h3>Thank You</h3>
                        </section><!-- .heading-bordered end -->

                        <p>
                            @if(Session::has('message'))
                                {{Session::get('message')}}
                            @endif
                            
                            <span>Your resume has been created and will be reviewed shortly.</span>
                            <img src="//www.jobs2careers.com/conversion2.php?p=2308" width="1" height="1" /> 
                        </p>

                        <ul class="team-social-links">
                            <li>
                                <a href="https://www.facebook.com/AmeribancNational" class="pixons-facebook-2"></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/ameribanc" class="pixons-twitter-1"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/2706829" class="pixons-linkedin"></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/ameribanc" class="pixons-pinterest"></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/AmeriBancVideo" class="pixons-youtube"></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/116490424708542511979" class="pixons-google_plus"></a>
                            </li>
                        </ul><!-- .team-social-links end -->
                    </div><!-- .triggerAnimation.animated end -->
                </article><!-- .grid_8 end -->

            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- .page-content end -->


@endsection

