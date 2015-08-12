<?php
    if(isset($_GET['id']))
    {
        $obj = get_product_by_id( intval($_GET['id']) );
        
        if($_POST['submit'])
        {
            extract($_POST);
            update_product(intval($_GET['id']), $prod_name, $prod_cateid, $prod_description, $prod_images, $prod_price, $prod_features, $prod_specs, $prod_delivery);
            $msg = alert_success('Cập nhật thành công !');
        }
    } else {
        redirect_url('?module='.$module);
    }
    