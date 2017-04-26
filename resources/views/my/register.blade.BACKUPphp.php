@extends('appAdmin')

@section('page-styles')

@endsection

@section('page-scripts')

@endsection

@section('content')

    <div class="container">
        <div class="page-header">
            <h2>New Candidate Request</h2>
        </div>

        <div class="row">

            @if ($errors->any())
                <section class="error-box">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                        @endforeach
                    </ul>
                </section>
            @endif

            <div class="col-sm-10">

                {!! Form::open(['url' => '/my/registerSubmit', 'method' => 'post']) !!}

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Name: ', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::text('name', null , ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Username: ', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::text('username', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Email Address:', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::text('email', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'wpcf7-submit']) !!}
                        </div>
                    </fieldset>


                {!! Form::close() !!}
                
            </div>
        </div>

@endsection

