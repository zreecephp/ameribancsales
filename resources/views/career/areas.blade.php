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
						<span class="strong">Talented</span> individuals 
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
							<span class="active">Career</span>
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
				<div class="triggerAnimation animated" data-animate='fadeInUp'>
					<section class="heading-bordered clearfix">
						<h3>Open <b>positions</b></h3>
					</section><!-- .heading-bordered end -->

                    <section class="accordion">
                        <article class="grid_4">
                            <ul class="icons-list icon-checkmark-circle-list colored">
                                @foreach($areaList as $location)

                                        <li><a href="/career/city/{{ $location->city }}-{{$location->state }}"><p>{{ $location->city }}, {{$location->state }}</p></a></li>

                                @endforeach
                            </ul>
                        </article>
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
