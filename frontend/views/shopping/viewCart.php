 <?php 
// echo "<pre>";
// print_r($province);
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
 						<?php 
 						if($cart){
 						$subtotal=0;

	 						foreach ($cart as $key => $value) {

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
 									<td class="subtotal">$<?php echo $value['price'] ?></td>
 									<td class="grandtotal">$<?php echo $value['price'] * $value['sl'];
 									 $subtotal +=$value['price'] * $value['sl'];?></td>
 								</tr>
 							</tbody>
 							<?php }} ?>
 						</table>
 					</div>
 					
 					<div class="line2"></div>

 				</div>
 			</form>
 			
 		</div>
 	</div>
</div><!-- /.main -->
