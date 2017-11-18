<?php
session_start(); 

$userID = $_SESSION['userID'];
				
include("menu2.php");

include("database.php");


?>
<div id = "movies">
	
	<table id="movieinfo">
		<tr >
			<td id="theader" class="img"><div></div></td>
			<td id="theader" class="title"><div>Movie Title </div></td>
			<td id="theader" class="action"><div>Action </div></td>
		</tr>
<?php
			$query = "SELECT * FROM moviesinfo";
	
			$result = mysqli_query($connection, $query);
			
			while($row = mysqli_fetch_array($result))
			{ 
			?>
			<tr>
						<td class="img"><div><img class="movieimgcontainer" src="img/<?php echo $row['imgfilename']; ?>"></div></td>
						<td class="title"><div><?php echo $row['movietitle']; ?></div></td>
						<td class="action">
							<form action="editmovie.php" method="POST">
								<input type="submit" name="edit" value="Edit" />
								<input type="hidden" name="movieid" value="<?php echo $row['movieid']; ?>" >
							</form>
							<form action="deletemovie.php" method="POST">
								<input type="submit" name="delete" value="Delete" />
								<input type="hidden" name="movieid" value="<?php echo $row['movieid']; ?>" >
							</form>
						</td>
					</tr>
				
			<?php
			}	
?>
	</table>

	
	<div>Add New Movie</div>
	<form action="moviesave.php" method="POST">

					<tr>
						<td><div id="">Movie Title: </div></td>
						<td><input id="type" type="text" name="movietitle" value="" /></td>
					</tr>
					<tr>
						<td><div id="">Movie Description: </div></td>
						<td><textarea name="description" value=""></textarea><td>
					</tr>
					<tr>
						<td><div id="">Cinema: </div></td> 
						<td>
							<select name="cinema">
								<option value="1" selected>Cinema 1</option>
								<option value="2">Cinema 2</option>
								<option value="3">Cinema 3</option>	
								<option value="4">Cinema 4</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><div id="">Movie Image Filename: </div></td>
						<td><input id="type" type="text" name="imgfilename" value="" /></br></td>
					</tr>
					<tr>
					<td><input id="type" type="submit" name="submit" value="Add" /></td>
					</tr>
	</form>
</div>