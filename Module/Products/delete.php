<?php
require_once('Config/utility.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql ="DELETE FROM product WHERE ID = '$id'";
	execute($sql);

    echo "<h1>Xóa sản phẩm thành công!!!</h1></br>";
    echo "<h3><a href='index.php?module=products&action=list'>Quay lại</a></h3>";
    }


?>