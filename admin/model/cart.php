<?php
include "model/product.php";

function add_item($key, $quantity) {

    $pro = new product();
    
    $pros = $pro->getbyid($key);
    //$soluongtonkho = $pros['kho'];
    if (isset($_SESSION['cart'][$key])) {
        $quantity +=$_SESSION['cart'][$key]['qty'];
        update_item($key, $quantity);
        return;
    }

    $price = ($pros['sale']>0?$pros['sale']:$pros['price']);
    $total = $price * $quantity;
    $item = array(
        'name' => $pros['name'],
        'pimage' => $pros['pimage'],
        'price' => $price,
        'qty' => $quantity,
        'total' => $total
    );

    $_SESSION['cart'][$key] = $item;
}

function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if ($quantity <= 0) {
        unset($_SESSION['cart'][$key]);
    } else {
        $_SESSION['cart'][$key]['qty'] = $quantity;
        $total = $_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['qty'];
        $_SESSION['cart'][$key]['total'] = $total;
    }
}

function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal = number_format($subtotal);
    return $subtotal;
}

?>
