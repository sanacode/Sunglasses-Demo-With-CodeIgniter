<?php

// Tạo đối tượng theo biến $c (mặc định để product)
    $categories = new $c();
	
    $categories->idcategories = $_GET['idcategories'];
    
	if(isset($_POST['submit'])){
		
		$categories->catname = $_POST['catname'];
		$categories->public = $_POST['public'];
		$categories->position = $_POST['position'];

        $categories->update();	// Insert dữ liệu

        header("Location:?c=categories");	// Trở về trang view categories
	
    }
    
    // Lấy thông tin danh mục categories
    $row = $categories->getbyid($categories->idcategories);

define('ACTION','form');
?>