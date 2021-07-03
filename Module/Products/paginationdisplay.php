	<style type="text/css">
		.pagination{
			margin-top: 10px;
			text-align: center;
			margin-bottom: 0px;
			font-size: 20px;
			font-family: mallory;
		}
		a{
			text-decoration: none;
		}
	</style>

<div class="pagination">
<?php  
if(isset($_GET['keyword'])){
			if ($current_page >= 1 && $total_page >= 1 && $current_page != 1){
			    echo "<a style = 'color: #6b6b6b;' href='index.php?module=products&action=".$action."&page=".($current_page-1)."&keyword=".$keyword."'>Previous</a>  ";
				} 
			// Lặp khoảng giữa
			for ($i = 1; $i <= $total_page; $i++){
				if ($i == $current_page){
				   echo "<span style = 'color: black; font-weight: bold;'>".$i."</span> ";
				}
				else{
					echo "<a style = 'color: black;' href='index.php?module=products&action=".$action."&page=".$i."&keyword=".$keyword."'>".$i."</a>  ";
				}
			} 
				// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
			if ($current_page < $total_page && $total_page > 1){
				echo "<a style = 'color: #6b6b6b;' href='index.php?module=products&action=".$action."&page=".($current_page+1)."&keyword=".$keyword."'>Next</a>";
				}	
			
				}
				else
				{if ($current_page >= 1 && $total_page >= 1 && $current_page != 1){
			    echo "<a style = 'color: #6b6b6b;' href='index.php?module=products&action=".$action."&page=".($current_page-1)."'>Previous</a>  ";
				} 
			// Lặp khoảng giữa
			for ($i = 1; $i <= $total_page; $i++){
				if ($i == $current_page){
				   echo "<span style = 'color: black;'>".$i."</span> ";
				}
				else{
					echo "<a style = 'color: black;' href='index.php?module=products&action=".$action."&page=".$i."'>".$i."</a>  ";
				}
			} 
				// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
			if ($current_page < $total_page && $total_page > 1){
				echo "<a style = 'color: #6b6b6b;' href='index.php?module=products&action=".$action."&page=".($current_page+1)."'>Next</a>";
				}	

				}
?>
 </div><br><br><br><br>