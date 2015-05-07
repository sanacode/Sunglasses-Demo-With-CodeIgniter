<?php
    // Tạo đối tượng theo biến $c (mặc định để order)
    $order = new $c();
    
    if(isset($_GET['idorder'])){
        // Xóa dữ liệu trong bảng orderdetail
        $sql = "DELETE FROM `orderdetail` WHERE `idorder`='".$_GET['idorder']."'";
        $order->exec($sql);
        
        // Xóa dữ liệu trong bảng order
        $order->idorder = $_GET['idorder']; 
        $order->delete();
    }

    header("Location:?c=order");
?>