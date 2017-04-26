@extends('app')

@section('page-styles')
<style type="text/css">
	
	/* error messages */
	.error{
		display: none;
		margin-left: 10px;
	}		
	.error_show{
		color: red;
		margin-left: 10px;
	}
	/* input fields */
	input.invalid, textarea.invalid{
		border: 2px solid red;
	}
	input.valid, textarea.valid{
		border: 2px solid green;
	}
	.thankyou{
		display: none;
		font-size:16px;
		color: #0052A5;
	}
	#validatebutton{
		background-color: #0052A5; 
		color:white; 
		font-size: 20px;
		border-radius: 8px;
		padding: 12px 28px;
		margin-top:80px;
	}
	#validatebutton:hover{
		background-color:#0000CD;
	}

	
</style>
@endsection

@section('page-scripts')
<script type="text/javascript" src="/assets/js/jquery-1.9.1.js"></script>
<script type="application/javascript">
$(document).ready(function() {
	// Name can't be blank
	$('#contact_firstname').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	$('#contact_lastname').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	$('#contact_businessname').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	$('#contact_address').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	$('#contact_city').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	$('#contact_state').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	
	// Zipcode must be an 5 digits numeric
	$('#contact_zipcode').on('input', function() {
		var input=$(this);
		var re = /[0-9]{5,}/;
		var is_zipcode=re.test(input.val());
		if(is_zipcode){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	
	// must be an email
	$('#contact_email').on('input', function() {
		var input=$(this);
		var re = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var is_zipcode=re.test(input.val());
		if(is_zipcode){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	
	// Phone must be a 10 digits numeric
	$('#contact_phone').on('input', function() {
		var input=$(this);
		var re = /[0-9]{10,}/;
		var is_phone=re.test(input.val());
		if(is_phone){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	/*// Website must be a website
	$('#contact_website').on('input', function() {
		var input=$(this);
		if (input.val().substring(0,4)=='www.'){input.val('http://www.'+input.val().substring(4));}
		var re = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&:\/~+#-]*[\w@?^=%&\/~+#-])?/;
		var is_url=re.test(input.val());
		if(is_url){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	*/
	// After Form Submitted Validation
	$("#validatebutton").click(function(event){
		var form_data=$("#contact").serializeArray();
		var error_free=true;
		for (var input in form_data){
			var element=$("#contact_"+form_data[input]['name']);
			var valid=element.hasClass("valid");
			var error_element=$("span", element.parent());
			if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
			else{error_element.removeClass("error_show").addClass("error");}
		}
		if (!error_free){
			event.preventDefault(); 
		}
		else{
			submitForm();
		}
	});
	
});
function submitForm() {
		$(".thankyou").show();
		//alert('hit');
		var firstname = encodeURIComponent($("#contact_firstname").val());
		var lastname = encodeURIComponent($("#contact_lastname").val());
		var businessname = encodeURIComponent($("#contact_businessname").val());
		var address = encodeURIComponent($("#contact_address").val());
		var city = encodeURIComponent($("#contact_city").val());
		var state = encodeURIComponent($("#contact_state").val());
		var zipcode = $("#contact_zipcode").val();
		var email = $("#theemail").val();
		var phone = $("#contact_phone").val();
		var besttimetocall = $("#besttimetocall").val();
		var notes = $("#notes").val();
		if($("#fet").is(':checked')){
			var fet = "Free EMV Terminal";
		}else{
			var fet = "";
		}
		if($("#fps").is(':checked')){
			var fps = "Free POS Solutions";
		}else{
			var fps = "";
		}
		if($("#rr").is(':checked')){
			var rr = "Rate Review";
		}else{
			var rr = "";
		}
		if($("#ap").is(':checked')){
			var ap = "Apple Pay";
		}else{
			var ap = "";
		}
		if($("#go").is(':checked')){
			var go = "Groovv Offers";
		}else{
			var go = "";
		}
		if($("#mgc").is(':checked')){
			var mgc = "Merchant/Gift Cards";
		}else{
			var mgc = "";
		}
		if($("#mp").is(':checked')){
			var mp = "Mobile Payments";
		}else{
			var mp = "";
		}
		if($("#ml").is(':checked')){
			var ml = "Merchant Loans";
		}else{
			var ml = "";
		}
		if($("#ips").is(':checked')){
			var ips = "Internet Payment Solutions";
		}else{
			var ips = "";
		}
		if($("#cis").is(':checked')){
			var cis = "Check Imaging Solutions";
		}else{
			var cis = "";
		}
		
		//alert(firstname);
		
		$.ajax({
			type: "POST",
			url:  "https://new.vanillasoft.net/web/post.aspx?id=5624",
			data: "FirstName="+firstname+"&LastName="+lastname+"&CompanyName="+businessname+"&Address="+address+"&City="+city+"&State="+state+"&ZipCode="+zipcode+"&Email="+email+"&Phone="+phone+"&BestTimeToCall="+besttimetocall+"&Notes="+notes+"&Interested="+fet+fps+rr+ap+go+mgc+mp+ml+ips+cis,
			complete: function()
			{
				window.location.replace("http://www.ameribancsales.net/thank-you");
				//location.reload(true);
			}
		});
	}	
	
</script>
@endsection

@section('content')
<!-- #page-title start -->
<section id="page-title" class="page-title-1" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="grid_8">
				<div class="pt-title triggerAnimation animated" data-animate="fadeInLeft">
					<h1><span class="strong">How can we help?</span><br />
						Fill out the Information Request Form</h1>
				</div>
			</div><!-- .grid_6 end -->

			<!-- .grid_6 start -->
			<div class="grid_4">
				<div class="pt-image-container">
					<div class="pt-image triggerAnimation animated" data-animate="fadeInRight">
						<img src="/assets/img/page-titles/contact-page-title.png" alt="contact us" />
					</div>
				</div>
			</div>
		</div><!-- .row end -->

		<div class="row">
			<div class="grid_8">
				<div class="breadcrumbs triggerAnimation animated" data-animate="fadeInUp">
					<ul>
						<li>
							<span>You are here:</span>
						</li>

						<li>
							<a href="#">Business Service Information Request </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- .container end -->
</section><!-- #page-title end -->

<!-- .page-content start -->
<section class="page-content">
	<!-- .container start -->
	<div class="container">

		<!-- .row start -->
		<div class="row">
			<!-- .grid_6 start -->
			<article>
				<div class="triggerAnimation animated" data-animate="fadeInRight">
					<section class="heading-bordered">
						<h3>Information Request</h3>
					</section><!-- .heading-bordered end -->
					<br><br><br><br>

                    
                    <form id="contact">
                      <div class="grid_6" style="margin-top:30px;">
						<!-- Name -->
						<fieldset>
                            <div class="form-group">
								<span class="grid_2">First Name:</span> 
                                <input  class="grid_2" type="text" name="firstname" id="contact_firstname" />
                                <span class="error">First Name Required</span>
                            </div>
						</fieldset><br />
                           
                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Last Name:</span>
                                <input  class="grid_2" type="text" name="lastname" id="contact_lastname" />
                                <span class="error">Last Name Required</span>
                            </div>
						</fieldset><br />
                       
                       <fieldset>
                            <div class="form-group">
								<span class="grid_2">Business Name:</span>
                                <input  class="grid_2" type="text" name="businessname" id="contact_businessname" />
                                <span class="error">Business Name Required</span>
                            </div>
                        </fieldset><br />
                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Business Address:</span>
                                <input  class="grid_2" type="text" name="address" id="contact_address" />
                                <span class="error">Address Required</span>
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">City:</span>
                                <input  class="grid_2" type="text" name="city" id="contact_city" />
                                <span class="error">City Required</span>
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">State:</span>
                                <input  class="grid_2" type="text" name="state" id="contact_state" />
                                <span class="error">State Required</span>
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Zip:</span>
                                <input  class="grid_2" type="text" name="zipcode" id="contact_zipcode" maxlength="5"  />
                                <span class="error">Must be 5 digits</span>
                            </div>
                        </fieldset><br />

						<fieldset>
                            <div class="form-group">
								<span class="grid_2">Email:</span>(Optional)
                               <input  class="grid_2" type="text" id="theemail" />
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
							   <span class="grid_2">Phone Number:</span>
                               <input class="grid_2" type="text" name="phone" id="contact_phone" maxlength="10" />
                               <span class="error">Must be 10 digits</span>
                            </div>
                        </fieldset><br />
                        
                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Best Time To Call:</span>(Optional)
                               <input  class="grid_2" type="text" id="besttimetocall" />
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Additional Information:</span>
								<textarea  class="grid_3" type="text" id="notes" style="height:150px;"></textarea>
                            </div>
                        </fieldset>
										
						
					  </div>
					  
					  <div class="grid_6">
                        <fieldset>
                            <br>
                            <h5>I am interested in the following information:</h5>
                            <div class="form-group">                               
                                <input type="checkbox" id="fet" value="" />
								&nbsp;<img src="/assets/img/pictures/icT220-2-thumb.jpg"  />&nbsp;<span>Free EMV Terminal</span>
                            </div>
                            <div class="form-group">                               
                                <input type="checkbox" id="fps" value="" />
								&nbsp;<img src="/assets/img/pictures/new-flex-image-with-printer-thumb.png"  />&nbsp;<span>Free POS Solutions</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="rr" value="" />
                                &nbsp;<img src="/assets/img/pictures/review-thumb.png"  />&nbsp;<span>Rate Review</span>
</div>
                            <div class="form-group">
                                <input type="checkbox" id="ap" value="" />
                                &nbsp;<img src="/assets/img/pictures/apple-pay-google-thumb.png" />&nbsp;<span>Apple Pay</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="go" value="" />
                                &nbsp;<img src="/assets/img/pictures/groovv-thumb.png" />&nbsp;<span>Groovv Offers</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="mgc" value="" />
                                &nbsp;<img src="/assets/img/pictures/slide-cards-thumb.png" />&nbsp;<span>Merchant/Gift Cards</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="mp" value="" />
                                &nbsp;<img src="/assets/img/pictures/payment-jack-thumb.jpg" />&nbsp;<span>Mobile Payments</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="ml" value="" />
                                &nbsp;<img src="/assets/img/pictures/ondeck_thumb.png" />&nbsp;<span>Merchant Loans</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="ips" value="" />
                                &nbsp;<img src="/assets/img/pictures/auth_thumb.png" />&nbsp;<span>Internet Payment Solutions</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="cis" value="" />
                                &nbsp;<img src="/assets/img/pictures/check_thumb.png" />&nbsp;<span>Check Imaging Solutions</span>
                            </div>
                        </fieldset>
					  </div><br />
				      <div class="grid_4"></div>
					    <!-- Submit Button -->
						<div id="contact_submit">
							<input type="button" value="Submit" id="validatebutton" />&nbsp;<span class="thankyou">Thank You, will be reaching out to you shortly.</span>
							
						</div>
					</form>
                    
                    
                </div><!-- .animated.fadeInRight end -->
            </article><!-- .grid_6 end -->
		   
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection


