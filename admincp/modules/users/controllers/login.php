<?php

    logined();
    if(isset($_POST['submit']))
    {
        if(login_admincp($_POST['username'],$_POST['password'])==true)
        {
            $msg = "<span style='color:green'>Đăng nhập thành công !</span>";
            redirect_time('?module='.$module,1);
        } else {
            $msg = "<span style='color:red'>Đăng nhập sai !</span>";
        }
    }
    