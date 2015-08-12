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
                delete_category($obj);
            }
        } else {
            $msg = alert_error('Vui lòng chọn một đối tượng !');
        }
    }