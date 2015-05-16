<?php
    // Tạo đối tượng theo biến $c (mặc định để orderdetail)
    $order_detail = new product();
    
    if(isset($_GET['idproduct'])){
        // Xóa dữ liệu trong bảng orderdetail
        $sql = "DELETE FROM `orderdetail` WHERE `idproduct`='".$_GET['idproduct']."'";
        $order_detail->exec($sql);
    }

    header("Location:?c=order");
?>