	<?php 
	// BƯỚC 1: TÌM TỔNG SỐ RECORDS
		$row = mysqli_fetch_assoc($result);
		$total = $row['total'];

	// BƯỚC 2: TÌM LIMIT VÀ CURRENT_PAGE
		if (isset($_GET['page'])) {
			$current_page = $_GET['page'];
		}else{
			$current_page = 1;
		}
		$limit = 10;
	// BƯỚC 3: TÍNH TOÁN TOTAL_PAGE VÀ START
	// tổng số trang
		$total_page = ceil($total / $limit);
		if ($current_page > $total_page){
	   		$current_page = $total_page;
		}
		else if ($current_page < 1){
		    $current_page = 1;
		}
		$start = ($current_page - 1) * $limit;
	// BƯỚC 4: TRUY VẤN LẤY DANH SÁCH TIN TỨC
	// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
		
		
		
	 ?>

