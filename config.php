<?php
    /************************************
    * XHN CMS                           *
    * Author : Xuan Hong                *
    * Website : http://xuanhongnet.com  *
    * E-mail : design@xuanhongnet.com   *
    *************************************/
    // Config connect
    $host = 'localhost';
    $dbname = 'organic';
    $dbuser = 'root';
    $dbpass = '';
    // Config site
    $xhn_version = '1.2'; // Phien ban XHN CMS
    $currency = "VNĐ";
    // Const URL
    //define('URLBASE','http://localhost/organic';
    define('DIRSITE',dirname(__FILE__));
    define('DIRADMINCP',DIRSITE.'/admincp');
    $db = new PDO("mysql:host=$host;dbname=$dbname","$dbuser","$dbpass");