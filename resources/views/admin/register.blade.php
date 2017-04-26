@extends('appAdmin')

@section('page-styles')
	<style type="text/css">
            .registerusertab{
                text-decoration:underline;
                font-weight:bold;	
            }
	</style>
@endsection

@section('page-scripts')

@endsection

@section('content')

    <div class="container">
        <div class="page-header">
            <h2>Register New User</h2>
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

                {!! Form::open(['url' => '/admin/userDetailInsert', 'method' => 'post']) !!}

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Name: ', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::text('name', null , ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Username: ', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::text('userName', null, ['class' => 'form-field-11 required']) !!}
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
                            {!! Form::label('Password:', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::password('password', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Confirm Password:', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::password('confPassword', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Rep id:', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::text('repid', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Role:', null, ['class' =>  'col-sm-2 control-label']) !!}
                            {!! Form::select('roleId', array(
                            '1' => 'Admin',
                            '2' => 'Manager',
                            '3' => 'Support',
                            '4' => 'Sales',
                            '5' => 'Trainee',
                            '6' => 'Recruit',
                            '7' => 'User',
                            '8' => 'Expired',
                            '9' => 'Disqualified',
                            '10' => 'Telesales'
                            ), 7) !!}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Active:', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::checkbox('activestatus', 1, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>
                    
                    <fieldset>
                    	<div class="form-group">
                        <span class="col-sm-2 control-label">Recruiter:</span>
                        <select name="assignedrecruit" class="form-field-11 required">
                             <option selected disabled>Select Recruiter</option>
                             @foreach($recruiters as $recruiter)
                             <option value="{{ $recruiter->name }}">{{ $recruiter->name }}</option>
                             @endforeach
                        </select>
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

