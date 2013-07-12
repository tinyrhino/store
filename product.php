<?php 
  include 'php/header.php';
?>

 

     <div class="container border" style="background-color: white; margin-bottom: 20px;">

     	

     			<div class="container-fluid" style="margin-top: 20px;">

				  <ul class="breadcrumb">
					  <li><a href="index.php">Home</a> <span class="divider">>></span></li>
					  <li><a href="category.php">Category</a> <span class="divider">>></span></li>
					  <li><a href="subcategory.php">Sub category</a> <span class="divider">>></span></li>
					  <li class="active">Product</li>
					</ul>

					<div class="row-fluid">
						<div class="span5">
							<ul class="thumbnails">

						  <li class="span12">
						    <div class="thumbnail">
					              <img src="img/340x270.jpg" alt="">				        
						    </div>
						  </li>

							
						</div><!-- ./span -->


						<div class="span7">
							<h1>Product Title</h1>
							<p class="muted">UFCEXH1-20-2</p>
							<h2>&pound;0.00</h2>
							<p><small>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras euismod, enim at porta tristique, purus enim hendrerit tellus, at luctus erat lorem non nisi. Duis leo nulla, suscipit in interdum lobortis, tempor quis est. Duis hendrerit felis in odio accumsan lobortis. Nulla eget nulla a risus molestie pulvinar. Cras at ultrices tortor, in scelerisque neque. Nam suscipit massa congue metus accumsan molestie. Quisque vitae suscipit nibh, sit amet aliquet nunc. 
							</small>
							</p>

									<form class="form-inline" style="margin-top: 20px;" >

										<label  for="quantity">Quantity</label>
									
										<select class="span2">
										  <option>1</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										</select>

										<label  for="color">Colour</label>
									
										<select class="span2">
										  <option>Blue</option>
										  <option>Red</option>
										  <option>Green</option>
										  <option>Yellow</option>
										  <option>Black</option>
										</select>
										
										<!-- Button to trigger modal -->
										<button type="button" data-toggle="modal" class="btn btn-primary" data-target="#myModal">Add to bag</button>
										 
										<!-- Modal -->
										<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-header">
										    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										    <h3 id="myModalLabel">Item added to your basket</h3>
										  </div>
										  <div class="modal-body">
										    <p>One fine body</p>
										  </div>
										  <div class="modal-footer">
										    <button class="btn" data-dismiss="modal" aria-hidden="true">Continue shopping</button>
										    <a class="btn btn-primary" href="cart.php">Go to checkout</a>
										  </div>
										</div>

									</form>

									
						</div><!-- ./span7 -->
					</div><!-- ./row -->



				</div><!-- ./container-fluid -->

     	

     </div><!-- ./container -->
<? include 'php/footer.php'; ?>