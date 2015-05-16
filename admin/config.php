<?php
    session_start();
    define('BASEPATH','(*)____(*)');
    include('../application/config/database.php');

    $host = $db['default']['hostname'];
    $user = $db['default']['username'];
    $pass = $db['default']['password'];
    $dbname = $db['default']['database'];

    require("model/connect.php"); // Kết nối connect

    define('DS','/');
    define('TEMPLATE_NAME','matkinh');


        // Kiểm tra Controller
    if(isset($_GET['c']) && is_dir('controller/'.$_GET['c']))
    	$c = str_replace(array('.','/','%'),array('','',''),$_GET['c']);
    elseif(isset($_GET['c']) && file_exists('controller/'.$_GET['c'].'.php'))
        $c = str_replace(array('.','/','%'),array('','',''),$_GET['c']);
    else
        $c = 'home';

    // Kiểm tra Action
    if(isset($_GET['a']) && file_exists('controller/'.$c.DS.$_GET['a'].'.php'))
    	$a = str_replace(array('.','/','%'),array('','',''),$_GET['a']);
    else
        $a = 'view';


?>