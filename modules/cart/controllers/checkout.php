<?php

    if($_POST['submit'])
    {
        notlogin();
        insert_order($_SESSION['user_id'],json_encode($_SESSION['cart']));
        unset($_SESSION['cart']);
        redirect_url('?module=users&action=account');
    }