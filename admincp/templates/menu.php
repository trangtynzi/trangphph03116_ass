<div class="menu">                
    <div class="breadLine">            
        <div class="arrow"></div>
        <div class="adminControl active">
            <?php 
                    $userlogin = get_user_by_id($_SESSION['user_id']);
            ?>
            Xin chào, <?php echo $userlogin->user_firstname.' '.$userlogin->user_lastname ?>
        </div>
    </div>
    
    <div class="admin">
        <div class="image">
            <img src="templates/img/users/icon_account.jpg" class="img-polaroid"/>                
        </div>
        <ul class="control">
            <li><span class="icon-cog"></span> <a href="?module=users&action=account">Tài khoản</a></li>
            <li><span class="icon-share-alt"></span> <a href="?module=users&action=logout">Thoát</a></li>
        </ul>
    </div>
    
    <ul class="navigation">            
        <li class="<?php active_menu('index') ?>">
            <a href="?module=index">
                <span class="isw-grid"></span><span class="text">Bảng điều khiển</span>
            </a>
        </li>
        <li class="<?php active_menu('categories');active_menu('products');active_menu('orders') ?> openable">
            <a href="">
                <span class="isw-folder"></span><span class="text">Shop</span>
            </a>
            <ul>
                <li>
                    <a href="?module=categories">
                        <span class="icon-folder-open"></span><span class="text">Chuyên mục</span>
                    </a>                  
                </li>
                <li>
                    <a href="?module=products">
                        <span class="icon-barcode"></span><span class="text">Sản phẩm</span>
                    </a>                  
                </li> 
                <li>
                    <a href="?module=orders">
                        <span class="icon-shopping-cart"></span><span class="text">Hóa đơn</span>
                    </a>                  
                </li>                  
            </ul>
        </li>
        <li class="<?php active_menu('users') ?>">
            <a href="?module=users">
                <span class="isw-users"></span><span class="text">Người dùng</span>
            </a>
        </li>
    </ul>
           
    <div class="dr"><span></span></div>
    
</div>