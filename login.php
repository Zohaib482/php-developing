<?php
    require_once "glogin/config.php";
	require_once "fbgraph/config.php";
	$loginURLgg = $gClient->createAuthUrl();
	$redirectURL = "https://www.deevloopers.com/fbgraph/fb-callback.php";
	$permissions = ['email'];
	$loginURLfb = $helper->getLoginUrl($redirectURL, $permissions);
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<!-- Modal Header -->
											<div class="modal-header backgroud-style">
												<div class="gradient-bg"></div>
												<div class="popup-logo">
													<img src="assets/img/logo/p-logo.jpg" alt="">
												</div>
												<div class="popup-text text-center">
													<h2> <span>Login</span> Your Account.</h2>
													<p>Login to our website, or <span>REGISTER</span></p>
												</div>
											</div>
											<!-- Modal body -->
											<div class="modal-body">
												<div class="container">
													<div class="row justify-content-center">
							
								
							</div>
							
												</div>
												<div id="data" class=" mb-2  mt-2"></div>
												<div class="alt-text text-center"><a href="#"> SIGN IN</a> </div>
												<form class="contact_form" action="signin.php" method="POST" >
													<div class="contact-info">
														<input class="name" name="uemail" type="email" placeholder="Your@email.com*">
													</div>
													<div class="contact-info">
														<input class="pass" name="upass" type="password" placeholder="Your password*">
													</div>
													 <div class="pretty p-svg p-curve mb-3 mt-2">
        <input type="checkbox" name="remember" value="true" />
        <div class="state p-primary">
            <!-- svg path -->
            <svg class="svg svg-icon" viewBox="0 0 20 20">
                <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
            </svg>
            <label>Remember Me</label>
        </div>
	</div>
														<div class="nws-button text-center white text-capitalize">
														<button type="submit" name="login">Log in Now</button> 
													</div> 
												</form>
												<div class="log-in-footer text-center">
													<p>" * " Denotes mandatory field.</p>
													<p>" ** " Denotes At least one telephone number is required.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							