<?php
$page_title ="Become An Instructor";
include_once('header.php');

?>



	<!-- Start of breadcrumb section
		============================================= -->
	<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
		<div class="blakish-overlay"></div>
		<div class="container">
			<div class="page-breadcrumb-content text-center">
				<div class="page-breadcrumb-title">
					<h2 class="breadcrumb-head black bold"><span>Become an instructor</span></h2>
				</div>
				<div class="page-breadcrumb-item ul-li">
					<ul class="breadcrumb text-uppercase black">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Become an instructor</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End of breadcrumb section
		============================================= -->

	<!-- Start of contact area form
		============================================= -->
	<section id="contact-form" class="contact-form-area_3 contact-page-version">
		<div class="container">
			<div class="section-title mb45 headline text-center">
				<span class="subtitle text-uppercase">WOW ONLINE TUTOR</span>
				<h2>Create<span> New Account.</span></h2>
			</div>

			<div class="contact_third_form">


				<div class="form">

				<div>
						<div>
							<h1>Sign Up for Free as a Teacher</h1>
							<form action="datatacle/addtutor.php" enctype="multipart/form-data" method="post" id="validateForm">
								<center><img
										style="width: 150px;border: 2px solid #eee;display: none;margin-bottom: 20px;"
										id="blah" style="display: none;" src="" alt="your image" /></center>
								<div class="top-row">
									<div class="field-wrap form-group">

										<label>
											Your Profile Picture<span class="req">*</span>
										</label><br>
										<input onchange="readURL(this)" type="file" name="pimage" class="form-control">

									</div>


									<div class="field-wrap form-group">
										<label>
											Teaching Level<span class="req">*</span>
										</label><br><br>
										<div class="pretty p-default">
											<input name="primary" value="primary" type="checkbox" />
											<div class="state">
												<label>Primary</label>
											</div>
										</div>
										<div class="pretty p-default">
											<input name="secondary" value="secondary" type="checkbox" />
											<div class="state">
												<label>Secondary</label>
											</div>
										</div>
										<div name="university" value="university" class="pretty p-default">
											<input type="checkbox" />
											<div class="state">
												<label>University</label>
											</div>
										</div>
										
									</div>
								</div>

								<div class="top-row">

									<div class="field-wrap form-group">
										<label for="">Tutor Name<span class="req">*</span></label><br>
										<input type="text" name="tutorname" pattern="[a-zA-Z][a-zA-Z\s]*" required
											autocomplete="off" placeholder="Enter Your Name" class="form-control" />
									</div>

									<div class="field-wrap form-group">
										<label>
											Gender <span class="req">*</span>
										</label><br><br>
										<div class="pretty p-default p-curve">
											<input type="radio" name="gender" value="Male" />
											<div class="state p-primary-o">
												<label>Male</label>
											</div>
										</div>
										<div class="pretty p-default p-curve">
											<input type="radio" name="gender" value="Female" />
											<div class="state p-primary-o">
												<label>Female</label>
											</div>
										</div>
									</div>

								</div>

								<div class="top-row">
									<div class="field-wrap form-group">
										<label for="subject">Tutor Subjects<span class="req">*</span></label><br><br>
										<select class="select2 form-control " name="subject[]" multiple="multiple" required="" style="margin-top: 10% !important;" >
										<?php
										$q=mysqli_query($con,"select * from subjects");
										while ($res=mysqli_fetch_array($q)) {
										?>
										<option value="<?=$res['id']?>"><?=$res['name']?></option>
										<?php
										}
										?>
										</select>					
									</div>

									<div class="field-wrap form-group">
										<label for="">Language Fluent<span class="req">*</span></label><br>
										<input type="text" name="lfluent" pattern="[a-zA-Z][a-zA-Z\s]*" required
											autocomplete="off" placeholder="Enter Language Fluent" class="form-control" />
									</div>
								</div>

								<div class="top-row">
									<div class="field-wrap form-group">
										<label for="">Tutor Nationality<span class="req">*</span></label><br>
										<input type="text" pattern="[a-zA-Z][a-zA-Z\s]*" required autocomplete="off"
											name="tnationality" placeholder="Enter Your Nationality" class="form-control"/>
									</div>
									<div class="field-wrap form-group">
										<label for="">Tutor Available Hours<span class="req">*</span></label><br>
										<select name="Hours" class="form-control" id="" style="background-color: #2A3943">
											<option value="1:5">1-5</option>
											<option value="6:10">6-10</option>
											<option value="11:15">11-15</option>
											<option value="16:20">16-20</option>
											<option value="21:25">21-25</option>
										</select>
									</div>
								</div>

								<div class="top-row">
									<div class="field-wrap form-group">
										<label for="">Tutor Email<span class="req">*</span></label><br>
										<input type="email" name="temail"
											pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required autocomplete="off"
											placeholder="Enter Your Email" class="form-control">
									</div>

									<div class="field-wrap form-group">
										<label for="">Tutor Password<span class="req">*</span></label><br>
										<input type="password" name="pass" pattern=".{8,}" required autocomplete="off"
											placeholder="Enter Your Password" class="form-control" />
									</div>
								</div>
<div class="top-row">
	<div class="field-wrap form-group">
										<label for="">Tutor Address<span class="req">*</span></label><br>
										<textarea style="background: transparent; border:1px solid #a0b3b0; " name="location" cols="20" rows="1" required autocomplete="off" class="form-control"></textarea>
									</div>
									<div class="field-wrap form-group">
										<label for="">Tutor Interest<span class="req">*</span></label><br>
										<input type="text" name="tinterest" required autocomplete="off"
											placeholder="Tutor Interest" class="form-control">
									</div>
</div>

								<div class="top-row">
									
									<div class="field-wrap form-group">
										<label for="">Tutor Phone<span class="req">*</span></label><br>
										<input type="number" name="tphone" required autocomplete="off" placeholder="Phone" class="form-control">
									</div>

									<div class="field-wrap form-group">
										<label>
											Tutor Certificate And Relevent Document <span class="req">*</span>
										</label><br>
										<input name="Certificate" type="file" accept=".jpg,.png,.pdf,.docx" class="form-control">
									</div>
								</div>

								<div class="top-row">
									
									<div class="field-wrap form-group">
										<label for="">Tutor Education <span class="req">*</span></label><br>
										<input type="text" required name="teducation" autocomplete="off"
											placeholder="Tutor Education" class="form-control">
									</div>
<div class="field-wrap form-group">
										<label>
											Tutor CV<span class="req">*</span>
										</label><br>
										<input type="file" name="tutorcv" class="form-control" accept=".pdf,.docx">
									</div>
									
								</div>

	
									

								<div class="top-row">
									<div class="field-wrap form-group">
										<label for="">Short Description<span class="req">*</span></label><br>
										<textarea style="background: transparent; border:1px solid #a0b3b0; " name="short_desc" cols="20" rows="1" required autocomplete="off" class="form-control"></textarea>
									</div>
									<div class="field-wrap form-group">
										<label>
											Tutor Introductory Video<span class="req">*</span>
										</label><br>
										<input type="file" name="tutorintroductoryvideo" class="form-control" accept=".mp4,.mkv,.webm">
									</div>
								</div><br>
								<span style="color: #1ab188; float: right;">Maximum Size of the video Should be 30 seconds.</span>
								<br><br>
								<button type="submit" class="button button-block" name="add_tutor" />Get Started</button>

							</form>
						


					

					</div><!-- tab-content -->

				</div>
			</div>
		</div>
	</section>
	<!-- End of contact area form
		============================================= -->

	<?php

// INCLUDE FOOTER
include_once('footer.php');

?>

<script>
	 
  window.onload=()=>{
	$('.select2').select2();
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
  }
  

</script>
	
	<script>
		$(document).ready(function () {

	

			$('.tab a').on('click', function (e) {

				e.preventDefault();

				$(this).parent().addClass('active');
				$(this).parent().siblings().removeClass('active');

				target = $(this).attr('href');

				$('.tab-content > div').not(target).hide();

				$(target).fadeIn(600);

			});
		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#blah')
						.attr('src', e.target.result);
					$('#blah').show();
				};

				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

	
			<script>
		$('#validateForm').bootstrapValidator({
fields: {
	tutorname: {
		validators: {
			stringLength: {
				min: 2,
				message: 'Please Enter your Full name with minimum 2 letters length'
			},
			notEmpty: {
				message: 'Please Enter your Full name'
			}
		}
	},
	tphone: {
		validators: {
			stringLength: {
				min: 10,
				message: 'Please Enter your phone with minimum 10 numbers length'
			},
			notEmpty: {
				message: 'Please Enter your phone'
			}
		}
	},
	temail: {
		validators: {
			
			notEmpty: {
				message: 'Please Enter your email'
			}
		}
	},
	pass: {
		validators: {
			stringLength: {
				min: 8,
				message: 'Please Enter your password with minimum 8 letters and numbers length'
			},
			notEmpty: {
				message: 'Please Enter your password'
			}
		}
	},
	Certificate: {
		validators: {
			notEmpty: {
				message: 'Select  your certificate'
			}
		}
	},
	location: {
		validators: {
			notEmpty: {
				message: 'Please Enter your address'
			}
		}
	},
	
	tinterest: {
		validators: {
			notEmpty: {
				message: 'Please Enter your interest'
			}
		}
	},
	teducation: {
		validators: {
			notEmpty: {
				message: 'Please Enter your education'
			}
		}
	},
	tutorintroductoryvideo: {
		validators: {
			notEmpty: {
				message: 'Select your intro video'
			}
		}
	},
	lfluent: {
		validators: {
			notEmpty: {
				message: 'Please Enter your language'
			}
		}
	},
	tutorcv: {
		validators: {
			notEmpty: {
				message: 'Select your Cv'
			}
		}
	},
	subject: {
		validators: {
			notEmpty: {
				message: 'Please Enter your subject'
			}
		}
	},
	tnationality: {
		validators: {
			notEmpty: {
				message: 'Please Enter your nationality'
			}
		}
	},
	short_desc: {
		validators: {
			notEmpty: {
				message: 'Please Enter your short desctiption'
			}
		}
	},
	pimage: {
		validators: {
			notEmpty: {
				message: 'Select your profilepic'
			}
		}
	},
	Hours: {
		validators: {
			notEmpty: {
				message: 'Select your Hours'
			}
		}
	}
	}
});
</script>