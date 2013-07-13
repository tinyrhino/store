<?php 

include "storescripts/connect_to_mysql.php"; 

if(isset($_POST['id'])){
	$id = mysql_real_escape_string($_POST['id']);
	$content = mysql_real_escape_string($_POST['contentVar']);
	echo $content;
	$sql = mysql_query("UPDATE pages SET content='$content' WHERE pageID='$id'") or die(mysql_error())  ; 
}


?>