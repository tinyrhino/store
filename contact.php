<?php 
  include 'includes/header.php';
?>

 

     <div class="container border" style="background-color: white; margin-bottom: 20px;">

     	

     			<div class="container-fluid" style="margin-top: 20px;">

				  

				  <iframe width="100%" height="300" frameborder="0" scrolling="no" src="https://maps.google.co.uk/maps/ms?msa=0&amp;msid=204581120529753782599.0004d917448cbc9783200&amp;ie=UTF8&amp;ll=51.459288,-2.587602&amp;spn=0,0&amp;t=m&amp;output=embed" class="map"></iframe>
			
				  
							
					
					
					<div class="row-fluid">
						<div class="span5">
							<h1>Get in touch</h1>
							<p>Fill out the contact form below to get in touch with us! Please provide as much information as possible for us to help you with your enquiry.</p>
							<br>
							<address>
							  <strong>Twitter, Inc.</strong><br>
							  795 Folsom Ave, Suite 600<br>
							  San Francisco, CA 94107<br>
							  <abbr title="Phone">P:</abbr> (123) 456-7890
							</address>
							 
							<address>
							  <strong>Full Name</strong><br>
							  <a href="mailto:#">first.last@example.com</a>
							</address>

						</div><!-- ./span7 -->

						<div class="span6 pull-right">
							

							<form class="form-horizontal">
								<div id="errors" style="margin-top: 10px;">
								<div class="alert alert-error">
							  		<button type="button" class="close" data-dismiss="alert">&times;</button>
									 <strong>Errors in your form!</strong>
									 Best check yo self, you're not...
							  	</div>

							  	<div class="alert alert-success">
							  		<button type="button" class="close" data-dismiss="alert">&times;</button>
									 <strong>Success!</strong>
									 Your message has been sent successfully, we will get back to you as soon as we can.
							  	</div>
							  </div><!-- ./errors -->

							  <fieldset>
							  	
							  	<legend>Contact form</legend>
							  	<div class="control-group error">
								    <label>Name: <span style="color: red;">*</span></label>
									<input type="text" class="span12" placeholder="John Doe..." required>
									
									<div>
										<span class="help-inline">Please enter your name</span>
									</div>
								</div>

								<div class="control-group error">
								    <label>Email: <span style="color: red;">*</span></label>
								    <input type="text" class="span12" placeholder="JohnDoe@example.com..." required>
									
									<div>
										<span class="help-inline">Please enter a correct email address</span>
									</div>
								</div>

								<div class="control-group">
									<label>Telephone:</label>
									<input type="text" class="span12" >
								</div>

								<div class="control-group">
								    <label>Enquiry: </label>
								    <select class="span12">
									  <option>General</option>
									  <option>Sales</option>
									  <option>Support</option>
									</select>
									
								</div>

								<div class="control-group error">
								    <label>Message: <span style="color: red;">*</span></label>
								    <textarea rows="6" class="span12" placeholder="Message must be longer than 20 character..."></textarea>
									<div>
										<span class="help-inline">Please enter a message over 20 characters</span>
									</div>
									
								</div>

								<div class="row-fluid">
								<div class="span6">
									<label class="control-label" style="width: auto;"><span style="color: red;">*</span> indicates a required field</label>  
									
								</div>

								<div class="span6 pull-right">
									<span class="pull-right">
									<button class="btn btn-primary">Submit</button>
								</span>
								</div>
							</div>

							  </fieldset>
							</form>
						</div>
					</div><!-- ./row -->


				</div><!-- ./container-fluid -->

     	

     </div><!-- ./container -->
<? include 'includes/footer.php'; ?>