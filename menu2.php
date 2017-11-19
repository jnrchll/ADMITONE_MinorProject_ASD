<?php
include("database.php");

$loggedinID = $_SESSION['userID'];

?> 
<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css" />
		
        <title>CinemaReservation</title>
	<script src="jquery-1.10.2.js"></script>
</head>
<body>
	<div id="MainContainer">
		
		<div class="header">
			
			<?php 
			$query = "SELECT * FROM users WHERE userID='$loggedinID'";
			
			$result = mysqli_query($connection, $query);
			while($row = mysqli_fetch_array($result))
			{
				if($row['usertype'] == "administrator"){ ?>
				<div class="logo">
					<a href="managemovies.php"><img src="img/logo.png" alt="logo" width="300" height="60"/>
				</div>
					<a class="nav" href="managemovies.php">Manage Movies</a>
					<a class="nav" href="managereservations.php">Manage Reservations</a>
					<a class="nav" href="index.php">Logout</a>
			<?php 
				}
				if($row['usertype'] == "user"){ ?>
				<div class="logo">
					<a href="home.php"><img src="img/logo.png" alt="logo" width="300" height="60"/>
				</div>
					<a class="nav" href="myprofile.php">My Profile</a>
					<a class="nav" href="index.php">Logout</a>
			<?php 
				}
			}
			?> 
			
		</div>
		<div id="subcontainer">