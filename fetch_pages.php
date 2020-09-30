<?php
/* Title : Ajax Pagination with jQuery & PHP
Example URL : http://www.sanwebe.com/2013/03/ajax-pagination-with-jquery-php */

//continue only if $_POST is set and it is a Ajax request
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	
	include("datatacle/connect.php");  //include config file
	//Get page number from Ajax POST
	if(isset($_POST["page"])){
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
		if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
	}else{
		$page_number = 1; //if there's no page number, set it to 1
	}
	
	//get total number of records from database for pagination
	$results = $con->query("SELECT COUNT(*) FROM community_blog");
	$get_total_rows = $results->fetch_row(); //hold total records in variable
	//break records into pages
	$total_pages = ceil($get_total_rows[0]/$item_per_page);
	
	//get starting position to fetch the records
	$page_position = (($page_number-1) * $item_per_page);
	

	//Limit our results within a specified range. 
	$results = mysqli_query($con,"SELECT * FROM `community_blog` WHERE status = 'Approve' ORDER by c_date ASC LIMIT $page_position, $item_per_page");
//variables to prepared statement
	
	//Display records fetched from database.
	echo '<div class="row">';
	while($row=mysqli_fetch_array($results)){ 
	//fetch values
		$id= $row['id'];
		$title=$row['title'];
		$description=$row['description'];
$image=$row['image'];
$std_id=$row['std_id'];
	$query1= mysqli_query($con,"select * from users where id = '$std_id'");
	$row1=mysqli_fetch_array($query1);
		echo '<div class="col-md-10 m-auto">
		<div class="conatiner">
			<div id="content" class="content-with-sidebar-right">
			<div class="blog-single blog-style-large">
				
	<article  class="post-item post-item-single post-2288 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
		<div class="post-container">
			
							<div class="post-meta-thumb">
					<img src="admin/images/upload/community_blog/'.$image.'?>" style="width: 1200px!important; height: 575px !important; border-radius: 15px;" alt="">

    				</div>
<br>
				<h1>'.$title.'</h1>


		<div class="user_details">
<div class="float-left">
<div class="media">
<div class="d-flex">
<img class="rounded-circle" width="50px" height="50px" alt="100x100" src="admin/images/tutor/'.$row1['profilepic'].'">
</div>&nbsp;
<div class="media-body">
<h6>'.$row1['name'].'</h6>
<p>'.date("d/m/Y", strtotime($row['c_date'])).'</p>
</div>

</div>
</div>
</div>
        <br><br><br>
					<p >'.$description.'</p>
				

		</div>
	</article>


						</div>
					</div>
		</div>
				<?php
				 
				}';
	}
	echo '</div>';

	echo '<div align="center" class="float-right">';
	/* We call the pagination function here to generate Pagination link for us. 
	As you can see I have passed several parameters to the function. */
	echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
	echo '</div>';
	
	exit;
}
################ pagination function #########################################
function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
        $pagination .= '<nav aria-label="...">
  <ul class="pagination">
    
  ';
        
        $right_links    = $current_page + 1; 
        $previous       = $current_page - 1; //previous link 
        $next           = $current_page + 1; //next link
        $first_link     = true; //boolean var to decide our first link
        
        if($current_page > 1){
			$previous_link = ($previous==0)? 1: $previous;
            // $pagination .= '<li class="page-item first"><a class="page-link" href="#" data-page="1" title="First">First</a></li>'; //first link
            $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="'.$previous_link.'" title="Previous">Previous</a></li>'; //previous link
                for($i = ($current_page-1); $i < $current_page; $i++){ //Create left-hand side links
                    if($i > 0){
                        $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = false; //set first link to false
        }
       else{
       	$previous_link = ($previous==1)? 0: $previous;
            $pagination .= '<li class="page-item disabled"><a class="page-link" href="#" data-page="'.$previous_link.'" title="Previous">Previous</a></li>'; //previous link
                for($i = ($current_page+1); $i < $current_page; $i--){ //Create left-hand side links
                    if($i < 0){
                        $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = true; 
       }
        if($first_link){ //if current active page is first link
            $pagination .= '<li class="page-item active"><a href="#" class="page-link">'.$current_page.'</a></li>';
        }elseif($current_page == $total_pages){ //if it's the last active link
            $pagination .= '<li class="page-item active"><a href="#" class="page-link">'.$current_page.'</a></li>';
        }else{ //regular current link
            $pagination .= '<li class="page-item active"><a href="#" class="page-link">'.$current_page.'</a></li>';
        }
                
        for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
            if($i<=$total_pages){
                $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){ 
				$next_link = ($i > $total_pages) ? $total_pages : $i;
                $pagination .= ' <li class="page-item">
      <a class="page-link" href="#" data-page="'.$next_link.'" title="Next">Next</a>
    </li>'; //next link
                // $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="'.$total_pages.'" title="Last">Last</a></li>'; //last link
        }else{
        $next_link = ($i < $total_pages) ? $total_pages : $i;
                $pagination .= ' <li class="page-item disabled">
      <a class="page-link" href="#" data-page="'.$next_link.'" title="Next">Next</a>
    </li>'; 	
        }
        
        $pagination .= '</ul>
</nav>'; 
    }
    return $pagination; //return pagination links
}

?>

