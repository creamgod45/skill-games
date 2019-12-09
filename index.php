<?php 
    date_default_timezone_set("Asia/Taipei");
    $url = $_SERVER['REQUEST_URI'];
    $REQUEST = explode("/", $url);
    /**
     * # Router Select System
     */    
    $layer   = 2;
    $REQUEST = $REQUEST[$layer];
    switch ($REQUEST) {
        case '': 
            $title = "首頁";
            include "router/home.php";
            break;
        default:
            $title = "404 未找到網頁文件";
            include "router/error_not_found.php";
            break;
    }
?>