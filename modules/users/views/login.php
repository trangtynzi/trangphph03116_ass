<?php require 'templates/header.php' ?>	
		
        <?php require 'templates/pageheader.php' ?>	
        
		<!-- BEGIN .section -->
		<div class="section">
			
			<ul class="columns-content page-content clearfix">
				
				<!-- BEGIN .col-main -->
				<li class="col-main">
		
				<h2 class="page-title">Login</h2>
			
            		<form method="post" id="loginform">
            			<?php echo isset($msg) ? $msg : '' ; ?>
            			<div class="field-row">
            				<label for="username">Username <span class="required">*</span></label>
            				<input type="text" class="text_input" name="username" id="username"/>
            			</div>
            	
            			<div class="field-row">
            				<label for="username">Password <span class="required">*</span></label>
            				<input type="password" class="text_input" name="password" id="password"/>
            			</div>
            			
            			<p class="form-row">
                            <input type="submit" class="button2" name="submit" value="Login"/>
            			</p>
            		</form>
            
            
            
            		
            			<!-- END .col-main -->
            			</li>
				
				<?php require 'templates/sidebar.php' ?>
                
			</ul>
			
		<!-- END .section -->
		</div>

<?php require 'templates/footer.php' ?>	