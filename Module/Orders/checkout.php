<?php 
if($_SESSION['total'] == 0){
    header("Location: index.php?module=orders&action=error");
}
else{
if(isset($_POST['checkout'])){
 if(!isset($_SESSION['user'])){
 	header("Location: index.php");
 }
 else{
 $id = $_SESSION['user']['id'];
 $method = $_POST['radio'];
 $total_amount = $_SESSION['total'];
 $note = $_POST['note'];
 $sql = "INSERT INTO orders(ID, CUSTOMER_ID, PAYMENT_METHOD, NOTE, TOTAL_PRICE, STATUS, CREATE_AT)
 VALUES
 (NULL,'$id','$method','$note','$total_amount',0,NULL)";
 $result = mysqli_query($conn, $sql);
}

 $order_id = mysqli_insert_id($conn);
 	 	foreach($_SESSION['cart'] as $ID => $quantity)
 	 	{
 	 		$sql = "INSERT INTO order_detail(ORDER_ID, PRODUCT_ID, PRODUCT_QUANTITY)
 	 		VALUES
 	 		('$order_id','$ID','$quantity')";
 	 		$result = mysqli_query($conn, $sql);
 	 }
 unset($_SESSION['cart']);
 header("Location: index.php?module=orders&action=history");
 }
 }
?>