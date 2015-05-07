<?php
    // Tạo đối tượng theo biến $c (mặc định để customer)
    $customer = new $c();
    
    if(isset($_GET['idcustomer'])){
        $customer->idcustomer = $_GET['idcustomer'];
        $customer->delete();
    }

    header("Location:?c=customer");
?>