<?php 
require_once('Config/utility.php');
$email = $password = "";

if(!empty($_POST)){
	$email = getPost('email');
	$password = getMD5Security(getPost('password'));
	$sql = "SELECT * FROM customer where EMAIL ='$email' AND PASSWORD = '$password'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user']['id']=$row['ID'];
		$_SESSION['user']['name']=$row['NAME'];
		$_SESSION['user']['phone']=$row['PHONE'];
		$_SESSION['user']['address']=$row['ADDRESS'];
		alert("Tài khoản hoặc mật khẩu không đúng! Vui lòng thử lại");
		header("location: index.php?module=home&action=home");
	}else{
		alert("Tài khoản hoặc mật khẩu không đúng! Vui lòng thử lại");
		header("location: index.php?module=home&action=home");
	}
}


?>