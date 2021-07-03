<?php
$title = "Product Detail";
if(isset($_SESSION['user'])){
           require_once("Layout/headerforotherpages2.php");
}else{
	 	   require_once("Layout/headerforotherpages.php");
}
require_once("Config/utility.php");


if(isset($_GET['id'])){
 $id = $_GET['id'];
 $sql = "SELECT * FROM product WHERE ID = $id";
 $result = mysqli_query($conn, $sql);

}
// if(!isset($_SESSION['quantity'])){
// 			 $_SESSION['quantity'] = array();
// 			 $quantity = $_SESSION['quantity'];
// 		}
// if(isset($_GET['id'])){
// 			$product_ID = $_GET['id'];
// 			if(isset($_SESSION['quantity'][$product_ID])){
// 				if (isset($_GET['up'])) $_SESSION['quantity'][$product_ID] += 1;
// 				if (isset($_GET['down'])) $_SESSION['quantity'][$product_ID] -= 1;	
// 				// if ($_SESSION['quantity'][$product_ID] < 0) unset($_SESSION['quantity'][$product_ID]);	
// 			}
// 			else{
// 				$_SESSION['quantity'][$product_ID] = 1;
// 			}
// 			header("Location: index.php?module=products&action=product-detail");
// 		}

?>
<?php
$s = 1;
$e = 50;
$sl = 0;
$Product = mysqli_fetch_assoc($result);
// <!-- ============= Product detail ============== -->
	echo
		'<div class="product-information">
			<div class="detail-view">
				<img src="'.$Product['THUMBNAIL'].'">
			</div>
			<div class="product-detail">
				<div class="product-brand">'.$Product['MANUFACTURER'].'</div>
				<div class="product-name"> '.$Product['TITLE'].' </div>
				<div class="product-detail-price"> '.$Product['PRICE'].' $ </div>
				<a href="index.php?module=orders&action=cart&id='.$Product['ID'].'"><button class="addbag-btn">ADD TO BAG</button></a>
				<div class="product-guarantee">
                    <img src="../Images/Front/Icons/truck-black.svg"> Fast delivery
                </div>
                <div class="product-guarantee">
                    <img src="../Images/Front/Icons/return-black.svg"> Return in 40 days
                </div>
                <div class="product-guarantee">
                    <img src="../Images/Front/Icons/respond-black.svg"> Immediate response
                </div>

			</div>
		</div>
		
		<div class="detail-name">'.$Product['TITLE'].'</div>
		<div class="product-information-2">
			<div class="detail-col-1">
				<p>'.$Product['DESCRIPTION'].'</p>
			</div>
		</div>';

?>

<?php 
if(isset($_SESSION['user'])){
           require_once("Layout/loggedft.php");
}else{
	 	  require_once("Layout/footer.php");
}

?>