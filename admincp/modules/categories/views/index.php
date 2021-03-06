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
                        <div class="isw-grid"></div>
                        <h1><?php echo ucfirst($module) ;?></h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
                    <form action="" method="POST">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>
                                    <th width="1%"><input type="checkbox" name="checkall"/></th>
                                    <th width="20%">Tên chuyên mục</th>                           
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $obj = get_all_categories();
                                if(count($obj) > 0)
                                {
                                foreach ($obj as $r) { 
                                    
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="ckb[]" value="<?php echo $r->cate_id ?>"/></td>
                                    <td><?php echo $r->cate_name ?></td>                            
                                </tr>
                                <?php }
                                // End For
                                } else {
                                    echo "<tr><td colspan='5'>".alert_error('Không có bản ghi nào !')."</td></tr>";
                                } ?>                          
                            </tbody>
                        </table>
                        <input class="btn" type="submit" name="add" value="Thêm" />
                        <input class="btn" type="submit" name="edit" value="Sửa" />
                        <input class="btn" type="submit" name="del" value="Xóa"  onclick="return confirmdel()"/>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>                                
                
            </div>            
            
            <div class="dr"><span></span></div>            
            
        </div>
        
    </div>   
    
</body>
</html>