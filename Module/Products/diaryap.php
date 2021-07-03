<?php 
$title = "Diary & Journal";
if(isset($_SESSION['user'])){
           require_once("Layout/headerforotherpages2.php");
}else{
	 	   require_once("Layout/headerforotherpages.php");
}
require_once("Config/utility.php");



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
  	$sql = "SELECT COUNT(ID) AS total FROM product WHERE CATEGORY LIKE '%Diary%' OR CATEGORY LIKE '%Journal%'";

		$result = mysqli_query($conn, $sql);
		require_once('pagination.php');


    $sql = "SELECT * FROM product WHERE CATEGORY = 'Diary & Planner'OR CATEGORY = 'Journal'
    LIMIT $start, $limit";
  }

  $result = mysqli_query($conn, $sql);



?>

		<div class="intro-container">
			<div class="intro-left" style="background-color: #466946;">
				<div class="intro-content">
					<div class="intro-title">PLANNERS</div>
					<div class="intro-sub">Using a planner allows you to schedule each event, appointment, errand, and task, so that you know what to expect and don’t run out of time.</div>
				</div>
			</div>
			<div class="intro-right">
				<img src="../Images/Front/Thumbnail/PLANNER.jpg">
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