<?php
$title = 'Them San Pham';
require_once('Config/utility.php');
require_once('Layout/header.php');

$title = $category = $thumbnail = $manufacturer = $description = $price = $quantity = $status = $category_id = '';
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
	$sql = "INSERT INTO product(TITLE, THUMBNAIL, CATEGORY, CATEGORY_ID, MANUFACTURER, DESCRIPTION, PRICE, QUANTITY, STATUS) VALUES ('$title','$thumbnail','$category','$category_id','$manufacturer','$description', $price, $quantity, $status)";
	execute($sql);
	header("location: index.php?module=products&action=list");





}
?>

<div class="container" style="width: 50%; margin-top: 20px;">
<form class="form-group" method="POST">
		<label for="title">Title</label>
		<input type="text" name="title" required="true" class="form-control">
		<label for="category">Category</label>
		<select id="category" name="category" class="form-control input" required="true">
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
		<input type="text" name="category_id" required="true" class="form-control" placeholder="Must be unique">
		<label for="img">Thumbnail</label>
		<input type="file" name="img" class="form-control" accept="image/*" style="width: 40%;">
		<label for="manufacturer">Manufacturer</label>
		<input type="text" name="manufacturer" required="true" class="form-control">
		<label for="description">Description</label>
		<textarea name="description" required="true" class="form-control"></textarea>
		<label for="price">Price</label>
		<input type="number" step="0.01" name="price" required="true" class="form-control" style="width: 30%" placeholder="US$">
		<label for="quantity">Quantity</label>
		<input type="number"  name="quantity" required="true" class="form-control"style="width: 30%">
		<label for="status">Status</label>
		<select id="status" name="status" class="form-control input" required="true">
			<option class="input" value="1">Còn hàng</option>
			<option class="input" value="0">Hết hàng</option>
			<option class="input" value="2">Hàng sắp về</option>
		</select>
		<button type="submit" class="btn-info form-control" style="margin-top: 30px;">Lưu lại</button>
		<button type="reset" class="btn-danger form-control" style="margin-top: 30px;">Reset</button>
</form>
</div>
<?php
require_once('Layout/footer.php');
?>