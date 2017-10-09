<?php 
	// echo "<pre>";
	// print_r($data);
	// die();
?>
<div class="breadcrumbs">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="#0">Home</a></li>
			<li><a href="#0">Category</a></li>
			<li class="active">Detail Product</li>
		</ul>
	</div>
</div><!-- /.breadcrumbs -->

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-right">
				<div class="product-view">
				
					<div class="row">
						<div class="col-sm-5">
							<div class="product-img-box">
								<p class="product-image">
									<a href="images/products/1.jpg" class="cloud-zoom" id="ma-zoom1">
										<img id="img_<?=$data['proId']?>" src="<?php echo $data['images'] ?>" alt="<?php echo $data['proName'] ?>" title="<?php echo $data['proName'] ?>" />
									</a>
								</p>
								<div class="more-views thumbnail-container">
									<ul class="bxslider">
										<li class="thumbnail-item">
                                            <a href="<?php echo $data['images'] ?>" class="cloud-zoom-gallery" title="" name="<?php echo $data['images'] ?>" rel="useZoom: 'ma-zoom1', smallImage: '<?php echo $data['images'] ?>'">
                                                <img src="<?php echo $data['images'] ?>" alt="<?php echo $data['images'] ?>" />
                                            </a>
                                        </li>
                                        <li class="thumbnail-item">
											<a href="<?php echo $data['images'] ?>" class="cloud-zoom-gallery" title="" name="<?php echo $data['images'] ?>" rel="useZoom: 'ma-zoom1', smallImage: '<?php echo $data['images'] ?>'">
												<img  src="<?php echo $data['images'] ?>" alt="<?php echo $data['images'] ?>" />
											</a>
										</li>
										<li class="thumbnail-item">
                                            <a href="<?php echo $data['images'] ?>" class="cloud-zoom-gallery" title="" name="<?php echo $data['images'] ?>" rel="useZoom: 'ma-zoom1', smallImage: '<?php echo $data['images'] ?>'">
                                                <img src="<?php echo $data['images'] ?>" alt="<?php echo $data['images'] ?>" />
                                            </a>
                                        </li>
                                        <li class="thumbnail-item">
                                            <a href="<?php echo $data['images'] ?>" class="cloud-zoom-gallery" title="" name="<?php echo $data['images'] ?>" rel="useZoom: 'ma-zoom1', smallImage: '<?php echo $data['images'] ?>'">
                                                <img src="<?php echo $data['images'] ?>" alt="<?php echo $data['images'] ?>" />
                                            </a>
                                        </li>
                                        <li class="thumbnail-item">
                                            <a href="<?php echo $data['images'] ?>" class="cloud-zoom-gallery" title="" name="<?php echo $data['images'] ?>" rel="useZoom: 'ma-zoom1', smallImage: '<?php echo $data['images'] ?>'">
                                                <img src="<?php echo $data['images'] ?>" alt="<?php echo $data['images'] ?>" />
                                            </a>
                                        </li>
								

									</ul>
								</div>
							</div>
						</div>
						
						<div class="product-shop col-sm-7">
							<div class="product-name">
								<h1><?php echo $data['proName']; ?></h1>
							</div>
							<div class="ratings">
								<div class="rating-box">
									<div style="width:67%" class="rating"></div>
								</div>
								<span class="amount"><a href="#">1 Review(s)</a></span>
							</div>
							<div class="box-container2"> 
								<div class="price-box">
									<p class="special-price">
										<span class="price-label">Special Price</span>
										<span id="product-price-1" class="price">$<?php echo $data['saleOf'] ?>.00</span>
									</p>
									<p class="old-price">
										<span class="price-label">Regular Price:</span>
										<span id="old-price-1" class="price">$<?php echo $data['price'] ?>.00</span>
									</p>
								</div>
							</div>
							<div class="short-description">
								<div class="std"><?php echo $data['description'] ?>.</div>
							</div>
							<p class="availability in-stock">Availability: <span>In stock</span></p>
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-md-2 col-sm-3 control-label">Size <em>*</em></label>
									<div class="col-sm-7">
										<select class="form-control">
											<option value="">-- Please Select --</option>
											<option value="2">L +$2.00</option>
											<option value="1">M +$1.00</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 col-sm-3 control-label">Color <em>*</em></label>
									<div class="col-sm-7">
										<select class="form-control">
											<option value="">-- Please Select --</option>
											<option value="4">black +$2.00</option>
											<option value="3">blue +$1.00</option>
											<option value="5">yellow +$1.00</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 col-sm-3 control-label">Quantity:</label>
									<div class="col-md-3 col-sm-5">
										<div class="input-group qty">
											<span class="input-group-btn">
												<button class="btn" type="button">-</button>
											</span>
											<input type="text" class="form-control" value="1" name="Qty" id="Qty">
											<span class="input-group-btn">
												<button class="btn" type="button">+</button>
											</span>
										</div><!-- /input-group -->
									</div>
								</div>
								<a href="javascript:void(0)" onclick="addCart(<?= $data['proId'] ?>)" class="btn btn-danger btn-cart">Add to cart</a>
								<button type="button" class="btn btn-default btn-wishlist " >Add to wishlist</button>
								<button type="button" class="btn btn-default btn-compare">Add to compare</button>
							</form>
						</div><!-- /.product-shop -->
					</div>
					<div class="product-tab tab-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#product-desc" data-toggle="tab">PRODUCT DESCRIPTION</a></li>
							<li><a href="#product-review" data-toggle="tab">CUSTOMER REVIEW</a></li>
							<li><a href="#product-tags" data-toggle="tab">PRODUCT TAGS</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="product-desc">
								<?php echo $data['content'] ?>.
							</div>
							<div class="tab-pane" id="product-review">...</div>
							<div class="tab-pane" id="product-tags">...</div>
						</div>
					</div><!-- /.product-tab -->

				

				</div><!-- /.product-view -->
				
			</div> --><!-- /.col-left -->
		</div>
	</div>
        </div><!-- /.main -->