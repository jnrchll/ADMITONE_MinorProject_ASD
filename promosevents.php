
<?php
session_start(); 
$loggedinID = $_SESSION['userID'];

include("menu2.php");
include("database.php");

$query = "SELECT * FROM moviesinfo";
	
$result = mysqli_query($connection, $query);
?>
 <div id="menu">
	
				<a class="mnu" href="home.php"><img src="img/roll.png" width="30" height="30">Now Showing</a>
				<a class="mnu" href="comingsoon.php"><img src="img/film.png" width="30" height="30">Coming Soon</a>
				<a class="mnu" href="promosevents.php"><img src="img/popcorn.png" width="30" height="30">Promos and Events</a>
			</div> 
			<div id="thankyou1">
							<h1>No Promos and Events Available!</h1>
	</div>
</html>         	