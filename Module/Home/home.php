<?php
$title = "Ryana Calendar - Designer Stationery, Office and Lifestyle Accessories";
if(isset($_SESSION['user'])){
           require_once("Layout/loggedin.php");
}else{
	 	   require_once("Layout/header.php");
}
?>
<style type="text/css">
</style>
<!-- Main content -->				
		<div class="content">

<!-- Check this out section -->	
			<div class="section-1"> <!-- this class can also be called 'row' -->
					
					<div class="section-1-left-col reveal">
						<img class="left-col-img" src="../Images/Front/Thumbnail/notebook.jpg">
						<div class="left-col-content">
							<h2>We also have fountain pen!</h2>
							<p>Get in quick to grab some of our best-loved gear at best-ever prices before this offer ends.</p>
						</div>
					</div>

					<div class="section-1-right-col reveal">
						<div class="right-col-content">
							<h2>Want to buy a journal?</h2>
							<p>Get in quick to grab some of our best-loved gear at best-ever prices before this offer ends.</p>
						</div>
						<img class="right-col-img" src="../Images/Front/Thumbnail/pen.jpg">
					</div>

			</div>

<!-- Product Displaying Section -->	
			<p class="reveal" style="text-align: center; font-size: 30px; font-weight: normal;">SHOP ONLINE STATIONERY, NOTEBOOKS & DIARIES</p>
			<div class="section-2 reveal">
				<img class="left-img" src="../Images/Front/Thumbnail/calendar.jpg">
				<img class="right-img" src="../Images/Front/Thumbnail/journal.jpg">
			</div>

<!-- Contact Us Section -->	
			<div class="section-3">
				<img style="width: 1519.2px;" src="../Images/Front/Thumbnail/bannercontact.png">
				<a href="index.php?module=contact&action=contact"><button class="contact-btn">Contact Us</button></a>
			</div>
		


<?php 
if(isset($_SESSION['user'])){
           require_once("Layout/loggedft.php");
}else{
	 	  require_once("Layout/footer.php");
}

?>