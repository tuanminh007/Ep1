<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- ================== Sidebar content (Login form) ================= -->
				<div id="loggedSidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNavlogged()">&times;</a>
				<div class="user-form-container">
					<div style="text-align: center; padding-top: 100px;" class="user-form-title"><?php echo $_SESSION['user']['name'] ?></div>
						<p class="user-phone"><img src="../Images/Front/Icons/phone.svg"><?php echo $_SESSION['user']['phone'] ?></p>
						<p class="user-address"><img src="../Images/Front/Icons/map-pin.svg"><?php echo $_SESSION['user']['address'] ?></p>
						<div style="display: flex;">
							<button type="submit" name="logout" class="logout-btn" onclick=""><a href="index.php?module=common&action=logout">LOG OUT</a></button>
							<p name="changepass" class="change-password-link"  onclick="passChangenav()">Change password</a></p>
						</div>
				</div>
		</div>
		<div id="passChange" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closePassnav()">&times;</a>
				<div class="user-form-container">
					<div style="text-align: center; padding-top: 100px;" class="user-form-title">CHANGE YOUR PASSWORD</div>
					<form class="user-login" action="index.php?module=common&action=passwc" method="POST">
						
						<input type="password" name="oldpassword" class="text-box" placeholder="Old password*" required="true">
						<input type="password" name="newpassword" class="text-box" placeholder="New password*" required="true">
						<input type="password" name="confirmnewpassword" class="text-box" placeholder="Confirm new password*" required="true">
						<div style="display: flex;">
							<button type="submit" name="signin" class="create-btn">CHANGE PASSWORD</button>
							<a href="#backtosignin" onclick="backLink()">Back</a>
						</div>
							
					</form>
				</div>
		</div>
		<!-- ===================== Sidebar content (search bar) ====================== -->
      <div id="searchBar" class="search-bar">
            <div class="overlay-content">
                <form>
                	  <input type="hidden" name="module" value="products">
                	  <input type="hidden" name="action" value="calendar">
                      <button><img src="../Images/Front/Icons/search.svg"></button>
                      <input type="text" placeholder="Search.." name="keyword">
                      <span class="closebtnsearch" onclick="closeSearch()" title="Close Overlay">×</span>
                </form>
            </div>
        </div>
<!-- ======================== Navigation bar ======================= -->		

		<div class="header">
				<div class="header-container-solid">
					<div class="header-left">
						<a href="index.php"><img class="logo" src="../Images/Front/Thumbnail/site_logo.png"></a>
					</div>
					<div class="navbar">
						<a href="index.php?module=contact&action=about">About Us</a>

						<!-- Dropdown megamenu -->
				    <div class="dropdown">
						    <button class="dropbtn"><a href="index.php?module=products&action=calen">Calendar</a></button>
						    <div class="dropdown-content">
						    	<div class="mega-row">
							        <div class="mega-col">
							          	<a href="index.php?module=products&action=dcalendar"><h3>Desk Calendar</h3></a>
							          	<a>Staedler</a>
							          	<a>Stabilo</a>
							          	<a>Roman</a>
							        </div>
							        <div class="mega-col">
							          	<a href="index.php?module=products&action=wcalendar"><h3>Wall Calendar</h3></a>
							          	<a>Traveler's Note</a>
							          	<a>Midori</a>
							          	<a>Completist</a>
							        </div>
							        <div class="mega-col">
							        	<img class="mega-img" src="../Images/Calendar/Wall Calendar/Thumbnail/WC-002-01.png">
							        </div>
							        <div class="mega-col">
							        	<img class="mega-img" src="../Images/Calendar/Wall Calendar/Thumbnail/WC-003-01.png">
							        </div>
						    	</div>
						    </div>
						</div> 
						<div class="dropdown">
						    <button class="dropbtn"><a href="index.php?module=products&action=diaryap">Diary & Planner</a></button>
						    <div class="dropdown-content">
						    	<div class="mega-row">
						        <div class="mega-col">
					          	<a href="index.php?module=products&action=diary"><h3>Diary & Planner</h3></a>
					          	<a>Moleskine</a>
					          	<a>Rhodia</a>
					          	<a>RIFLE PAPER CO.</a>
						        </div>
						        <div class="mega-col">
					          	<a href="index.php?module=products&action=journal"><h3>Journal</h3></a>
					          	<a>Midori</a>
					          	<a>Moleskine</a>
					          	<a>RIFLE PAPER CO.</a>
					          	<a>Rhodia</a>
						        </div>
							      <div class="mega-col">
							        	<img class="mega-img" src="../Images/Diary/Journal/Thumbnail/J-001-01.png">
							      </div>
							      <div class="mega-col">
							        	<img class="mega-img" src="../Images/Diary/Journal/Thumbnail/J-003-01.png">
							      </div>
						    	</div>
						    </div>
						</div> 
						<div class="dropdown">
						    <button class="dropbtn"><a href="index.php?module=products&action=pen">Pen</a></button>
						    <div class="dropdown-content">
						    	<div class="mega-row">
							        <div class="mega-col">
							          	<a href="index.php?module=products&action=fpen"><h3>Fountain Pen</h3></a>
							          	<a>Kaweco</a>
							          	<a>LAMY</a>
							        </div>
							        <div class="mega-col">
							          	<a href="index.php?module=products&action=bppen"><h3>Ballpoint Pen</h3></a>
							          	<a>Kaweco</a>
							          	<a>LAMY</a>
							          	<a>Moleskine</a>
							          	<a>TRAVELER'S COMPANY</a>
							        </div>
							        <div class="mega-col">
							          	<a href="index.php?module=products&action=pencil"><h3>Pencil</h3></a>
							          	<a>Kaweco</a>
							          	<a>LAMY</a>
							          	<a>Moleskine</a>
							          	<a>TRAVELER'S COMPANY</a>
							        </div>
							        <div class="mega-col">
							        	<img class="mega-img" src="../Images/Pen/Foutain Pen/Thumbnail/FP-002-01.png">
							        </div>
						    	</div>
						    </div>
						</div>
  					</div>
  					<div class="header-right">
  					<a class="open-search-btn" onclick="openSearch()" href="#facebook"><img src="../Images/Front/Icons/search.svg"></a>
						<a href="index.php?module=contact&action=contact"><img src="../Images/Front/Icons/map-pin.svg"></a>
						<!-- login sidebar -->
						<a href="#facebook" onclick="openNavlogged()"><img src="../Images/Front/Icons/user.svg"></a>
						<a href="index.php?module=orders&action=cart"><img src="../Images/Front/Icons/shopping-bag.svg"></a>
  					</div>
				</div>
		</div>
