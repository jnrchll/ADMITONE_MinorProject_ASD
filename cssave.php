<?php 
session_start(); 

$userID = $_SESSION['userID'];

include("database.php");

		//data from the registration form is set here: 
			if(isset($_POST["movietitle"])) {
				$movietitle = $_POST["movietitle"];
			
			}
			
			if(isset($_POST["imgfilename"])) {
				$imgfilename = $_POST["imgfilename"];
			}			
			
			if(($movietitle == NULL)) {
				
				header("Location: managecomingsoon.php");
			}
			
			if(($movietitle != NULL) && ($imgfilename != NULL)) 
			{
				
												
						//query to insert the data from the form to the users table
						$query = "insert into csinfo (movietitle, imgfilename) values ('{$movietitle}','{$imgfilename}')";
						
						
						$result = mysqli_query($connection, $query);
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: managecomingsoon.php");
						} 
			}
			if(($movietitle != NULL) && ($imgfilename == NULL)) {
					
						
						//query to insert the data from the form to the users table
						$query = "insert into csinfo (movietitle) values ('{$movietitle}')";
						
						
						$result = mysqli_query($connection, $query);
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: managecomingsoon.php");
						}  
			}
			
		
mysqli_close($connection);
?>