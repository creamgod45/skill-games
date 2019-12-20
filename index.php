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
        case 'banner':
            $title = "圖片輪播";
            include "router/banner.php";
            break;
        case 'login':
            $title = "登入";
            include "router/login.php";
            break;
        case 'management':
            $title = "圖形輪播管理模組";
            include "router/management.php";
            break;
        case 'member':
            $title = "會員管理模組";
            include "router/member.php";
            break;
        case 'design':
            $title = "網頁版面設計";
            include "router/design.php";
            break;
        default:
            $title = "404 未找到網頁文件";
            include "router/error_not_found.php";
            break;
    }
?>