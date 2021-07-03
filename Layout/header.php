<?php 
	if (!isset($_SESSION['admin'])) {
		header("Location: index.php?module=common&action=login");
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title?></title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<style type="text/css">
	li{
		padding-right: 60px;
	}

</style>

</head>
<body>
<div class="container">
		<div class="modal-header">
			<h5 style="float:right;">Welcome <?php echo $_SESSION['admin']['name'];?></h5>
		<a style="float: right;margin-left: 700px;" href="index.php?module=common&action=logout">Logout</a>
		

	</div>
	<nav class="navbar navbar-expand-lg navbar-success bg-light">
	  <a class="navbar-brand" href="index.php?module=products&action=list">Ryana Calendar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="nav nav-tabs mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php?module=products&action=list">Quản lý sản phẩm </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link"href="index.php?module=orders&action=list">Quản lý đơn hàng</a>
	      </li>
	      <!-- <li class="nav-item">
	        <a class="nav-link" href="index.php?module=users&action=list">Quản lý khách hàng</a>
	      </li> -->
	      <li class="nav-item">
	        <a class="nav-link" href="index.php?module=common&action=passwc">Đổi mật khẩu</a>
	      </li>

	    </ul>
	  </div>
	</nav></div>

	<!-- <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="index.php?module=Products&action=list" role="tab" aria-controls="nav-home" aria-selected="true">Quản Lý Sản Phẩm</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="index.php?module=Orders&action=list" role="tab" aria-controls="nav-profile" aria-selected="false">Quản Lý Hóa Đơn</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="index.php?module=Users&action=list" role="tab" aria-controls="nav-contact" aria-selected="false">Quản Lý Khách Hàng</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="index.php?module=Common&action=password" role="tab" aria-controls="nav-contact" aria-selected="false">Đổi Mật Khẩu</a>
  </div>
</nav> -->
	
</div>