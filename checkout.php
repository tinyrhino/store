<?php 
  include 'php/header.php';
?>

 

     <div class="container border" style="background-color: white; margin-bottom: 20px;">

     	

     			<div class="container-fluid" style="margin-top: 20px;">

     				

     			  <div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  You have been successfully logged in!
					</div>

				  <h1>Checkout</h1>

				  <legend><strong>Shopping cart contents</strong></legend>

				  <table class="table">
					  <thead>
					    <tr>
					      <th>Product</th>
					      <th>Price</th>
					      <th>Quantity</th>
					      <th>Total</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr>
					  	  <td>Product name</td>
					  	  <td>&pound;0.00</td>
					  	  <td>1</td>
					  	  <td>&pound;0.00</td>
					  	 </tr>
					  </tbody>
				   </table>

				   <div class="row-fluid">
						<div class="well pull-right span3">
							<div class="row-fluid">
								<div class="span6">
									<strong>Order total: </strong>
								</div>
								<div class="span6">
									<p class="pull-right">&pound;0.00<p>
								</div>
							</div>
						</div><!-- ./well -->
					</div>

					<legend><strong>Billing information</strong></legend>

					<div class="row-fluid">
					

						<div class="span6">
							

							<form class="form">
								<div id="errors" style="margin-top: 10px;">
								<div class="alert alert-error">
							  		<button type="button" class="close" data-dismiss="alert">&times;</button>
									 <strong>Errors in your form!</strong>
									 Best check yo self, you're not...
							  	</div>

							  
							  </div><!-- ./errors -->

							  <fieldset>
							  	
							  	<legend>Billing address</legend>
							  	<div class="control-group error">
								    <label>Name: <span style="color: red;">*</span></label>
									<input type="text" class="span12" placeholder="John Doe..." required>
									
									<div>
										<span class="help-inline">Please enter the name to be billed</span>
									</div>
								</div>

								<div class="control-group error">
								    <label>Address: <span style="color: red;">*</span></label>
								    <input type="text" class="span12" required>
								    <input type="text" class="span12">
									
									<div>
										<span class="help-inline">Please enter the address to which is to be billed</span>
									</div>
								</div>

								<div class="row-fluid">

									<div class="span6">
										<div class="control-group error">
										    <label>Town/City: <span style="color: red;">*</span></label>
										    <input type="text" class="span12" required>
											
											<div>
												<span class="help-inline">Please enter the town/city of your address</span>
											</div>
										</div>
									</div>

									<div class="span6">
									<div class="control-group error">
									    <label>County: <span style="color: red;">*</span></label>
									    <input type="text" class="span12" placeholder="Hampshire..." required>
										
										<div>
											<span class="help-inline">Please enter the county of your address</span>
										</div>
									</div>
								</div>
							</div> <!-- ./row -->

							<div class="row-fluid">

									<div class="span6">
										<div class="control-group error">
										    <label>PostCode: <span style="color: red;">*</span></label>
										    <input type="text" class="span12" required>
											
											<div>
												<span class="help-inline">Please enter the posctode of your address</span>
											</div>
										</div>
									</div>

									<div class="span6">
										<div class="control-group error">
										    <label>Country: <span style="color: red;">*</span></label>
										    <input type="text" class="span12" placeholder="United Kingdom..."required>
											
											<div>
												<span class="help-inline">Please enter the country of your address</span>
											</div>
										</div>
									</div>
							</div><!-- ./row -->

								<div class="control-group error">
									<label>Telephone:</label>
									<input type="text" class="span6" placeholder="01234 567891..."required>
									<span class="help-inline">Please enter your phone number</span>
								</div>

								<legend>Postage address</legend>

								<label class="checkbox">
							      <input type="checkbox" checked> <strong>Use the same as Billing address</strong>
							    </label>

								<div class="control-group error">
								    <label>Name: <span style="color: red;">*</span></label>
									<input type="text" class="span12" placeholder="John Doe..." required>
									
									<div>
										<span class="help-inline">Please enter the name to be billed</span>
									</div>
								</div>

								<div class="control-group error">
								    <label>Address: <span style="color: red;">*</span></label>
								    <input type="text" class="span12" required>
								    <input type="text" class="span12">
									
									<div>
										<span class="help-inline">Please enter the address to which is to be billed</span>
									</div>
								</div>

								<div class="row-fluid">

									<div class="span6">
										<div class="control-group error">
										    <label>Town/City: <span style="color: red;">*</span></label>
										    <input type="text" class="span12" required>
											
											<div>
												<span class="help-inline">Please enter the town/city of your address</span>
											</div>
										</div>
									</div>

									<div class="span6">
									<div class="control-group error">
									    <label>County: <span style="color: red;">*</span></label>
									    <input type="text" class="span12" placeholder="Hampshire..." required>
										
										<div>
											<span class="help-inline">Please enter the county of your address</span>
										</div>
									</div>
								</div>
							</div> <!-- ./row -->

							<div class="row-fluid">

									<div class="span6">
										<div class="control-group error">
										    <label>PostCode: <span style="color: red;">*</span></label>
										    <input type="text" class="span12" required>
											
											<div>
												<span class="help-inline">Please enter the posctode of your address</span>
											</div>
										</div>
									</div>

									<div class="span6">
										<div class="control-group error">
										    <label>Country: <span style="color: red;">*</span></label>
										    <input type="text" class="span12" placeholder="United Kingdom..."required>
											
											<div>
												<span class="help-inline">Please enter the country of your address</span>
											</div>
										</div>
									</div>
							</div><!-- ./row -->

								

								
							<div class="row-fluid">
								<div class="span6">
									<label class="control-label" style="width: auto;"><span style="color: red;">*</span> indicates a required field</label>  
									
								</div>

								<div class="span6 pull-right">
									<span class="pull-right">
									<a href="cart.php" class="btn">Cancel order</a>
									<button class="btn btn-primary">Continue</button>
								</span>
								</div>
							</div>

							  </fieldset>
							</form>
						</div>
					</div><!-- ./row -->

				</div><!-- ./container-fluid -->

     	

     </div><!-- ./container -->
<? include 'php/footer.php'; ?>