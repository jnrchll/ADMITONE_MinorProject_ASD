<?php
session_start(); 

$userID = $_SESSION['userID'];
				
include("menu2.php");

include("database.php");


?>
<div id="menu">
	
				<a class="mnu" href="managemovies.php"><img src="img/roll.png" width="30" height="30">Now Showing</a>
				<a class="mnu" href="managecomingsoon.php"><img src="img/film.png" width="30" height="30">Coming Soon</a>
				<a class="mnu" href="aboutcinema.php"><img src="img/popcorn.png" width="30" height="30">About Cinema</a>
			</div>          		
	<div id="showing">
<div id = "movies">
	
	<table id="movieinfo">
		<tr >
			<td id="theader" class="img"><div></div></td>
			<td id="theader" class="title"><div>Movie Title </div></td>
			<td id="theader" class="action"><div>Action </div></td>
		</tr>
	<?php
			$query = "SELECT * FROM csinfo";
	
			$result = mysqli_query($connection, $query);
			
			while($row = mysqli_fetch_array($result))
			{ 
			?>
			<tr>
						<td class="img"><div><img class="movieimgcontainer" src="img/<?php echo $row['imgfilename']; ?>"></div></td>
						<td class="title"><div><?php echo $row['movietitle']; ?></div></td>
						<td class="action">
							<form action="editcs.php" method="POST">
								<input id="in" type="submit" name="edit" value="Edit" />
								<input id="in" type="hidden" name="movieid" value="<?php echo $row['movieid']; ?>" >
							</form>
							<form action="deletecs.php" method="POST">
								<input id="in" type="submit" name="delete" value="Delete" />
								<input id="in"type="hidden" name="movieid" value="<?php echo $row['movieid']; ?>" >
							</form>
						</td>
					</tr>
				
			<?php
			}	
?>
	</table>

	
	<div id="in">Add New Movie</div>
	<form action="cssave.php" method="POST">

					<tr>
						<td><div id="in">Movie Title: </div></td>
						<td><input id="in" type="text" name="movietitle" value="" /></td>
					</tr>
					<tr>
						<td><div id="in">Movie Image Filename: </div></td>
						<td><input id="in" type="text" name="imgfilename" value="" /></br></td>
					</tr>
					<tr>
					<td><input id="in" type="submit" name="submit" value="Add" /></td>
					</tr>
	</form>
</div>