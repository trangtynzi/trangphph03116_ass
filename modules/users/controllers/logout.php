<?php
    notlogin(); 
    unset($_SESSION['user_id']);
    redirect_url('?module='.$module.'&action=login');