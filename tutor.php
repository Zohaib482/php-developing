
	<!-- Start of Header section
		============================================= -->
		<?php
		$page_title="Tutors";
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
						<h2 class="breadcrumb-head black bold">Genius <span>Tutor</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">tutor</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

	<!-- Start of blog content
		============================================= -->
		<section id="blog-item" class="blog-item-post">
			<div class="container">
				<div class="blog-content-details">
					<div class="row">
						<div class="col-md-12">
							<div class="blog-post-content">
						<div class="genius-post-item">
							<div class="tab-container">
								<div id="tab1" class="tab-content-1 pt35" style="display: block;">
									<div class="best-course-area best-course-v2">
										<div class="row">
											<?php
											$query = mysqli_query($con, "select * from users where role='tutor' and status='Approve'");
											while($row = mysqli_fetch_array($query))
											{
												$id=$row['id'];
											?>
										<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="admin/images/tutor/<?=$row['profilepic']?>" alt="">
														
														<div class="course-details-btn">
															<a href="#">BOOK ME <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
													</div>
													<div class="best-course-text">
														<div class="course-title mb20 headline relative-position">
															<h3><a href="#"><?=$row['name']?></a></h3>
														</div>
														<div class="course-meta">
															<span class="course-category"><a href="#"><?=$row['subjects']?></a></span>
														</div>
														<div class="course-meta">
															<span class="course-category"><?=$row['description']?></span>
														</div>
														<div align="right" style="color:white;">
        <i class="fa fa-star fa-1x fa-star<?=$id?>" data-index="0"></i>
        <i class="fa fa-star fa-1x fa-star<?=$id?>" data-index="1"></i>
        <i class="fa fa-star fa-1x fa-star<?=$id?>" data-index="2"></i>
        <i class="fa fa-star fa-1x fa-star<?=$id?>" data-index="3"></i>
        <i class="fa fa-star fa-1x fa-star<?=$id?>" data-index="4"></i>
        <br><br>
        <p class="font-weight-normal">Average rating:<span><?php echo round($avg,2) ?></span></p>
    </div>
													</div>
												</div>
											</div>
										<?php 
									}?>
											<!-- /course -->

										</div>
									</div>
								</div><!-- /tab-1 -->

							</div>
						</div>	</div>
						</div>

					</div>
				</div>
			</div>
		</section>
	<!-- End of blog content
		============================================= -->


 	<!-- Start of footer section
 		============================================= -->
		 <?php
		 include_once('footer.php');
		
		$query = mysqli_query($con, "select * from users where role='tutor' and status='Approve'");
		while($row = mysqli_fetch_array($query))
		{
		$id=$row['id'];
		?>
		
		<script>
				var ratedIndex = -1, uID = <?=$id?>;
		
				$(document).ready(function () {
					resetStarColors();
		 function setStars(max) {
					for (var i=0; i <= max; i++)
						$('.fa-star<?=$id?>:eq('+i+')').css('color', '#03ABF7');
				}
		
				function resetStarColors() {
					$('.fa-star<?=$id?>').css('color', 'black');
				}
					if (localStorage.getItem('ratedIndex') != null) {
						setStars(parseInt(localStorage.getItem('ratedIndex')));
						uID = localStorage.getItem('uID');
					}
		
					$('.fa-star<?=$id?>').on('click', function () {
					   ratedIndex = parseInt($(this).data('index'));
					   localStorage.setItem('ratedIndex', ratedIndex);
						
					   saveToTheDB();
					});
		
					$('.fa-star<?=$id?>').mouseover(function () {
						resetStarColors();
						var currentIndex = parseInt($(this).data('index'));
						setStars(currentIndex);
					});
		
					$('.fa-star<?=$id?>').mouseleave(function () {
						resetStarColors();
		
						if (ratedIndex != -1)
							setStars(ratedIndex);
					});
				});
		
				function saveToTheDB() {
					$.ajax({
					   url: "index.php",
					   method: "POST",
					   dataType: 'json',
					   data: {
						   save: 1,
						   uID: uID,
						   ratedIndex: ratedIndex
					   }, success: function (r) {
							uID = r.id;
							localStorage.setItem('uID', uID);
					   }
					});
				}
		
			   
			</script>
			<?php
			
			}?>	<!-- End of footer section
		============================================= -->
