<?php

    // Tạo đối tượng theo biến $c (mặc định để categories)
    $categories = new $c();
    
    if(isset($_GET['idcategories'])){
        $categories->idcategories = $_GET['idcategories'];
        
        // Xóa categories
        $categories->delete();
        header("Location:index.php");
    }
    
?>