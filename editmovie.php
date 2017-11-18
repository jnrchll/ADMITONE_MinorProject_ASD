<?php
session_start(); 

$userID = $_SESSION['userID'];
				
include("menu2.php");

include("database.php");

$movieid = $_POST['movieid'];

//echo $movieid;


?>
<div id = "movies">
	<div>Edit Movie</div>
	<?php
	$query = "SELECT * FROM moviesinfo where movieid='$movieid'";
	$result = mysqli_query($connection, $query);
			
	while($row = mysqli_fetch_array($result))
	{ 
	?>
	<form action="editmoviesave.php" method="POST">

					<tr>
						<td><div id="">Movie Title: </div></td>
						<td><input id="type" type="text" name="movietitle" value="<?php echo $row['movietitle']; ?>" /></td>
					</tr>
					<tr>
						<td><div id="">Movie Description: </div></td>
						<td><textarea name="description"><?php echo $row['description']; ?></textarea><td>
					</tr>
					<tr>
						<td><div id="">Cinema: </div></td> 
						<td>
							<select name="cinema">
								<option value="1" <?php if ($row['cinema'] == "1"){echo "selected"; }?>>Cinema 1</option>
								<option value="2" <?php if ($row['cinema'] == "2"){echo "selected"; }?>>Cinema 2</option>
								<option value="3" <?php if ($row['cinema'] == "3"){echo "selected"; }?>>Cinema 3</option>	
								<option value="4" <?php if ($row['cinema'] == "4"){echo "selected"; }?>>Cinema 4</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><div id="">Movie Image Filename: </div></td>
						<td><input id="type" type="text" name="imgfilename" value="<?php echo $row['imgfilename']; ?>" /></br></td>
					</tr>
					<tr>
					<td>
						<input type="hidden" name="movieid" value="<?php echo $row['movieid']; ?>" >
						<input id="type" type="submit" name="submit" value="Save Changes" />
					</td>
					</tr>
	</form>
	<?php } ?>
</div>