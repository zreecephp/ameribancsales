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
	  if($.cookie("ameribanc") != "foo"){
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
		};
	
	
	
	});
	
	
	</script>
    
    <style type="text/css">
		table, td, th {    
			border: 1px solid #ddd;
			text-align: left;
		}
		
		table {
			border-collapse: collapse;
			width: 100%;
		}
		
		th, td {
			padding: 15px;
		}

	</style>

@endsection

@section('content')

<!-- .page-content start -->
<section class="page-content parallax pattern" data-stellar-background-ratio="0.5">
	<!-- .container start -->
	<div class="container">
		<div class="row">
			<article class="grid_12">
                
                
				{!! Form::open(['url' => '/my/postnewssubmit', 'method' => 'post']) !!}

                @if ($errors->any())
                    <section class="error alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </section>
                @endif
				
                <div id="postingheader" style="font-size:24px;">
					<?php 
                        date_default_timezone_get();
                        $autodate = date('Y-m-d H:i:s', time());
						echo date('m-d-Y', time());
                    ?>
                    {!! Auth::user()->username !!}<br>
                </div>
				
                <div id="postingcontent" style="font-size:18px;">
                	<input type="hidden" name="postdate" value="<?php echo $autodate; ?>" />
                    Content:
                    <textarea name="contentpost" style="width:100%; height:200px;"></textarea>
    
                    <br>
    
                    Post Type:<br>
                    <input type="radio" name="posttype" value="public" /> Public<br>
                    <input type="radio" name="posttype" value="private" /> Private<br>
                    <input type="radio" name="posttype" value="rss_feed" /> RSS Feed<br>
    
                    <br>
    
                    Article Or Video:<br>
                    <input type="radio" name="postsection" value="article" /> Article<br>
                    <input type="radio" name="postsection" value="video" /> Video<br>
    
                    <br>
                    
                    URL Link:<br />
                    <textarea name="posturl" style="width:30%; height:30px;"></textarea>
                    
                    <br /><br />
                </div>

                <input type="submit" value="Submit" />

                {!! Form::close() !!}

                
			</article>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection
