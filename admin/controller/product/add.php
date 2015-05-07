<?php
	// Tạo đối tượng theo biến $c (mặc định để product)
    $product = new $c();
	
	if(isset($_POST['submit'])){

		if ($_FILES['pimage']['error'] === UPLOAD_ERR_OK) {
            $old_name = $_FILES['pimage']['name'];
			$new_name = date("d-m-Y-H-i-s").'-'.$old_name;
			$org_name = $_FILES['pimage']['tmp_name'];
			move_uploaded_file($org_name,'../assest/img/'.$new_name);
            $pimage = $new_name;
        }else{
		  $pimage = 'noimage.png';
		}
		
		$product->name = $_POST['name'];
		$product->model = $_POST['model'];
		$product->detail = $_POST['detail'];
		$product->price = $_POST['price'];
		$product->sale = $_POST['sale'];
		$product->state = $_POST['state'];
		$product->pimage = $pimage;

        $product->insert();	// Insert dữ liệu
		
        
        // INSERT dữ liệu vào bảng cat_pro
		$idproduct = $product->lastinsertid();	// Lấy idproduct vừa Insert
		$idcategories = $_POST['idcategories'];	// Lấy idcategories
		
		$sql = "INSERT INTO `cat_pro` VALUES ('$idcategories','$idproduct')";
			
		$product->exec($sql); // Insert dữ liệu
		
		
        header("Location:?c=product");	// Trở về trang view product
	
    }
	
	// Lấy danh sách loại sản phẩm categories
	$sql = "SELECT idcategories,catname FROM categories";
	$result = $product->get($sql);

    define('ACTION','form');

?>