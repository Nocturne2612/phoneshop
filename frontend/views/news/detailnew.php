
<div class="breadcrumbs">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?php echo Yii::$app->homeUrl ?>">Home</a></li>
			<li><a href="<?php echo Yii::$app->homeUrl ?>news/listnew?id=1">News</a></li>
			<li class="active"><?php echo $data['name'] ?></li>
		</ul>
	</div>
</div>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="block">
					<div class="title-group"><h2>Comments</h2></div>
					<div class="block-content">
						<div class="comment-item">
							<h4><a href="#">Natalia Assyrian</a></h4>
							<div class="comment-date">13 / 6 /2014 </div>
							<p>“  Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.   “</p>
						</div>
						<div class="comment-item">
							<h4><a href="#">John</a></h4>
							<div class="comment-date">13 / 6 /2014 </div>
							<p>“  IEodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum   “</p>
						</div>
						<div class="comment-item">
							<h4><a href="#">Thomas Hurt</a></h4>
							<div class="comment-date">13 / 6 /2014 </div>
							<p>“  Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus   “</p>
						</div>
					</div>
				</div><!-- /.block - Comments -->
				<div class="block">
					<div class="title-group"><h2>Tags</h2></div>
					<div class="block-content">
						<ol class="tags">
							<li><a href="#">Women</a></li>
							<li><a href="#">Men</a></li>
							<li class="active"><a href="#">Bags</a></li>
							<li><a href="#">Suits</a></li>
							<li><a href="#">Sweatshirts</a></li>
							<li><a href="#">Shopping</a></li>
							<li><a href="#">Hoodies</a></li>
						</ol>
					</div>
				</div><!-- /.block - Comments -->
			</div><!-- /sidebar -->
			<div class="col-sm-9">
				<div class="blog-detail blog-list">
					<div class="item">
						<div class="item-inner">
							<h2 class="product-name"><a title="" href="javascript:void(0)"><?php echo $data['name']; ?></a></h2>
							<div class="ratings">
								<div class="rating-box">
									<div style="width:67%" class="rating"></div>
								</div>
								<span class="amount"><a href="#">1 Review(s)</a></span>
								<span class="separator">|</span>
								<span class="comment-amount"><a href="#">4 comment</a></span>
							</div>
							<div class="blog-attr">
								<span>Post by <?php echo $data['author'] ?></span>
								<span class="separator">|</span>
								<span>
									<?php 
	                                    $result = date("d-m-Y",($data["dateCreate"]));
	                                    echo $result;     
	                                ?>	
                                </span>
							</div>
							<div class="desc">
								<p>
								<?php echo $data['content']; ?>
								</p>
								</div>
								<div class="share-post">
									<span class="share-label">Share this post</span>
									<ul>
										<li class="color-facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li class="color-twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li class="color-pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
										<li class="color-gplus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li class="color-linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<hr>
						<div class="title-group3">
							<h3>Comments (3)</h3>
						</div>
						<div class="comment-list">
							<div class="comment-item">
								<div class="media">
									<div class="media-left"><a href="#"><img src="images/avatar/avatar-04.jpg" alt=""></a></div>
									<div class="media-body">
										<div class="comment-date">12.5/2104</div>
										<div class="comment-title">Section 1.10.33 of "de Finibus Bonorum et Malorum"</div>
										Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
									</div>
								</div>
								<div class="comment-reply">
									<div class="media">
										<div class="media-left"><a href="#"><img src="images/avatar/avatar-04.jpg" alt=""></a></div>
										<div class="media-body">
											<div class="comment-date">12.5/2104</div>
											<div class="comment-title">1914 translation by H. Rackham</div>
											Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
										</div>
									</div>
								</div>
							</div><!-- /.commnent-item -->
							<div class="comment-item">
								<div class="media">
									<div class="media-left"><a href="#"><img src="images/avatar/avatar-04.jpg" alt=""></a></div>
									<div class="media-body">
										<div class="comment-date">12.5/2104</div>
										<div class="comment-title">Section 1.10.33 of "de Finibus Bonorum et Malorum"</div>
										Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
									</div>
								</div>
							</div><!-- /.comment-item -->
						</div>
						<hr>
						<div class="title-group3">
							<h3>Leave a reply</h3>
						</div>
						<form>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control input-md" placeholder="Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control input-md" placeholder="Email">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<input type="text" class="form-control input-md" placeholder="Subject">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your comment" rows="5"></textarea>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-default btn-lg">SUBMIT COMMENT</button>
						</form>
						<br>
					</div>
				</div><!-- /content -->
			</div>
		</div>
	</div><!-- /.main -->
