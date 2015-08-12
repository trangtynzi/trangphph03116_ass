<?php 
    require 'templates/head.php';
?>
<body>
    <?php 
    require 'templates/header.php';
    require 'templates/menu.php';
    ?>
    <div class="content">

        <div class="breadLine">
            <ul class="breadcrumb">
                <li><a>Bảng điều khiển</a> <span class="divider">></span></li>                
                <li class="active"><?php echo ucfirst($module) ;?><span class="divider">></span></li>
                <li class="active"><?php echo ucfirst($action) ;?></li>
            </ul>
        </div>
        
        <div class="workplace">
            
            <div class="row-fluid">
                
                <div class="span12">
                <?php echo isset($msg)? $msg : '' ?>
                    <div class="head">
                        <div class="isw-documents"></div>
                        <h1><?php echo ucfirst($module) ;?></h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">     
                    
                        <form action="" method="POST">
                            <div class="row-form">
                                <div class="span3">Username :</div>
                                <div class="span3"><input type="text" required="" name="user_username" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Password :</div>
                                <div class="span3"><input type="text" required="" name="user_password" /><input placeholder="Nhập lại mật khẩu" type="text" required="" name="reuser_password" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">First Name :</div>
                                <div class="span3"><input type="text" required="" name="user_firstname" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Last Name :</div>
                                <div class="span3"><input type="text" required="" name="user_lastname" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Company :</div>
                                <div class="span3"><input type="text" name="user_company" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Address :</div>
                                <div class="span3"><input type="text" name="user_address" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">City :</div>
                                <div class="span3"><input type="text" name="user_city" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">PostCode :</div>
                                <div class="span3"><input type="text" name="user_postcode" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Country :</div>
                                <div class="span3"><input type="text" name="user_country" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">State :</div>
                                <div class="span3"><input type="text" name="user_state" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Email :</div>
                                <div class="span3"><input type="text" required="" name="user_email" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Phone :</div>
                                <div class="span3"><input type="text" required="" name="user_phone" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Admin :</div>
                                <div class="span3"><input type="checkbox" name="user_admin" value="1" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3"></div>
                                <div class="span3"><input class="btn" type="submit" name="submit" value="Thêm"/></div>
                                <div class="clear"></div>
                            </div>                                               
                        </form>
                        
                    </div>
                </div>
                
            </div>
            
            <div class="dr"><span></span></div>            
            
        </div>
        
    </div>   
    
</body>
</html>