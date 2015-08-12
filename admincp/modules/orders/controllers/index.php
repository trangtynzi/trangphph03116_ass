<?php
    notlogin(); 
    if($_POST['edit'])
    {
        if( count($_POST['ckb']) > 0 )
        {
            redirect_url('?module='.$module.'&action=edit&id='.$_POST['ckb'][0]);
        } else {
            $msg = alert_error('Vui lòng chọn 1 đối tượng !');
        }
    }
    if($_POST['add'])
    {
        redirect_url('?module='.$module.'&action=add');
    }
    if($_POST['del'])
    {
        if( count($_POST['ckb']) > 0 )
        {
            foreach($_POST['ckb'] as $obj)
            {
                $user_obj = get_user_by_id($obj);
                if($user_obj->user_admin != 1 || $user_obj->user_id != $_SESSION['user_id'])
                {
                    delete_user($obj);
                } else {
                    
                }
            }
        } else {
            $msg = alert_error('Vui lòng chọn một đối tượng !');
        }
    }