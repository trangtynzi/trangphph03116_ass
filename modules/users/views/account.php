<?php require 'templates/header.php' ?>	
		
        <?php require 'templates/pageheader.php' ?>	
		
		<!-- BEGIN .section -->
		<div class="section page-content clearfix">
	
			<h2 class="page-title">Account</h2>
			
			<form method="post" action="#">
			<?php            
            if(!$_SESSION['user_id']){ redirect_url_js('?module=users&action=login');}
            $user = get_user_by_id(intval($_SESSION['user_id'])); ?>
				<ul class="columns-2 checkout-form clearfix">
					<div class=" clearfix">
					
                        <?php echo isset($msg) ? $msg : '' ; ?>
                        <input class="half-input fl" type="text" name="user_username" readonly="" value="<?php echo $user->user_username ; ?>" />
						<input class="half-input fr" type="text" name="user_password"  placeholder="Để trống nếu không muốn thay đổi" />
					
						<input class="half-input fl" type="text" name="user_firstname" value="<?php echo $user->user_firstname ; ?>" />
						<input class="half-input fr" type="text" name="user_lastname" value="<?php echo $user->user_lastname ; ?>" />
					
						<input class="full-input" type="text" name="user_company" value="<?php echo $user->user_company ; ?>" />
					
						<input class="full-input" type="text" name="user_address" value="<?php echo $user->user_address ; ?>" />
					
						<input class="half-input fl" type="text" name="user_city" value="<?php echo $user->user_city ; ?>" />
						<input class="half-input fr" type="text" name="user_postcode" value="<?php echo $user->user_postcode ; ?>" />
					
						<input class="half-input fl" type="text" name="user_country" value="<?php echo $user->user_country ; ?>" />
						<input class="half-input fr" type="text" name="user_state" value="<?php echo $user->user_state ; ?>" />
					
						<input class="half-input fl" type="text" name="user_email" value="<?php echo $user->user_email ; ?>" />
						<input class="half-input fr" type="text" name="user_phone" value="<?php echo $user->user_phone ; ?>" />
					   
					</div>
                    <input class="button2" type="submit" name="submit"  value="Update"/>
				</ul>
			
			     
			</form>

		<!-- END .section -->
		</div>

<?php require 'templates/footer.php' ?>	