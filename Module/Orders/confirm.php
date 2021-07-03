<?php 
require_once('Config/utility.php');
$id = "";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "UPDATE orders SET STATUS = 1 WHERE ID = '$id'";
execute($sql);
header("location: index.php?module=orders&action=list");
}
?>