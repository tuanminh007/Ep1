<?php 
$title = "Order Detail";
require_once('Layout/header.php');
require_once('Config/utility.php');

$id = "";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT product.TITLE,product.THUMBNAIL, product.MANUFACTURER, product.PRICE, order_detail.PRODUCT_QUANTITY
FROM product
INNER JOIN order_detail ON  product.ID = order_detail.PRODUCT_ID
WHERE order_detail.ORDER_ID ='$id'
";
$OD = executeResult($sql, false);
}
?>
<style type="text/css">
	a:link{
		text-decoration: none;
	}
  table{
    border: solid 1px;
  }
</style>
<div class="container">
<table class="table justify-content-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Thumbnail</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
 <?php  
 $count = 0;
 $total = 0;
 foreach ($OD as $item) {
 	$total_price = $item['PRICE']*$item['PRODUCT_QUANTITY'];
 	$total +=$total_price;
 echo '<tr>
         <th scope="row">'.(++$count).'</th>
         <td>'.$item['TITLE'].'</td>
         <td><img style="width 160px; height: 160px;" src="'.$item['THUMBNAIL'].'""></td>
         <td>'.$item['MANUFACTURER'].'</td>
         <td>'.$item['PRICE'].' US$</td>
         <td>'.$item['PRODUCT_QUANTITY'].'</td>
         <td>'.$total_price.' US$</td>
             </tr>'; 
 }
 echo
         '
       <H3 style="padding: 20px;">Tổng giá trị đơn hàng : '.$total.' US$</H3>
         ';   
 ?>
  </tbody>
</table>

</div>




<?php
require_once('Layout/footer.php');
?>