<?php
/*
* XHN CMS 1.0
* Author : Xuan Hong
* Website : http://xuanhongnet.com
* E-mail : design@xuanhongnet.com
*/
    function cut_text($text,$len){
        $text = strip_tags($text);
        $ext = " ...... ";
        if (strlen($text) < $len) {
            return $text . $ext;
        }
        $text_words = explode(' ', $text);
        $out = null;
        foreach ($text_words as $word) {
            if ((strlen($word) > $len) && $out == null) {
                return substr($word, 0, $len) . $ext;
            }
            if ((strlen($out) + strlen($word)) > $len) {
                return $out . $ext;
            }
            $out.= " " . $word;
        }
        return $out;
    }
    function file_name_image($img)
    {
        $img = explode('/',$img);
        $i = count($img);
        $i--;
        return $img[$i];
    }
    function get_thumb($texthtml)
    {
        $output = preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $texthtml, $matches);  
        $thumb3 = $matches[1][0];
        
        $file_headers = @get_headers($file);
        
        if($file_headers[0] != 'HTTP/1.1 404 Not Found') {
            $img = $thumb3;
        } else {
            $img = XHN_URLSITE."/public/batdongsan/images/no-thumb.jpg";
        }
        return $img;
    }
    function get_breadcrumb()
    {
        if(isset($_GET['action']))
        {
            $breadcrumb = $_GET['action'];
            $breadcrumb = explode('_',$breadcrumb);
            $action = $breadcrumb[0];
            $obj = $breadcrumb[1];
            $breadcrumb = ucfirst($action) . " " . ucfirst($obj);
            return $breadcrumb;
        } else {
            return null;
        }
        
    }
    function get_url_current()
    {
        return $_SERVER['HTTP_REFERER'];
    }
    function get_url_image($url)
    {
        $url = explode('/',$url);
        $count = count($url);
        $url = $url[$count-3] .'/'. $url[$count-2] .'/'. $url[$count-1];
        return $url;
    }
    function get_return()
    {
        if(isset($_GET['return']))
        {
            redirect_url('?page='.$_GET['return']);
        } else {
            redirect_url('?page=index');
        }
    }
    function get_module()
    {
        return isset($_GET['module'])? ucfirst($_GET['module']): '' ;
    }
    function active_menu($menu)
    {
        if(isset($_GET['module']) && $_GET['module'] == $menu){ echo 'active' ;};
    }
    function keep_select($name,$i)
    {
        if(isset($_POST[$name]) && $_POST[$name] == $i ){ echo 'selected';};
    }
    function get_selected($value,$i)
    {
        if($value == $i ){ echo 'selected';};
    }
    function get_must_input()
    {
        echo "(<font color=red>*</font>)<font color=red> bắt buộc</font>";
    }
    function keep_value($name,$default)
    {
        if(isset($_POST[$name])){ echo $_POST[$name];} else { echo $default;}
    }
    function convert_yes_no($number)
    {
        if($number == 1){
            return 'có';
        } else {
            return 'không';
        }
    }
    function get_image($url)
    {
        return $url;
    }
    function get_alias($string)
    {
        $str = str_replace('-', ' ', $string);
       $utf8characters = 'à|a, ả|a, ã|a, á|a, ạ|a, ă|a, ằ|a, ẳ|a, ẵ|a, ắ|a, ặ|a, â|a, ầ|a, ẩ|a, ẫ|a, ấ|a, ậ|a, đ|d, è|e, ẻ|e, ẽ|e, é|e, ẹ|e, ê|e, ề|e, ể|e, ễ|e, ế|e, ệ|e, ì|i, ỉ|i, ĩ|i, í|i, ị|i, ò|o, ỏ|o, õ|o, ó|o, ọ|o, ô|o, ồ|o, ổ|o, ỗ|o, ố|o, ộ|o, ơ|o, ờ|o, ở|o, ỡ|o, ớ|o, ợ|o, ù|u, ủ|u, ũ|u, ú|u, ụ|u, ư|u, ừ|u, ử|u, ữ|u, ứ|u, ự|u, ỳ|y, ỷ|y, ỹ|y, ý|y, ỵ|y, À|A, Ả|A, Ã|A, Á|A, Ạ|A, Ă|A, Ằ|A, Ẳ|A, Ẵ|A, Ắ|A, Ặ|A, Â|A, Ầ|A, Ẩ|A, Ẫ|A, Ấ|A, Ậ|A, Đ|D, È|E, Ẻ|E, Ẽ|E, É|E, Ẹ|E, Ê|E, Ề|E, Ể|E, Ễ|E, Ế|E, Ệ|E, Ì|I, Ỉ|I, Ĩ|I, Í|I, Ị|I, Ò|O, Ỏ|O, Õ|O, Ó|O, Ọ|O, Ô|O, Ồ|O, Ổ|O, Ỗ|O, Ố|O, Ộ|O, Ơ|O, Ờ|O, Ở|O, Ỡ|O, Ớ|O, Ợ|O, Ù|U, Ủ|U, Ũ|U, Ú|U, Ụ|U, Ư|U, Ừ|U, Ử|U, Ữ|U, Ứ|U, Ự|U, Ỳ|Y, Ỷ|Y, Ỹ|Y, Ý|Y, Ỵ|Y, "|, &|';
       $replacements = array();
       $items = explode(',', $utf8characters);
       foreach ($items as $item) {
       @list($src, $dst) = explode('|', trim($item));
       $replacements[trim($src)] = trim($dst);
       }
       $str = trim(strtr($str, $replacements));
       $str = trim(strtolower($str));
       $str = preg_replace('/(\s|[^A-Za-z0-9\-])+/', '-', $str);
       $str = trim($str, '-');
       return $str;
    }
    function get_data_rss()
    {
        /*$file = 'rss.xml';
        $rss = get_all_rss_active();
        file_put_contents($file,'');
        $data = '';
        foreach($rss as $obj)
        {
            $xml = file_get_contents($obj->rss_url);
            $data .= $xml;
        }
        file_put_contents($file,$data);
        */
        $rss = get_rss_by_id(1);
        $xml1 = file_get_contents($rss->rss_url);
        $xml = file_get_contents('public/iframe/rss.xml');
        if($xml1 != $xml)
        {
            file_put_contents('public/iframe/rss.xml',$xml1);
        }
    }
    function get_item_menu($link)
    {
        global $extensions;
        return XHN_URLSITE.'/'.$link.$extensions;
    }
    function get_thumb_youtube($link)
    {
        $link = explode('?v=',$link);
        $img = $link[1];
        return $thumb = "http://i.ytimg.com/vi/{$img}/default.jpg";
    }
    function get_menu_active($obj)
    {
        if( isset($_GET['page']) && $_GET['page'] == $obj)
        {
            return 'menu_active';
        } else {
            if( (isset($_GET['cid']) || isset($_GET['pid'])) && $obj == 'news')
            {
                return 'menu_active';
            }
        }
    }
    function get_nav_active($obj)
    {
        if( isset($_GET['cid']) && $_GET['cid'] == $obj)
        {
            return 'nav_active';
        }
    }
    function get_name_image($link)
    {
        $obj = explode('/',$link);
        return array_pop($obj);
    }
    function get_time_by_sql($file)
    {
        $file = explode('-',$file);
        return $file[2];
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    