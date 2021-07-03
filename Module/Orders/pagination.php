<?php
require_once('Config/utility.php');
//so luong result moi page 
$current_page = 1;
if(isset($_GET['page'])){
	$current_page = $_GET['page'];
}else{
	$current_page = 1;
}
$result_per_page = 8;


$index = ($current_page-1)*$result_per_page;


 $keyword = "";
  if(isset($_GET['keyword'])){
    $keyword = getGET('keyword');
    $sql ="SELECT COUNT(orders.ID) AS number FROM orders WHERE ID LIKE '%$keyword%'";
      $result = executeResult($sql, false); 
    $sql = "SELECT orders.ID, customer.NAME, customer.PHONE, customer.ADDRESS, orders.PAYMENT_METHOD, orders.TOTAL_PRICE, orders.CREATE_AT, orders.STATUS  FROM orders, customer WHERE orders.CUSTOMER_ID = customer.ID AND orders.ID LIKE '%$keyword%' ORDER BY orders.STATUS,orders.CREATE_AT ASC LIMIT $index, $result_per_page";
  }
  else{
  	$sql = "SELECT COUNT(ID) AS number FROM orders";
	$result = executeResult($sql, false);
    $sql = "SELECT orders.ID, customer.NAME, customer.PHONE, customer.ADDRESS, orders.PAYMENT_METHOD, orders.TOTAL_PRICE, orders.CREATE_AT, orders.STATUS  FROM orders, customer WHERE orders.CUSTOMER_ID = customer.ID ORDER BY orders.STATUS,orders.CREATE_AT ASC LIMIT $index,$result_per_page";
  }

  $OrderList = executeResult($sql,false);
  if ($OrderList == false) {
    echo '<h3 style="margin-left: 400px;">Không có kết quả !</h3>';
  }


   if($result !=null && count($result)>0){
        $number = $result[0]['number'];
}

$pages = ceil($number/$result_per_page);
if($current_page>$pages){
	$current_page = $pages;
}
else if($current_page<1){
	$current_page = 1;
}
?>