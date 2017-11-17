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
			<div class="poster1"><img src="img/geostorm.jpg" width="400" height="500">
			</div>
		<div class="infoform">
			<h5>Please fill up customer's info</h5>
				<form action="info.php" method="POST">
				<table>
					<tr>
						<td><div id="frm">First Name: </div></td>
						<td><input id="type" id="type" type="text" name="fname" value="" /></td>
					</tr>
					<tr>
						<td><div id="frm">Last Name: </td>
						<td><input id="type" type="text" name="lname" value="" /></br></td>
					</tr>
					<tr>
						<td><div id="frm">Age: </td> 
						<td><input id="type" type="text" name="age" value="" /></br></td>
					</tr>
					<tr>
						<td><div id="frm">Contact Number: </td>
						<td><input id="type" type="text" name="emailadd" value="" /></br></td>
					</tr>
					<tr>
					<td><input id="type" type="submit" name="submit" value="SUBMIT" /></td>
					</tr>
				</ul>
				</form>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>