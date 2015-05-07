<?php

// Tạo đối tượng order
$order = new order();
/*$sql = "SELECT * FROM `order` 
            inner join `customer` on (`order`.`idcustomer` = `customer`.`idcustomer`)
        ";
*/
$sql = "SELECT * FROM `order`";
$result = $order->get($sql);

define('ACTION','view');

?>