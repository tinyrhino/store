<?php

///////////////////////////////////////////////////////////
$accountType = 1; //REMOVE AFTER TESTING///////////////////
///////////////////////////////////////////////////////////

include "storescripts/connect_to_mysql.php"; 
$pageID ="";
$divID ="";
if(isset($_GET['page'])){
	$pageID = $_GET['page'];
	
		$sql = mysql_query("SELECT * FROM pages WHERE pageID='$pageID' ");
	$productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
		// get all the product details
		while($row = mysql_fetch_array($sql)){ 
			 $container1 = stripcslashes($row["content"]);
			 $pageTitle = stripcslashes($row["pageID"]);
			 

         }
		 
	} else {
		//if id does not exsit
		echo "No content, please contact admin";

	}
	
}else{
header("location: 404.php");	
}

?>


<?php 
  include 'includes/header.php';
?>

 

     <div class="container border" style="background-color: white; margin-bottom: 20px;">

     	

     			<div class="container-fluid" style="margin-top: 20px;">

				  <ul class="breadcrumb">
					  <li><a href="index.php">Home</a> <span class="divider">>></span></li>
					  <li class="active"><?php echo ucfirst ($pageTitle );?></li>
					
					</ul>
<div id="adminBar" ></div>
				
                
                <div   <?php echo 'id="'.$pageTitle.'"'; if ($accountType == 1) {echo' class="HTMLTextEditor"';}?>  >	
					<?php  echo $container1;   ?> 
              	</div><!-- ./ page content -->

				</div><!-- ./container-fluid -->

     	

     </div><!-- ./container -->
<? include 'includes/footer.php'; ?>