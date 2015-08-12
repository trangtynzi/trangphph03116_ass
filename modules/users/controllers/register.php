<?php

    if(isset($_POST['submit']))
    {
        extract($_POST);
        if($user_password == $reuser_password)
        {
            insert_user($user_username,$user_password,$user_firstname,$user_lastname,$user_company,$user_address,$user_city,$user_postcode,$user_country,$user_state,$user_email,$user_phone,0);
            $msg = "<p style='color:green'>Đăng kí thành công</p>";
        } else {
            $msg = "<p style='color:red'>Hai mật khẩu không khớp</p>";
        }
        
    }