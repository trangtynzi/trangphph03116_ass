<?php require 'templates/header.php' ?>	
		
        <?php require 'templates/pageheader.php' ?>	
		
		<!-- BEGIN .section -->
		<div class="section page-content clearfix">
	
			<h2 class="page-title">Checkout</h2>
			
			<form method="post" action="#">
			<?php
            if(!isset($_SESSION['cart']) || count($_SESSION['cart']) < 1)
            {
                redirect_url_js('?module=cart');
            }
            
            if(!$_SESSION['user_id']){ redirect_url_js('?module=users&action=login');}
            $user = get_user_by_id(intval($_SESSION['user_id'])); ?>
				<ul class="columns-2 checkout-form clearfix">
					<li class="col2 clearfix">
					
						<div class="tag-title-wrap clearfix">
							<h4 class="tag-title">Billing Addresses</h4>
						</div>
					
						<input class="half-input fl" type="text" name="first-name" onblur="if(this.value=='')this.value='First name';" onfocus="if(this.value=='First name')this.value='';" value="<?php echo $user->user_firstname ; ?>" />
						<input class="half-input fr" type="text" name="last-name" onblur="if(this.value=='')this.value='Last name';" onfocus="if(this.value=='Last name')this.value='';" value="<?php echo $user->user_lastname ; ?>" />
					
						<input class="full-input" type="text" name="company" onblur="if(this.value=='')this.value='Company';" onfocus="if(this.value=='Company')this.value='';" value="<?php echo $user->user_company ; ?>" />
					
						<input class="full-input" type="text" name="address" onblur="if(this.value=='')this.value='Address';" onfocus="if(this.value=='Address')this.value='';" value="<?php echo $user->user_address ; ?>" />
					
						<input class="half-input fl" type="text" name="city" onblur="if(this.value=='')this.value='City';" onfocus="if(this.value=='City')this.value='';" value="<?php echo $user->user_city ; ?>" />
						<input class="half-input fr" type="text" name="postcode" onblur="if(this.value=='')this.value='Postcode';" onfocus="if(this.value=='Postcode')this.value='';" value="<?php echo $user->user_postcode ; ?>" />
					
						<input class="half-input fl" type="text" name="country" onblur="if(this.value=='')this.value='Country';" onfocus="if(this.value=='Country')this.value='';" value="<?php echo $user->user_country ; ?>" />
						<input class="half-input fr" type="text" name="state-county" onblur="if(this.value=='')this.value='State/County';" onfocus="if(this.value=='State/County')this.value='';" value="<?php echo $user->user_state ; ?>" />
					
						<input class="half-input fl" type="text" name="email-address" onblur="if(this.value=='')this.value='Email Address';" onfocus="if(this.value=='Email Address')this.value='';" value="<?php echo $user->user_email ; ?>" />
						<input class="half-input fr" type="text" name="phone" onblur="if(this.value=='')this.value='Phone number';" onfocus="if(this.value=='Phone number')this.value='';" value="<?php echo $user->user_phone ; ?>" />
					
					</li>
                    <?php
                    $total = 0;
                    foreach($_SESSION['cart'] as $cart)
                    {
                            $id = intval($cart['id']);
                            $product = get_product_by_id($id);
                            $price = $product->prod_price * $cart['qty'];
                            $total += $price;
                    }
                    ?>
					<li class="col2 clearfix">
					
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
    			
    					<input class="button2 fr" type="submit" value="Place Order &raquo;" id="submit" name="submit">
    			
					</li>
				</ul>
			
			
			</form>

		<!-- END .section -->
		</div>

<?php require 'templates/footer.php' ?>	