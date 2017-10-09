
<?php 
use yii\widgets\LinkPager;

// echo "<pre>";
// print_r($pages);
// die();
?>
<div class="breadcrumbs">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Category Grid</li>
		</ul>
	</div>
</div>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-left">
				<div class="block block-layered-nav">
					<div class="block-title">
						<strong><span>Sort By</span></strong>
					</div>
					<div class="block-content">
						<p class="block-subtitle">Shopping Options</p>
						<div id="narrow-by-list">
							<div class="layered layered-Category">
								<h2>Category</h2>
								<div class="content-shopby">
									<ol>
										<li><a href="#">Clothing</a></li>
										<li><a href="#">Accessories</a></li>
										<li><a href="#">Bags</a></li>
										<li><a href="#">Shoes</a></li>
										<li><a href="#">HandBag</a></li>
										<li><a href="#">Fashion</a></li>
									</ol>
								</div>
							</div>
							<div class="layered layered-price">
								<h2>Price</h2>
								<div class="content-shopby">
									<div id="slider-range"></div>
									<div id="search_pr">
										<input type="text" name="first_price" id="first_price" class="form-control">
										<input type="text" name="last_price" id="last_price" class="form-control">
										<button id="search_price" name="search_price" type="button" class="btn btn-default" onclick="searchPrice()">SHOW</button>
									</div>
								</div>
							</div>
							<div class="layered layered-Manufacturer">
								<h2>Manufacturer</h2>
								<div class="content-shopby">
									<ol>
										<li><a href="#">Aliquam</a></li>
										<li><a href="#">Duis tempus id </a></li>
										<li><a href="#">Leo quis molestie. </a></li>
										<li><a href="#">Suspendisse </a></li>
										<li><a href="#">Nunc gravida </a></li>
									</ol>
								</div>
							</div>
							<div class="layered layered-Color">
								<h2>Color</h2>
								<div class="content-shopby">
									<ol>
										<li><a href="#">Red</a></li>
										<li><a href="#">Orange</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Black</a></li>
										<li><a href="#">Green</a></li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /sort -->
				<div class="block block-list">
					<div class="block-title">
						<strong><span>Compare</span></strong>
					</div>
					<div class="block-content">
						<p class="empty">You have no items to compare.</p>
					</div>
				</div><!-- /.compare -->
				<div class="banner-left"><a href="#"><img src="frontend/web/common/images/ads/ads-01.jpg" alt=""></a>
					<div class="banner-content">
						<h1>sale up to</h1>
						<h2>20% off</h2>
						<p>on selected products</p>
						<a href="#">buy now</a>
					</div>
				</div>
				<div class="block">
					<!-- /.owl-container -->
				</div><!-- /.block - Special offer -->
			</div><!-- /.col-left -->
			<div class="col-sm-9 col-right">
				<div class="banner">
					<a href="#"><img alt="" src="frontend/web/common/images/ads/ads-17.jpg"></a>
				</div>

				<div class="page-title">
					<h1>CATEGORY GRID</h1>
				</div>
				<div class="toolbar">
					<div class="sorter">
						<p class="view-mode">
							<label>View as:</label>
							<strong class="grid" title="Grid">Grid</strong>&nbsp;
							<a class="list" title="List" href="#">List</a>&nbsp;
						</p>
					</div><!-- /.sorter -->
					<div class="pager">
						<div class="sort-by hidden-xs">
							<label>Sort By:</label>
							<select class="form-control input-sm">
								<option selected="selected">Position</option>
								<option>Name</option>
								<option>Price</option>
							</select>
							<a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
						</div>
						<div class="limiter hidden-xs">
							<label>Show:</label>
							<div class="limiter-inner">
								<select class="form-control input-sm">
									<option>9</option>
									<option selected="selected">12</option>
									<option>24</option>
									<option>36</option>
								</select> 
							</div>
						</div>
					</div><!--- /.pager -->
				</div><!-- /.toolbar -->
				<div class="row products">

					<?php 
					foreach ($data as  $value) {
						
						?>
						<div class="col-md-3 col-sm-6">
							<div class='productslider-item item'>
								<div class="item-inner">
									<div class="images-container">
										<div class="product_icon">
											<div class='new-icon'><span>new</span></div>
										</div>
										<a href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['proId']?>" title="<?php echo $value["proName"] ?>" class="product-image">
											<img width="195" height="231" src="<?php echo $value["images"] ?>" id="img_<?=$value['proId']?>" alt="<?php echo $value["proName"] ?>" />
										</a>
										<div class="box-hover">
											<ul class="add-to-links">
												<li><a href="javascript:void(0)" class="link-quickview">Quick View</a></li>
												<li><a href="javascript:void(0)" class="link-wishlist" onclick="addWishlist(<?= $value["proId"] ?>)">Add to Wishlist</a></li>
												<li><a href="javascript:void(0)" class="link-compare">Add to Compare</a></li>
												
											</ul>
										</div>
									</div>
									<div class="des-container">
										<h2 class="product-name" ><a id="txtName_<?=$value['proId']?>" href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['proId']?>" title="<?php echo $value["proName"] ?>"> <?php echo $value["proName"] ?></a></h2>
										<div class="price-box">
											<p class="special-price">
												<span class="price-label">Special Price:</span>
												<span class="price" id="specialPrice_<?=$value['proId']?>">$<?php echo $value["saleOf"] ?></span>
											</p>
											<p class="old-price">
												<span class="price-label">Regular Price: </span>
												<span class="price" id="regularPrice_<?=$value['proId']?>">$<?php echo $value["price"] ?></span>
											</p>
										</div>
										<div class="ratings">
											<div class="rating-box">
												<div class="rating" style="width:67%"></div>
											</div>
											<!-- <span class="amount"><a href="#">3 Review(s)</a></span> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<?php } ?>
					</div><!-- /.product -->

					<!-- phân trang mặc định của yii2 -->
					<?php 
				    echo LinkPager::widget([
				        'pagination' => $pages,
				        'firstPageLabel' => '<<',
				        'lastPageLabel' => '>>',
				        'prevPageLabel' => '<',
				        'nextPageLabel' => '>',
				        'maxButtonCount' => 5,
				    ]);
				?>
				</div><!-- /.col-right -->
			</div>
		</div>
</div><!-- /.main -->
