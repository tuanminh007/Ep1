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
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="user-form-container">
					<div style="text-align: center; padding-top: 100px;" class="user-form-title">SIGN IN</div>
					<form class="user-login" action="index.php?module=common&action=login" method="POST">
						<input type="email" name="email" class="text-box" placeholder="Email address*" required="true">
						<input type="password" name="password" class="text-box" placeholder="Password*" required="true">
						<div style="display: flex;">
							<button type="submit" name="signin" class="signin-btn" onclick="">SIGN IN</button>
							<!-- <a href="#forgotpass">Forgot password?</a> -->
						</div>
						
					</form>
					<div class="user-form-suggest">
						<div class="user-form-title">NEW TO RYANA CALENDAR?</div>
						<button name="signup" class="suggest-btn"  onclick="signUpnav()">SIGN UP NOW</button>
					</div>
				</div>
		</div>
		<div id="signUp" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeSignup()">&times;</a>
				<div class="user-form-container">
					<div style="text-align: center; padding-top: 100px;" class="user-form-title">SIGN UP</div>
					<form class="user-login" action="index.php?module=common&action=register" method="POST">
						<input type="text" name="username" class="text-box" placeholder="Username*" required="true">
						<input type="email" name="email" class="text-box" placeholder="Email address*" required="true">
						<input type="number" name="phone" class="text-box" placeholder="Phone*" required="true">
						<input type="password" name="password" class="text-box" placeholder="Password*" required="true">
						<input type="password" name="passwordconfirm" class="text-box" placeholder="Confirm password*" required="true">
						<div style="display: flex;">
							<button type="submit" name="signin" class="create-btn" onclick="">CREATE ACCOUNT</button>
							<a href="#backtosignin" onclick="backTologin()">Back to login</a>
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
						<a href="#facebook" onclick="openNav()"><img src="../Images/Front/Icons/user.svg"></a>
						<a href="index.php?module=orders&action=cart"><img src="../Images/Front/Icons/shopping-bag.svg"></a>
  					</div>
				</div>
		</div>
