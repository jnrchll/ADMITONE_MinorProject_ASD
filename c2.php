<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css" />
		
        <title>CinemaReservation</title>
</head>
<body>
	<div id="MainContainer">
			<div class="header">
			<div class="logo"><img src="img/logo.png" alt="logo" width="300" height="60"/>
			</div>
				<a class="nav" href="myprofile.php?<?php 
			if(isset($_REQUEST['id']))
			{
				echo "id=".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
			}
			?>">My Profile</a>
	<a class="nav" href="login.php">Logout</a>
			</div>
            
            <div id="menu">
	
				<a class="mnu" href="home.php"><img src="img/roll.png" width="30" height="30">Now Showing</a>
				<a class="mnu" href="comingsoon.php"><img src="img/film.png" width="30" height="30">Coming Soon</a>
				<a class="mnu" href="#promos"><img src="img/popcorn.png" width="30" height="30">Promos and Events</a>
			</div>
			
			<div id="cinemapos">
				<div class="poster1"><img src="img/badgenius.jpg" width="400" height="500">
			</div>
			<div class="details">
			<h3> Bad Genius </h3>
			<p>A genius level high school student</p> 
			<p>makes money after developing elaborate</p> 
			<p>methods to help other students cheat.</p> 
			<h4> Schedule: </h4>
			<p>fdfsdfsf</p>
			<p>fdfsdfsf</p>
			<p>fdfsdfsf</p>
			<div class="ticketbutton">
			<a href="info2.php"><img src="img/rsrv.png" width="200" height="50">
			<a href="info2.php"><img src="img/by.png" width="200" height="50">
			</div>
			</div>
			</div>
			
			</div>
		</div>
	</html>