

<?php
$page_title="Home";
include_once 'header.php';?>

	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section" style="position: relative;">
			<div class="hero-video">
				
				<a href="#intro" data-toggle="modal" class="video-play-btn popup-video">
					<i class="icofont-play-alt-3"></i>
					<div id="spinnerbtn"></div>
			</a>
				<div>
					<p class="paramedia" style="color: white; padding-right: 140px; margin-top: 75px;">Welcome Online Tutor</p>
					<h4 class="h4media" style="color: white; padding-right: 140px; margin-top: 0%; font-size: 17px;">CLICK TO SEE THE VIDEO</h4>
				</div>
			</div>
			
			<div id="slider-item" class="slider-item-details" style="background-image: url('../assets/images/banner1.jpeg')">
			<div class="slider-area slider-bg-2 relative-position slidermedia">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-1">
								<span class="subtitle text-uppercase">WOW Online Tutor</span>
							</div>
							<div class="layer-1-2">
								<h2 class="secoud-title"> Browse The <span>Best Courses.</span></h2>
							</div>
						</div>
						<div class="layer-1-3">
							<div class="search-course mb30 relative-position">
								<form action="#" id="voice" method="post" name="myform" >
									<!-- <input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">-->
									
										<select name="course" style="width:85%;" class="form-control course" id="course"><?php
											
									 	$query = mysqli_query($con, "select * from subjects");
											while($row = mysqli_fetch_array($query))
											{
												?>
									 	<option value="<?=$row['name']?>"><?=$row['name']?></option>
		<?php							 	}
									 	?>
									 	</select>
									 	<div class="nws-button text-center  gradient-bg text-capitalize">
										<button onclick="startDictation()" type="button" value="Submit"><i class="fas fa-microphone"></i></button>
										<input style="visibility: hidden;" type="submit" name="submit" id="submit"> 
									</div>
								</form>
							</div>
						
						</div>
						<p style="text-align: center;color: #fff;padding-top: 10px;"><span>Google Says:</span> <i id="transcript"></i></p>
					</div>
				</div>
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-1">
								<span class="subtitle text-uppercase">WOW Online Tutor</span>
							</div>
							<div class="layer-1-3">
								<h2><span>Quality</span> Education <br> is our <span>Goal</span></h2>
							</div>
						</div>
						<div class="layer-1-4">
							<div id="course-btn">
								<div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
									<a href="#">Our Courses <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>
				
				<div class="slider-area slider-bg-3 relative-position">
					<div class="slider-text">
						<div class="layer-1-2">
							<div class="coming-countdown ul-li">
								<ul>
									<li class="days">
										<span class="number"></span>
										<span class>Days</span>
									</li>

									<li class="hours">
										<span class="number"></span>
										<span class>Hours</span>
									</li>

									<li class="minutes">
										<span class="number"></span>
										<span class>Minutes</span>
									</li>

									<li class="seconds">
										<span class="number"></span>
										<span class>Seconds</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="section-title mb20 headline text-center mikemedia">
							<div class="layer-1-3">
								<h2 class="third-slide"> Mobile Application Experiences : <br> <span>Mobile App Design.</span></h2>
							</div>
						</div>
						<div class="layer-1-4">
							<div class="about-btn text-center">
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a href="#">About Us <i class="fas fa-caret-right"></i></a>
								</div>
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a href="#">contact us <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-area slider-bg-4 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<span class="subtitle text-uppercase">WOW Online Tutor</span>
							<h2><span>Quality</span> Education <br> is our <span>Goal</span></h2>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of slider section
		============================================= -->


	<!-- Start of Search Courses
		============================================= -->
		<section id="search-course" class="search-course-section">
			<div class="container">
				<div class="section-title mb20 headline text-center "  >
					<span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
					<h2><span>Search</span> Genius Courses.</h2>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="search-course mb30 relative-position "  >
							<form action="#" method="post">
								<input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
								<div class="nws-button text-center  gradient-bg text-capitalize">
									<button type="submit" value="Submit">Search</button> 
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-4 offset-md-4">
						<button class="btn btn-success btn-block"><?php
						$query=mysqli_query($con,'SELECT * FROM `share` ORDER by id DESC LIMIT 1');
						$row=mysqli_fetch_array($query);
						echo '<a href="'.$row['share_link'].'">Join Meeting</a>';
						?></button>
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-6 offset-md-4">
						<div class="about-resigter-form backgroud-style relative-position">
							<div class="register-content">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span></span> Subjects.</h3>
									<p></p>
								</div>
								<div class="register-form-area">
									<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class="contact-info">
											<?php
											if(isset($_POST['submit']))
											{
												if(isset($_POST['course']))
												   {
													$course = $_POST['course'];
												$query = mysqli_query($con, "select * from subjects where name = '$course'");
												while($row = mysqli_fetch_array($query))
											{
												?>
												<input class="name" value="<?php echo $row['name']  ?>" type="text" disabled="disabled">
												<?php
											}
												}
											}
												   
											else{
											$query = mysqli_query($con, "select * from subjects");
											while($row = mysqli_fetch_array($query))
											{
												?>
												<input class="name" value="<?php echo $row['name']  ?>" type="text" disabled="disabled">
												<?php
											}
											}
											?>
											
										</div>
										
									</form>
								</div>
							</div>
						</div>
						<div class="bg-mockup">
							<img src="assets/img/about/phone.png" alt="">
						</div>
					</div>
				</div>
				<br><br>	
			
				
			</div>

		</section>
	<!-- End of Search Courses
		============================================= -->
	<!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section">
			<div class="row"></div>
		</section>
	<!-- End popular course
		============================================= -->
		<!-- <section id="popular-course" class="popular-course-section">
			<div class="search-counter-up">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 col-sm-6">
							<div class="counter-icon-number "  >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-graduation-hat"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">5 </span><span>M+</span>
									<p>Students Enrolled</p>
								</div>
							</div>
						</div>
						/counter
		
						<div class="col-md-3 col-sm-6">
							<div class="counter-icon-number " >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-book"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">122</span><span>.500+</span>
									<p>Online Available Courses</p>
								</div>
							</div>
						</div>
						/counter
		
						<div class="col-md-3 col-sm-6">
							<div class="counter-icon-number " >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-favorites-button"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">15</span><span>.000+</span>
									<p>Premium Quality Products</p>
								</div>
							</div>
						</div>
						/counter
		
						<div class="col-md-3 col-sm-6">
							<div class="counter-icon-number " >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-group"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">7</span><span>.500+</span>
									<p>Teachers Registered</p>
								</div>
							</div>
						</div>
						/counter
					</div>
			</div>
			<div class="container">
				<div class="section-title mb20 headline text-left "  >
					<span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
					<h2><span>Popular</span> Courses.</h2>
				</div>
				<div id="course-slide-item" class="course-slide">
					<div class="course-item-pic-text " >
						<div class="course-pic relative-position mb25">
							<img src="assets/img/course/c-1.jpg" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
								<span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					/item
		
					<div class="course-item-pic-text " >
						<div class="course-pic relative-position mb25">
							<img src="assets/img/course/c-2.jpg" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Mobile Apps</a></span>
								<span class="course-author bold-font"><a href="#">Fernando Torres</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Introduction to Mobile Application Development.</a></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					/item
		
					<div class="course-item-pic-text " >
						<div class="course-pic relative-position mb25">
							<img src="assets/img/course/c-3.jpg" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Motion Graphic </a></span>
								<span class="course-author bold-font"><a href="#">enny Garcias</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Learning IOS Apps Programming & Development.</a></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					/item
		
					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="assets/img/course/c-2.jpg" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
								<span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					/item
		
					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="assets/img/course/c-3.jpg" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
								<span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					/item
		
					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="assets/img/course/c-1.jpg" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
								<span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					/item
				</div>
			</div>
		</section> -->

	<!-- Start of about us section
		============================================= -->
		<section id="about-us" class="about-us-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="about-resigter-form backgroud-style relative-position">
							<div class="register-content">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span>Get a</span> Free Registration.</h3>
									<p>More Than 122K Online Available Courses</p>
								</div>
								<div class="register-form-area">
									<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class="contact-info">
											<input class="name" name="name" type="text" placeholder="Your Name.">
										</div>
										<div class="contact-info">
											<input class="nbm" name="nbm" type="number" placeholder="Your Number">
										</div>
										<div class="contact-info">
											<input class="email" name="email" type="email" placeholder="Email Address.">
										</div>
										<select>
											<option value="9" selected="">Select Course.</option>
											<option value="10">Web Design</option>
											<option value="11">Web Development</option>
											<option value="12">Php Core</option>
										</select>
										<div class="contact-info">
											<input type="text" id="datepicker" placeholder="Date.">
										</div>
										<textarea  placeholder="Message."></textarea>
										<div class="nws-button text-uppercase text-center white text-capitalize">
											<button type="submit" value="Submit">SUBMIT REQUEST </button> 
										</div> 
									</form>
								</div>
							</div>
						</div>
						<div class="bg-mockup">
							<img src="assets/img/about/phone.png" alt="">
						</div>
					</div>
					<!-- /form -->

					<div class="col-md-7">
						<div class="about-us-text">
							<div class="section-title relative-position mb20 headline text-left "  >
								<span class="subtitle ml42 text-uppercase">SORT ABOUT US</span>
								<h2>We are <span>Genius Course</span>
								work since 1980.</h2>
								<p>We take our mission of increasing global access to quality education seriously. We connect learners to the best universities and institutions from around the world.</p>
							</div>
							<div class="about-content-text">
								<p class=""  >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam. magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
								<div class="about-list mb65 ul-li-block "  >
									<ul>
										<li>Professional And Experienced Since 1980</li>
										<li>We Connect Learners To The Best  Universities From Around The World</li>
										<li>Our Mission Increasing Global Access To Quality Aducation</li>
										<li>100K Online Available Courses</li>
									</ul>
								</div>
								<div class="about-btn "  >
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="#">About Us <i class="fas fa-caret-right"></i></a>
									</div>
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="#">contact us <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of about us section
		============================================= -->


	<!-- Start of why choose us section
		============================================= -->
		<section id="why-choose-us" class="why-choose-us-section">
			<div class="jarallax  backgroud-style">
				<div class="container">
					<div class="section-title mb20 headline text-center "  >
						<span class="subtitle text-uppercase">GENIUS ADVANTAGES</span>
						<h2>Reason <span>Why Choose Genius.</span></h2>
					</div>
					<div id="service-slide-item" class="service-slide">
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">The Power Of Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Best Online Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-list"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Education For All Student.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">The Power Of Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Best Online Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-list"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Education For All Student.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">The Power Of Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Best Online Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-list"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Education For All Student.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
					</div>
					<!-- /service-slide -->
					<div  class="testimonial-slide">
						<div class="section-title-2 mb65 headline text-left "  >
							<h2>Students <span>Testimonial.</span></h2>
						</div>

						<div id="testimonial-slide-item" class="testimonial-slide-area">
							<div class="student-qoute "  >
								<p>Ã¢â‚¬Å“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so weÃ¢â‚¬â„¢ll be back in the future lorem ipsum diamet.Ã¢â‚¬Â</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute "  >
								<p>Ã¢â‚¬Å“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so weÃ¢â‚¬â„¢ll be back in the future lorem ipsum diamet.Ã¢â‚¬Â</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute "  >
								<p>Ã¢â‚¬Å“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so weÃ¢â‚¬â„¢ll be back in the future lorem ipsum diamet.Ã¢â‚¬Â</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute">
								<p>Ã¢â‚¬Å“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so weÃ¢â‚¬â„¢ll be back in the future lorem ipsum diamet.Ã¢â‚¬Â</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of why choose us section
		============================================= -->


	<!-- Start latest section
		============================================= -->
		<section id="latest-area" class="latest-area-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="latest-area-content  " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Latest <span>News.</span></h2>
							</div>
							<div class="latest-news-posts">
								<div class="latest-news-area">
									<div class="latest-news-thumbnile relative-position">
										<img src="assets/img/blog/lb-1.jpg" alt="">
										<div class="hover-search">
											<i class="fas fa-search"></i>
										</div>
										<div class="blakish-overlay"></div>
									</div>
									<div class="date-meta">
										<i class="fas fa-calendar-alt"></i> 26 April 2018
									</div>
									<h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A BeginnerÃ¢â‚¬â„¢s Guide.</a></h3>
									<div class="course-viewer ul-li">
										<ul>
											<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
											<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
										</ul>
									</div>
								</div>
								<!-- /post -->

								<div class="latest-news-posts">
									<div class="latest-news-area">
										<div class="latest-news-thumbnile relative-position">
											<img src="assets/img/blog/lb-2.jpg" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> 26 April 2018
										</div>
										<h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a></h3>
										<div class="course-viewer ul-li">
											<ul>
												<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
												<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
											</ul>
										</div>
									</div>
									<!-- /post -->
								</div>

								<div class="view-all-btn bold-font">
									<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest-news -->
					<div class="col-md-4">
						<div class="latest-area-content " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Upcoming <span>Events.</span></h2>
							</div>
							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">22</span>
										April 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Fully Responsive Web Design & Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">07</span>
										August 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Introduction to Mobile Application Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">30</span>
										Sept 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">IOS Apps Programming & Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="view-all-btn bold-font">
								<a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
							</div>
						</div>
					</div>
					<!-- /events -->

					<div class="col-md-4">
						<div class="latest-area-content " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Latest <span>Video.</span></h2>
							</div>
							<div class="latest-video-poster relative-position mb20">
								<img src="assets/img/banner/v-1.jpg" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<div class="vidoe-text">
								<h3 class="latest-title bold-font"><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
								<p class="mb25">Lorem ipsum dolor sit amet, consectetuer delacosta adipiscing elit, sed diam nonummy.</p>
							</div>
							<div class="view-all-btn bold-font">
								<a href="#">View All Videos <i class="fas fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /. -->
				</div>
			</div>
		</section>
	<!-- End latest section
		============================================= -->


	<!-- Start of sponsor section
		============================================= -->
		<section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left "  >
					<h2>Genius <span>Sponsors.</span></h2>
				</div>
				<div class="sponsor-item sponsor-1 " >
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-1.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-2.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-3.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-4.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-5.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-6.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-6.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-6.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-6.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
	<!-- End of sponsor section
		============================================= -->


	<!-- Start of best course
		============================================= -->
		<section id="best-course" class="best-course-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
					<h2>Browse Our<span> Best Course.</span></h2>
				</div>
				<div class="best-course-area mb45">
					<div class="row">
						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="assets/img/course/bc-1.jpg" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="fas fa-bolt"></i>
										<span>Trending</span>
									</div>
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="assets/img/course/bc-2.jpg" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="assets/img/course/bc-3.jpg" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="assets/img/course/bc-4.jpg" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="assets/img/course/bc-5.jpg" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="assets/img/course/bc-6.jpg" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="fas fa-bolt"></i>
										<span>Trending</span>
									</div>
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="assets/img/course/bc-7.jpg" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="assets/img/course/bc-8.jpg" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->
					</div>
				</div>

				
			</div>
		</section>
	<!-- End of best course
		============================================= -->

	<!-- Start of course teacher
		============================================= -->
		<section id="course-teacher" class="course-teacher-section">
			<div class="jarallax">
				<div class="container">
					<div class="section-title mb20 headline text-center "  >
						<span class="subtitle text-uppercase">OUR PROFESSIONAL</span>
						<h2>Genius Courses <span>Teachers.</span></h2>
					</div>

					<div class="teacher-list">
						<div class="row justify-content-center">
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Daniel
												Alvares</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="assets/img/teacher/t-1.jpg" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Juliana Hernandes</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="assets/img/teacher/t-2.jpg" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Berliana
												Luis</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="assets/img/teacher/t-3.jpg" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">IOS Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Johansen
												Doe</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="assets/img/teacher/t-4.jpg" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Graphic </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Lisha
												Chambelt</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="assets/img/teacher/t-6.jpg" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Checilia
												Yeoung</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="assets/img/teacher/t-5.jpg" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Sean
												Fernandes</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="assets/img/teacher/t-7.jpg" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
						</div>

						<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font "  >
							<a href="#">All teacher <i class="fas fa-caret-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of course teacher
		============================================= -->



	<!-- Start of best product section
		============================================= -->
		<section id="best-product" class="best-product-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left "  >
					<h2>Genius <span>Best Products.</span></h2>
				</div>
				<div id="best-product-slide-item" class="best-product-slide">
					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-1.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>

					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-2.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-3.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-4.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-1.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-2.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-3.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End  of best product section
		============================================= -->
		

	<!-- Start FAQ section
		============================================= -->
		<section id="faq" class="faq-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">GENIUS COURSE FAQ</span>
					<h2>Frequently<span> Ask & Questions</span></h2>
				</div>
				<div class="faq-tab">
					<div class="faq-tab-ques ul-li">
						<div class="tab-button text-center mb65 "  >
							<ul class="product-tab">
								<li class="active" rel="tab1">GENERAL </li>
								<li rel="tab2"> COURSES </li>
								<li rel="tab3"> TEACHERS </li>
								<li rel="tab4">  EVENTS  </li>
								<li rel="tab5">  OTHERS  </li>
							</ul>
						</div>
						<!-- /tab-head -->

						<!-- tab content -->
						<div class="tab-container">

							<!-- 1st tab -->
							<div id="tab1" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline "  >
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline "  >
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline "  >
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline "  >
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab1 -->

							<div id="tab2" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline "  >
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline "  >
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline "  >
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline "  >
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab2 -->

							<div id="tab3" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab3 -->

							<div id="tab4" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab3 -->

							<div id="tab5" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab3 -->
						</div>
						<div class="view-all-btn bold-font "  >
							<a href="#">Make a Question <i class="fas fa-chevron-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End FAQ section
		============================================= -->


	<!-- Start Course category
		============================================= -->
		<section id="course-category" class="course-category-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">COURSES CATEGORIES</span>
					<h2>Browse Courses<span> By Category.</span></h2>
				</div>
				<div class="category-item">
					<div class="row">
						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology"></i>
								</div>
								<div class="category-title">
									<h4>Responsive Website</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-app-store"></i>
								</div>
								<div class="category-title">
									<h4>IOS Applications</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-artist-tools"></i>
								</div>
								<div class="category-title">
									<h4>Graphic Design</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-business"></i>
								</div>
								<div class="category-title">
									<h4>Marketing</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-dna"></i>
								</div>
								<div class="category-title">
									<h4>Science</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-cogwheel"></i>
								</div>
								<div class="category-title">
									<h4>Enginering</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology-1"></i>
								</div>
								<div class="category-title">
									<h4>Photography</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology-2"></i>
								</div>
								<div class="category-title">
									<h4>Mobile Application</h4>
								</div>
							</div>
						</div>
						<!-- /category -->
					</div>
				</div>
			</div>
		</section>
	<!-- End Course category
		============================================= -->


	<!-- Start of contact area
		============================================= -->
		<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-left-content " >
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
							<div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font ">
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
