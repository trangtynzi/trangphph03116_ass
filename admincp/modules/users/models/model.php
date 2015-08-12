<?php
    function get_all_users()
    {
        return selects("SELECT * FROM `users`");
    }
    function get_user_by_id($id)
    {
        return select("SELECT * FROM `users` WHERE `user_id` = '$id'");
    }
    function login($username,$password)
    {
        foreach(get_all_users() as $obj)
        {
            if($username == $obj->user_username && md5($password) == $obj->user_password)
            {
                $_SESSION['user_id'] = $obj->user_id;
                return true;
            }
        }
    }
    function login_admincp($username,$password)
    {
        foreach(get_all_users() as $obj)
        {
            if($username == $obj->user_username && md5($password) == $obj->user_password && $obj->user_admin == 1)
            {
                $_SESSION['user_id'] = $obj->user_id;
                return true;
            }
        }
    }
    function update_user($id,$user_username,$user_password,$user_firstname,$user_lastname,$user_company,$user_address,$user_city,$user_postcode,$user_country,$user_state,$user_email,$user_phone,$user_admin)
    {
        $sql = "UPDATE `users` SET 
        `user_username` = '$user_username',
        `user_password` = '$user_password',
        `user_firstname` = '$user_firstname',
        `user_lastname` = '$user_lastname',
        `user_company` = '$user_company',
        `user_address` = '$user_address',
        `user_city` = '$user_city',
        `user_postcode` = '$user_postcode',
        `user_country` = '$user_country',
        `user_state` = '$user_state',
        `user_email` = '$user_email',
        `user_phone` = '$user_phone',
        `user_admin` = '$user_admin' 
        WHERE `user_id` = '$id'";
        run($sql);
    }
    function delete_user($id)
    {
        $sql = "DELETE FROM `users` WHERE `user_id` = '$id';";
        run($sql);
    }
    
    function insert_user($user_username,$user_password,$user_firstname,$user_lastname,$user_company,$user_address,$user_city,$user_postcode,$user_country,$user_state,$user_email,$user_phone,$user_admin)
    {
        $sql = "INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_firstname`, `user_lastname`, `user_company`, `user_address`, `user_city`, `user_postcode`, `user_country`, `user_state`, `user_email`, `user_phone`, `user_admin`) VALUES (NULL, '$user_username', MD5('$user_password'), '$user_firstname', '$user_lastname', '$user_company', '$user_address', '$user_city', '$user_postcode', '$user_country', '$user_state', '$user_email', '$user_phone', '$user_admin')";
        run($sql);
    }