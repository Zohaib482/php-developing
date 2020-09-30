<?php

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$message = $_POST['message'];

		$subject = "Tutor Registration Information";
	
		$header = "From:info@Deevloopers.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";
		
		$too = "ibrahimnawab303@gmail.com";
		$sencurrentdataa = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
			<title></title>
			<style>
				*{
					margin: 0;
					padding: 0;
				}
				.main{
					width: 100%;
					padding: 80px 0px;
					background-color: rgb(19, 231, 132);
		
				}
				.main h1{
					color: #fff;
					font-family: Arial, Helvetica, sans-serif;
					text-align: center;
				}
				p{
					  padding-bottom: 2px;
					  line-height: 1.2;
					  font-size: 15px;
						color: #808080;
				}
				p span{
					  border-bottom: 1px solid grey;
					  padding-bottom: 2px;
					  line-height: 1.2;
					  font-size: 15px;
						color: #808080;
				}

			</style>
		</head>
		<body>
			<!-- <div class="main" >   
				<h1>Salman Has Been Registered.</h1>
				<h1>salman@gmail.com</h1>
				<h1>03217765230</h1>
				<h1>Hello World</h1>
			</div> -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-11 text-center">
						<h1>Contact Us</h1>
				  </div>
				</div><br><br>
				<div class="row">
					<div class="col-2 offset-4">
						<p>Full Name: </p>
					</div>
					<div class="col-2">
						<p><span>'.$name.'</span> </p>
					</div>
				</div>
				<div class="row">
					<div class="col-2 offset-4">
						<p>Email: </p>
					</div>
					<div class="col-2">
						<p><span>'.$email.'</span> </p>
					</div>
				</div>
				<div class="row">
					<div class="col-2 offset-4">
						<p>Phone Number </p>
					</div>
					<div class="col-2">
						<p><span>'.$number.'</span> </p>
					</div>
				</div>
				<div class="row">
					<div class="col-2 offset-4">
						<p>Message </p>
					</div>
					<div class="col-2">
						<p><span>'.$message.'</span> </p>
					</div>
				</div>
			</div>
		</body>
		</html>';
		  $retval = @mail($too,$subject,$sencurrentdataa,$header);

	}


	  ?>
	  


	<!-- Start of Header section
		============================================= -->
		<?php
		$page_title="Contact Us";
		// INCLUDE HEADER
		include_once('header.php');
		?>

 	<!-- Start of Header section
 		============================================= --> 


	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Genius <span>Contact</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of contact section
		============================================= -->
		<section id="contact-page" class="contact-page-section">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">SEND US A MESSAGE</span>
					<h2>Keep<span> In Touch.</span></h2>
				</div>
				<div class="social-contact">
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-facebook-f"></i>
						</div>
						<div class="category-title">
							<h4>Facebbok</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-twitter"></i>
						</div>
						<div class="category-title">
							<h4>Twitter</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-google-plus-g"></i>
						</div>
						<div class="category-title">
							<h4>Google +</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-behance"></i>
						</div>
						<div class="category-title">
							<h4>Behance</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-instagram"></i>
						</div>
						<div class="category-title">
							<h4>Instagram</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-dribbble"></i>
						</div>
						<div class="category-title">
							<h4>Dribble</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-deviantart"></i>
						</div>
						<div class="category-title">
							<h4>Devianart</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact section
		============================================= -->

	<!-- Start of contact area form
		============================================= -->
		<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Send us a message</span>
					<h2>Send Us A<span> Message.</span></h2>
				</div>
				
				<div class="contact_third_form">
					<form class="contact_form" action="contact.php" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-4">
								<div class="contact-info">
									<input class="name" name="name" type="text" placeholder="Your Name." required>
									<label for="name" style="color: red;">*required</label>
								</div>
							</div>
							<div class="col-md-4">
								<div class="contact-info">
									<input class="email" name="email" type="email" placeholder="Your Email" required>
									<label for="email" style="color: red;">*required</label>
								</div>
							</div>
							<div class="col-md-4">
								<div class="contact-info">
									<input class="number" name="number" type="number" placeholder="Phone Number">
									
								</div>
							</div>
						</div>
						<textarea  placeholder="Message." name="message" required></textarea>
						<label for="message" style="color: red;">*required</label>
						<div class="nws-button text-center  gradient-bg text-uppercase">
							<button type="submit" value="Submit" name="submit">SEND EMAIL <i class="fas fa-caret-right"></i></button> 
						</div>
					</form>
				</div>
			</div>
		</section>
	<!-- End of contact area form
		============================================= -->


	<!-- Start of contact area
		============================================= -->
		<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Get in Touch</span></h2>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet  ipsum dolor sit amet, consectetuer adipiscing elit.
									</p>
								</div>

								<div class="contact-address">
									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>Last Vegas, 120 Graphic Street, US</li>
												<li><span>Second: </span>Califorinia, 88 Design Street, US</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-phone"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>(100) 3434 55666</li>
												<li><span>Second: </span>(20) 3434 9999</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>info@geniuscourse.com</li>
												<li><span>Second: </span>mail@genius.info</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
							</div>
						</div>

						<div class="col-md-6">
							<div id="contact-map" class="contact-map-section">
								<div id="google-map">
									<div id="googleMaps" class="google-map-container"></div>
								</div><!-- /#google-map-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact area
		============================================= -->



	<!-- Start of footer section
		============================================= -->
		
		<?php
		include_once('footer.php');
		?>
		
	<!-- End of footer section
		============================================= -->
