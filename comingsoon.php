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
			
			
			<div id="showing">
				<a class="poster" href=""><img src="img/wonder.jpg" width="300" height="450"></a>
				<a class="poster" href=""><img src="img/jl.jpg" width="300" height="450"></a>
				<a class="poster" href=""><img src="img/coco.jpg" width="300" height="450"></a>
				
			</div>
			
			
		</div>

</html>