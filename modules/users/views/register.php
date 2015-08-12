<?php require 'templates/header.php' ?>	
		
        <?php require 'templates/pageheader.php' ?>	
        
		<!-- BEGIN .section -->
		<div class="section">
			
			<ul class="columns-content page-content clearfix">
				
				<!-- BEGIN .col-main -->
				<li class="col-main">
		
				<h2 class="page-title">My Account</h2>
			     <form action="" method="POST">
            		<ul class="columns-2 checkout-form clearfix">
					<div class=" clearfix">
					 <?php echo isset($msg) ? $msg : '' ; ?>
                        
                        <input class="half-input fl" required="" type="text" name="user_username" placeholder="Username" />
                        <input class="half-input fr" required="" type="text" name="user_email" placeholder="Email" />
						<input class="half-input fl" required="" type="password" name="user_password"  placeholder="Password" />
                        <input class="half-input fr" required="" type="password" name="reuser_password"  placeholder="RePassword" />
					
						<input class="half-input fl" required="" type="text" name="user_firstname" placeholder="First Name" />
						<input class="half-input fr" required="" type="text" name="user_lastname" placeholder="Last Name" />
					
						<input class="half-input fl" type="text" name="user_company" placeholder="Company" />
					
						<input class="half-input fr" type="text" name="user_address" placeholder="Address" />
					
						<input class="half-input fl" type="text" name="user_city" placeholder="City" />
						<input class="half-input fr" type="text" name="user_postcode" placeholder="Post Code" />
					
						<input class="half-input fl" type="text" name="user_country" placeholder="Country" />
						<input class="half-input fr" type="text" name="user_state" placeholder="State"/>
					
						
						<input class="half-input fr" required="" type="text" name="user_phone" placeholder="Phone"  />
					   
					</div>
                    <input class="button2" type="submit" name="submit"  value="Register"/>
				</ul>
            </form>
            
            
            		
            			<!-- END .col-main -->
            			</li>
				
				<?php require 'templates/sidebar.php' ?>
                
			</ul>
			
		<!-- END .section -->
		</div>

<?php require 'templates/footer.php' ?>	