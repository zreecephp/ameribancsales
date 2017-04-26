@extends('app')

@section('page-scripts')
   <script>
		/* <![CDATA[ */
		jQuery(document).ready(function($) {
			'use strict';

			//  Responsive layout, resizing the items
			$('#client-carousel').carouFredSel({
				responsive: true,
				width: '100%',
				height: '100%',
				auto: false,
				scroll: 1,
				swipe: {
					onMouse: true,
					onTouch: true
				},
				prev: '.c_prev',
				next: '.c_next',
				items: {
					width: 170,
					height: '100%',
					visible: {
						min: 1,
						max: 6
					}
				}
			});
		});

		/* ]]> */
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

<!-- #page-title start -->
<section id="page-title" class="page-title-1" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="grid_8">
				<div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
					<h1>Adding Secure Payments	
					<br> 
					that <strong>Increase Revenue</strong></h1>
				</div>
			</div><!-- .grid_8 end -->

			<!-- .grid_4 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInUp">
						<img class="float-right" src="/assets/img/pictures/Collage.png" alt="services page title image" />
					</div>
				</div>
			</div><!-- .grid_4 end -->
		</div><!-- .row end -->

		<div class="row">
			<div class="grid_8">
				<div class="breadcrumbs triggerAnimation animated" data-animate="fadeInUp">
					<ul>
						<li>
							<span>You are here:</span>
						</li>

						<li>
							<span class="active">Industry</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- .container end -->
</section><!-- #page-title end -->

<!-- .page-content start -->
<section class="page-content parallax pattern" data-stellar-background-ratio="0.5">
	<!-- .container start -->
	<div class="container">
		<!-- .row start -->

		<div class="row">
			<article class="grid_12">
                
                
                <div id="anchor_articles"style="padding-bottom:100px;">
                <div style="font-size:32px;">Articles</div>
                <?php
				if(is_array($getarticleposts)){
                   foreach ($getarticleposts as $getarticlepost){?>
                          <div id="box_content" style="width:100%; background-color:;">
                          		<div style="border:2px solid rgb(11,103,205);"></div>
							    <div id="box_date" style="background-color:; font-size:18px; float:left; padding-right:10px; padding-bottom:10px;">
									<?php echo $getarticlepost->datecreated; ?>
                                </div>
                                <div id="box_user" style="background-color:; font-size:15px; padding-top:2px;">
									<?php echo $getarticlepost->user; ?>
                                </div>
								<div id="box_post" style="background-color:#D8D8D8; font-size:20px; clear:both; padding-bottom:30px;">
									<?php echo $getarticlepost->post; ?><br /><br />
                                    <a target="_blank" style="font-size:16px;" href="<?php echo $getarticlepost->url_link; ?>"><?php echo $getarticlepost->url_link; ?></a>
                                    <div style="padding-top:10px;">
										<?php if($getarticlepost->attachment != ''){?>
                                            <a class="thumb-info" href="/documents/industry/<?php echo $getarticlepost->attachment; ?>" target="_blank">
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
                   foreach ($getvideoposts as $getvideopost){?>
                          <div id="box_content" style="width:100%; background-color:;">
                          		<div style="border:2px solid rgb(11,103,205);"></div>
							    <div id="box_date" style="background-color:; font-size:18px; float:left; padding-right:10px; padding-bottom:15px;">
									<?php echo $getvideopost->datecreated; ?>
                                </div>
                                <div id="box_user" style="background-color:; font-size:15px; padding-top:2px;">
									<?php echo $getvideopost->user; ?>
                                </div>
								<div id="box_post" style="background-color:#D8D8D8; font-size:24px; clear:both; padding-bottom:30px;">
									<?php echo $getvideopost->post; ?><br /><br />
                                    <a target="_blank" style="font-size:16px;" href="<?php echo $getvideopost->url_link; ?>"><?php echo $getvideopost->url_link; ?></a>
                                    <div style="padding-top:10px;">
										<?php if($getvideopost->attachment != ''){?>
                                            <a class="thumb-info" href="/documents/industry/<?php echo $getvideopost->attachment; ?>" target="_blank">
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
