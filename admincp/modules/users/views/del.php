<?php 
    require 'views/templates/head.php';
?>
<body>
    <?php 
    require 'views/templates/header.php';
    require 'views/templates/menu.php';
    ?>
    <div class="content">

        <div class="breadLine">
            <ul class="breadcrumb">
                <li><a href="?module=index">Bảng điều khiển</a> <span class="divider">></span></li>                
                <li class="active"><?php echo get_module() ;?></li>
            </ul>
        </div>
        
        <div class="workplace">
            
            <div class="row-fluid">
                
                <div class="span12">                 
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1><?php echo get_module() ;?></h1>
                        <ul class="buttons">
                            <li><a href="?module=users&action=add"><span class="isw-plus"></span></a></li>
                        </ul>                            
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
                    <?php echo isset($msg)? $msg : '' ?> 
                    <form action="" method="POST">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
                            <thead>
                                <tr>
                                    <th width="1%"><input type="checkbox" name="checkall"/></th>
                                    <th width="20%">Họ tên</th>
                                    <th width="20%">Tài khoản</th>
                                    <th width="20%">E-mail</th>
                                    <th width="20%">Phone</th>                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $obj = get_all_user();
                                if(count($obj) > 0)
                                {
                                foreach ($obj as $r) { 
                                    
                                
                                if(isset($_POST[$r->user_id]) && $_POST[$r->user_id] == 'on')
                                {
                                    $check_array[] = $r->user_id;
                                    
                                }
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="<?php echo $r->user_id ?>"/></td>
                                    <td><?php echo $r->user_fullname ?></td>
                                    <td><?php echo $r->user_name ?></td>
                                    <td><?php echo $r->user_email ?></td>
                                    <td><?php echo $r->user_phone ?></td>                             
                                </tr>
                                <?php }
                                // End For
                                    // Edit
                                    if(isset($_POST['edit']))
                                    {
                                        if($check_array == null)
                                        {
                                            echo alert_error('Vui lòng chọn 1 đối tượng !');
                                        } else {
                                            if(count($check_array) == 1){
                                                echo alert_success("Do some thing!");
                                                $id = $check_array[0];
                                                redirect_url('?module=users&action=edit&id='.$id);
                                            } else {
                                                echo alert_error('Chỉ được chọn 1 đối tượng !');
                                            }                                        
                                        }   
                                    }
                                    // Del
                                    if(isset($_POST['del']))
                                    {
                                        if($check_array == null)
                                        {
                                            echo alert_error('Vui lòng chọn 1 đối tượng !');
                                        } else {
                                            $id = null;
                                            foreach($check_array as $r)
                                            {
                                                $id .= $r.",";
                                            }
                                            redirect_url('?module=users&action=del&id='.$id);                                     
                                        }
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>".alert_error('Không có bản ghi nào !')."</td></tr>";
                                } ?>                          
                            </tbody>
                        </table>
                        <input class="btn" type="submit" name="edit" value="Sửa" />
                        <input class="btn" type="submit" name="del" value="Xóa" />
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