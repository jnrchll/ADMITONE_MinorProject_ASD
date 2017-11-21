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
            
			<div id="register">
			<?php 
			include("database.php");
			$query = "SELECT * FROM users WHERE userID='$loggedinID'";
	
			$result = mysqli_query($connection, $query);
			while($row = mysqli_fetch_array($result))
			{
			?>
			<div id="prof">
				<form action="update.php" method="POST">
				<table id="pf">
					<tr>
						<td><div id="frm">First Name: </div></td>
						<td><input id="type" type="text" name="fname" value="<?php echo $row["firstname"];?>" /></td>
					</tr>
					<tr>
						<td><div id="frm">Last Name: </div></td>
						<td><input id="type" type="text" name="lname" value="<?php echo $row["lastname"];?>" /></br></td>
					</tr>
					<tr>
						<td><div id="frm">Email Address: </div></td>
						<td><input id="type" type="text" name="emailadd" value="<?php echo $row["emailaddress"];?>" /></br></td>
					</tr>
					<tr>
						<td><div id="frm">Password: </div></td>
						<td><input id="type" type="password" name="password1" value="<?php echo $row["password"];?>" /></br></td>
					</tr>
					<tr>
					<td><input id="type" type="submit" name="submit" value="Save Changes" /></td>
					</tr>
				</ul>
				</form>
			<?php
			}
			?>
			</div>
			
		</div>
	

</html>
