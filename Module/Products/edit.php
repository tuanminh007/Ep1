<?php
$title = "Sửa sản phẩm";
require_once('Config/utility.php');
require_once('Layout/header.php');
$id = "";
$title = $category = $thumbnail = $manufacturer = $description = $price = $quantity = $status = $category_id = "";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM product WHERE ID = '$id'";
	$itm = executeResult($sql, true);
	$title = $itm['TITLE'];
	$category = $itm['CATEGORY'];
	$thumbnail = $itm['THUMBNAIL'];
	$manufacturer = $itm['MANUFACTURER'];
	$description = $itm['DESCRIPTION'];	
	$price = $itm['PRICE'];
	$quantity = $itm['QUANTITY'];
	$status = $itm['STATUS'];
	$category_id = $itm['CATEGORY_ID'];
}
if(!empty($_POST)){
	$title = getPost('title');
	$category = getPost('category');
	$th = getPost('img');
	$folder = "../Images/New/";
	$thumbnail = $folder.$th;
	$manufacturer = getPost('manufacturer');
	$description = getPost('description');	
	$price = getPost('price');
	$quantity = getPost('quantity');
	$category_id = getPost('category_id');
	$status = getPost('status');

	$sql="UPDATE product SET TITLE = '$title', CATEGORY = '$category', CATEGORY_ID = '$category_id', THUMBNAIL = '$thumbnail', MANUFACTURER = '$manufacturer', DESCRIPTION = '$description', PRICE = '$price', QUANTITY = '$quantity', STATUS = '$status' WHERE ID = '$id'";
	execute($sql);
	header("location: index.php?module=products&action=list");
}
?>
<div class="container" style="width: 50%; margin-top: 20px;">
<form class="form-group" method="POST">
		<label for="title">Title</label>
		<input type="text" name="title" required="true" class="form-control" value="<?=$title?>">
		<label for="category">Category</label>
		<select id="category" name="category" class="form-control input" required="true" value="<?=$category?>">
			<optgroup label="Calendar">
			<option class="input" value="Desk Calendar">Desk Calendar</option>
			<option class="input" value="Wall Calendar">Wall Calendar</option>
		    </optgroup>
		    <optgroup label="Diary">
			<option class="input" value="Diary & Planner">Diary & Planner</option>
			<option class="input" value="Journal">Journal</option>
			<option class="input" value="Notebook">Notebook</option>
		</optgroup>
			<optgroup label="Pen">
				<option class="input" value="Ballpoint Pen">Ballpoint Pen</option>
			    <option class="input" value="Foutain Pen">Foutain Pen</option>
			    <option class="input" value="Pencils">Pencils</option>
		</select>
		<label for="category_id">Category ID</label>
		<input type="text" name="category_id" required="true" class="form-control" value="<?=$category_id?>">
		<label for="img">Thumbnail</label>
		<input type="file" name="img" class="form-control" accept="image/*" style="width: 40%;>
		<label for="manufacturer">Manufacturer</label>
		<input type="text" name="manufacturer" required="true" class="form-control" value="<?=$manufacturer?>">
		<label for="description">Description</label>
		<textarea name="description" required="true" class="form-control" type="text" rows="6"><?=$description?></textarea>
		<label for="price">Price</label>
		<input type="number" step="0.01" name="price" required="true" class="form-control" style="width: 30%" placeholder="US$" value="<?=$price?>">
		<label for="quantity">Quantity</label>
		<input type="number"  name="quantity" required="true" class="form-control"style="width: 30%" value="<?=$quantity?>">
		<label for="status">Status</label>
<!-- 		<select id="status" name="status" class="form-control input" required="true">
			<option class="input" value="1">Còn hàng</option>
			<option class="input" value="0">Hết hàng</option>
			<option class="input" value="2">Hàng sắp về</option>
		</select> -->
		<select class='input form-control' name="status" required="true">
	 						<?php 
	 							if ($status == 1) {
	 								echo "<option class='input'  value='1'>Còn hàng</option>
				 						<option class='input'  value='0'>Hết hàng</option>
				 						<option class='input'  value='2'>Hàng sắp về</option>";
				 				}
				 				if ($status == 0) {
	 								echo "<option class='input'  value='0'>Hết hàng</option>
	 									<option class='input'  value='1'>Còn hàng</option>
				 						<option class='input'  value='2'>Hàng sắp về</option>";
				 				}
				 				if ($status == 2) {
	 								echo "<option class='input'  value='2'>Hàng sắp về</option>
	 									<option class='input'  value='1'>Còn hàng</option>
				 						<option class='input'  value='0'>Hết hàng</option>";
				 				}	 								
	 						 ?>
	 					</select>
		<button type="submit" class="btn-info form-control" style="margin-top: 30px;">Lưu lại</button>
		<button type="reset" class="btn-danger form-control" style="margin-top: 30px;">Reset</button>
</form>
</div>
<?php
require_once('Layout/footer.php');
?>