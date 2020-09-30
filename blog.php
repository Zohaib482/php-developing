


	<!-- Start of Header section
		============================================= -->
		<?php
		$page_title ="Blogs";
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
						<h2 class="breadcrumb-head black bold">Genius <span>Blog</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">blog</li>
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
										<div id="tab1" class="tab-content-1 pt35">
											<div class="row">
												<?php
												$q= mysqli_query($con,"select * from blogs");
												while ($row = mysqli_fetch_array($q)) {
												
												?>
												<div class="col-md-4">
													<div class="blog-post-img-content">
														<div class="blog-img-date relative-position">
															<div class="blog-thumnile">
															<div class="video-div">
														<div class="embed-responsive embed-responsive-16by9 img-fluid button">
  <?=$row['video']?>
</div>
															<div class='video-wrapper'>
															<div class='video'>
															<div class="embed-responsive embed-responsive-16by9  img-fluid button">
  <?=$row['video']?>
</div>
															</div>
															</div>															
															
														
														</div>
															</div>
															
														</div>
														<div class="blog-title-content headline">
															<h3><a href="#"><?=$row['title']?>.</a></h3>
															<div class="blog-content">
																<?=$row['description']?> 
															</div>

															<!-- <div class="view-all-btn bold-font">
																<a href="#">Read More <i class="fas fa-chevron-circle-right"></i></a>
															</div> -->
														</div>
													</div>
												</div>
												<?php
											}
												?>
											</div>
										</div><!-- 1st tab -->

									</div>
								</div>


								<!-- <div class="couse-pagination text-center ul-li">
									<ul>
										<li class="pg-text"><a href="#">PREV</a></li>
										<li><a href="#">01</a></li>
										<li><a href="#">02</a></li>
										<li class="active"><a href="#">03</a></li>
										<li><a href="#">04</a></li>
										<li><a href="#">...</a></li>
										<li><a href="#">15</a></li>
										<li class="pg-text"><a href="#">NEXT</a></li>
									</ul>
								</div> -->
							</div>
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
		 ?>
	<!-- End of footer section
		============================================= -->


<script>
	
	jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + "px");
    return this;

$(document).ready(function(){
	jQuery.fn.center = function () {
  this.css("position", "absolute");
  this.css(
    "top",
    Math.max(
      0,
      ($(window).height() - $(this).outerHeight()) / 2 + $(window).scrollTop()
    ) + "px"
  );
  this.css(
    "left",
    Math.max(
      0,
      ($(window).width() - $(this).outerWidth()) / 2 + $(window).scrollLeft()
    ) + "px"
  );
  return this;
};

$(document).ready(function () {
  $(".video").css({
    width: $("#player").css("width"),
    height: $("#player").css("height")
  });

  $(".button").click(function () {
    $(".video-wrapper").fadeIn("fast", function () {
      $(".video").fadeIn();
      $(".video").center();
    });
  });

  $(".video-wrapper").click(function (e) {
    if ($(e.target).is(".video-wrapper")) {
      $(".video").fadeOut(function () {
        $(".video-wrapper").fadeOut(function () {
          $(".video, .video-wrapper").css({ display: "none" });
          var src = $("#player").attr("src");
          $("#player").attr("src", "");
          $("#player").attr("src", src);
        });
      });
    }
  });

  $(document).keyup(function (e) {
    var isShown = $(".video-wrapper").css("display");

    if (isShown !== "none" && e.which == 27) {
      $(".video-wrapper").click();
    }
  });
});

});  
  

</script>