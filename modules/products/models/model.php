<?php
    function get_all_products()
    {
        return selects("SELECT * FROM `products`");
    }
    function get_product_by_id($id)
    {
        return select("SELECT * FROM `products` WHERE `prod_id` = '$id'");
    }
    function update_product($id, $prod_name, $prod_cateid, $prod_description, $prod_images, $prod_price, $prod_features, $prod_specs, $prod_delivery)
    {
        $sql = "UPDATE `products` SET 
        `prod_name` = '$prod_name',
        `prod_cateid` = '$prod_cateid',
        `prod_description` = '$prod_description',
        `prod_images` = '$prod_images',
        `prod_price` = '$prod_price',
        `prod_features` = '$prod_features',
        `prod_specs` = '$prod_specs',
        `prod_delivery` = '$prod_delivery'  
         WHERE `prod_id` = '$id'";
        run($sql);
    }
    function delete_product($id)
    {
        $sql = "DELETE FROM `products` WHERE `prod_id` = '$id';";
        run($sql);
    }
    
    function insert_product($prod_name, $prod_cateid, $prod_description, $prod_images, $prod_price, $prod_features, $prod_specs, $prod_delivery)
    {
        $sql = "INSERT INTO `products` 
        (`prod_id`, `prod_name`, `prod_cateid`, `prod_description`, `prod_images`, `prod_price`, `prod_features`, `prod_specs`, `prod_delivery`) VALUES 
        (NULL, '$prod_name', '$prod_cateid', '$prod_description', '$prod_images', '$prod_price', '$prod_features', '$prod_specs', '$prod_delivery')";
        run($sql);
    }