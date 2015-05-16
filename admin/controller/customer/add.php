<?php

// Tạo đối tượng theo biến $c (mặc định để product)
    $customer = new $c();

if(isset($_POST['submit'])){
    
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $old_name = $_FILES['image']['name'];
        $new_name = date("d-m-Y-H-i-s").'-'.$old_name;
        $org_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($org_name,'../assest/img/'.$new_name);
        $image = $new_name;
    }else{
        $image = 'noimage.png';
	}
    
    $customer->name = $_POST['name'];
    $customer->image = $image;
    $customer->gender = $_POST['gender'];
    $customer->user = $_POST['user'];
    $customer->pass = $_POST['pass'];
    
    $customer->insert();
    
    header("Location:?c=customer");
    
}

define('ACTION','form');

?>