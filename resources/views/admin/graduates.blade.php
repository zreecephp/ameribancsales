@extends('appAdmin')

@section('page-styles')
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/smoothness/jquery-ui.css">
    <link href="/assets/plugins/jtable.2.4.0/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />
    
    <style>
	
		table, th, td {
		   border-bottom: 1px solid black;
		}
		.graduatestab{
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
            <h2>Current Graduates</h2>
        </div>

        <!-- .row start -->
        <div class="row">
            <div class="col-sm-10">
                <div class="row">
                    <div id="UserTableContainer"></div>
                    <table id="traineetable" style="margin-bottom:5px;">
                    	<tr style="background-color:blue; color:white;">
                        	<td style="width:150px;">Username</td>
                            <td style="width:150px;">Completion Date</td>
                            <td style="width:150px;">Status</td>
                        </tr>
                    	
                    <?php
                    	foreach ($grads as $grad):?>
                        	
                        <tr>
                        	<td><?php echo $grad->name; ?></td>
                            <td><?php echo $grad->certification_completed; ?></td>
                            <td>Graduate</td>
                            <td></td>    	
                        </tr>
                            
					<?php endforeach;?>
                    	
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
