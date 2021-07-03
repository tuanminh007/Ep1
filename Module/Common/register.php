<?php 
require_once("Config/utility.php");

$username = $email = $phone = $address = $password = $confirmpass = "";

if(!empty($_POST)){
	$username = getPost('username');
	$email = getPost('email');
	$phone = getPost('phone');
	$address = getPost('address');
	$password = getMD5Security(getPost('password'));
	$confirmpass = getMD5Security(getPost('passwordconfirm'));
	if($password == $confirmpass){
		$sql = "INSERT INTO customer(ID, EMAIL, PASSWORD, NAME, PHONE, ADDRESS) VALUES (NULL,'$email','$password','$username','$phone','$address')";
		execute($sql);
        alert("Đăng kí thành công");
		header("location: index.php");
	}else{
        alert("Mật khẩu không trùng khớp!!!");
		header("location: index.php");
	}
}
?>