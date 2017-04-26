@extends('app')

@section('page-styles')

	
    <link href="/assets/css/bootstro/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstro/bootstro.min.css" rel="stylesheet">

@endsection

@section('page-scripts')
    
    
    <script src="/assets/js/jquery-1.9.1.js"></script>
    <script src="/assets/js/bootstro/bootstrap.min.js"></script>
    <script src="/assets/js/bootstro/bootstro.min.js"></script>
	<script type="text/javascript">
	  	$(document).ready(function(){
		    $("#demo").click(function(){
		        bootstro.start(".bootstro", {
		            /*onComplete : function(params)
		            {
		                alert("Reached end of introduction with total " + (params.idx + 1)+ " slides");
		            },*/
		            onExit : function(params)
		            {
		                alert("Introduction stopped at slide #" + (params.idx + 1));
		            },
		        });    
		    });
		    $(".demo_stopOn").click(function(){
		        alert('Clicking on the backdrop or Esc will NOT stop the show')
		        bootstro.start('.bootstro', {stopOnBackdropClick : false, stopOnEsc:false});    
		    });
		    $(".demo_size1").click(function(){
		        bootstro.start('.bootstro_size1');    
		    });
		    $(".demo_nonav").click(function(){
		        bootstro.start('.bootstro', {
		            nextButton : '',
		            prevButton : '',
		            finishButton : ''
		        });    
		    });
		    $(".demo_ajax").click(function(){
		        bootstro.start('', {
		            url : './bootstro.json',
		        });    
		    });
		});
	</script>

@endsection

@section('content')

<div class="container">

      	<h1 class='bootstro' 
        	data-bootstro-title='' 
        	data-bootstro-content="Because bootstrap rocks. Life before bootstrap was sooo miserable"
        	data-bootstro-width="400px" 
        	data-bootstro-placement='left' 
            data-bootstro-step='0'>
            Bootstro.js
        </h1>
        
        <a class="btn btn-large btn-success" href="#" id='demo'>Click me! I'm a Demo</a>
		
        <br /><br />
		<div class="col-md-4 bootstro" 
        	data-bootstro-title="" 
        	data-bootstro-content="Simply because I am a popover. Specify me with <b>data-bootstro-placement</b>"
        	data-bootstro-placement='right'
        	data-bootstro-width='400px'
        	data-bootstro-step='1'>
              <h2>Features</h2>
              <p><i class='icon-ok'></i> Works <b>cross-browser, cross-devices</b> . C'mon, it is bootstrap</p>
              <p><i class='icon-ok'></i> Utilises Bootstrap <a href='http://twitter.github.com/bootstrap/javascript.html#popovers'>Popovers</a></p>
              <p><i class='icon-ok'></i> Bootstro popovers can have <b>variable width</b>, even though Bootstrap 2.3</p>
              <p><i class='icon-ok'></i> Small (<b>3.0K</b> minified JS & <b>0.5K</b>  minified CSS)</p>
              <p><i class='icon-ok'></i> <b>No collision</b>. Everything namespaced to bootstro.
              All <b>events unbinded</b> when the intro stops</p>
        </div>  
	      
</div> <!-- /container -->

@endsection
