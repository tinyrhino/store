<?php 
  include 'php/header.php';
?>

 

     <div class="container border" style="background-color: white; margin-bottom: 20px;">

     	

     			<div class="container-fluid" style="margin-top: 20px;">

				  <div class="alert alert-success">
						 <button type="button" class="close" data-dismiss="alert">&times;</button>
						Your cart has been updated
				  </div>

				  <div class="alert alert-alert">
						 <button type="button" class="close" data-dismiss="alert">&times;</button>
						Item has been removed from your cart
				  </div>

				   <div class="alert alert-info">
						 <button type="button" class="close" data-dismiss="alert">&times;</button>
						You have cancelled your checkout, you can return here to proceed when you are ready
				  </div>

				  <h1>Shopping cart</h1>


				  <form action="checkout.php">
					<table class="table">
					  <thead>
					    <tr>
					      <th width="150px">&nbsp;</th>
					      <th>&nbsp;</th>
					      <th>Price</th>
					      <th>Quantity</th>
					      <th>Remove</th>
					      <th>Total</th>
					    </tr>
					  </thead>
					 <tbody>
					 	<tr>
					 		<td>
					 			<div style="width: 130px; height: 130px; border: 1px solid #ccc;"></div>
					 		</td>
					 		<td>
					 			<p class="muted">
					 				<strong>Code: </strong>UFCE-HX<br>
					 				<strong>Size: </strong>9<br>
					 				<strong>Colour: </strong>Blue<br>
					 				<a href="#">View product</a>
					 			</p>
					 		</td>
					 		<td>&pound;0.00</td>
					 		<td><input type="text" class="span1" value="1"></td>
					 		<td><a data-toggle="modal" class="link" data-target="#myModal" >remove</a></td>
					 		<td>&pound;0.00</td>
					 	</tr>
					 	<tr>
					 		<td>
					 			<div style="width: 130px; height: 130px; border: 1px solid #ccc;"></div>
					 		</td>
					 		<td>
					 			<p class="muted">
					 				<strong>Code: </strong>UFCE-HX<br>
					 				<strong>Size: </strong>9<br>
					 				<strong>Colour: </strong>Blue<br>
					 				<a href="#">View product</a>
					 			</p>
					 		</td>
					 		<td>&pound;0.00</td>
					 		<td><input type="text" class="span1" value="1"></td>
					 		<td><a data-toggle="modal" class="link" data-target="#myModal" >remove</a></td>
					 		<td><p >&pound;0.00</p></td>
					 	</tr>

					 	<tr>
					 		<td></td>
					 		<td></td>
					 		<td></td>
					 		<td></td>
					 		<td></td>
					 		<td></td>
					 	</tr>
					 </tbody>
					</table>

					<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-header">
										    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										    <h3 id="myModalLabel">Are you sure you want to remove?</h3>
										  </div>
										  <div class="modal-body">
										    <p>One fine body</p>
										  </div>
										  <div class="modal-footer">
										    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
										    <a class="btn btn-warning" href="cart.php">Remove item</a>
										  </div>
										</div>


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

					<div class="row-fluid" style="margin-bottom: 20px;">
						<div class="pull-right span3">
							
									<div class="span6">
										<a class="pull-right" href="#" style="margin-top:3px;">Update cart</a>
									</div>
									<div class="span6">
										<button type="submit" class="btn btn-primary pull-right">Checkout</button>
									</div>
								
						</div>
					</div><!-- ./well -->

				</form>


				</div><!-- ./container-fluid -->

     	

     </div><!-- ./container -->
<? include 'php/footer.php'; ?>