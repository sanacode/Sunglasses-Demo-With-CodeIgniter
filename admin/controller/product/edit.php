<?php
    
    // Tạo đối tượng theo biến $c (mặc định để product)
    $product = new $c();
    
    // Lấy thông tin product muốn sửa với id là idproduct
    $product->idproduct = $_GET['idproduct'];
    
	if(isset($_POST['submit'])){
		
        $idproduct = $_POST['idproduct'];

		if ($_FILES['pimage']['error'] === UPLOAD_ERR_OK) {

			// Upload thành công
			
			// Xóa hình cũ	
            $data = $product->getbyid($idproduct);
            
            if(($data['pimage']) && (file_exists('../assets/img/'.$data['pimage']))) {
				@unlink('../assets/img/'.$data['pimage']);
			}
			// Kết thúc đoạn code xóa hình cũ
			
			$old_name = $_FILES['pimage']['name'];
			$new_name = date("d-m-Y-H-i-s").'-'.$old_name;
			$org_name = $_FILES['pimage']['tmp_name'];
			move_uploaded_file($org_name,'../assets/img/'.$new_name);
			
            $sql = "UPDATE `product` SET `pimage`='$new_name' WHERE `idproduct`='$idproduct'";
            $result = $product->exec($sql);
            
		}
		
        // Gán giá trị vào thuộc tính
		$product->name = $_POST['name'];
		$product->model = $_POST['model'];
		$product->detail = $_POST['detail'];
		$product->price = $_POST['price'];
		$product->sale = $_POST['sale'];
		$product->state = $_POST['state'];

        $product->update();
		
		header( "Location:?c=product" );
	
	}
    
    // Lấy thông tin product cần sửa
    $row = $product->getbyid($product->idproduct);

    // Lấy thông tin sản phẩm thuộc categories nào
    $sql = "
        SELECT `categories`.`idcategories` , `categories`.`catname`
        FROM `categories`
        INNER JOIN (
            `cat_pro` INNER JOIN `product` ON ( `cat_pro`.`idproduct` = `product`.`idproduct` )) 
        ON ( `categories`.`idcategories` = `cat_pro`.`idcategories` ) 
        WHERE `product`.`idproduct` = '".$product->idproduct."'
    ";
    $cat = $product->getfetch($sql);
    
    // Lấy danh sách loại sản phẩm categories
	$sql = "SELECT idcategories,catname FROM categories";
	$result = $product->get($sql);

    
    define('ACTION','form');
    
?>