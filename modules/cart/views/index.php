<?php require 'templates/header.php' ?>	
		
        <?php require 'templates/pageheader.php' ?>	
		
        <?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0 ){ ?>
		<!-- BEGIN .section -->
		<div class="section page-content clearfix">
	
			<h2 class="page-title">Cart</h2>
			
			<form method="post" action="#">
			
				<div class="tag-title-wrap clearfix">
					<h4 class="tag-title">Your Order</h4>
				</div>
			
				<table width="100%" class="account-table">
					<thead>
						<tr>
							<th>Product #</th>
							<th>Product Name</th>
							<th>Qty</th>
							<th>Totals</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        
                        if($_POST['del'])
                        {
                            foreach($_POST['del'] as $remove)
                            {
                                unset( $_SESSION['cart'][$remove] );
                            }
                            redirect_url('?module=cart');
                        }
                        
                        
                        if($_POST['update'])
                        {
                            foreach($_SESSION['cart'] as $key=>$value)
                            {
                                $_SESSION['cart'][$key]['qty'] = $_POST['qty'][$key];
                            }
                            redirect_url('?module=cart');
                        }
                        $total = 0;
                        foreach($_SESSION['cart'] as $cart)
                        {
                            $id = intval($cart['id']);
                            $product = get_product_by_id($id);
                            $price = $product->prod_price * $cart['qty'];
                            $total += $price;
                        ?>
						<tr>
							<td data-title="Product #"><?php echo $product->prod_id ?></td>
							<td data-title="Product Name"><?php echo $product->prod_name ?></td>
							<td data-title="Qty" class="qty-table">	
								<div class="qty-fields">
									<input type="text" maxlength="12" class="qty-text" size="4" value="<?php echo $cart['qty'] ?>" name="qty[<?php echo $product->prod_id ?>]"/>
								</div>
							</td>
							<td data-title="Totals"><?php echo number_format($price,0,',','.').' '.$currency ?></td>
							<td data-title="Remove"><input type="checkbox" name="del[]" value="<?php echo $product->prod_id ?>" /></td>
						</tr>
                        <?php } ?>
					</tbody>
				</table>
				
				<!-- BEGIN .clearfix -->
				<div class="cart-options clearfix">
			
					<div class="cart-buttons fr">
						<input class="button2 fl" style="margin: 2px 10px 0 0;" type="submit" value="Update Cart &raquo;" name="update"/>
						<a href="?module=cart&action=checkout"><input class="button2 fr" style="margin: 2px 0 0 0;" type="button" value="Proceed to Checkout &raquo;" name="checkout"/></a>
					</div>
				
				<!-- END .clearfix -->
				</div>
			
			<hr>
			
			<div class="form-third">
			
				<div class="tag-title-wrap clearfix">
					<h4 class="tag-title">Total</h4>
				</div>
			
				<table width="100%" class="account-table">
					<tbody>
						<tr>
							<td><strong>Subtotal</strong></td>
							<td><?php echo number_format($total,0,',','.').' '.$currency ?></td>
						</tr>
						<tr>
							<td><strong>Shipping</strong></td>
							<td>Free Shipping</td>
						</tr>
						<tr>
							<td><strong>Order Total</strong></td>
							<td><?php echo number_format($total,0,',','.').' '.$currency ?></td>
						</tr>
					</tbody>
				</table>
			
				<a href="?module=cart&action=checkout"><input class="button2 fr" style="margin: 2px 0 0 0;" type="button" value="Proceed to Checkout &raquo;" name="checkout"/></a>
			
			</div>
            </form>
		<!-- END .section -->
		</div>
        <?php } else {
            echo "<p class='section page-content clearfix' style='color:red'>Giỏ hàng rỗng</p>";
        } ?>
<?php require 'templates/footer.php' ?>	