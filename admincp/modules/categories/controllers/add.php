<?php
    notlogin(); 
    if(isset($_POST['submit']))
    {
        extract($_POST);
        insert_category($cate_name);
        $msg = alert_success('Thêm mới thành công !');
    }