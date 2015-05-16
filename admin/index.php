<?php
   // Kết nối config
    require("config.php");

    // Kiểm tra đã đăng nhập chưa
    if(!isset($_SESSION['(*)v(*)'])) header("Location:login.php");

    // Kết nối tới CSDL trong model
    switch ($c) {
       case 'home': $c='product'; require("model/product.php"); break;
       case 'orderdetail': require("model/product.php"); break;
       default : require("model/$c.php");
    }

    // Kết nối tới Controller
    include('controller/'.$c.DS.$a.'.php');

    // Kết nối tới template views
    include('views/'.TEMPLATE_NAME.'/index.tpl.php');
?>