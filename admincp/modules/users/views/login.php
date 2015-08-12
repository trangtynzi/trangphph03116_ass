<?php require 'templates/head.php';
?>
<body>
    
    <div class="loginBox">        
        <div class="loginHead">
            <img src="templates/img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/>
        </div>
        <form class="form-horizontal" action="" method="POST">            
            <div class="control-group">
                <label for="username">Username</label>                
                <input type="text" id="username" name="username" value="<?php echo isset($_POST['username'])? $_POST['username'] : '' ?>"/>
            </div>
            <div class="control-group">
                <label for="password">Password</label>                
                <input type="password" id="password" name="password"/>                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block" name="submit">Sign in</button>
            </div>
            <div class="form-actions">
                <?php echo isset($msg)? $msg : '' ?>
            </div>
        </form>        
        
    </div>    
    
</body>
<?php require 'templates/foot.php';?>