<?php 
session_start(); 

include("database.php");
	
	$usertype = $_REQUEST['usertype'];
	$emailadd = $_REQUEST['emailadd']; 
	$password = $_REQUEST['password1'];
	
	$query = "SELECT * FROM users WHERE emailaddress='$emailadd'";
	
	$result = mysqli_query($connection, $query);
	$num_rows = mysqli_num_rows($result);
	
	if ($num_rows == 1) 
	{
		while($row = mysqli_fetch_array($result))
		{
			if( $password == $row["password"])
			{
				//set the userid to session value 
				$_SESSION['userID'] = $row['userID'];
								
				header("Location: home.php");
				exit();
			}
			else {
				//no error message "password does not match" yet
				echo "wrong password";
				//header("Location: login.php");
			}
		}
	}
	if ($num_rows == 0) 
	{
		echo "no email found";
		//no error message yet if email add is not found
		//header("Location: login.php");
	}
					
		
mysqli_close($connection);
?>