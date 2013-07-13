<?php
// Copyright (c) 2011, 2012 All Right Reserved, http://www.willkerswell.com
//
// This source is not to be reused for other commercial use.
// All other rights reserved.
//
// THIS CODE WAS WRITEN BY WILL KERSWELL FOR WILLKERSWELL.COM - STORE V1.0
// 
//
// 
// <author>Will Kerswell</author>
// <email>wkerswell@gmail.com</email>
// <date>2012</date>
// <summary>eCommerce Store V1.0</summary>
?>
<?php

    $id = $_SESSION['id'];
    $name = $_SESSION['name'];

?>
<!DOCTYPE html><head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<?php include_once("includes/includes.php");?> 
<?php include_once("includes/header.php");?>



  
  <div id="pageContent">
  <table width="600" align="center" cellpadding="5">
  <tr>
  <td>
<?php 
if (!isset($_POST['restbtn'])) 
{
//If not isset -> set with dumy value 
$_POST['restbtn'] = "undefine";
error_reporting (E_ALL ^ E_NOTICE);
}
	if (!isset($id) && !isset($name)) {
			if ($_POST['restbtn']) {
				// get form data
				$email = $_POST['email'];
				
				//make sure information provided is correct 
				if ($email) {
						
						if ( (strlen($email) > 7) && ( strstr ($email, '@')) && (strstr($email, '.'))){
							
							//connect
							require ("storescripts/connect_to_mysql.php");
							//see if email is in db 
							$query = mysql_query("SELECT id FROM users WHERE email='$email'");
							$numrows = mysql_num_rows($query);
							if ($numrows == 1 ) {
								
								//generate password
								$pass = rand();
								$pass = md5($pass);
								$pass = substr($pass, 0, 15);
								// updat db with pass 
								mysql_query	("UPDATE users SET password='$pass' WHERE email='$email'");	
								
								// make sure password was changed
								$query =  mysql_query ("SELECT * FROM users WHERE email='$email' AND password='$pass'")	;				
								$numrows = mysql_num_rows($query);
								if ($numrows == 1 ) {
									
									//create emails 
									$webmaster = "wkerswell@gmail.com";
									$header = 'From: wkerswell@gmail.com';
									$lol = '-f wkerswell@gmail.com';
									$subject = "Your New Password";
									$messge = "Hello, Your password hase been reset. Your new ";
									$messge .= "Password: ".$pass."\n";
									$messge .= "You can now log in using this password.\n";
									$messge .= "You can change your password in your account settings.\n";
									$messge .= "If you did not request you password to be reset please email Stove Suppliers";
									if (mail($webmaster,$subject,$messge,$header, $lol)){
										echo "your password has been reset. An email has been sent with your new password";
										}else{
											echo "and error has occured and your email was not sent"; 
											}
									}else{
									echo "An error has occured and the password has not benn reset"; }
								}else{
									echo "The email you have entered is not on the system";
									}
							}else {
								echo "please enter a valid email address"; 
								}
						}else {
						echo "please enter your email";}
				}
				echo '<form action="forgotPassword.php" method="post" enctype="multipart/form-data"> 
						<table>
						<tr>
							<td>Email: </td>
							<td><input type"text" name="email"/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="resetbetn" value="Reset Password" /></td>
						</tr>
						</table>
						</form>';
				
			
		}else {
			echo "you are alredy logged in";
			}
?>
</td>
</tr>
</table>
</div>
  <?php include_once("includes/footer.php");?>
