@extends('appAdmin')

@section('page-styles')

	<link rel="stylesheet" href="/assets/plugins/flex-slider/flexslider.css">
    <link href="/assets/css/bootstro/bootstro.min.css" rel="stylesheet">
    

@endsection

@section('page-scripts')

    <!-- Facebook Plugin -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.ElementsByTagName(s)[0];
            if (d.ElementById(id)) return;
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
                <div id="anchor_articles"style="padding-bottom:100px;">
                <div style="font-size:32px;">Articles</div>
                <?php
				if(is_array($getarticleposts)){
                   foreach ($getarticleposts as $articlepost){?>
                          <div id="box_content" style="width:100%; background-color:;">
                          		<div style="border:2px solid black;"></div><!-- rgb(11,103,205) -->
							    <div id="box_date" style="background-color:; font-size:18px; float:left; padding-right:10px; padding-bottom:10px;">
									<?php 
										$date1 = date_create($articlepost->datecreated);
										echo date_format($date1, 'Y-m-d');
									?>
                                </div>
                                <div id="box_user" style="background-color:; font-size:15px; padding-top:2px;">
									<?php echo $articlepost->user; ?>
                                </div>
								<div id="box_post" style="background-color:#F2F2F2; font-size:20px; clear:both; padding-bottom:30px;">
									<?php echo $articlepost->post; ?><br /><br />
									<a target="_blank" style="font-size:16px;" href="<?php echo $articlepost->url_link; ?>"><?php echo $articlepost->url_link; ?></a>
                                    <div style="padding-top:10px; font-size:15px;">
										<?php if($articlepost->attachment != ''){?>
                                            <a class="thumb-info" href="/documents/industry/<?php echo $articlepost->attachment; ?>" target="_blank">
                                                <img src="/documents/industry/folder.png" class="img-responsive" alt="" style="width:30px;" />Attachment
                                            </a>
                                            
                                        <?php }else{ ?>  <?php }; ?>
                                    </div>
                                </div>
                          </div>
                   <?php }; 
				}?>
                </div>
                
                <div id="anchor_videos"style="padding-bottom:100px;">
                <div style="font-size:32px;">Videos</div>
                <?php
				if(is_array($getvideoposts)){
                   foreach ($getvideoposts as $videopost){?>
                          <div id="box_content" style="width:100%; background-color:;">
                          		<div style="border:2px solid black;"></div>
							    <div id="box_date" style="background-color:; font-size:18px; float:left; padding-right:10px; padding-bottom:15px;">
									<?php echo $videopost->datecreated; ?>
                                </div>
                                <div id="box_user" style="background-color:; font-size:15px; padding-top:2px;">
									<?php echo $videopost->user; ?>
                                </div>
								<div id="box_post" style="background-color:#F2F2F2; font-size:24px; clear:both; padding-bottom:30px;">
									<?php echo $videopost->post; ?><br /><br />
                                    <a target="_blank" style="font-size:16px;" href="<?php echo $videopost->url_link; ?>"><?php echo $videopost->url_link; ?></a>
                                    <div style="padding-top:10px; font-size:15px;">
										<?php if($videopost->attachment != ''){?>
                                            <a class="thumb-info" href="/documents/industry/<?php echo $videopost->attachment; ?>" target="_blank">
                                                <img src="/documents/industry/folder.png" class="img-responsive" alt="" style="width:30px;" />Attachment
                                            </a>
                                            
                                        <?php }else{ ?>  <?php }; ?>
                                    </div>
                                </div>
                          </div>
                   <?php }; 
				}?>
                    
                </div>
                
			</article>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection
