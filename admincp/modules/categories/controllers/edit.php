<?php
    if(isset($_GET['id']))
    {
        $obj = get_category_by_id( intval($_GET['id']) );
        
        if($_POST['submit'])
        {
            extract($_POST);
            update_category(intval($_GET['id']), $cate_name);
            $msg = alert_success('Cập nhật thành công !');
        }
    } else {
        redirect_url('?module='.$module);
    }
    