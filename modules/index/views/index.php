<?php require 'templates/header.php' ?>		
		
		<?php require 'templates/slider.php' ?>	
        
		<?php require 'templates/intro.php' ?>	
		
		<!-- BEGIN .section -->
		<div class="section-mini2">
			
			<div class="tag-title-wrap clearfix">
				<h4 class="tag-title">Featured Products</h4>
			</div>
            
			<ul class="columns-4 clearfix">
                <?php foreach(get_all_products() as $obj){ $link_detail = '?module=products&action=detail&id='.$obj->prod_id; ?>
				<li class="col4">
					<a href="<?php echo $link_detail ?>"><img src="<?php $obj->prod_images = explode('|',$obj->prod_images);echo $obj->prod_images[0] ?>" alt="" class="full-image product-image" /></a>
					<p class="product-title"><a href="<?php echo $link_detail ?>"><?php echo $obj->prod_name ?></a></p>
					<p class="product-price"><?php echo number_format($obj->prod_price,0,',','.').' '.$currency ?></p>
					<p class="product-button clearfix"><a href="?module=cart&action=add&id=<?php echo $obj->prod_id; ?>" class="button2">Add to Cart &raquo;</a></p>
				</li>
                <?php } ?>
			</ul>
			
		<!-- END .section -->
		</div>
		
		<?php require 'templates/testimonials.php' ?>
		
<?php require 'templates/footer.php' ?>		