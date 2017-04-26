@extends('app')

@section('page-styles')
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
<style type="text/css">
	.thebutton{
		background-color: #286090;
		color: white;
		font-size:21px;
	} 
	.thebutton:hover{
		background-color: #31B0D5;
	}
	#fnameerror{
		display: none;
	}
	#lnameerror{
		display: none;
	}
	#bnameerror{
		display: none;
	}
	#addresserror{
		display: none;
	}
	#cityerror{
		display: none;
	}
	#stateerror{
		display: none;
	}
	#zipcodeerror{
		display: none;
	}
	#phoneerror{
		display: none;
	}
	.error{
		color:red;
	}
	
</style>
@endsection

@section('page-scripts')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.8/angular-messages.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-sanitize.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>



<!--<script type="text/javascript" src="/assets/js/angular.js"></script>
<script type="text/javascript" src="/assets/js/angular_messages.js"></script>
<script type="text/javascript" src="/assets/js/angular_animate.js"></script>
<script type="text/javascript" src="/assets/js/angular_aria.js"></script>
<script type="text/javascript" src="/assets/js/angular_sanitize.js"></script>
<script type="text/javascript" src="/assets/js/angular_material.js"></script>-->
<script type="application/javascript">

	var app = angular.module("testApp", ["ngMaterial", "ngMessages"])
				.controller('AppCtrl', function($scope, $http){
					alert('javascript on load');

					$scope.formAdata = {};
					
					$scope.stateChanged = function(){
						if($scope.fet == "1"){
							$scope.freeemvterminal = 'Free EMV Terminal';
						}else{
							$scope.freeemvterminal = '';
						}
						if($scope.fet == "1"){
							$scope.freepossolutions = 'Free POS Solutions';
						}else{
							$scope.freepossolutions = '';
						}
						if($scope.rr == "1"){
							$scope.ratereview = 'Rate Review';
						}else{
							$scope.ratereview = '';
						}
						if($scope.ap == "1"){
							$scope.applepay = 'Apple Pay';
						}else{
							$scope.applepay = '';
						}
						if($scope.go == "1"){
							$scope.groovvoffers = 'Groovv Offers';
						}else{
							$scope.groovvoffers = '';
						}
						if($scope.mgc == "1"){
							$scope.merchantgiftcards = 'Merchant Gift Card';
						}else{
							$scope.merchantgiftcards = '';
						}
						if($scope.mp == "1"){
							$scope.mobilepayments = 'Mobile Payments';
						}else{
							$scope.mobilepayments = '';
						}
						if($scope.ml == "1"){
							$scope.merchantloans = 'Merchant Loans';
						}else{
							$scope.merchantloans = '';
						}
						if($scope.ips == "1"){
							$scope.internetpaymentsolutions = 'Internet Payment Solutions';
						}else{
							$scope.internetpaymentsolutions = '';
						}
						if($scope.cis == "1"){
							$scope.checkimagingsolutions = 'Check Imaging Solutions';
						}else{
							$scope.checkimagingsolutions = '';
						}
					}
						
					$scope.submitForm = function(isValid){
						$scope.formAdata.Interested = $scope.freeemvterminal + ' ' + $scope.freepossolutions + ' ' + $scope.ratereview + ' ' + $scope.applepay + ' ' + $scope.groovvoffers + ' ' + $scope.merchantgiftcards + ' ' + $scope.mobilepayments + ' ' + $scope.merchantloans + ' ' + $scope.internetpaymentsolutions + ' ' + $scope.checkimagingsolutions;
						alert('javascript working');
						if(isValid){
							//alert('our form is amazing');
							$http({
							method  : 'POST',
							url     : 'https://new.vanillasoft.net/web/post.aspx?id=5770',
							data    : $.param($scope.formAdata),
							headers : {'Content-Type': 'application/x-www-form-urlencoded'}
							});
							
							
							
								  
						}
						
						$(location).attr('href', 'http://www.ameribancsales.net/business-service-information')
					};
					
					
					
					/*$scope.orderForm.$setPristine();
					document.getElementById("orderForm").reset();*/
					
					/*$('body').empty();*/
					/*$scope.formAdata.$setPristine();
					$scope.formAdata.$setUntouched();*/
					/*var $rootScope = app.get('$rootScope');
							$rootScope.$destroy();*/
				});	
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
		<div class="row"  ng-app="testApp">
			<!-- .grid_6 start -->
			<article>
				<div class="triggerAnimation animated" data-animate="fadeInRight">
					<section class="heading-bordered">
						<h3>Information Request</h3>
					</section><!-- .heading-bordered end -->
					<br><br><br><br>

                    <form name="orderForm" id="orderForm" ng-controller="AppCtrl"  ng-submit="submitForm(orderForm.$valid)">
                     <div class="grid_6">
                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">First Name:</span> 
                                <input  class="grid_2" type="text" name="FirstName" ng-model="formAdata.firstname" required />
                                <div ng-messages="orderForm.FirstName.$error" ng-show="orderForm.FirstName.$touched" style="color:red;">
									<div ng-message="required">First Name Required</div>
							    </div>
                           		<div id="fnameerror">
									<span class="error">First Name Required</span>
								</div>
                            </div>
						</fieldset><br />
                           
                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Last Name:</span>
                                <input  class="grid_2" type="text" name="LastName" ng-model="formAdata.lastname" required />
                                <div ng-messages="orderForm.LastName.$error" ng-show="orderForm.LastName.$touched" style="color:red;">
									<div ng-message="required">Last Name Required</div>
							    </div>
                           		<div id="lnameerror">
									<span class="error">Last Name Required</span>
								</div>
                            </div>
						</fieldset><br />
                       
                       <fieldset>
                            <div class="form-group">
								<span class="grid_2">Business Name:</span>
                                <input  class="grid_2" type="text" name="CompanyName" ng-model="formAdata.companyname" required />
                                <div ng-messages="orderForm.CompanyName.$error" ng-show="orderForm.CompanyName.$touched" style="color:red;">
									<div ng-message="required">Business Name Required</div>
							    </div>
                           		<div id="bnameerror">
									<span class="error">Business Name Required</span>
								</div>
                            </div>
                        </fieldset><br />
                        
                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Business Address:</span>
                                <input  class="grid_2" type="text" name="Address" ng-model="formAdata.address" required />
                                <div ng-messages="orderForm.Address.$error" ng-show="orderForm.Address.$touched" style="color:red;">
									<div ng-message="required">Address Required</div>
							    </div>
                           		<div id="addresserror">
									<span class="error">Address Required</span>
								</div>
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">City:</span>
                                <input  class="grid_2" type="text" name="City" ng-model="formAdata.city" required />
                                <div ng-messages="orderForm.City.$error" ng-show="orderForm.City.$touched" style="color:red;">
									<div ng-message="required">City Required</div>
							    </div> 
                           		<div id="cityerror">
									<span class="error">City Required</span>
								</div>
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">State:</span>
                                <input  class="grid_2" type="text" name="State" ng-model="formAdata.state" required />
                                <div ng-messages="orderForm.State.$error" ng-show="orderForm.State.$touched" style="color:red;">
									<div ng-message="required">State Required</div>
							    </div> 
                           		<div id="stateerror">
									<span class="error">State Required</span>
								</div>
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Zip:</span>
                                <input  class="grid_2" type="text" name="ZipCode" ng-model="formAdata.zipcode" ng-minlength="5" required  />
                                <div ng-messages="orderForm.ZipCode.$error" ng-show="orderForm.ZipCode.$touched" style="color:red;">
									<div ng-message="required">Zip Code Required</div>
									<div ng-message="minlength">At least 5 digits</div>
							    </div>
                           		<div id="zipcodeerror">
									<span class="error">Zip Code Required</span>
								</div> 
                            </div>
                        </fieldset><br />

						<fieldset>
                            <div class="form-group">
								<span class="grid_2">Email:</span>(Optional)
                               <input  class="grid_2" type="text" name="Email" ng-model="formAdata.email" />
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
							   <span class="grid_2">Phone Number:</span>
                               <input class="grid_2" type="text" name="Phone" ng-model="formAdata.phone" ng-minlength="10" ng-maxlength="10" required />
                               <div ng-messages="orderForm.Phone.$error" ng-show="orderForm.Phone.$touched" style="color:red;">
									<div ng-message="required">Phone Required</div>
									<div ng-message="minlength">Must be 10 digits</div>
									<div ng-message="maxlength">Must be 10 digits</div>
							   </div> 
                           	   <div id="phoneerror">
									<span class="error">Phone Required</span>
								</div>
                            </div>
                        </fieldset><br />
                        
                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Best Time To Call:</span>(Optional)
                               <input  class="grid_2" type="text" name="BestTimeToCall" ng-model="formAdata.besttimetocall" />
                            </div>
                        </fieldset><br />

                        <fieldset>
                            <div class="form-group">
								<span class="grid_2">Additional Information:</span>
								<textarea  class="grid_3" type="text" name="Notes" ng-model="formAdata.notes" style="height:150px;"></textarea>
                            </div>
                        </fieldset>
					  </div>
                	
                      <div class="grid_6">
                        <fieldset>
                            <br>
                            <h5>I am interested in the following information:</h5>
                            <div class="form-group">                               
                                <input type="checkbox" ng-model="fet" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
								&nbsp;<img src="/assets/img/pictures/icT220-2-thumb.jpg"  />&nbsp;<span>Free EMV Terminal</span>
                            </div>
                            <div class="form-group">                               
                                <input type="checkbox" ng-model="fps" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
								&nbsp;<img src="/assets/img/pictures/new-flex-image-with-printer-thumb.png"  />&nbsp;<span>Free POS Solutions</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" ng-model="rr" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
                                &nbsp;<img src="/assets/img/pictures/review-thumb.png"  />&nbsp;<span>Rate Review</span>
</div>
                            <div class="form-group">
                                <input type="checkbox" ng-model="ap" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
                                &nbsp;<img src="/assets/img/pictures/apple-pay-google-thumb.png" />&nbsp;<span>Apple Pay</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" ng-model="go" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
                                &nbsp;<img src="/assets/img/pictures/groovv-thumb.png" />&nbsp;<span>Groovv Offers</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" ng-model="mgc" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
                                &nbsp;<img src="/assets/img/pictures/slide-cards-thumb.png" />&nbsp;<span>Merchant/Gift Cards</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" ng-model="mp" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
                                &nbsp;<img src="/assets/img/pictures/payment-jack-thumb.jpg" />&nbsp;<span>Mobile Payments</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" ng-model="ml" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
                                &nbsp;<img src="/assets/img/pictures/ondeck_thumb.png" />&nbsp;<span>Merchant Loans</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" ng-model="ips" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
                                &nbsp;<img src="/assets/img/pictures/auth_thumb.png" />&nbsp;<span>Internet Payment Solutions</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" ng-model="cis" ng-change="stateChanged(this)" ng-true-value="1" ng-false-value="0" />
                                &nbsp;<img src="/assets/img/pictures/check_thumb.png" />&nbsp;<span>Check Imaging Solutions</span>
                            </div>
                        </fieldset>
					  </div>

                        <br>

				
                            <input type="submit" name="submit" id="submitForm" class="thebutton" value="Call Me Now!" />
                   </form>
                </div><!-- .animated.fadeInRight end -->
            </article><!-- .grid_6 end -->
		   
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- .page-content end -->

@endsection


