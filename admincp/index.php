<?php
    session_start();
    require '../config.php';
    require '../libraries/mysql/query.php';
    require '../functions/function.php';
        
    if(isset($_GET['module']))
    {
        $module = $_GET['module'];
        if(isset($_GET['action']))
        {
            $action = $_GET['action'];
        } else {
            $action = 'index';
        }
    } else {
        $module = 'index';
        $action = 'index';
    }
    
    $path_module = 'modules/'.$module;
    if(is_dir($path_module))
    {
        // require all model
        $dirs = scandir('modules/');
        foreach ($dirs as $dir) {
            if ($dir === '.' or $dir === '..') continue;
            if (is_dir('modules/'.$dir)) {
                $model = 'modules/'.$dir.'/models/model.php';
                if( file_exists($model) )
                {
                    require $model;
                }
            }
        }
        
        $path_control = 'modules/'.$module.'/controllers/'.$action.'.php';
        $path_view = 'modules/'.$module.'/views/'.$action.'.php';
        if( file_exists( $path_view ) )
        {
            if( file_exists( $path_control ) )
            {
                require $path_control;
            }
            require $path_view;
        } else {
            echo "Not found view <i>". $path_view ."</i>";
        }
    } else {
        echo "Not found module <i>". $module ."</i>";
    }
    