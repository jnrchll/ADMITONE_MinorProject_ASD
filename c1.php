<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css" />
		
        <title>CinemaReservation</title>
</head>
<body>
	<div id="MainContainer">
			<div class="header">
			<div class="logo">
			<a href="#home"><img src="img/logo.png" alt="logo" width="300" height="60"/>
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
			<div class="poster1"><img src="img/thor.jpg" width="400" height="500">
			</div>
			<div class="details">
			<h3> Thor: Ragnarok </h3>
			<p>Imprisoned on the other side of the universe,</p> 
			<p>the mighty Thor finds himself in a deadly gladiatorial</p> 
			<p>contest that pits him against the Hulk, his former ally</p>  
			<p>and fellow Avenger. Thor's quest for survival leads him</p>  
			<p>in a race against time to prevent the all-powerful Hela</p>  
			<p>from destroying his home world and the Asgardian civilization.</p>
			<h4> Schedule: </h4>
			<p>fdfsdfsf</p>
			<p>fdfsdfsf</p>
			<p>fdfsdfsf</p>
			<div class="ticketbutton">
			<a href="info1.php"><img src="img/rsrv.png" width="200" height="50">
			<a href="info1.php"><img src="img/by.png" width="200" height="50">
			</div>
			</div>
			</div>
			
			</div>
		</div>
	</html>