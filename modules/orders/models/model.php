<?php

    function insert_order($orde_userid,$orde_details)
    {
        $orde_time = time();
        $sql = "INSERT INTO `orders` 
        (`orde_id`, `orde_time`, `orde_userid`, `orde_details`, `orde_status`) VALUES 
        (NULL, '$orde_time', '$orde_userid', '$orde_details', '0');";
        run($sql);
    }