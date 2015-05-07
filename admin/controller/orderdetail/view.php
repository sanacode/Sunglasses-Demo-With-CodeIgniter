<?php

if(isset($_GET['idorder'])){
    $idorder = $_GET['idorder'];
    
    // Tạo đối tượng
    $order_detail = new product();
    
    // Lấy thông tin chi tiết hóa đơn
    $sql = "SELECT * FROM `orderdetail` WHERE `idorder`='$idorder'";
    $result = $order_detail->get($sql);

}else{
    header("Location:?c=order");
}
define('ACTION','view');
?>