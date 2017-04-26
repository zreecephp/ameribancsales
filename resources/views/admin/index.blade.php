@extends('appAdmin')

@section('page-styles')
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/smoothness/jquery-ui.css">
    <link href="/assets/plugins/jtable.2.4.0/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
		.usermanagtab{
			text-decoration:underline;
			font-weight:bold;	
		}
	</style>
@endsection

@section('page-scripts')

    <script src="/assets/plugins/jtable.2.4.0/jquery.jtable.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            
        });

    </script>
@endsection

@section('content')

    <div class="container">
        <div class="page-header">
            <h2>User Management</h2>
        </div>

        <!-- .row start -->
        <div class="row">
            <div class="col-sm-10">
                <div class="row">
                    
                {!! Form::open(['url' => '/admin/index', 'method' => 'post']) !!}

				<table>
                	<tr>
                    	<td><span>Full Name:</span></td>
                    	<td><input type="text" name="lastname" /></td>
                	</tr>
                    <tr>
                        <td><span>Email Address:</span></td>
                        <td><input type="text" name="emailaddress" /></td>
                	</tr>
                    <tr>
                        <td><span>Rep Id:</span></td>
                        <td><input type="text" name="repid" /></td>
                    </tr>
                    <tr>
                    	<td><span>Team:</span></td>
                        <td>
                        <select name="teamtype">
                        	<option value="">All</option>
                        	<option value="blue">Blue</option>
                            <option value="green">Green</option>
                            <option value="purple">Purple</option>
                            <option value="orange">Orange</option>
                            <option value="telesales">Telesales</option>
                        </select>
                        </td>
                    </tr>
                
                <!--<span>Start Date</span>
                <span>From:</span>
                <input type="text" name="fromdate" />
                <span>To:</span>
                <input type="text" name="todate" /><br />-->
					<tr><td>&nbsp;</td></tr>
                </table>
                
                <table>
                	<tr>
                		<td><input type="submit" value="Search"><span style="font-size:12px;">  (Leave all inputs blank if you want to return all user data.)</span></td>
                    </tr>
                </table>
<br />
<br />


                {!! Form::close() !!}
                     
                     <table>
                     	<tr>
                        	<td colspan="9" style="background-color:rgb(11,103,205); color:white; padding-left:5px;"><h4>Users&nbsp;<span style="font-size:12px;">(top 25)</span></h4></td>
                        </tr>
                     	<tr style="background-color:rgb(45,137,239); color:white;">
                        	<td style="padding-left:5px; width:250px;"><h5>Full Name</h4></td>
                            <td><h5>Email</h4></td>
                            <td style="width:100px;"><h5>Rep Id</h5></td>
                            <td style="width:100px;"><h5>Role</h5></td>
                            <td style="width:100px;"><h5>Active</h5></td>
                            <td style="width:200px;"><h5>Start Date</h5></td>
                            <td style="width:200px;"><h5>Last Updated</h5></td>
                            <td style="width:200px;"><h5>Countdown List</h5></td>
                            <td style="width:200px;"><h5>Wealth List</h5></td>
                        </tr>
                        <?php 
						if(is_array($searchusers)){
                              foreach ($searchusers as $searchuser){?>
                        <tr> 
                    		<td><a href="/admin/userDetail/<?php echo $searchuser->id; ?>"><?php echo $searchuser->name; ?></a></td>
                            <td><?php echo $searchuser->email; ?></td>
                            <td><?php echo $searchuser->repid; ?></td>
                            <td>
								<?php 
									//echo $searchuser->role_id;
									if($searchuser->role_id == 1){$rolename = 'Admin';} 
									if($searchuser->role_id == 2){$rolename = 'Manager';}
									if($searchuser->role_id == 3){$rolename = 'Support';}
									if($searchuser->role_id == 4){$rolename = 'Sales';}
									if($searchuser->role_id == 5){$rolename = 'Trainee';}
									if($searchuser->role_id == 6){$rolename = 'Recruit';} 
									if($searchuser->role_id == 7){$rolename = 'User';}
									if($searchuser->role_id == 8){$rolename = 'Expired';}
									if($searchuser->role_id == 9){$rolename = 'Disqualified';}
									if($searchuser->role_id == 10){$rolename = 'Telesales';}
									
									echo $rolename;
								?>
                            </td>
                            <td>
								<?php 
									//echo $searchuser->active;
									if($searchuser->active == 0){$status = 'No';}
									if($searchuser->active == 1){$status = 'Yes';} 
									
									echo $status;
								?>
                            </td>
                            <td><?php echo $searchuser->created_at; ?></td>
                            <td><?php echo $searchuser->updated_at; ?></td>
                            <td>
								<?php 
									//echo $searchuser->countdownlist;
									if($searchuser->countdownlist == 0){$countstatus = 'No';} 
									if($searchuser->countdownlist == 1){$countstatus = 'Yes';}
									
									echo $countstatus;
								?>
                            </td>
                            <td>
								<?php 
									//echo $searchuser->wealthlist;
									if($searchuser->wealthlist == 0){$wealthstatus = 'No';} 
									if($searchuser->wealthlist == 1){$wealthstatus = 'Yes';}
									
									echo $wealthstatus; 
								?>
                            </td>
							
                        </tr>
                        <?php }; 
						}?>
                        
                     </table>
                </div>
            </div>
        </div>
    </div>


@endsection
