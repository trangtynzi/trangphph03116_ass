<?php

    if(isset($_GET['id']))
    {
        $id = intval($_GET['id']);
        
        if(isset($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id]['qty'] += 1;
        } else {
            $_SESSION['cart'][$id]['id'] = $id;
            $_SESSION['cart'][$id]['qty'] = 1;
        }
    }
    redirect_url('?module=cart');