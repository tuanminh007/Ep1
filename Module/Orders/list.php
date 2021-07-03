<?php
$title = 'Orders';
require_once('Layout/header.php');
require_once ('Config\utility.php');	
require_once("pagination.php");
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
 <form method="GET">
    <input type="hidden" name="module" value="orders">
      <input type="hidden" name="action" value="list">
     <button type="submit" style="float:right;margin-top: 10px;margin-bottom: 10px;"><i class="bi bi-search"></i></button>
    <input type="text" name="keyword" placeholder="Find by ID" style="float:right;margin-top: 10px;margin-bottom: 10px;">
  </form>
<table class="table justify-content-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Total</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
 <?php  
 $count = 0;
 foreach ($OrderList as $item) {
  $status = $item['STATUS'];
  if($status == 1){
    $status = "Đã phê duyệt";
  }
  else if($status == 0){
    $status = "Chưa duyệt";
  }
  else{
    $status = "Đã Hủy";
  }
 echo '<tr>
         <th scope="row">'.$item['ID'].'</th>
         <td>'.$item['NAME'].'</td>
         <td>'.$item['PHONE'].'</td>
         <td>'.$item['ADDRESS'].'</td>
         <td>'.$item['PAYMENT_METHOD'].'</td>
         <td>'.$item['TOTAL_PRICE'].' US$</td>
         <td>'.$item['CREATE_AT'].'</td>
         <td>'.$status.'</td>

         <td> 
           <button type="button"><a href="index.php?module=orders&action=confirm&id='.$item['ID'].'">Phê duyệt</a></button>
           </td>
           <td>
           <button type="button"><a href="index.php?module=orders&action=detail&id='.$item['ID'].'">Xem chi tiết</a></button>
         </td>
             </tr>';
 }
 ?>
  </tbody>
</table>

</div>



<?php
require_once("pgntdisplay.php");
?>
<?php
require_once('Layout/footer.php');
?>