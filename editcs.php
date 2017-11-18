<?php
session_start(); 

$userID = $_SESSION['userID'];
				
include("menu2.php");

include("database.php");

$movieid = $_POST['movieid'];

//echo $movieid;


?>
<div id="menu">
	
				<a class="mnu" href="managemovies.php"><img src="img/roll.png" width="30" height="30">Now Showing</a>
				<a class="mnu" href="managecomingsoon.php"><img src="img/film.png" width="30" height="30">Coming Soon</a>
				<a class="mnu" href="#promos"><img src="img/popcorn.png" width="30" height="30">Promos and Events</a>
			</div>  
<div id = "movies">
	<div>Edit Movie</div>
	<?php
	$query = "SELECT * FROM csinfo where movieid='$movieid'";
	$result = mysqli_query($connection, $query);
			
	while($row = mysqli_fetch_array($result))
	{ 
	?>
	<form action="editcssave.php" method="POST">

					<tr>
						<td><div id="in">Movie Title: </div></td>
						<td><input id="in" type="text" name="movietitle" value="<?php echo $row['movietitle']; ?>" /></td>
					</tr>
					<tr>
						<td><div id="in">Movie Image Filename: </div></td>
						<td><input id="in" type="text" name="imgfilename" value="<?php echo $row['imgfilename']; ?>" /></br></td>
					</tr>
					<tr>
					<td>
						<input type="hidden" name="movieid" value="<?php echo $row['movieid']; ?>" >
						<input id="in" type="submit" name="submit" value="Save Changes" />
					</td>
					</tr>
	</form>
	<?php } ?>
</div>