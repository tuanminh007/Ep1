<?php
$title = 'Product List';
require_once('Layout/header.php');
require_once ('Config\utility.php');
require_once('Module/Products/pagination.php');	
?>
<?php
// $ProductList = executeResult('select * from product', false);
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
    <input type="hidden" name="module" value="products">
      <input type="hidden" name="action" value="list">
     <button type="submit" style="float:right;margin-top: 10px;margin-bottom: 10px;"><i class="bi bi-search"></i></button>
    <input type="text" name="keyword" style="float:right;margin-top: 10px;margin-bottom: 10px;">
  </form>
    <button type="button"class="bg-light" style="margin-top: 10px; margin-bottom: 10px;"><a href="index.php?module=products&action=add">Thêm Sản Phẩm</a></button>
<table class="table justify-content-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Import Date</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>


 <?php  
 foreach ($ProductList as $item) {
  $status = $item['STATUS'];
  if($status == 1){
    $status = "Còn Hàng";
  }
  else if($status == 0){
    $status = "Hết Hàng";
  }
  else{
    $status = "Hàng Sắp Về";
  }
 echo '<tr>
         <th scope="row">'.$item['CATEGORY_ID'].'</th>
         <td>'.$item['TITLE'].'</td>
         <td>'.$item['CATEGORY'].'</td>
         <td><img style="width 160px; height: 160px;" src="'.$item['THUMBNAIL'].'""></td>
         <td>'.$item['MANUFACTURER'].'</td>
         <td>'.$item['IMPORT_DATE'].'</td>
         <td>'.$item['PRICE'].' US$</td>
         <td>'.$item['QUANTITY'].'</td>
         <td>'.$status.'</td>

         <td> 
           <button type="button"><a href="index.php?module=products&action=edit&id='.$item['ID'].'">Edit</a></button>
           <button type="button" class="btn-danger"><a href="index.php?module=products&action=delete&id='.$item['ID'].'">Delete</a></button>
         </td>
             </tr>';
 }
 ?>
  </tbody>
</table>

</div>

<?php
require_once("pgtdisplay.php");
?>

<?php
require_once('Layout/footer.php');
?>