<?php
    logined($url='?module=cart');
    if(isset($_POST['submit']))
    {
        if(login($_POST['username'],$_POST['password'])==true)
        {
            $msg = "<span style='color:green'>Đăng nhập thành công !</span>";
            redirect_time('?module=users&action=account',1);
        } else {
            $msg = "<span style='color:red'>Đăng nhập sai !</span>";
        }
    }
    