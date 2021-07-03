<?php 
$title = "Calendar";
require_once("Config/utility.php");
?>
<!-- =========== Product Intro ========== -->
<table style="margin: auto;table-layout: fixed;">
<!-- Product list======== -->

<div id="searchBar" class="search-bar">
            <div class="overlay-content">
                <form>
                	  <input type="hidden" name="module" value="<?php echo $module ?>">
                	  <input type="hidden" name="action" value="<?php echo $action ?>">
                      <button><img src="../Images/Front/Icons/search.svg"></button>
                      <input type="text" placeholder="Search.." name="keyword">
                      <span class="closebtnsearch" onclick="closeSearch()" title="Close Overlay">×</span>
                </form>
            </div>
        </div>
<?php
error_reporting(0);
$number = 0; 
if($result == false){
	echo "<h1 style='text-align: center; font-family: mallory; font-weight: normal; font-size: 16px; padding-bottom: 20px;'>No result found for '$keyword'.</h1>";
}
else{
	if(mysqli_num_rows($result) == 0){
		echo "<h1 style='text-align: center; font-family: mallory; font-weight: normal; font-size: 16px; padding-bottom: 20px;'>No result found for '$keyword'.</h1>";
	}
	else
	{	

		if(isset($_GET['keyword']) && !empty($_GET['keyword'])){
			echo "<h1 style='text-align: center; font-family: mallory; font-weight: normal; font-size: 16px; padding-bottom: 20px;'>$total SEARCH RESULT FOR '$keyword'</h1>";
		}
		else{
		}
	}
}
$count = 0;
$nb =1;
$break = 4;
		$total = mysqli_num_rows($result);

while ($total>0) {
	echo '<tr>';	// code...
while($item = mysqli_fetch_assoc($result)) {
	$count++;
	$total-=1;
	
	$id = $item['ID'];

	// for ($item['ID']=1;$item['ID']<=4;$item['ID']++) { 
		echo		
				'<td>
				<a class="product-link" href="index.php?module=products&action=product_detail&id='.$id.'">
				<div class="product'.($nb++).'">
					<div class="product-card">
						<img src="'.$item['THUMBNAIL'].'" style="width: 250px; height:250px;">
					  	<p class="calendar-designer">'.$item['MANUFACTURER'].'</p>
					  	<p class="product-name" style="font-family: mallory;"">'.$item['TITLE'].'</p><br>
					  	<p class="price">'.$item['PRICE'].' $</p><br>
					</div>
				</div>
				</a>
				</td>';
	if($count % $break == 0) break;

// 				
// echo '</br>';
	// $nb = 0;
// 	echo '<div class="col-md-3">
// 						<img src="'.$item['THUMBNAIL'].'" style="width: 250px; height:">
// 					  	<p class="calendar-designer">Iconic</p>
// 					  	<p class="product-name" style="font-family: mallory;"">'.$item['TITLE'].'</p><br>
// 					  	<p class="price">'.$item['PRICE'].' $</p><br>
// 					</div>';
// if($count % $break == 0) break;
// echo "</br>";
							}
							$nb = 1;
							echo '</tr>';
							echo '<tr style="width: 15px; height: 15px;"></tr>';
							}

?>	
</table>

	
