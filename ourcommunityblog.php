

	<!-- Start of Header section
		============================================= -->
		<?php
		$page_title="Community Blogs";
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
						<h2 class="breadcrumb-head black bold">Genius <span>Community Blog</span></h2>
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
			
<div class="loading-div"><img src="loading.gif" ></div>
<div id="results"><!-- content will be loaded here --></div>
							
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
		====================
		========================= -->
<script type="text/javascript">
$(document).ready(function() {
	$("#results" ).load( "fetch_pages.php"); //load initial records
	
	//executes code below when user click on pagination links
	$("#results").on( "click", ".pagination a", function (e){
		e.preventDefault();
		$(".loading-div").show(); //show loading element
		var page = $(this).attr("data-page"); //get page number from link
		$("#results").load("fetch_pages.php",{"page":page}, function(){ //get content from PHP page
			$(".loading-div").hide(); //once done, hide loading element
		});
		
	});
});
</script>