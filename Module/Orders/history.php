<?php
$title = "Order History";
require_once("Config/utility.php");
if(isset($_SESSION['user'])){
           require_once("Layout/headerforotherpages2.php");
}else{
	 	   header("Location: index.php");
}
$id = $_SESSION['user']['id'];
$keyword = "";
  if(isset($_GET['keyword'])){
    $keyword = trim($_GET['keyword']);
    $sql ="SELECT COUNT(ID) AS total FROM orders  WHERE PAYMENT_METHOD LIKE '%$keyword%' OR TOTAL_PRICE LIKE '%$keyword%'";
      $result = mysqli_query($conn, $sql);
      require_once('pagination.php');
      // $number = mysqli_num_rows($result);
    $sql = "SELECT * FROM orders  WHERE PAYMENT_METHOD LIKE '%$keyword%' OR TOTAL_PRICE LIKE '%$keyword%' LIMIT $start, $limit";
  }
  else{
  	$sql = "SELECT COUNT(ID) AS total FROM orders WHERE CUSTOMER_ID = $id";

		$result = mysqli_query($conn, $sql);
		require_once('pagination.php');
    $sql = "SELECT * FROM orders WHERE CUSTOMER_ID = $id ORDER BY STATUS ASC
    LIMIT $start, $limit";
  }

  $result = mysqli_query($conn, $sql);
  if($result ==false){
  	die("Error: ".mysqli_error($conn));
  }
 ?>

	<style type="text/css">
		table td {
			text-align: center;
		}
		table th {
			padding-bottom: 20px;
		}
	</style>



  <table style="padding-top: 150px; font-family: mallory; padding-bottom: 40px;" class="table table-inverse">
	<thead>
		<tr>
			<th>Order No</th>
			<th>Payment Method</th>
			<th>Date</th>
			<th>Total</th>
			<th>Status</th>
		</tr>
	</thead>
<tbody>
<?php 
if($result == false){
	echo "<h1>Không tìm thấy sản phẩm phù hợp với từ khóa '$keyword'!!!</h1>";
}
else{
	if(mysqli_num_rows($result) == 0){
		echo "<h1>Không tìm thấy sản phẩm phù hợp với từ khóa '$keyword'!!!</h1>";
	}
	else
	{	

		if(isset($_GET['keyword']) && !empty($_GET['keyword'])){
			echo "<h1>Tìm thấy $total sản phẩm!! </h1>";
		}
		else{
		}
	}
}

	
		
	
$count = 0;
while($item = mysqli_fetch_assoc($result)){
	$status = $item['STATUS'];
	if($status == 0){
		$status = "Pending...";
	}else{
		$status = "Approved";
	}
	echo '<tr>
			<td>'.(++$count).'</td>
			<td>'.$item['PAYMENT_METHOD'].'</td>
			<td>'.$item['CREATE_AT'].'</td>
			<td>'.$item['TOTAL_PRICE'].'</td>
			<td>'.$status.'</td>
		</tr>';

}
?>
</tbody>
</table>
<?php 
require_once("paginationdisplay.php");
if(isset($_SESSION['user'])){
           require_once("Layout/loggedft.php");
}else{
	 	  require_once("Layout/footer.php");
}

?>