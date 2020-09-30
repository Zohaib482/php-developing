
<?php
session_start();
session_regenerate_id();
// DATABASE conECRION
include_once 'datatacle/connect.php';
if(!$con)
{
	echo "Database not conected";
}


   
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<title>Wow Online Tutor :: <?=$page_title?></title>

	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/meanmenu.css">
	<link rel="stylesheet" href="assets/css/icofont.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/lightbox.css">
	<link rel="stylesheet" href="assets/css/progess.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="icon" href="assets/images/logo.png">
	<link rel="stylesheet"  href="assets/css/colors/switch.css">
	<link href="assets/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
	<link href="assets/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
	<link href="assets/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
	<link href="assets/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
	<link href="assets/css/colors/color-6.css" rel="alternate stylesheet" type="text/css" title="color-6">
	<link href="assets/css/colors/color-7.css" rel="alternate stylesheet" type="text/css" title="color-7">
	<link href="assets/css/colors/color-8.css" rel="alternate stylesheet" type="text/css" title="color-8">
	<link href="assets/css/colors/color-9.css" rel="alternate stylesheet" type="text/css" title="color-9">
	<link rel="stylesheet" href="assets/css/pretty-checkbox.min.css">

 <link rel="stylesheet" href="select2/css/select2.min.css">
  <link rel="stylesheet" href="select2-bootstrap4-theme/select2-bootstrap4.min.css">

<style>

/*media for resposive start*/
@media (max-width: 768px){

    .slidermedia
    {
        height:600px !important;
    }
    .icofont-play-alt-3
    {
        /*margin-left:180% !important;*/
        /*padding-bottom:150% !important;*/
        /*position:relative;*/
    }
    #spinnerbtn
    {
        /*margin-left:124% !important;*/
        /*position:relative;*/
    }
    .paramedia
    {
        display:none !important;
        
    }
    .h4media
    {
        /*padding-left:50% !important;;*/
        /*font-size:13px !important;*/
        display:none !important;
    }
    #course
    {
        width:70% !important;
        margin-left:11%;
    }
    .mikemedia
    {
        /*background:red !important;*/
        /*color:red !important;*/
        margin-right:10%  !important;
    }
    
   
} 
@media (max-width: 450px)
{
    #course
    {
        width:60% !important;
        margin-left:11%;
    }
    .mikemedia
    {
        /*background:red !important;*/
        color:red !important;
        margin-right:10%  !important;
        width:5% !important;
    }
    .search-course .nws-button {
    width: 100px;
}
}

/*media end*/


		.has-error .form-check-label{
			color:red !important;
		}
		.has-error .form-control{
			border:1px solid red !important;
		}
		.has-success .form-control{
			border:1px solid green !important;
		}
		.help-block{
			color: red;
		}
		
.contents{
	margin: 20px;
	padding: 20px;
	list-style: none;
	background: #F9F9F9;
	border: 1px solid #ddd;
	border-radius: 5px;
}
.contents li{
    margin-bottom: 10px;
}
.loading-div{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.56);
	z-index: 999;
	display:none;
}
.loading-div img {
	margin-top: 20%;
	margin-left: 50%;
}
	 		.video-div .button {
   background: #3299bb !important;
   color: white;
   font-family: Arial;
   padding: 10px;
   border-radius: 5px;
   position: relative;
   top: 10px;
   left: 10px;
   cursor: pointer;
   box-shadow: 0px 3px 10px black;
}

.video-div  .button:active {
   top: 12px; 
   box-shadow: 0px 2px 10px black;
}

.video-div  .button:hover {
   background: #3999ee ; 
}

.video-div  div.video {
   width: 420px;
   height: 315px;
   display: none;
   position: absolute;


}
.video-div  div.video-wrapper {
   z-index: 1;
   background: rgba(0,0,0,.5);
   position: absolute;
   display: none;
   width: 100%;
   height: 100%;
   top: 0px;
   left: 0px;
}

	*,
		*:before,
		*:after {
			box-sizing: border-box;
		}

		.form a {
			text-decoration: none;
			color: #1ab188;
			-webkit-transition: .5s ease;
			transition: .5s ease;
		}

		.form a:hover {
			/* color: #179b77; */
			color: #0ebfe2;
		}

		.form {
			background: rgba(19, 35, 47, 0.9);
			padding: 40px;
			max-width: 900px;
			margin: 40px auto;
			border-radius: 4px;
			box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
		}

		.tab-group {
			list-style: none;
			padding: 0;
			margin: 0 0 40px 0;
			text-align: center;
		}

		.tab-group li {
			display: inline-block;
		}

		.tab-group:after {
			content: "";
			display: table;
			clear: both;
		}

		.tab-group li a {
			display: block;
			text-decoration: none;
			padding: 10px 15px;
			background: rgba(160, 179, 176, 0.25);
			color: #a0b3b0;
			font-size: 20px;
			float: left;
			/*width: 340px;*/
			width: 100%; text-align: center;
			cursor: pointer;
			-webkit-transition: .5s ease;
			transition: .5s ease;
		}

		.tab-group li a:hover {
			background: linear-gradient(to bottom right, #0ebfe2 40%, #66ff99 99%) !important;
			color: #ffffff;
		}

		.tab-group .active a {
			background: linear-gradient(to bottom right, #0ebfe2 40%, #66ff99 99%) !important;
			color: #ffffff;
		}

		.tab-content>div:last-child {
			display: none;
		}

		.form h1 {
			text-align: center;
			color: #ffffff;
			font-weight: 300;
			margin: 0 0 40px;
		}

		.form label {
			position: absolute;
			-webkit-transform: translateY(6px);
			transform: translateY(6px);
			color: rgba(255, 255, 255, 0.5);
			-webkit-transition: all 0.25s ease;
			transition: all 0.25s ease;
			-webkit-backface-visibility: hidden;
			pointer-events: none;
			font-size: 14px;
			/*top: 3px;*/
			
		}

		.form label .req {
			margin: 2px;
			color: #1ab188;
			/*padding-top: 20px;*/
		}

		.form label.active {
			-webkit-transform: translateY(50px);
			transform: translateY(50px);
			left: 2px;
			font-size: 14px;
		}

		.form label.active .req {
			opacity: 0;
		}

		.form label.highlight {
			color: #ffffff;
		}

		.form input,
		.form textarea,
		.form select,
		.form select option {
			font-size: 14px;
			display: block;
			width: 100%;
			height: 100%;
			padding: 10px 10px 10px 10px;
			background: none;
			background-image: none;
			border: 1px solid #a0b3b0;
			color: #ffffff;
			border-radius: 0;
			-webkit-transition: border-color .25s ease, box-shadow .25s ease;
			transition: border-color .25s ease, box-shadow .25s ease;
			margin-top: 15px;
		}

		.form input:focus,
		.form textarea:focus {
			outline: 0;
			border-color: #1ab188;
		}

		.form textarea {
			border: 2px solid #a0b3b0;
			resize: vertical;
		}

		.field-wrap {
			position: relative;
			margin-bottom: 40px;
		}

		.top-row:after {
			content: "";
			display: table;
			clear: both;
		}

		.top-row>div {
			float: left;
			width: 48%;
			margin-right: 4%;
		}

		.top-row>div:last-child {
			margin: 0;
		}

		.button {
			border: 0;
			outline: none;
			border-radius: 0;
			padding: 15px 0;
			font-size: 2rem;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: .1em;
			/* background: #0EC0E1; */
			background: linear-gradient(to bottom right, #0ebfe2 40%, #66ff99 99%);
			color: #ffffff;
			-webkit-transition: all 0.5s ease;
			transition: all 0.5s ease;
			-webkit-appearance: none;
		}

		.button:hover,
		.button:focus {
			/* background: #179b77; */
			/* background-color: #0ebfe2; */
			background: linear-gradient(to bottom right, #0ebfe2 40%, #66ff99 99%);
		}

		.button-block {
			display: block;
			width: 100%;
			font-size: 20px;
		}

		.forgot {
			margin-top: -20px;
			text-align: right;
		}

		@media only screen and (max-width: 600px) {

			.top-row {
				width: 100% !important;
			}

			.field-wrap {
				width: 100% !important;
				margin-bottom: 10px !important;
			}

			.forBottom {
				margin-bottom: -20px !important;
			}
		}
		 .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            top: 0 !important;
        }
        @media (max-width: 768px) {
  .imgblue
  {
  	padding-top: 10%;
  	
  }
  .imgyellow
  {
  	margin-top: 15%
  }
  

}
	</style>
</head>

<body>

	<div id="preloader"></div>

<!-- The Modal -->
<div class="modal fade" id="intro">
	<div class="modal-dialog modal-lg" style="padding: 0; background: transparent;">
	  <div class="modal-content" style="padding: 0;margin: 0; background: transparent;">
    <div class="modal-header">
        <button type="button" class="close" style="font-size: 50px;color: #fffeff;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<div class="modal-body" style="margin: 0; padding: 0; background-size: transparent;">
			<video controls width="100%" style="height: 400px; margin: 0;" frameborder="0" allow="autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
			<source src="video/video1.mp4" type="video/mp4">
			</video>
			
		</div>
  
	
  
	  </div>
	</div>
  </div>


  <div class="modal fade" id="wellcome">
	<div class="modal-dialog modal-lg" style="padding: 0; background: transparent;">
	  <div class="modal-content" style="padding: 0;margin: 0; background: transparent;">
    <div class="modal-header">
        <button type="button" class="close" style="font-size: 50px;color: #fffeff;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<!-- Modal Header -->
		<!-- Modal body -->
		<div class="modal-body" style="margin: 0; padding: 0; background-size: transparent;">

			<video controls width="100%" style="height: 400px; margin: 0;" frameborder="0" allow="autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
			<source src="video/wellcome.mp4" type="video/mp4">
			</video>
			
		</div>
  
	
  
	  </div>
	</div>
  </div>
  		<header>
			<div id="main-menu"  class="main-menu-container">
				<div  class="main-menu">
					<div class="container">
						<div class="navbar-default">
							<div class="navbar-header float-left">
								<a class="navbar-brand text-uppercase " href="index.php"><img src="assets/images/logo.png" alt="logo" class="img-fluid" width="300px" height="60px"></a>
							</div><!-- /.navbar-header -->
							<div class="select-lang">
								<select  class="notranslate" onchange="changeLanguageByButtonClick(this.value)">
								 <option value="en">English</option>
									 <option value="ar">Arabic</option>
									<option value="ur">Urdu</option>
									<option value="hi">Hindi</option>
									
								</select>
							</div>
							<div class="cart-search float-right ul-li">
								<ul>
								
									<li>
										<button type="button" class="toggle-overlay search-btn">
											<i class="fas fa-search"></i>
										</button>
										<div class="search-body">
											<div class="search-form">
												<form action="#">
													<input class="search-input" type="search" placeholder="Search Here">
													<div class="outer-close toggle-overlay">
														<button type="button" class="search-close">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="log-in float-right">
								
								<!-- The Modal -->
								<?php include_once("login.php"); ?>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li><a href="about-us.php">About Us</a></li>
										<li><a href="contact.php">Contact Us</a></li>
										<li class="menu-item-has-children ul-li-block">
											<a href="#!">Pages</a>
											<ul class="sub-menu">
											<li><a href="howitworks.php">How it works</a></li>
											<li><a href="course.php">Courses</a></li>
											<li><a href="tutor.php">Tutors</a></li>
											<li><a href="#">Join as student</a></li>
												<li><a href="become-an-instructor.php">Become an instructor</a></li>
												<li><a href="ourteam.php">Our Team</a></li>
												<li><a href="blog.php">Blogs</a></li>
												
												<li><a href="ourcommunityblog.php">Community Blogs</a></li>
												
												
											</ul>
										</li>
										
										<li><a href="signup.php">Sign Up</a></li>
										<li><a  data-toggle="modal" data-target="#myModal" href="#">log in</a></li>
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="logo" class="img-fluid" width="300px" height="60px"></a></div>
									<nav>
								<div class="nav-menu ul-li">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li><a href="about-us.php">About Us</a></li>
										<li><a href="contact.php">Contact Us</a></li>
										<li>
											<a href="#">Pages</a>
											<ul>
											<li><a href="howitworks.php">How it works</a></li>
											<li><a href="course.php">Courses</a></li>
											<li><a href="tutor.php">Tutors</a></li>
											<li><a href="#">Join as student</a></li>
												<li><a href="become-an-instructor.php">Become an instructor</a></li>
												<li><a href="ourteam.php">Our Team</a></li>
												<li><a href="blog.php">Blogs</a></li>
												
												<li><a href="ourcommunityblog.php">Community Blogs</a></li>
												
												
											</ul>
										</li>
										
										<li><a href="signup.php">Sign Up</a></li>
										<li><a  data-toggle="modal" data-target="#myModal" href="#">log in</a></li>
									</ul>
								</div>
							</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

 	<!-- end of Header section
 		============================================= --> 

                
   