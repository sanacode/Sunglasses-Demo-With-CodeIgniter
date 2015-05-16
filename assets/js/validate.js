function kiemtra(){
	// Kiểm tra họ tên
	var hoten = document.forms[0].hoten.value;
	if(hoten == "Name"){
		alert("Xin vui lòng nhập tên của bạn");
		document.forms[0].hoten.style.border = '1px solid red';
		return false;
	}else{
		document.forms[0].hoten.style.border = '1px solid #ccc';
	}

	// Kiểm tra địa chỉ
	var hoten = document.forms[0].address.value;
	if(hoten == "Address"){
		alert("Xin vui lòng nhập địa chỉ của bạn");
		document.forms[0].address.style.border = '1px solid red';
		return false;
	}else{
		document.forms[0].address.style.border = '1px solid #ccc';
	}

	// Kiểm tra gender
	var hoten = document.forms[0].gender.value;
	if(hoten == ""){
		alert("Xin vui lòng nhập giới tính của bạn");
		document.forms[0].gender.style.border = '1px solid red';
		return false;
	}else{
		document.forms[0].gender.style.border = '1px solid #ccc';
	}

	return true;
}