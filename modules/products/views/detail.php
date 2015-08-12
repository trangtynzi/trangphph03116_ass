<?php require 'templates/header.php' ?>	
		
        <?php require 'templates/pageheader.php' ?>	
        
		<!-- BEGIN .section -->
		<div class="section">
			
			<ul class="columns-content page-content clearfix">
				
				<!-- BEGIN .col-main -->
				<li class="col-main">
					<?php $product = get_product_by_id( intval($_GET['id']) ) ?>
					<h2 class="page-title"><?php echo $product->prod_name ?></h2>

						<ul class="columns-2 product-single-content clearfix">
							
							<li class="col2 clearfix">
								
								<!-- BEGIN .slider -->
								<div class="slider-single slide-loader-single clearfix">
									<ul class="slides">
                                        <?php $images = explode('|',$product->prod_images); foreach($images as $image){ if(trim($image) !=''){ ?>
										<li>
											<a href="#" title="Slide 1" target="_blank"><img src="<?php echo $image ?>" alt=""></a>
										</li>
                                        <?php }} ?>
									</ul>
								<!-- END .slider -->
								</div>
								
							</li>
							<li class="col2 clearfix">
								
								<h2>
									<span class="price-now"><?php echo number_format($product->prod_price,0,',','.').' '.$currency ?></span>
								</h2>
								
								<p><?php echo $product->prod_description ?></p>
								
								<form method="post" action="?module=cart&action=add&id=<?php echo $product->prod_id; ?>" class="qty-product-single clearfix">
									<div class="qty-fields-large clearfix fl">
							        	<input maxlength="12" class="qty-text" size="4" value="1" name="quantity">
									</div>
								    <button type="submit" class="button3 fr">Add to cart &raquo;</button>
								</form>
								
							</li>
						
						</ul>
						
						<div id="tabs">
							<ul class="nav clearfix">
								<li><a href="#tabs-tab-title-1">Product Features</a></li>
								<li><a href="#tabs-tab-title-2">Technical Specs</a></li>
								<li><a href="#tabs-tab-title-3">Delivery</a></li>
							</ul>
							<div id="tabs-tab-title-1"><p><?php echo $product->prod_features ?></p></div>
							<div id="tabs-tab-title-2"><p><?php echo $product->prod_specs ?></p></div>
							<div id="tabs-tab-title-3"><p><?php echo $product->prod_delivery ?></p></div>
						</div>
				
				<!-- END .col-main -->
				</li>
				
				<?php require 'templates/sidebar.php' ?>
                
			</ul>
			
		<!-- END .section -->
		</div>

<?php require 'templates/footer.php' ?>	