<?php 
$title = "Pen";
if(isset($_SESSION['user'])){
           require_once("Layout/headerforotherpages2.php");
}else{
	 	   require_once("Layout/headerforotherpages.php");
}
require_once("Config/utility.php");
//so luong result moi page 
// $current_page = 1;
// if(isset($_GET['page'])){
// 	$current_page = $_GET['page'];
// }else{
// 	$current_page = 1;
// }
// $result_per_page = 12;


// $index = ($current_page-1)*$result_per_page;


 $keyword = "";
  if(isset($_GET['keyword'])){
    $keyword = trim(getGET('keyword'));
    $sql ="SELECT COUNT(ID) AS total FROM product  WHERE TITLE LIKE '%$keyword%' OR CATEGORY_ID LIKE '%$keyword%' OR MANUFACTURER LIKE '%$keyword%' OR CATEGORY LIKE '%$keyword%'";
      $result = mysqli_query($conn, $sql);
      require_once('pagination.php');
      // $number = mysqli_num_rows($result);
    $sql = "SELECT * FROM product  WHERE TITLE LIKE '%$keyword%' OR CATEGORY_ID LIKE '%$keyword%' OR MANUFACTURER LIKE '%$keyword%' OR CATEGORY LIKE '%$keyword%' LIMIT $start, $limit";
  }
  else{
  	$sql = "SELECT COUNT(ID) AS total FROM product WHERE CATEGORY = 'Ballpoint Pen'";

		$result = mysqli_query($conn, $sql);
		require_once('pagination.php');


    $sql = "SELECT * FROM product WHERE CATEGORY = 'Ballpoint Pen'
    LIMIT $start, $limit";
  }

  $result = mysqli_query($conn, $sql);



  //   if ($result == false) {
  //   echo '<h3 style="margin-left: 400px;">Không có kết quả !</h3>';
  // }
//    if($result !=null && count($result)>0){
//         $number = $result[0]['number'];
// }

?>
<div class="intro-container">
      <div class="intro-left" style="background-color: #384254;">
        <div class="intro-content">
          <div class="intro-title">BALLPOINT PENS</div>
          <div class="intro-sub">With ink that dries in an instant and writes just about anywhere, ballpoint pens are a versatile option ready to handle any situation.</div>
        </div>
      </div>
      <div class="intro-right">
        <img src="../Images/Front/Thumbnail/BALLPOINT.jpg">
      </div>
    </div>


<?php 
require_once("product_display.php");
require_once("paginationdisplay.php");
if(isset($_SESSION['user'])){
           require_once("Layout/loggedft.php");
}else{
      require_once("Layout/footer.php");
}

?>