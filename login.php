<?php 
  include 'includes/header.php';
?>

 

     <div class="container border" style="background-color: white; margin-bottom: 20px;">

     	

     			<div class="container-fluid" style="margin-top: 20px;">

     				<div class="alert alert-block">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  You need to be logged in to checkout!
					</div>

					<div class="alert alert-error">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  Incorrect log in details please try again!
					</div>

				  <div class="row-fluid" style="margin-bottom: 20px;">

				  		<div class="span6" style="border-right: 1px solid #ccc;">
				  			<h2>Login</h2>

				  			<form>
				  				<div class="control-group error">
								    <label>Username: <span style="color: red;">*</span></label>
									<input type="text" class="span11" placeholder="John Doe..." required>
									
									<div>
										<span class="help-inline">Please enter your username</span>
									</div>
								</div>

								<div class="control-group error">
								    <label>Password: <span style="color: red;">*</span></label>
									<input type="password" class="span11" placeholder="John Doe..." required>
									
									<div>
										<span class="help-inline">Please enter your password</span>
									</div>
								</div>

								Forgotten your <a href="#">username</a> or <a href="#">password?</a>
								<div style="margin-top: 20px;">
								<button class="btn btn-success">Log in</button>
							</div>
				  			</form>

				  		</div>


				  		<div class="span6">
				  			<h2>I don't have an account</h2>
				  			<a href="register.php" class="btn btn-primary btn-large" style="margin-top: 20px;">Create account</a>

				  		</div>

				  </div><!-- ./row -->

				</div><!-- ./container-fluid -->

     	

     </div><!-- ./container -->
<? include 'includes/footer.php'; ?>