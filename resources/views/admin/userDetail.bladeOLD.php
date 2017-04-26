@extends('appAdmin')

@section('page-styles')
<style type="text/css">
	    .box{

			padding: 20px;
	
			display: none;
	
			margin-top: 20px;
	
			border: 1px solid #000;
	
		}
	
		.red{ background: #ff0000; }
	
		.green{ background: #00ff00; }
	
		.blue{ background: #0000ff; }
</style>
@endsection

@section('page-scripts')
	
@endsection

@section('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){

			$("#emailoption").change(function(){
				alert('hit');
		
				$(this).find("option:selected").each(function(){
		
					/*if($(this).attr("value")=="1"){
		
						$(".box").not(".red").hide();
		
						$(".red").show();
		
					}
		
					else*/ if($(this).attr("value")=="2"){
		
						$(".box").not(".green").hide();
		
						$(".green").show();
		
					}
		
					else if($(this).attr("value")=="3"){
		
						$(".box").not(".blue").hide();
		
						$(".blue").show();
		
					}
		
					else{
		
						$(".box").hide();
		
					}
		
				});
		
			}).change();
		
		});
				
	</script>

    <div class="container">
        <div class="page-header">
            <h2>User Detail</h2>
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

             <div class="col-sm-12" style="float:left;">
                
                {!! Form::open(['url' => '/admin/userDetailUpdate', 'method' => 'post']) !!} 

                @foreach ($users as $user)
                     {!! Form::hidden('id', $user->id) !!}
                <fieldset>
                    <div class="form-group">
                        {!! Form::label('Name: ', null, ['class' => 'col-sm-2 control-label']) !!}
                        {!! Form::text('name', $user->name , ['class' => 'form-field-11 required']) !!}
                    </div>
                </fieldset>

                 <fieldset>
                     <div class="form-group">
                         {!! Form::label('Username: ', null, ['class' => 'col-sm-2 control-label']) !!}
                         {!! Form::text('userName', $user->username , ['class' => 'form-field-11 required']) !!}
                     </div>
                 </fieldset>

                <fieldset>
                    <div class="form-group">
                        {!! Form::label('Email Address:', null, ['class' => 'col-sm-2 control-label']) !!}
                        {!! Form::text('email', $user->email, ['class' => 'form-field-11 required']) !!}
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
                        {!! Form::text('repid', $user->repid, ['class' => 'form-field-11 required']) !!}
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
                        ), $user->role_id) !!}
                    </div>
                </fieldset>

                 <fieldset>
                     <div class="form-group">
                         {!! Form::label('Active:', null, ['class' => 'col-sm-2 control-label']) !!}
                         {!! Form::checkbox('active', $user->active, ['class' => 'form-field-11 required']) !!}
                     </div>
                 </fieldset>
                 
                 <fieldset>
                     <div class="form-group">
					     <?php if($user->countdownlist == '1'){$user->countdownlist = 'Completed';} else {$user->countdownlist = 'Not Completed';}?>
                         {!! Form::label('Countdown:', null, ['class' => 'col-sm-2 control-label']) !!}
                         {!! Form::text('countdownlist', $user->countdownlist, ['class' => 'form-field-11 required', 'disabled']) !!}
                     </div>
                 </fieldset>
                 
                 <fieldset>
                     <div class="form-group">
					     <?php if($user->wealthlist == '1'){$user->wealthlist = 'Completed';} else {$user->wealthlist = 'Not Completed';}?>
                         {!! Form::label('Wealth List:', null, ['class' => 'col-sm-2 control-label']) !!}
                         {!! Form::text('wealthlist', $user->wealthlist, ['class' => 'form-field-11 required', 'disabled']) !!}
                     </div>
                 </fieldset>

                <fieldset>
                    <div class="form-group">
                        {!! Form::submit('Submit', ['class' => 'wpcf7-submit']) !!}
                    </div>
                </fieldset>

                 @endforeach

                {!! Form::close() !!}
        </div>
		
        
        <div class="col-sm-7" style="margin-top:30px; padding:5px 0 5px 0; border: 2px solid black">
                
                {!! Form::open(['url' => '/admin/sendAnEmail', 'method' => 'post']) !!}

                @foreach ($users as $user)
                     {!! Form::hidden('id', $user->id) !!}
                
                <fieldset>
                    <div class="form-group" style="display:none;">
                        {!! Form::label('userid: ', null, ['class' => 'col-sm-2 control-label']) !!}
                        {!! Form::text('userid', $user->name , ['class' => 'form-field-11 required']) !!}
                    </div>
                </fieldset>
                
                <fieldset>
                    <div class="form-group" style="display:none;">
                        {!! Form::label('Name: ', null, ['class' => 'col-sm-2 control-label']) !!}
                        {!! Form::text('name', $user->name , ['class' => 'form-field-11 required']) !!}
                    </div>
                </fieldset>

                 <fieldset>
                     <div class="form-group" style="display:none;">
                         {!! Form::label('Username: ', null, ['class' => 'col-sm-2 control-label']) !!}
                         {!! Form::text('userName', $user->username , ['class' => 'form-field-11 required']) !!}
                     </div>
                 </fieldset>

                <fieldset>
                    <div class="form-group" style="display:none;">
                        {!! Form::label('Email Address:', null, ['class' => 'col-sm-2 control-label']) !!}
                        {!! Form::text('email', $user->email, ['class' => 'form-field-11 required']) !!}
                    </div>
                </fieldset>

                <fieldset>
                    	<div class="from-group">
                        	{!! Form::label('Email Attachment:', null, ['class' =>  'col-sm-2 control-label']) !!}
                            {!! Form::select('emailtosend', array(
                            '1' => 'ABN-1 Ad Response',
                            '2' => 'ABN-2 Invite for 2nd Interview',
                            '3' => 'ABN-3 Letter of Conformation',
                            '4' => 'ABN-4 AmeriBanc University Invite',
                            '5' => 'ABN-5 Webinar Invitation',
                            '6' => 'ABN-6 USPS Tracking',
                            '7' => 'ABN-7 Team Assignment',
                            ), 'default', array('id' => 'emailoption')) !!}
                        </div>
                </fieldset>
                
                    <div class="red box">You have selected <strong>red option</strong> so I am here</div>

                    <div class="green box">
                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('2nd Interview Date:', null, ['class' => 'col-sm-2 control-label']) !!}
                            {!! Form::text('interviewdate', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>
                    </div>
                
                    <div class="blue box">You have selected <strong>blue option</strong> so i am here</div>

                <fieldset>
                    <div class="form-group" style="margin:7px 0 0 160px;">
                        {!! Form::submit('Send', ['class' => 'wpcf7-submit']) !!}
                    </div>
                </fieldset>

                 @endforeach

                {!! Form::close() !!}
        </div>
        
    </div>

    

@endsection

