 <?php 
// echo "<pre>";
// print_r($cart);
// die();

  ?>


 <div class="breadcrumbs">
 	<div class="container">
 		<ul class="breadcrumb">
 			<li><a href="#">Home</a></li>
 			<li class="active">Shopping Cart</li>
 		</ul>
 	</div>
 </div>


 <div class="main">
 	<div class="container">
 		<div class="cart">
 		
 			<form>
 				<div class="table-responsive" id="listCart">
 					<table class="table custom-table">
 						<thead>
 							<tr class="first last">
 								<th>Remove</th>
 								<th>Image</th>
 								<th>Product Name</th>
 								<th>Edit</th>
 								<th>Quantity</th>
 								<th>Subtotal</th>
 								<th>Grandtotal</th>
 							</tr>
 						</thead>
 						<tbody>
 						<?php foreach ($cart as $key => $value) {

 						?>
 							<tr>
 								<td class="text-center"><a class="btn-remove" href="javascript:void(0)" onclick="delCart(<?php echo $key ?>)"><span class="fa fa-trash-o"></span></a></td>
 								<td><a class="product-image" title="Primis in faucibus" href="#">
 									<img alt="Primis in faucibus" src="<?php echo $value['images'] ?>">
 								</a></td>
 								<td>
 									<a href="<?php echo Yii::$app->homeUrl.'product/detail?id='.$key  ?>"><?php echo $value['proName'] ?></a>
 									<div class="text-muted">Color:<?php echo $value['color'] ?> </div>
 										
 									</td>
 									<td class="text-center"><a href="javascript:void(0)" onclick="updateCart(<?php echo $key ?>)">Edit</a></td>
 									<td class="qty">
 										<div class="input-group">
 											<span class="input-group-btn">
 												<button class="btn" type="button">-</button>
 											</span>
 											<input type="text" class="form-control" id="amount-<?php echo $key ?>" value="<?php echo $value['sl'] ?>">
 											<span class="input-group-btn">
 												<button class="btn" type="button">+</button>
 											</span>
 										</div><!-- /input-group -->
 									</td>
 									<td class="subtotal">$<?php echo $value['price'] ?>.00</td>
 									<td class="grandtotal">$<?php echo $value['price'] * $value['sl'] ?>.00</td>
 								</tr>
 							</tbody>
 							<?php } ?>
 						</table>
 					</div>
 					<div class="text-right">
 						<a href="#" class="btn btn-default btn-md">CONTINUE SHOPPING</a>
 						<button type="submit" class="btn btn-danger btn-md">UPDATE SHOPPING CART</button>
 					</div>
 					<div class="line2"></div>
 					<div class="row">
 						<div class="col-sm-4">
 							<h4>ESTIMATE SHIPPING AND TAX</h4>
 							<p class="text-muted">Enter your destination to get shipping &amp; tax</p>
 							<div class="form-group">
 								<label class="control-label">Country <em>*</em></label>
 								<select class="form-control">
 									<option>-- Select options  --</option>
 								</select>
 							</div>
 							<div class="form-group">
 								<label class="control-label">State/Province <em>*</em></label>
 								<select class="form-control">
 									<option>-- Select options  --</option>
 								</select>
 							</div>
 							<div class="form-group">
 								<label class="control-label">Zip/Postal Code</label>
 								<input type="text" class="form-control">
 							</div>
 							<div class="form-group">
 								<button type="button" class="btn btn-default btn-md">GET A QUOTE</button>
 							</div>
 						</div>
 						<div class="col-sm-4">
 							<h4>DISCOUNT CODE</h4>
 							<p class="text-muted">Enter your coupon code if you have one</p>
 							<div class="form-group">
 								<label class="control-label">&nbsp;</label>
 								<input type="text" class="form-control">
 							</div>
 							<div class="form-group">
 								<button type="button" class="btn btn-default btn-md">APPLY COUPON</button>
 							</div>
 						</div>
 						<div class="col-sm-4">
 							<table class="table table-cart-total">
 								<tr>
 									<td>Subtotal:</td>
 									<td class="text-right">$250.00</td>
 								</tr>
 								<tr>
 									<td>Grandtotal:</td>
 									<td class="text-right">$250.00</td>
 								</tr>
 							</table>
 							<div class="text-right">
 								<p><button type="button" class="btn btn-default btn-md fwb">PROCCED TO CHECKOUT</button></p>
 								<p><a href="#" class="text-muted">Checkout with multiples address</a></p>
 							</div>
 					</div>
 				</div>
 			</form>
 			
 		</div>
 	</div>
</div><!-- /.main -->
