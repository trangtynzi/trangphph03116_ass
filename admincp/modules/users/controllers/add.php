<?php
    notlogin(); 
    if(isset($_POST['submit']))
    {
        extract($_POST);
        if($user_admin != 1){$user_admin=0;};
        if($reuser_password == $user_password && $reuser_password != '')
        {
            insert_user($user_username,$user_password,$user_firstname,$user_lastname,$user_company,$user_address,$user_city,$user_postcode,$user_country,$user_state,$user_email,$user_phone,$user_admin);
            $msg = alert_success('Thêm mới thành công !');
        } else {
            $msg = alert_error('Hai mật khẩu không khớp !');
        }     
            
    }