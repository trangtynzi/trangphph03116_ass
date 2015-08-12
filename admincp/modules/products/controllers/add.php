<?php
    notlogin(); 
    if(isset($_POST['submit']))
    {
        extract($_POST);
        insert_product($prod_name, $prod_cateid, $prod_description, $prod_images, $prod_price, $prod_features, $prod_specs, $prod_delivery);
        $msg = alert_success('Thêm mới thành công !');
    }