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
                                <div class="span3">Category name :</div>
                                <div class="span3"><input type="text" required="" name="cate_name" value="<?php echo $obj->cate_name ?>" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3"></div>
                                <div class="span3"><input class="btn" type="submit" name="submit" value="Cập nhật"/></div>
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