<?php

    function selects($sql)
    {
        global $db;
        $obj = $db->prepare($sql);
        $obj -> execute();
        $obj = $obj -> fetchAll(PDO::FETCH_OBJ);
        return $obj;
    }
    function select($sql)
    {
        global $db;
        $obj = $db->prepare($sql);
        $obj -> execute();
        $obj = $obj -> fetch(PDO::FETCH_OBJ);
        return $obj;
    }
    function run($sql)
    {
        global $db;
        $obj = $db->prepare($sql);
        $obj -> execute();
    }