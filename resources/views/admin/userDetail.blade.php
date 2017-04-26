@extends('appAdmin')

@section('page-styles')
<style type="text/css">
	    .box{

			padding: 20px;
	
			display: none;
	
			margin-top: 20px;
	
			border: 1px solid #000;
	
		}
	
	
		.green{ background: #FBE2C8; }
	
</style>
@endsection

@section('page-scripts')
	
@endsection

@section('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">

    $(document).ready(function(){

        $("#emailoption").change(function(){
				//alert('hit');
				$(this).find("option:selected").each(function(){
					if($(this).attr("value")=="USPS Tracking"){
						$(".box").not(".green").hide();
						$(".green").show();
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
            <h2>User Detail
            	<span style="font-weight:bolder; font-size:24px; position:relative; left:10px;">
                			@if(Session::has('message'))
                                {{Session::get('message')}}
                            @endif
                </span>
            </h2>
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

             <div class="col-sm-3" style="margin-bottom:30px;">
<!-- SUBMIT UPDATED INFO -->
                {!! Form::open(['url' => '/admin/userDetailUpdate', 'method' => 'post']) !!} 

                @foreach ($users as $user)
                     {!! Form::hidden('id', $user->id) !!}
                <div class="column1">
                    <fieldset>
                        <div class="form-group">
                            <span style="margin-left:100px;">{!! Form::label('Name: ', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                            <span>{!! Form::text('name', $user->name , ['class' => 'form-field-11 required']) !!}</span>
                        </div>
                    </fieldset>
    
                    <fieldset>
                         <div class="form-group">
                             <span style="margin-left:100px;">{!! Form::label('Username: ', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('userName', $user->username , ['class' => 'form-field-11 required']) !!}
                         </div>
                    </fieldset>
    
                    <fieldset>
                        <div class="form-group">
                            <span style="margin-left:100px;">{!! Form::label('Email&nbsp;Address:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                            {!! Form::text('email', $user->email, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>
                    
                    <fieldset>
                         <div class="form-group">
                            <span style="margin-left:100px;">{!! Form::label('SSN:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                            {!! Form::text('ssn', $user->ssn, ['class' => 'form-field-11 required']) !!}
                        </div>
                     </fieldset>
    
                    <fieldset>
                        <div class="form-group">
                            <span style="margin-left:100px;">{!! Form::label('Password:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                            {!! Form::password('password', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>
    
                    <fieldset>
                        <div class="form-group">
                            <span style="margin-left:100px;">{!! Form::label('Confirm&nbsp;Password:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                            {!! Form::password('confPassword', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>
    
                    <fieldset>
                        <div class="form-group">
                            <span style="margin-left:100px;">{!! Form::label('Rep&nbsp;id:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                            {!! Form::text('repid', $user->repid, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>
    
                    <fieldset>
                        <div class="form-group">
                            <span style="margin-left:100px;">{!! Form::label('Role:', null, ['class' =>  'col-sm-2 control-label']) !!}</span>
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
                            <span style="margin-left:100px;">{!! Form::label('Active:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                            {!! Form::checkbox('activestatus', null, $user->active, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>
                     
                    <fieldset>
                    	<div class="form-group">
                        <span class="col-sm-2 control-label">Recruiter:</span>
                        <select name="assignedrecruit" class="form-field-11 required" style="margin-left:100px;">
                        	<?php if($user->recruiter == '') { ?>
                             <option selected disabled>Select Recruiter</option>
                            <?php }else{ ?>
                             <option value="{{$user->recruiter}}">{{$user->recruiter}}</option>
                            <?php } ?>
                             @foreach($recruiters as $recruiter)
                             <option value="{{ $recruiter->name }}">{{ $recruiter->name }}</option>
                             @endforeach
                        </select>
                        </div>
                    </fieldset>
                     
                     <fieldset>
                         <div class="form-group">
                             <?php if($user->countdownlist == '1'){$user->countdownlist = 'Completed';} else {$user->countdownlist = 'Not Completed';}?>
                             <span style="margin-left:100px;">{!! Form::label('Countdown:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('countdownlist', $user->countdownlist, ['class' => 'form-field-11 required', 'disabled']) !!}
                         </div>
                     </fieldset>
                     
                     <fieldset>
                         <div class="form-group">
                             <?php if($user->wealthlist == '1'){$user->wealthlist = 'Completed';} else {$user->wealthlist = 'Not Completed';}?>
                             <span style="margin-left:100px;">{!! Form::label('Wealth&nbsp;List:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('wealthlist', $user->wealthlist, ['class' => 'form-field-11 required', 'disabled']) !!}
                         </div>
                     </fieldset>
                </div><!-- end column1 -->
        </div><!-- end col 12 -->
        
        <div class="col-sm-9" style="margin-bottom:30px;">
        			<fieldset>
                         <div class="form-group">
                             <span style="margin-left:-135px;">{!! Form::label('Team:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             <select name="teamtype" class="form-field-11 required" style="margin-left:100px;">
                                 <?php if($user->team == '') { ?>
                                 <option value="">Select a Team:</option>
                                 <?php }else{ ?>
                                 <option value="{{$user->team}}">{{$user->team}}</option>
                                 <?php } ?>
                                 
								 <option value="blue">blue</option>
                                 <option value="green">green</option>
                                 <option value="purple">purple</option>
                                 <option value="orange">orange</option>
                        	</select>
                         </div>
                     </fieldset>
                     
                     <fieldset>
                         <div class="form-group">
                             <span style="margin-left: -35px;">{!! Form::label('Address:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('address', $user->address, ['class' => 'form-field-11 required']) !!}
                         </div>
                     </fieldset>
                     
                     <fieldset>
                         <div class="form-group">
                             <span style="margin-left: -35px;">{!! Form::label('City:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('city', $user->city, ['class' => 'form-field-11 required']) !!}
                         </div>
                     </fieldset>
                     
                     <fieldset>
                     	 <div class="form-group">
                             <span style="margin-left:-135px;">{!! Form::label('State:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             <select name="state" class="form-field-11 required" style="margin-left:100px;">
                                 <?php if($user->state == '') { ?>
                                 <option value="">Select a State:</option>
                                 <?php }else{ ?>
                                 <option value="{{$user->state}}">{{$user->state}}</option>
                                 <?php } ?>
								     	<option value='AL'>Alabama</option>
                                        <option value='AK'>Alaska</option>
                                        <option value='AZ'>Arizona</option>
                                        <option value='AR'>Arkansas</option>
                                        <option value='CA'>California</option>
                                        <option value='CO'>Colorado</option>
                                        <option value='CT'>Connecticut</option>
                                        <option value='DE'>Delaware</option>
                                        <option value='DC'>District of Columbia</option>
                                        <option value='FL'>Florida</option>
                                        <option value='GA'>Georgia</option>
                                        <option value='HI'>Hawaii</option>
                                        <option value='ID'>Idaho</option>
                                        <option value='IL'>Illinois</option>
                                        <option value='IN'>Indiana</option>
                                        <option value='IA'>Iowa</option>
                                        <option value='KS'>Kansas</option>
                                        <option value='KY'>Kentucky</option>
                                        <option value='LA'>Louisiana</option>
                                        <option value='ME'>Maine</option>
                                        <option value='MD'>Maryland</option>
                                        <option value='MA'>Massachusetts</option>
                                        <option value='MI'>Michigan</option>
                                        <option value='MN'>Minnesota</option>
                                        <option value='MS'>Mississippi</option>
                                        <option value='MO'>Missouri</option>
                                        <option value='MT'>Montana</option>
                                        <option value='NE'>Nebraska</option>
                                        <option value='NV'>Nevada</option>
                                        <option value='NH'>New Hampshire</option>
                                        <option value='NJ'>New Jersey</option>
                                        <option value='NM'>New Mexico</option>
                                        <option value='NY'>New York</option>
                                        <option value='NC'>North Carolina</option>
                                        <option value='ND'>North Dakota</option>
                                        <option value='OH'>Ohio</option>
                                        <option value='OK'>Oklahoma</option>
                                        <option value='OR'>Oregon</option>
                                        <option value='PA'>Pennsylvania</option>
                                        <option value='RI'>Rhode Island</option>
                                        <option value='SC'>South Carolina</option>
                                        <option value='SD'>South Dakota</option>
                                        <option value='TN'>Tennessee</option>
                                        <option value='TX'>Texas</option>
                                        <option value='UT'>Utah</option>
                                        <option value='VT'>Vermont</option>
                                        <option value='VA'>Virginia</option>
                                        <option value='WA'>Washington</option>
                                        <option value='WV'>West Virginia</option>
                                        <option value='WI'>Wisconsin</option>
                                        <option value='WY'>Wyoming</option>
                        	</select>
                         </div>
                     </fieldset>
                     
                     <fieldset>
                         <div class="form-group">
                             <span style="margin-left: -35px;">{!! Form::label('Zip:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('zipcode', $user->zipcode, ['class' => 'form-field-11 required']) !!}
                         </div>
                     </fieldset>

                     <fieldset>
                         <div class="form-group">
                             <span style="margin-left: -35px;">{!! Form::label('Territory Zip:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('territoryzip', $user->territoryzip, ['class' => 'form-field-11 required']) !!}
                         </div>
                     </fieldset>
                     
                     <fieldset>
                         <div class="form-group">
                             <span style="margin-left: -35px;">{!! Form::label('Mobile Phone:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('mobilephone', $user->mobilephone, ['class' => 'form-field-11 required']) !!}
                         </div>
                     </fieldset>
                     
                     <fieldset>
                         <div class="form-group">
                             <span style="margin-left: -35px;">{!! Form::label('Mobile Carrier:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('mobilecarrier', $user->mobilecarrier, ['class' => 'form-field-11 required']) !!}
                         </div>
                     </fieldset>
                     
                     <fieldset>
                         <div class="form-group">
                             <span style="margin-left: -35px;">{!! Form::label('Secondary Phone:', null, ['class' => 'col-sm-2 control-label']) !!}</span>
                             {!! Form::text('phone2', $user->phone2, ['class' => 'form-field-11 required']) !!}
                         </div>
                     </fieldset>
        </div>
        		
                <div style="clear:both;"></div>
        		<fieldset>
                    <div class="form-group">
                        {!! Form::submit('Submit', ['class' => 'wpcf7-submit']) !!}<span style="font-size:12px;">   (Be sure to submit any changes made, before sending an email.)</span>
                    </div>
                    
                </fieldset>
        		@endforeach

                {!! Form::close() !!}
<!-- END SUBMIT UPDATED INFO -->		
        <div class="col-sm-12"style="height:3px; background-color:black;"></div>
        <div class="col-sm-7" style="margin-top:30px; margin-bottom:30px; padding:5px 0 5px 0;">
              <div style="float:left;">  
                {!! Form::open(['url' => '/admin/sendAnEmail', 'method' => 'post']) !!}

                @foreach ($users as $user)
                     {!! Form::hidden('id', $user->id) !!}
                
                <fieldset>
                    <div class="form-group" style="display:none;">
                        {!! Form::label('userid: ', null, ['class' => 'col-sm-2 control-label']) !!}
                        {!! Form::text('userid', $user->id , ['class' => 'form-field-11 required']) !!}
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
                        	{!! Form::label('Email:', null, ['class' =>  'col-sm-2 control-label', 'id' => 'emailsendchange']) !!}
                            {!! Form::select('emailtosend', array(
                            'Letter of Confirmation' => 'ABN 1 - Letter of Confirmation',
                            'AmeriBanc University Invite' => 'ABN 2 - AmeriBanc University Invite',
                            'Webinar Invitation' => 'ABN 3 - Webinar Invitation',
                            'USPS Tracking' => 'ABN 4 - USPS Tracking',
                            'Blue Team Assignment' => 'ABN 5a - Blue Team Assignment',
                            'Purple Team Assignment' => 'ABN 5b - Purple Team Assignment',
                            'Green Team Assignment' => 'ABN 5c - Green Team Assignment',
                            'TS AmeriBanc University Invite' => 'TS - AmeriBanc University Invite',
                            ), 'default', array('id' => 'emailoption')) !!}
                        </div>
                </fieldset>
                    <div class="green box">
                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('Tracking#:', null, ['class' => 'col-sm-2 control-label']) !!}<br />
                            {!! Form::text('uspsnum', null, ['class' => 'form-field-11 required']) !!}
                        </div>
                    </fieldset>
                    </div>
                <fieldset>
                    <div class="form-group" style="margin:7px 0 0 160px;">
                        {!! Form::submit('Send', ['class' => 'wpcf7-submit']) !!}
                    </div>
                </fieldset>

                 @endforeach

                 {!! Form::close() !!}
              </div>
                
                <div style="">
                	<table style="background-color: rgb(242,242,242);">
                    	<th>
                        	<tt style="font-size:18px;">Previously Sent Emails</tt>
                        </th>
                    	<?php
						foreach ($sentemails as $sentemail):?>
									<tr><td><?php echo $sentemail->inviteinterview2.' '.$sentemail->dateinviteinterview2; ?></td></tr>
                                    <tr><td><?php echo $sentemail->letterofconfirmation.' '.$sentemail->dateletterofconfirmation; ?></td></tr>
                                    <tr><td><?php echo $sentemail->ameribancuniversity.' '.$sentemail->dateameribancuniversity; ?></td></tr>
                                    <tr><td><?php echo $sentemail->webinarinvitation.' '.$sentemail->datewebinarinvitation; ?></td></tr>
                                    <tr><td><?php echo $sentemail->uspstracking.' '.$sentemail->dateuspstracking; ?></td></tr>
                                    <tr><td><?php echo $sentemail->blueteamassign.' '.$sentemail->dateblueteamassign; ?></td></tr>
                                    <tr><td><?php echo $sentemail->purpleteamassign.' '.$sentemail->datepurpleteamassign; ?></td></tr>
                                    <tr><td><?php echo $sentemail->greenteamassign.' '.$sentemail->dategreenteamassign; ?></td></tr>
                                    <tr><td><?php echo $sentemail->tsameribancuniversityinvite.' '.$sentemail->datetsameribancuniversityinvite; ?></td></tr>
						<?php
						endforeach;?>
                    </table>
                </div>
                
        </div><!-- end col 7 -->
        <div class="col-sm-12"style="height:3px; background-color:black;"></div>
    </div><!-- end row -->
    
    
        
        <?php 
			$mod1 = '1.Orientation';
			$mod2 = '2.Credit Cards 101';
			$mod3 = '3.First Five Minutes';
			$mod4 = '4.Value Presentation';
			$mod5 = '5.Closing';
			$mod6 = '6.Appointments';
			$mod7 = '7.Paperwork Training';
		?>
        	
            
            
         <div style="margin-top:30px;">   
            <table style="float:left; margin-right:20px; text-align:center;">
            	<tr>
					<td><h4><?php echo $mod1; ?></h4></td>
                </tr>
                <tr>
					<td><?php	
                        if($quizlogs != ''){
                            foreach ($quizlogs as $quizlog) {
                                if($quizlog->quiz_id < 6){ $grabdatetime = date('m-d-Y g:i a', strtotime($quizlog->completed_datetime)); ?>
                                    <div style="text-decoration:underline;"><?php echo $quizlog->name.'<br/>'.$grabdatetime; ?></div><br />
                                <?php }
                            }
                        }
                    ?></td>
                </tr>
            </table>
            
            <table style="float:left; margin-right:20px; text-align:center;">
            	<tr>
                	<td><h4><?php echo $mod2; ?></h4></td>
                </tr>
                <tr>
                	<td><?php	
                        if($quizlogs != ''){
                            foreach ($quizlogs as $quizlog) {
                                if($quizlog->quiz_id < 10 && $quizlog->quiz_id > 5){ $grabdatetime = date('m-d-Y g:i a', strtotime($quizlog->completed_datetime)); ?>
                                    <div style="text-decoration:underline;"><?php echo $quizlog->name.'<br/>'.$grabdatetime; ?></div><br />
                                <?php }
                            }
                        }
                    ?></td>
                </tr>
            </table>
            
            
            <table style="float:left; margin-right:20px; text-align:center;">
            	<tr>
                	<td><h4><?php echo $mod3; ?></h4></td>
                </tr>
                <tr>           
					<td><?php	
                        if($quizlogs != ''){
                            foreach ($quizlogs as $quizlog) {
                                if($quizlog->quiz_id == 10){ $grabdatetime = date('m-d-Y g:i a', strtotime($quizlog->completed_datetime)); ?>
                                    <div style="text-decoration:underline;"><?php echo $quizlog->name.'<br/>'.$grabdatetime; ?></div><br />
                                <?php }
                            }
                        }
                    ?></td>
                </tr>
            </table>
            
            <table style="float:left; margin-right:20px; text-align:center;">
            	<tr>
                	<td><h4><?php echo $mod4; ?></h4></td>
                </tr>
                <tr>
					<td><?php	
                        if($quizlogs != ''){
                            foreach ($quizlogs as $quizlog) {
                                if($quizlog->quiz_id < 19 && $quizlog->quiz_id > 10){ $grabdatetime = date('m-d-Y g:i a', strtotime($quizlog->completed_datetime)); ?>
                                    <div style="text-decoration:underline;"><?php echo $quizlog->name.'<br/>'.$grabdatetime; ?></div><br />
                                <?php }
                            }
                        }
                    ?></td>
            	</tr>
            </table>
            
            <table style="float:left; margin-right:20px; text-align:center;">
            	<tr>
                	<td><h4><?php echo $mod5; ?></h4></td>
                </tr>
                <tr>
					<td><?php	
                        if($quizlogs != ''){
                            foreach ($quizlogs as $quizlog) {
                                if($quizlog->quiz_id < 23 && $quizlog->quiz_id > 18){ $grabdatetime = date('m-d-Y g:i a', strtotime($quizlog->completed_datetime)); ?>
                                    <div style="text-decoration:underline;"><?php echo $quizlog->name.'<br/>'.$grabdatetime; ?></div><br />
                                <?php }
                            }
                        }
                    ?></td>
                </tr>
            </table>
            
            <table style="float:left; margin-right:20px; text-align:center;">
            	<tr>
                	<td><h4><?php echo $mod6; ?></h4></td>
                </tr>
                <tr>
					<td><?php	
                        if($quizlogs != ''){
                            foreach ($quizlogs as $quizlog) {
                                if($quizlog->quiz_id < 25 && $quizlog->quiz_id > 22){ $grabdatetime = date('m-d-Y g:i a', strtotime($quizlog->completed_datetime)); ?>
                                    <div style="text-decoration:underline;"><?php echo $quizlog->name.'<br/>'.$grabdatetime; ?></div><br />
                                <?php }
                            }
                        }
                    ?></td>
                </tr>
            </table>
            
            <table style="float:left; margin-right:20px; text-align:center;">
            	<tr>
                	<td><h4><?php echo $mod7; ?></h4></td>
                </tr>
                <tr>
					<td><?php	
                        if($quizlogs != ''){
                            foreach ($quizlogs as $quizlog) {
                                if($quizlog->quiz_id > 24){ $grabdatetime = date('m-d-Y g:i a', strtotime($quizlog->completed_datetime)); ?>
                                    <div style="text-decoration:underline;"><?php echo $quizlog->name.'<br/>'.$grabdatetime; ?></div><br />
                                <?php }
                            }
                        }
                    ?></td>
                </tr>
            </table>
            </div>

    
    
   
   </div><!-- end container -->

    

@endsection

