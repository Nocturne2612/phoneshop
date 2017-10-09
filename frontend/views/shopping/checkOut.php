<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

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
 		
 			
 				<div class="table-responsive" id="listCart">
 					<table class="table custom-table">
 						<thead>
 							<tr class="first last">
 								<th>STT</th>
 								<th>Image</th>
 								<th>Product Name</th>
 								<!-- <th>Edit</th> -->
 								<th>Quantity</th>
 								<th>Subtotal</th>
 								<th>Grandtotal</th>
 							</tr>
 						</thead>
 						<tbody>
 						<?php 
 						$subtotal=0;
 						if($cart){
 						foreach ($cart as $key => $value) {
 							$i=1;
 						?>

 							<tr>
 								<td class="text-center"><?php echo $i++; ?></td>
 								<td><a class="product-image" title="Primis in faucibus" href="#">
 									<img alt="Primis in faucibus" src="<?php echo $value['images'] ?>">
 								</a></td>
 								<td>
 									<a href="<?php echo Yii::$app->homeUrl.'product/detail?id='.$key  ?>"><?php echo $value['proName'] ?></a>
 									<div class="text-muted">Color:<?php echo $value['color'] ?> </div>
 										
 									</td>
 									
 									<td class="qty" style="text-align: center;">	
 										<?php echo $value['sl'] ?>	
 									</td>
 									<td class="subtotal">$<?php echo $value['price'] ?>.00</td>
 									<td class="grandtotal">$<?php echo $value['price'] * $value['sl'];
 									 $subtotal +=$value['price'] * $value['sl'];?></td>
 								</tr>
 							</tbody>
 							<?php } }?>
 						</table>
 					</div>
 					<!-- <div class="text-right">
 						<a href="#" class="btn btn-default btn-md">CONTINUE SHOPPING</a>
 						<button type="submit" class="btn btn-danger btn-md">UPDATE SHOPPING CART</button>
 					</div> -->
 					<div class="line2"></div>
 					<div class="row">
 					<?php 
 						$form = ActiveForm::begin(
	 						[
							    'method' => 'post',
							    'action' => ['shopping/checkout'],
							]
 						); 
 					?>
 						<div class="col-sm-4 required">
 							<h4>Thông Tin Người Mua hàng</h4>
 							<p class="text-muted">Nhập đầy đủ thông tin người mua </p>
							
							<div class="form-group">
 								 <?= $form->field($model, 'fullName')->textInput(['autofocus'=>true,'maxlength' => true]) ?>
 							</div>
 							<div class="form-group">
 								 <?= $form->field($model, 'province')->textInput(['autofocus'=>true,'maxlength' => true]) ?>
 							</div>
 							<div class="form-group">
 								 <?= $form->field($model, 'district')->textInput(['autofocus'=>true,'maxlength' => true]) ?>
 							</div>
 							

 							<!-- <div class="form-group">
 								<button type="button" class="btn btn-default btn-md">GET A QUOTE</button>
 							</div> -->
 						</div>
 						<div class="col-sm-4">
 							<div class="form-group">
 								 <?= $form->field($model, 'ward')->textInput(['autofocus'=>true,'maxlength' => true]) ?>
 							</div>
 							<div class="form-group">
 								 <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
 							</div>

 							<div class="form-group">
 								<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
 							</div>

 							<div class="form-group">
 								<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
 							</div>
 						</div>
		
 						<div class="col-sm-4">
 							<table class="table table-cart-total">
 								<tr>
 									<td>Subtotal:</td>
 									<td class="text-right">$<?php echo $subtotal; ?>.00</td>
 								</tr>
 								<tr>
 									<td>Grandtotal:</td>
 									<td class="text-right">$<?php echo $subtotal; ?>.00</td>
 								</tr>
 								<tr>
 									<td>Bằng Chữ:</td>
 									
 								</tr>
 							</table>
 							<div class="form-group">
						        <?= Html::submitButton('CheckOut', ['class' =>'btn btn-danger']) ?>
						    </div>
 					</div>
 					<?php ActiveForm::end(); ?>
 				</div>

 			</form>
 			
 		</div>
 	</div>
</div><!-- /.main -->
