@extends('appAdmin')

@section('page-styles')
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/smoothness/jquery-ui.css">
    <link href="/assets/plugins/jtable.2.4.0/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />
    
    <style>
	
		table, th, td {
		   border-bottom: 1px solid black;
		}
		.traineestab{
                text-decoration:underline;
                font-weight:bold;	
        }
	
	</style>
    
@endsection

@section('page-scripts')
	
    <script type="text/javascript">
	/*$(document).ready(function() 
			{ 
				$("#traineetable").tablesorter( {sortList: [[0,0], [1,0]]} ); 
			} 
	);*/
	</script>
    
@endsection

@section('content')

    <div class="container">
        <div class="page-header">
            <h2>Current Trainees</h2>
        </div>

        <!-- .row start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div id="UserTableContainer"></div>
                    <table id="traineetable">
                    	<tr style="background-color:blue; color:white;">
                        	<td class="col-sm-1">Full Name</td>
                            <td class="col-sm-1">User Created</td>
                            <td class="col-sm-1">Last Quiz Completed</td>
                            <td class="col-sm-1">ABNU Completed</td>
                            <td class="col-sm-1">1.Orientation</td>
                            <td class="col-sm-1">2.Credit Cards 101</td>
                            <td class="col-sm-1">3.First Five Minutes</td>
                            <td class="col-sm-1">4.Value Presentation</td>
                            <td class="col-sm-1">5.Closing</td>
                            <td class="col-sm-1">6.Appointments</td>
                            <td class="col-sm-1">7.Paperwork Training</td>
                        </tr>
                    	
                    <?php
                    foreach ($trainees as $trainee) :?>
                    	<tr>
                        	<td class="col-sm-1"><a href="/admin/userDetail/<?php echo $trainee->id; ?>"><?php echo $trainee->name; ?></a></td>
                            <td class="col-sm-1">
								<?php
									$user_started = $trainee->created_at;
									if($user_started == '0000-00-00'){
										$user_started = 'N/A';
										echo $user_started;
									}else{
										$user_started = date_create($trainee->created_at); 
										echo date_format($user_started, 'Y-m-d');
									}
								?>
                            </td>
                            <td class="col-sm-1">
							<?php
								$quiz_date = $trainee->completed_datetime;
								if($quiz_date == null){
									$quiz_date = 'N/A';	
									echo $quiz_date;
								} else {
									$quiz_date = date_create($trainee->completed_datetime);	
									echo date_format($quiz_date, 'Y-m-d');
								}
							?>
                            <?php  ?>
                            </td>
                            <?php 
								$date = $trainee->certification_completed;
								if($date == '0000-00-00'){
									$date = 'N/A';	
								}
							?>
                            <td class="col-sm-1"><?php echo $date; ?></td>
                            <td class="col-sm-1">
                            	<?php
									if($trainee->idofquiz >= 5){echo '<img src="/assets/img/training/greencheck.jpg" width="25">';} else {echo '<img src="/assets/img/training/redx.jpg" width="25">' . ' ' . $trainee->idofquiz;}
								?>
                            </td>
                            <td class="col-sm-1">
                            	<?php
									if($trainee->idofquiz >= 9){echo '<img src="/assets/img/training/greencheck.jpg" width="25">';} else {echo '<img src="/assets/img/training/redx.jpg" width="25">';}
								?>
                            </td>
                            <td class="col-sm-1">
                            	<?php
									if($trainee->idofquiz >= 10){echo '<img src="/assets/img/training/greencheck.jpg" width="25">';} else {echo '<img src="/assets/img/training/redx.jpg" width="25">';}
								?>
                            </td>
                            <td class="col-sm-1">
                            	<?php
									if($trainee->idofquiz >= 18){echo '<img src="/assets/img/training/greencheck.jpg" width="25">';} else {echo '<img src="/assets/img/training/redx.jpg" width="25">';}
								?>
                            </td>
                            <td class="col-sm-1">
                            	<?php
									if($trainee->idofquiz >= 22){echo '<img src="/assets/img/training/greencheck.jpg" width="25">';} else {echo '<img src="/assets/img/training/redx.jpg" width="25">';}
								?>
                            </td>
                            <td class="col-sm-1">
                            	<?php
									if($trainee->idofquiz >= 24){echo '<img src="/assets/img/training/greencheck.jpg" width="25">';} else {echo '<img src="/assets/img/training/redx.jpg" width="25">';}
								?>
                            </td>
                            <td class="col-sm-1">
                            	<?php
									if($trainee->idofquiz == 25){echo '<img src="/assets/img/training/greencheck.jpg" width="25">';} else {echo '<img src="/assets/img/training/redx.jpg" width="25">';}
								?>
                            </td>
                        </tr>
                    <?php
                    endforeach;
					?>
                    	
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
