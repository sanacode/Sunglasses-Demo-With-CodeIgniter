<?php
	// Tạo đối tượng theo biến $c (mặc định để product)
    $categories = new $c();
	
    $result = $categories->getlist();
    
    define('ACTION','view');
?>