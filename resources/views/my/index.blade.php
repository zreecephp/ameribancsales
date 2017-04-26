@extends('appAdmin')

@section('page-styles')

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    <link href="/assets/css/bootstro/bootstro.min.css" rel="stylesheet">
    

@endsection

@section('page-scripts')

    <!-- Facebook Plugin -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=168622759881733";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

	<script src="/assets/plugins/flex-slider/jquery.flexslider.js"></script>
    <script src="/assets/js/bootstro/bootstro.min.js"></script>

	<script>
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 210,
		itemMargin: 5
	  });
	  
	  /*var cookieValue = $.cookie("ameribanc");
	  alert(cookieValue);*/
	  
	  /*if($.cookie("ameribanc") != "foo"){
		//alert('hit');
	  	$.cookie("ameribanc", "foo", { expires: 10000 }); //'cookiename','cookie_val','20yr tell expiration'

		        bootstro.start(".bootstro", {
		            onComplete : function(params)
		            {
		                //alert("Reached end of introduction with total " + (params.idx + 1)+ " slides");
		            },
		            onExit : function(params)
		            {
		                //alert("Introduction stopped at slide #" + (params.idx + 1));
		            },
		        });    
				
				
		
		    //});
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
		};*/
	
	
	
	});
	
	
	</script>

@endsection

@section('content')

<div class="row">
	<div class="col-sm-12">
    		<?php
				/*$timezone = date_default_timezone_get();
				date_default_timezone_set($timezone);
				$currentdate = date(time()).'<br />';//current date
				$dateget = date_create(Auth::user()->trainingexpired); //expired date
				echo $currentdate;
				echo date_timestamp_get($dateget);
				echo '<br /><br /><br />';
				echo date('Y-m-d', time()).'<br />';
				echo Auth::user()->trainingexpired.'<br />';*/
				
			?>
		<div class="row" style="width:1360px;">
             @include('my.portlets.training')
		</div>
        
        
        <div class="row" style="width:1360px;">
            @include('my.portlets.facebook')
        </div>
	</div>
</div>

@endsection
