<?php
	// Tạo đối tượng theo biến $c (mặc định để product)

    $product = new $c();

    $result = $product->getlist();

    define('ACTION','view');
?>