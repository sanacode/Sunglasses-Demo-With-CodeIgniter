<?php

// Tạo đối tượng theo biến $c (mặc định để product)
    $categories = new $c();
	
	if(isset($_POST['submit'])){
		
		$categories->catname = $_POST['catname'];
		$categories->public = $_POST['public'];
		$categories->position = $_POST['position'];

        $categories->insert();	// Insert dữ liệu

        header("Location:?c=categories");	// Trở về trang view categories
	
    }

define('ACTION','form');
?>