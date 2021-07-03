<?php
require_once ('Config/utility.php');	


$id = $_SESSION['user']['id'];
$op = $np = $np2 = $gg = '';
if(!empty($_POST)){
	$gg = getPost('oldpassword');
	$op = getMD5Security($gg);

	$np = getPost('newpassword');
	$np2 = getPost('confirmnewpassword');
    if($np == $np2){
	$sql = "SELECT * FROM customer WHERE PASSWORD = '$op' AND ID = '$id'";
	$result = executeResult($sql, false);
	if($result!=null && count($result)>0){
		$nps = getMD5Security($np);
		$sql = "UPDATE customer SET PASSWORD = '$nps' WHERE id='$id'";
		execute($sql);
		alert("Đổi mật khẩu thành công");
		 echo "<h1 style='text-align: center;'>Đổi mật khẩu thành công!!!</h1></br>";
    echo "<button class='btn-success' style='padding: 14px;margin-left:48%;text-align: center;'><a href='index.php'>Quay lại</a></button>";

	}else{
		alert("Sai mật khẩu hiện tại!!!");
 echo "<h1 style='text-align: center;'>Sai mật khẩu hiện tại!!!</h1></br>";
    echo "<button class='btn-success' style='padding: 14px;margin-left:48%; text-align: center;'><a href='index.php'>Quay lại</a></button>";
	}
}else
{
	alert('Mật khẩu mới không trùng khớp!!!');
 echo "<h1 style='text-align: center;'>Mật khẩu mới không trùng khớp!!!</h1></br>";
    echo "<button class='btn-success' style='padding: 14px;margin-left:48%;text-align: center;'><a href='index.php'>Quay lại</a></button>";

}
}
?>