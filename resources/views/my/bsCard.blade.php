@extends('appAdmin')

@section('page-styles')
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <style type="text/css">
            .buscardstab{
                text-decoration:underline;
                font-weight:bold;	
            }
	</style>
@endsection

@section('page-scripts')

@endsection

@section('content')

	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
      <script>
      $(function() {
        $( ".datepicker" ).datepicker({ dateFormat: 'mm-dd-yy' }).val();
      });
      </script>
    
    <div class="container">
        <div class="page-header">
            <h2>Business Cards</h2>
        </div>

    <div class="row">

        <div class="col-sm-10">
        
        	@if ($errors->any())
                        <section class="error-box">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><h3 style="color:#AC171C; font-weight:bolder;">{{ $error }}</h3></li>
                                @endforeach
                            </ul>
                        </section>
            @endif
			
            @if(Session::has('message'))
                <h3 style="color:#0058A9; font-weight:bolder;">{{Session::get('message')}}</h3>
            @endif
            
            {!! Form::open(['url' => '/my/businessCardSubmit', 'method' => 'post']) !!}

            <fieldset>
                <div class="form-group">
                    {!! Form::label('DBA Name: ', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('dbaname', null, ['class' => 'form-field-11 required']) !!}
                </div>
            </fieldset>
                        
            <fieldset>
            @if ($adminModel['role_id'] == 1 || $adminModel['role_id'] == 2)
                <div class="form-group">
                	{!! Form::label('Rep Id: ', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::select('repid', array('' => '') + $searchUsers, ['class' => 'select2-drop-mask']) !!}
                </div>
            @else
            	<div class="form-group">
                    {!! Form::hidden('repid', $adminModel['rep_id'], ['class' => 'form-field-11 required']) !!}
                </div>
            @endif
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('Phone Number: ', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('phone', null, ['class' => 'form-field-11 required']) !!}<span style="color:#A4A4A4;"> Enter in a 10 digit number ex.(2223334444)</span>
                    
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('Email: ', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('email', null, ['class' => 'form-field-11 required']) !!}<span style="color:#A4A4A4;"> Enter in full email ex.(jdoe@email.com)</span>
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('Business Type:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('businessType', null, ['class' => 'form-field-11 required']) !!}
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('Address:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('address', null, ['class' => 'form-field-11 required']) !!}
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('City:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('city', null, ['class' => 'form-field-11 required']) !!}
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('State:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::select('state', array(
                                    'AL' => 'Alabama',
                                    'AK' => 'Alaska',
                                    'AZ' => 'Arizona',
                                    'AR' => 'Arkansas',
                                    'CA' => 'California',
                                    'CO' => 'Colorado',
                                    'CT' => 'Connecticut',
                                    'DE' => 'Delaware',
                                    'DC' => 'Washington DC',
                                    'FL' => 'Florida',
                                    'GA' => 'Georgia',
                                    'HI' => 'Hawaii',
                                    'ID' => 'Idaho',
                                    'IL' => 'Illinois',
                                    'IN' => 'Indiana',
                                    'IA' => 'Iowa',
                                    'KS' => 'Kansas',
                                    'KY' => 'Kentucky',
                                    'LA' => 'Louisiana',
                                    'ME' => 'Maine',
                                    'MD' => 'Maryland',
                                    'MA' => 'Massachusetts',
                                    'MI' => 'Michigan',
                                    'MN' => 'Minnesota',
                                    'MS' => 'Mississippi',
                                    'MO' => 'Missouri',
                                    'MT' => 'Montana',
                                    'NE' => 'Nebraska',
                                    'NV' => 'Nevada',
                                    'NH' => 'New Hampshire',
                                    'NJ' => 'New Jersey',
                                    'NM' => 'New Mexico',
                                    'NY' => 'New York',
                                    'NC' => 'North Carolina',
                                    'ND' => 'North Dakota',
                                    'OH' => 'Ohio',
                                    'OK' => 'Oklahoma',
                                    'OR' => 'Oregon',
                                    'PA' => 'Pennsylvania',
                                    'RI' => 'Rhode Island',
                                    'SC' => 'South Carolina',
                                    'SD' => 'South Dakota',
                                    'TN' => 'Tennessee',
                                    'TX' => 'Texas',
                                    'UT' => 'Utah',
                                    'VT' => 'Vermont',
                                    'VA' => 'Virginia',
                                    'WA' => 'Washington',
                                    'WV' => 'West Virginia',
                                    'WI' => 'Wisconsin',
                                    'WY' => 'Wyoming'), null, ['class' => 'select2-drop-mask']) !!}
                </div>
            </fieldset>


            <fieldset>
                <div class="form-group">
                    {!! Form::label('Zip Code:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('zip', null, ['class' => 'form-field-11 required']) !!}
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('Date Visited:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('dateVisited', null, ['class' => 'form-field-11 required datepicker']) !!}
                </div>
            </fieldset>


            <fieldset>
                <div class="form-group">
                    {!! Form::label('Owners First Name:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('firstname', null, ['class' => 'form-field-11 required']) !!}
                </div>
            </fieldset>


            <fieldset>
                <div class="form-group">
                    {!! Form::label('Owners Last Name:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('lastname', null, ['class' => 'form-field-11 required']) !!}
                </div>
            </fieldset>
            
            <fieldset>
                <div class="form-group">
                    {!! Form::label('Spoke To Owner:', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::checkbox('spoketoowner', null, null, ['class' => 'wpcf7-text required']) !!}
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('Title: ', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::text('title', null, ['class' => 'form-field-11 required']) !!}
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::label('Notes: ', null, ['class' => 'col-sm-2 control-label']) !!}
                    {!! Form::textArea('notes', null, ['class' => 'form-field-24 required', 'rows' => '5']) !!}
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    {!! Form::submit('Submit', ['class' => 'wpcf7-submit']) !!}
                </div>
            </fieldset>

            {!! Form::close() !!}


            <br>
        </div>
	</div>
</div>

@endsection
