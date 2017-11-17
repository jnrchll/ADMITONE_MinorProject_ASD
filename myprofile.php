<?php
session_start(); 

$loggedinID = $_SESSION['userID'];
				
include("menu2.php");
?>
            
			<div id="register">
			<?php 
			include("database.php");
			$query = "SELECT * FROM users WHERE userID='$loggedinID'";
	
			$result = mysqli_query($connection, $query);
			while($row = mysqli_fetch_array($result))
			{
			?>
				<form action="update.php" method="POST">
				<table>
					<tr>
						<td><div id="frm">First Name: </div></td>
						<td><input id="type" type="text" name="fname" value="<?php echo $row["firstname"];?>" /></td>
					</tr>
					<tr>
						<td><div id="frm">Last Name: </div></td>
						<td><input id="type" type="text" name="lname" value="<?php echo $row["lastname"];?>" /></br></td>
					</tr>
					<tr>
						<td><div id="frm">Age: </div></td> 
						<td><input id="type" type="text" name="age" value="<?php echo $row["age"];?>" /></br></td>
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
						<td><div id="frm">Re-type password: </div></td>
						<td><input id="type" type="password" name="password2" value="<?php echo $row["password"];?>" /></br></td>
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
	</div>

</html>
