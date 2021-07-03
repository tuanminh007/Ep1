<?php
$title = 'Đổi Mật Khẩu';
require_once('Layout/header.php');
require_once ('Config/utility.php');	


$id = $_SESSION['admin']['id'];
$op = $np = $np2 = $gg = '';
if(!empty($_POST)){
	$gg = getPost('past');
	$op = getMD5Security($gg);

	$np = getPost('new');
	$np2 = getPost('new2');
    if($np == $np2){
	$sql = "SELECT * FROM admin WHERE PASSWORD = '$op' AND ID = '$id'";
	$result = executeResult($sql, false);
	if($result!=null && count($result)>0){
		$nps = getMD5Security($np);
		$sql = "UPDATE admin SET password = '$nps' WHERE id='$id'";
		execute($sql);
		alert("Đổi mật khẩu thành công");
	}else{
		alert("Sai mật khẩu hiện tại!!!");		
	}
}else
{
	alert('Mật khẩu mới không trùng khớp!!!');
}
}
?>
<div class="container" style="width: 50%; margin-top: 20px;">
<form class="form-group" method="POST">
		<label for="past">Nhập mật khẩu hiện tại</label>
		<input type="Password" name="past" required="true" class="form-control">
		<label for="new">Nhập mật khẩu mới</label>
		<input type="Password" name="new" required="true" class="form-control">
		<label for="new2">Nhập lại mật khẩu mới</label>
		<input type="Password" name="new2" required="true" class="form-control">
		<button type="submit" class="btn-info form-control" style="margin-top: 30px;">Đổi mật khẩu</button>
</form>
</div>