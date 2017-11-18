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
				<a class="mnu" href="#promos"><img src="img/popcorn.png" width="30" height="30">Promos and Events</a>
			</div>
			
			
			<div id="showing">
				<a class="poster" href=""><img src="img/wonder.jpg" width="300" height="450"></a>
				<a class="poster" href=""><img src="img/jl.jpg" width="300" height="450"></a>
				<a class="poster" href=""><img src="img/coco.jpg" width="300" height="450"></a>
				
			</div>
			
			
		</div>

</html>