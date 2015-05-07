function kiemtra(){
	
    // Kiểm tên
	var name = document.forms[0].name.value;
	if(name == ""){
		alert("Xin vui lòng nhập tên sản phẩm");
        document.forms[0].name.focus();
		return false;
	}
    
    // Kiểm giá
    var price = document.forms[0].price.value;
	if(price == ""){
		alert("Xin vui lòng nhập mã sản phẩm");
        document.forms[0].price.focus();
		return false;
	}else if (isNaN(price) == true){
		alert("Xin vui lòng nhập số");
        document.forms[0].price.focus();
		return false;
	}else if(price < 1000){
			alert("Giá phải không dưới 1000 VND");
            document.forms[0].price.focus();
			return false;
	}


// Nếu tất cả điều kiện trên đúng
	return true;
}