<?php
require_once ('Config\utility.php');

$error="";
$username = $password = '';
if(!empty($_POST)) {
	$username = getPost('username');
	$password = getPost('password');
	$password = getMD5Security($password);


	if(!empty($password) && !empty($username)) {

		$sql = "select * from admin where username = '$username' and password = '$password'";
		$result = mysqli_query($conn,$sql);

		if($result == false){
			$error = mysqli_error($conn);
		}
		else{
			if(mysqli_num_rows($result) == 1){
				$row = mysqli_fetch_assoc($result);
				$_SESSION['admin']['id'] = $row['ID'];
				$_SESSION['admin']['name'] = $row['NAME'];
				header("location: index.php?module=products&action=list");
			}
			else{
         alert("!!Sai Thông Tin Đăng Nhập!!");
         $secondsWait = 1;
      header("Refresh:$secondsWait");
			die();
			}
	}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dang Nhap</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
  
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.3/jstree.min.js"></script>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <style type="text/css">
    	#main{
    		width: 50%; 
    		margin-top: 100px;

    	}
    </style>
</head>
<body>
	<div class="container" id = "main">
		<h1 style="margin-left: 100px;">Đăng nhập</h1>
			<form method="POST" class="form-group"  >
				<label style="margin-left: 100px;">Username</label>
				<input type="text" name="username" required="true" class="form-control" style="width : 80%; margin-left : 100px;">
				<label style="margin-left: 100px;">Password</label>
				<input type="Password" name="password" required="true" class="form-control"style="width : 80%; margin-left : 100px;">
				<button type="submit" class="btn btn-info" style="margin-left: 600px; margin-top : 50px;">Đăng Nhập</button>

			</form>

	</div>

</body>
</html>