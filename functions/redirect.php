<?php
/*
* XHN CMS 1.0
* Author : Xuan Hong
* Website : http://xuanhongnet.com
* E-mail : design@xuanhongnet.com
*/
    function redirect_url($url)
    {
        header("Location: $url");
    }
    function redirect_url_js($url)
    {
        echo "<script>location.href='".$url."'</script>";
    }
    function logined($url='?module=users')
    {
        if(isset($_SESSION['user_id']))
        {
            redirect_url($url);
        }
    }
    
    function notlogin()
    {
        if(!isset($_SESSION['user_id']))
        {
            redirect_url('?module=users&action=login');
        }
    }
    function redirect_time($url,$time)
    {
        echo "<meta http-equiv='refresh' content='{$time}; url={$url}' />";
    }
