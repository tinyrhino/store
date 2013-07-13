<?php 
  include 'includes/header.php';
?>

 

     <div class="container border" style="background-color: white; margin-bottom: 20px;">

     	

     			<div class="container-fluid" style="margin-top: 20px;">

				  

					<h1>Register</h1>
					
						<div class="row-fluid">
							<div class="span6">

								<div class="alert alert-success">
								  <button type="button" class="close" data-dismiss="alert">&times;</button>
								  <strong>Congratulations</strong> you have successfully registered with Tiny Rhino
								</div>

								<div class="alert alert-error">
							  		<button type="button" class="close" data-dismiss="alert">&times;</button>
									 <strong>Errors in your form</strong>
									  check to make sure passwords match and that you have entered a correct email address
							  	</div>

								<form>
					  				<div class="control-group">
									    <label>Username: <span style="color: red;">*</span></label>
										<input type="text" class="span11" placeholder="John Doe..." required>
										
										<div>
											<span class="help-inline">Enter a username to use to login in to Tiny Rhino.</span>
										</div>
									</div>

									<div class="control-group">
									    <label>Email: <span style="color: red;">*</span></label>
										<input type="email" class="span11" placeholder="JohnDoe@example.com..." required>
										
										<div>
											<span class="help-inline">Enter a valid email address. All e-mails will be sent to this address including order confirmations.</span>
										</div>
									</div>

									<div class="control-group">
									    <label>Password: <span style="color: red;">*</span></label>
										<input type="password" class="span11"  required>
										 <label>Confirm password: <span style="color: red;">*</span></label>
										<input type="password" class="span11"  required>
										
										<div>
											<span class="help-inline">Fill in both password fields</span>
										</div>
									</div>

									<button class="btn btn-success">Create new account</button>
									<a class="btn btn-primary" href="login.php">Back to login</a>
					  			</form>
					  		</div><!-- ./span -->
				  		</div><!-- ./row -->


				</div><!-- ./container-fluid -->

     	

     </div><!-- ./container -->
<? include 'includes/footer.php'; ?>