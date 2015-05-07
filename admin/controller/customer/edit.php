<?php

    // Tạo đối tượng theo biến $c (mặc định để customer
    $customer = new $c();
    
    // Lấy thông tin khách hàng cần sửa
    $idcustomer = $_GET['idcustomer'];
    $row = $customer->getbyid($idcustomer);

if(isset($_POST['submit'])){

    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) { // Upload thành công

		// Xóa hình cũ	
        
        if(($row['image']) && (file_exists('../assets/img/'.$row['image']))) {
			@unlink('../assets/img/'.$row['image']);
		}
		// Kết thúc đoạn code xóa hình cũ
		
		$old_name = $_FILES['image']['name'];
		$new_name = date("d-m-Y-H-i-s").'-'.$old_name;
		$org_name = $_FILES['image']['tmp_name'];
		move_uploaded_file($org_name,'../assets/img/'.$new_name);
		
        $sql = "UPDATE `customer` SET `image`='$new_name' WHERE `idcustomer`='$idcustomer'";
        $result = $customer->exec($sql);
            
    }
    
    $customer->idcustomer = $_POST['idcustomer'];
    $customer->name = $_POST['name'];
    $customer->gender = $_POST['gender'];
    $customer->user = $_POST['user'];
    $customer->pass = $_POST['pass'];
    
    $customer->update();
    
    header("Location:?c=customer");
}




define('ACTION','form');

?>