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
                                <div class="span3">Product name :</div>
                                <div class="span3"><input type="text" required="" name="prod_name" value="<?php echo $obj->prod_name ?>" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Category name :</div>
                                <div class="span3">
                                    <select name="prod_cateid">
                                    <?php foreach(get_all_categories() as $cat){ ?>
                                    <option <?php if($obj->prod_cateid==$cat->cate_id){echo 'selected';} ?> value="<?php echo $cat->cate_id ?>"><?php echo $cat->cate_name ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Description :</div>
                                <div class="span9"><textarea name="prod_description" class="ckeditor" id="ckeditor"><?php echo $obj->prod_description ?></textarea></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Images :</div>
                                <div class="span6">
                                    <textarea id="xFilePath" name="prod_images"><?php echo $obj->prod_images ?></textarea>
                                    <button onclick="BrowseServer();return false" class="btn">Choose</button>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Price :</div>
                                <div class="span6"><input value="<?php echo $obj->prod_price ?>" type="text" required="" name="prod_price" /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Product Features :</div>
                                <div class="span9"><textarea name="prod_features" class="ckeditor" id="ckeditor"><?php echo $obj->prod_features ?></textarea></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Technical Specs :</div>
                                <div class="span9"><textarea name="prod_specs" class="ckeditor" id="ckeditor"><?php echo $obj->prod_specs ?></textarea></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Delivery :</div>
                                <div class="span9"><textarea name="prod_delivery" class="ckeditor" id="ckeditor"><?php echo $obj->prod_delivery ?></textarea></div>
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