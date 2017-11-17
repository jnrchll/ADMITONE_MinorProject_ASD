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
				<div class="poster1"><img src="img/geostorm.jpg" width="400" height="500">
			</div>
			<div class="details">
			<h3> Geostorm </h3>
			<p>After an unprecedented series of natural disasters threatened the planet,</p> 
			<p>the world's leaders came together to create an intricate network of</p>
			<p>satellites to control the global climate and keep everyone safe.</p> 
			<p>But now, something has gone wrong: the system built to protect Earth</P>
			<p>is attacking it, and it becomes a race against the clock to uncover</p>
			<p>the real threat before a worldwide geostorm wipes out everything and everyone</p> 
			<p>along with it.</p>
			<h4> Schedule: </h4>
			<p>fdfsdfsf</p>
			<p>fdfsdfsf</p>
			<p>fdfsdfsf</p>
			<div class="ticketbutton">
			<a href="info3.php"><img src="img/rsrv.png" width="200" height="50">
			<a href="info3.php"><img src="img/by.png" width="200" height="50">
			</div>
			</div>
			</div>
			
			</div>
		</div>
	</html>