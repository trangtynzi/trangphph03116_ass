<?php
    function get_all_categories()
    {
        return selects("SELECT * FROM `categories`");
    }
    function get_category_by_id($id)
    {
        return select("SELECT * FROM `categories` WHERE `cate_id` = '$id'");
    }
    function update_category($id,$cate_name)
    {
        $sql = "UPDATE `categories` SET `cate_name` = '$cate_name' WHERE `cate_id` = '$id'";
        run($sql);
    }
    function delete_category($id)
    {
        $sql = "DELETE FROM `categories` WHERE `cate_id` = '$id';";
        run($sql);
    }
    
    function insert_category($cate_name)
    {
        $sql = "INSERT INTO `categories` (`cate_id`, `cate_name`) VALUES (NULL, '$cate_name')";
        run($sql);
    }