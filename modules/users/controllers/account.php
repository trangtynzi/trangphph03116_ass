<?php
    notlogin(); 
    $obj = get_user_by_id($_SESSION['user_id']);
    $id = $obj->user_id;
    if($_POST['submit'])
    {
        extract($_POST);
        if($user_admin != 1){$user_admin=0;};
        if($user_password ==''){$user_password=$obj->user_password;} else {$user_password=md5($user_password);};
        $user_admin = $obj->user_admin;
        update_user($id,$user_username,$user_password,$user_firstname,$user_lastname,$user_company,$user_address,$user_city,$user_postcode,$user_country,$user_state,$user_email,$user_phone,$user_admin);
        $msg = alert_success('Cập nhật thành công');;
    }