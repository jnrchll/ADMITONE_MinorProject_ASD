
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
				<a class="mnu" href="aboutcinema.php"><img src="img/popcorn.png" width="30" height="30">About Cinema</a>
			</div> 
			<div id="thankyou1">
							<h1>-ABOUT CINEMA-</h1>
							<p> Admit One offers Cinema Reservation Online. Avoid the hassle of lining up everytime you 
							 watch a movie. Check the latest now showing movie schedules on the best cinema.
							 Entertainment at its best. </p>
							</div>
</html>         	