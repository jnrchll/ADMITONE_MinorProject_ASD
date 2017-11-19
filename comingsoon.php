<?php
session_start(); 
$loggedinID = $_SESSION['userID'];

include("menu2.php");
include("database.php");

$query = "SELECT * FROM csinfo";
	
$result = mysqli_query($connection, $query);
?>
 <div id="menu">
	
				<a class="mnu" href="home.php"><img src="img/roll.png" width="30" height="30">Now Showing</a>
				<a class="mnu" href="comingsoon.php"><img src="img/film.png" width="30" height="30">Coming Soon</a>
				<a class="mnu" href="#promos"><img src="img/popcorn.png" width="30" height="30">Promos and Events</a>
			</div>          		
	<div id="showing">
	<?php
	while($row = mysqli_fetch_array($result))
	{
	?>
	
		<div class="poster" >
			<div>
				<img src="img/<?php echo $row['imgfilename']; ?>" width="300" height="430">
			</div>
			<div>
				<span id="movietitlelabel">Movie Title:  <?php echo $row['movietitle']; ?></span>
			</div>
		</div>
	<?php } ?>	
	
	</div>
			
<!-- do not delete -->
		</div>
	</div>
</html>