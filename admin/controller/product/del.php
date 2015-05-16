<?php

    // Tạo đối tượng theo biến $c (mặc định để product)
    $product = new $c();
    
    if(isset($_GET['idproduct'])){
        $product->idproduct = $_GET['idproduct'];

        // Xóa dữ liệu sản phẩm trong bảng cat_pro
        $sql = "DELETE FROM `cat_pro` WHERE `idproduct`='".$product->idproduct."'";
        $product->exec($sql);
        
        // Xóa ảnh lưu trữ trong thư mục images
        $data = $product->getbyid($product->idproduct);

        if(isset($data['pimage']) && file_exists('../images/'.$data['pimage'])) {
			@unlink('../images/'.$data['pimage']);
		}
        
        // Xóa product
        $product->delete();
        header("Location:index.php");
    }
    
?>